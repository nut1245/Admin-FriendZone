<?php

namespace App\Models;

use CodeIgniter\Model;

class NotificationModel extends Model
{
    protected $table = 'notification';
    protected $primaryKey = 'notificateId';
    protected $allowedFields = ['notificateId', 'notificateDetail', 'statusNotic', 'userId', 'notificationDate'];


    //Add Notification
    public function insertNotification($notificate)
    {
        $this->insert($notificate);
        return TRUE;
    }
}

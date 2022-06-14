<div class="row ">
  <?php if (session()->getFlashdata('Success')) : ?> <div>
      <script>
        Swal.fire({
          icon: 'success',
          title: "<?= session()->getFlashdata('Success') ?>",
        })
      </script>
    </div>
  <?php endif ?>

  <div class="col-12 grid-margin">
    <div class="card" id="color-card">
      <div class="card-body">
        <div class="row justify-content-between ">
          <h4 class="card-title">จัดการสถานะการใช้งานทั้งหมด</h4>
          <div class="template-demo">
            <a href="/viewUserSuccess" type="button" class="btn btn-outline-success btn-fw">ยืนยันตัวตนสำเร็จ</a>
            <a href="/viewUserFail" type="button" class="btn btn-outline-warning btn-fw">รอยืนยันตัวตน</a>
            <a href="/viewUserEdit" type="button" class="btn btn-outline-danger btn-fw">รอการแก้ไข</a>
            <a href="/viewUserBlock" type="button" class="btn btn-outline-dark btn-fw">ผู้ใช้รายที่ถูกบล็อก</a>
            <a href="/alluser" type="button" class="btn btn-outline-primary btn-fw">ผู้ใช้งานทั้งหมด</a>
            <br><br>
          </div>
        </div>
        <div class="table-responsive">

          <table class="table">
            <thead>
              <tr>
                <th> ไอดี </th>
                <th> ชื่อ-นามสกุล </th>
                <th> รหัสบัตรประชาชน </th>
                <th> วันหมดอายุบัตรประชาชน </th>
                <th> เพศ </th>
                <th> วันเกิด </th>
                <th> สถานะ </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($user as $key => $value) { ?>
                <tr>
                  <td class="id">
                    <?php echo $value['userId']; ?>
                  </td>
                  <td>
                    <img src="<?php echo $value['userImage']; ?>" alt="image" />
                    <span class="pl-2"><?php echo $value['FName']; ?></span>
                  </td>
                  <td> <?php echo $value['idCard']; ?> </td>
                  <td> <?php if ($value['expIdCard'] > "2020-12-31") {
                          echo $value['expIdCard'];
                        } else {
                          echo '<div class="badge badge-outline-danger">บัตรประชาชนหมดอายุ</div>';
                        } ?> </td>
                  <td> <?php echo $value['gender']; ?> </td>
                  <td> <?php echo $value['birthday']; ?> </td>
                  <td>
                    <?php if ($value['statusUser'] == "0") {
                      echo '<div class="badge badge-outline-warning">รอการยืนยันตัวตน</div>';
                    } else if ($value['statusUser'] == "1") {
                      echo '<div class="badge badge-outline-success">ยืนยันตัวตนสำเร็จ</div>';
                    } else if ($value['statusUser'] == "2") {
                      echo '<div class="badge badge-outline-danger">รอการแก้ไขข้อมูล</div>';
                    } else if ($value['statusUser'] == "3") {
                      echo '<div class="badge badge-outline-dark">ผู้ใช้รายนี้ถูกบล็อก</div>';
                    };
                    ?>
                  </td>
                  <td>
                    <a href="#" class="btn btn-outline-primary btn-update" data-bs-toggle="modal" data-bs-target="#update<?= $value['userId'] ?>">
                      <i class="mdi mdi-eye"></i>
                    </a>

                    <a href="/updateStatusFail/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-danger ">
                      <i class="mdi mdi-close"></i>
                    </a>


                  </td>
                </tr>
              <?php } ?>
        </div>
      </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
  </div>
  <?= $pager->links('pages') ?>
</div>
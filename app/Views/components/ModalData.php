<?php $no = 1;
  foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="update<?= $value['userId'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#191c24">
            <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลเพิ่มเติม</h5>
            <button type="button" class="close " data-dismiss="modal" aria-label="Close" style="color:#fff; margin-right:1px;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body " style="background-color:#191c24">


            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4"> <img class="#" src="<?php echo $value['userImage']; ?>" style="width: 100%; height:90%; border-radius:10%" /></div>

                <div class="col-md-2 ">
                  <div class="decoration">
                    <div class="decoration-inside">
                    </div>
                  </div>
                </div>

                <div class="col-md-6 ">
                  <img class="#" src="<?php echo $value['idCardImage']; ?>" style="width: 100%; height:90%; border-radius:3%" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 ">
                  <h4 style="color:	#FF00AA;">ชื่อ-นามสกุล :<span style="color:#fff"> <?php echo $value['FName'] . " " . $value['LName']; ?> </span></h4>
                </div>
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">เลขบัตรประชาชน :<span style="color:#fff"> <?php echo $value['idCard']; ?></span></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">วันเกิด :<span style="color:#fff"> <?php echo $value['birthday']; ?></span></h4>
                </div>
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">ที่อยู่ :<span style="color:#fff"> <?php echo $value['address']; ?></span></h4>

                </div>

              </div>
              <div class="row">
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">เพศ :<span style="color:#fff"> <?php echo $value['gender']; ?></span></h4>

                </div>
                <div class="col-md-2 ms-auto">
                  <h4 style="color:	#FF00AA;">จังหวัด :<span style="color:#fff"> <?php echo $value['name_th']; ?></span></h4>

                </div>
                <div class="col-md-2 ms-auto">
                  <h4 style="color:	#FF00AA;">อำเภอ :<span style="color:#fff"> <?php echo $value['name_th_dis']; ?></span></h4>

                </div>
                <div class="col-md-2 ms-auto">
                  <h4 style="color:	#FF00AA;">ตำบล :<span style="color:#fff"> <?php echo $value['name_th_am']; ?></span></h4>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">เบอร์โทรติดต่อ :<span style="color:#fff"> <?php echo $value['phoneNumber']; ?></span></h4>

                </div>
                <div class="col-md-6 ms-auto">
                  <h4 style="color:	#FF00AA;">สถานะ : <span style="color:#3CB371">&nbsp; <?php if ($value['statusUser'] == "0") {
                                                                                            echo '<div class="badge badge-outline-warning">รอการยืนยันตัวตน</div>';
                                                                                          } else if ($value['statusUser'] == "1") {
                                                                                            echo '<div class="badge badge-outline-success">ยืนยันตัวตนสำเร็จ</div>';
                                                                                          } else if ($value['statusUser'] == "2") {
                                                                                            echo '<div class="badge badge-outline-danger">รอการแก้ไขข้อมูล</div>';
                                                                                          };
                                                                                          ?></span></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 ms-auto">
                  <a href="/updateStatus/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-success ">
                    <h5>ผ่าน</h5>
                  </a>
                  &nbsp;
                  <a href="/updateStatusFail/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-danger ">
                    <h5>ไม่ผ่าน</h5>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  <?php } ?>
<?php require('SqlConnect'); ?>
<div class="row col-11">
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card" style="background-color:#ffffcc; box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
      <div class="card-body ">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">
                <?php while ($row = mysqli_fetch_array($query1)) {
                  echo $row[0];
                } ?>
              </h3>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-warning ">
              <span class="mdi mdi-account-multiple icon-item"></span>
            </div>
          </div>
        </div>
        <h4 class="text-muted font-weight-normal">คำขอที่รออนุมัติ</h4>
      </div>
    </div>
  </div>
  <div class="col-md-3  grid-margin stretch-card">
    <div class="card" style="background-color:#b3ff99;box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">
                <?php while ($row = mysqli_fetch_array($query2)) {
                  echo $row[0];
                } ?>
              </h3>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-checkbox-marked-outline icon-item"></span>
            </div>
          </div>
        </div>
        <h4 class="text-muted font-weight-normal">คำขอที่อนุมัติแล้ว</h4>
      </div>
    </div>
  </div>
  <div class="col-md-3  grid-margin stretch-card">
    <div class="card" style="background-color:
#59d0ff
 ;box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">
                <?php while ($row = mysqli_fetch_array($query3)) {
                  echo $row[0];
                } ?>
              </h3>
              <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-primary">
              <span class="mdi mdi-credit-card-multiple icon-item"></span>
            </div>
          </div>
        </div>
        <h4 class="text-muted font-weight-normal">โพสต์ทั้งหมด</h4>
      </div>
    </div>
  </div>
  <div class="col-md-3  grid-margin stretch-card">
    <div class="card" style="background-color:
#ff7878
;box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">
                <?php while ($row = mysqli_fetch_array($query4)) {
                  echo $row[0];
                } ?>
              </h3>
              <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-danger ">
              <span class="mdi mdi-alert-octagon icon-item"></span>
            </div>
          </div>
        </div>
        <h4 class="text-muted font-weight-normal">รายงานโพสต์</h4>
      </div>
    </div>
  </div>
</div>
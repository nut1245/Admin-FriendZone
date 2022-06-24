<?php $no = 1;
foreach ($report as $key => $value) { ?>
  <!-- Modal -->
  <div class="modal fade" id="detail<?= $value['postId'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo $value["postTitle"] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-post">
            <div class="card-post-title1">
            </div>
            <div class="card-post-title2">
              <div class="div-post-title">
                <h5 class="text-post-title"><?php echo $value["postTitle"] ?></h5>
              </div>
            </div>
            <img src="<?php echo $value["imagePost"] ?>" class="card-img-top">
            <div class="card-post-body">
              <div class="row row-post-body">
                <div class="col-8">
                  <i class="far fa-calendar-alt fa-post-calendar"></i>
                  <label class="text-post-date">วันที่ :</label>
                  <span class="span span-post-date">&nbsp; <?php echo $value["date_start"] ?> &nbsp;</span>
                  <label class="text-post-date">ถึง</label>
                  <span class="span span-post-date">&nbsp; <?php echo $value["date_end"] ?></span>
                </div>
              </div>

              <i class="fas fa-users fa-post-numPeople"></i>
              <label class="text-post-numPeople">หมวดหมู่ :</label>
              <span class="span span-post-numPeople">&nbsp; <?php echo $value["name_category"] ?></span>
              <br />

              <i class="fa-solid fa-file-pen fa-post-detail"></i>
              <label class="text-post-detail">รายละเอียด :</label>
              <span class="span span-post-detail">&nbsp; <?php echo $value["detailPost"] ?></span>
              <br />

              <i class="fas fa-users fa-post-numPeople"></i>
              <label class="text-post-numPeople">ต้องการผู้เข้าร่วม :</label>
              <span class="span span-post-numPeople">&nbsp; <?php echo $value["num_people"] ?> &nbsp; คน</span>
              <br />

              <!-- <i class="fas fa-sack-dollar"></i> -->
              <i class="fas fa-sack-dollar fa-post-pay"></i>
              <label class="text-post-pay">ค่าใช้จ่ายประมาณ :</label>
              <span class="span span-post-pay">&nbsp;<?php echo $value["expenses"] ?>&nbsp; บาท/คน</span>
              <br />

              <i class="fas fa-map-marker-alt fa-post-location"></i>
              <label class="text-post-province">จังหวัด :</label>
              <span class="span span-post-province">&nbsp;<?php echo $value["name_th"] ?></span>

              <label class="text-post-province text-district">อำเภอ :</label>
              <span class="span span-post-province">&nbsp;<?php echo $value["name_th_am"] ?></span>

              <label class="text-post-province text-subdistrict">ตำบล :</label>
              <span class="span span-post-province">&nbsp;<?php echo $value["name_th_dis"] ?></span>

              <br />

              <i class="fas fa-asterisk fa-post-note"></i>
              <label class="text-post-note">หมายเหตุ :</label>
              <span class="span span-post-numPeople">&nbsp;<?php echo $value["note"] ?></span>

            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  <?php } ?>
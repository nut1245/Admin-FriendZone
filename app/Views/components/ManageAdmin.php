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
    <center>
        <div class="col-10 grid-margin">
            <div class="card" style="background-color: #fff;  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                <div class="card-body">
                    <div class="row justify-content-between ">
                        <h4 class="card-title">รายชื่อแอดมินผู้ดูแลระบบทั้งหมด</h4>


                        <div class="template-demo">

                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right;">
                                + เพิ่มหมวดหมู่กิจกรรม
                            </button> -->

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" >
                                        <div class="modal-header" >
                                            <h5 class="modal-title" id="staticBackdropLabel" >เพิ่มหมวดหมู่กิจกรรม</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                   
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                               
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                            <button type="button" class="btn btn-primary">ยืนยัน</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> ไอดี </th>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อผู้ใช้งาน</th>
                                    <th>เพศ</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <center>
                                <tbody>
                                <?php $no = 1;
                            foreach ($user as $key => $value) { ?>
                                    <tr>
                                        <td> <?php echo $value['offId']; ?> </td>
                                        <td><img src="<?php echo $value['offImage']; ?>" /></td>
                                        <td><?php echo $value['userName']; ?></td>
                                        <td><?php echo $value['gender']; ?></td>
                                        <td><?php echo $value['phoneNumber']; ?></td>
                                        <td>
                                            <a href="/deleteAdmin/<?php echo $value["offId"] ?>" type="button" class="btn btn-outline-danger ">
                                                &nbsp;<i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </center>
                        <?php } ?>
                    </div>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
        
</div>

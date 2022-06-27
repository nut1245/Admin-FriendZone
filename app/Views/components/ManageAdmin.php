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
            <div class="card" id="color-card">
                <div class="card-body">
                    <div class="template-demo">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right;">
                            + เพิ่มแอดมิน
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">เพิ่มข้อมูลแอดมิน</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaPwg-3P7xolgUHOv0URrMCODQgwie5XcDXf_Xgu5fVfX9d_t6AIF4EFSLO9dRBp-wXsQ&usqp=CAU" id="previewImgSaveDataProfile" class="saveData-img-card-default" width="100px" height="100px" style="border-radius: 100%;">
                                        <p id="message">**เลือกรูปภาพที่ต้องการแล้วกดอัพโหลด**</p>
                                        <form>
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 ">รูปภาพ</label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="adminImage" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                            <button type="button" class="btn btn-primary" onclick="uploadProfile()">อัพโหลด</button>
        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <script>
                                            let imgInputSaveDataProfile = document.querySelector("#adminImage");
                                            let previewImgSaveDataProfile = document.querySelector("#previewImgSaveDataProfile");

                                            imgInputSaveDataProfile.onchange = evt => {
                                                const [file] = imgInputSaveDataProfile.files;
                                                if (file) {
                                                    previewImgSaveDataProfile.src = URL.createObjectURL(file);
                                                }
                                            }
                                        </script>

                                        <form action="/OfficerController/register" method="post" class="form-sample">
                                            <div class="row">
                                                <input type="hidden" class="form-control" id="adminImageURL" name="offImage">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 ">ชื่อ</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="FName" name="FName" require>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 ">นามสกุล</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="LName" name="LName" require>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 ">เพศ</label>
                                                    <div class="col-sm-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <i class="mdi mdi-gender-male" style="color:cyan"></i>
                                                                <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="ชาย"> ชาย <i class="input-helper"></i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <i class="mdi mdi-gender-female" style="color:deeppink"></i>
                                                                <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="หญิง"> หญิง <i class="input-helper"></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 ">ชื่อผู้ใช้งาน</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="userName" name="userName" require>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p id="message2"></p>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 " class="password">รหัสผ่าน</label>
                                                        <div class="col-sm-8">
                                                            <input type="password" class="form-control" id="password" name="password" require>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 " class="confirmPassword">ยืนยันรหัสผ่าน</label>
                                                        <div class="col-sm-8">
                                                            <input type="password" onchange="checkPassword()" class="form-control" id="confirmPassword" name="confirmpassword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 ">เบอร์โทร</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" require>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btn">ยืนยัน</button>
                                        <a href="#" type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="row justify-content-between ">
                            <h4 class="card-title">รายชื่อแอดมินผู้ดูแลระบบทั้งหมด</h4>
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
                                        <?php } ?>
                                    </tbody>
                                </center>
                        </div>
                    </div>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>

            <script>
                function checkPassword() {
                    let password = document.getElementById("password").value;
                    let confirmPassword = document.getElementById("confirmPassword").value;
                    console.log(password, confirmPassword);
                    if (password == confirmPassword) {
                        document.getElementById("message").innerHTML = "*** รหัสผ่านตรงกัน ***";
                        message.style.color = "#19b80a";
                        document.getElementById("btn").disabled = false;
                    } else {
                        document.getElementById("message").innerHTML = "*** รหัสผ่านไม่ตรงกัน ***";
                        message.style.color = "#e20000";
                        document.getElementById("btn").disabled = true;
                    }
                }
            </script>
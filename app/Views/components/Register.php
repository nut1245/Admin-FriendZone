
    <div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card"  style="background-color: #fff;  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                <div class="card-body" >
                    <h4 class="card-title">เพิ่มข้อมูลแอดมิน</h4>
                    <?php if (isset($validation)) : ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif ?>
                    &nbsp;
                    <form action="/OfficerController/register" method="post" class="form-sample" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ชื่อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="FName" name="FName" require >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="LName" name="LName" require>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ชื่อผู้ใช้งาน</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="userName" name="userName" require>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">เพศ</label>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <label class="form-check-label" style="color:#000">
                                                <i class="mdi mdi-gender-male" style="color:cyan"></i>
                                                <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="ชาย" > ชาย <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <label class="form-check-label" style="color:#000">
                                                <i class="mdi mdi-gender-female" style="color:deeppink"></i>
                                                <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="หญิง"> หญิง <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <p style="text-align: center; color: red;" id="message"></p>
                                    <label class="col-sm-2 col-form-label" for="password">รหัสผ่าน</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password" require>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">เบอร์โทร</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" require>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="confirm">ยืนยันรหัสผ่าน</label>
                                    <div class="col-sm-9">
                                        <input type="password" onchange="checkPassword()" class="form-control" id="confirmPassword" name="confirmpassword">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">รูปภาพ</label>
                                    <div class="col-sm-9">
                                        <span class="input-group-append">
                                            <input type="text" class="form-control" id="offImage" name="offImage" require>
                                            <!-- <button class="file-upload-browse btn btn-primary" type="button">Upload</button> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-sm-12 ">
                            <button type="submit" id="btn" class="btn btn-primary btn-icon-text">
                                ยืนยัน </button>
                            <button type="button" class="btn btn-danger btn-icon-text">
                                ยกเลิก </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

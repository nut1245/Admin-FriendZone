<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!--- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">

                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">

                        <div class="card-body px-5 py-5">

                            <h1 class="card-title text-center mb-3" style="color:aliceblue">Login AdminFZ</h1>
                            <form action="/OfficerController/login" method="post" class="signin-form">
                                <div class="form-group">
                                    <?php if (session()->getFlashdata('msg')) : ?>
                                        <div>
                                            <script>
                                                Swal.fire({
                                                    icon: 'error',
                                                    text: '<?= session()->getFlashdata('msg') ?>',
                                                })
                                            </script>
                                        <?php endif ?>

                                        <label>ชื่อผู้ใช้งาน</label>
                                        <input type="text" class="form-control p_input" name="userName" value="<?= set_value('userName'); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>รหัสผ่าน</label>
                                            <input type="password" class="form-control p_input" name="password" value="<?= set_value('password'); ?>" required>

                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">


                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block enter-btn">เข้าสู่ระบบ</button>
                                        </div>


                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
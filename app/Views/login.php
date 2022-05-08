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
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/login.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!--- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="center">
        <div class="ear ear--left"></div>
        <div class="ear ear--right"></div>
        <div class="face" action="/OfficerController/login" method="post">
            <div class="eyes">
                <div class="eye eye--left">
                    <div class="glow"></div>
                </div>
                <div class="eye eye--right">
                    <div class="glow"></div>
                </div>
            </div>
            <div class="nose">
                <svg width="38.161" height="22.03">
                    <path d="M2.017 10.987Q-.563 7.513.157 4.754C.877 1.994 2.976.135 6.164.093 16.4-.04 22.293-.022 32.048.093c3.501.042 5.48 2.081 6.02 4.661q.54 2.579-2.051 6.233-8.612 10.979-16.664 11.043-8.053.063-17.336-11.043z" fill="#243946"></path>
                </svg>
                <div class="glow"></div>
            </div>
            <div class="mouth">
                <svg class="smile" viewBox="-2 -2 84 23" width="84" height="23">
                    <path d="M0 0c3.76 9.279 9.69 18.98 26.712 19.238 17.022.258 10.72.258 28 0S75.959 9.182 79.987.161" fill="none" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"></path>
                </svg>
                <div class="mouth-hole"></div>
                <div class="tongue breath">
                    <div class="tongue-top"></div>
                    <div class="line"></div>
                    <div class="median"></div>
                </div>
            </div>
        </div>
        <div class="hands">
            <div class="hand hand--left">
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
            </div>
            <div class="hand hand--right">
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
            </div>
        </div>
        
        <form action="/OfficerController/login" method="post">
            <div class="login">
            <?php if (session()->getFlashdata('msg')) : ?>
                    <div>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                text: '<?= session()->getFlashdata('msg') ?>',
                            })
                        </script>
                    <?php endif ?>
                    <label>
                        <div class="fa fa-phone"></div>
                        <input class="username" type="text" autocomplete="on" placeholder="ชื่อผู้ใช้งาน" name="userName" value="<?= set_value('userName'); ?>" required />
                    </label>
                    <br>
                    <label>
                        <div class="fa fa-commenting"></div>
                        <input class="password" type="password" autocomplete="off" placeholder="รหัสผ่าน" name="password" value="<?= set_value('password'); ?>" required />

                    </label>
                    <br>
                    <button class="login-button" type="submit">เข้าสู่ระบบ</button>
                    </div>
        </form>

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
        <script src="js/login.js"></script>
        <!-- endinject -->
</body>

</html>
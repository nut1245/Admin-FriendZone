<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminFZ</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://media.discordapp.net/attachments/778499819072913482/964380238446489640/28bd6e21ded14639b5af7e3a515ce252-removebg-preview.png" />
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post.css">


    <!-- End layout styles -->
    <link rel="shortcut icon" href="#" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>

<body>
    <!------------------------------------------------------- Menu ---------------------------------------------------------------------------->
    <div class="container-scroller">
        <?php $session = session(); ?>
        <?php require('components/SqlConnect.php'); ?>
        <?php require('components/Navbar.php'); ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card" style="background-color: #fff; ">
                    <div class="card-body row">
                        <div class="row col-12 allPost">
                            <div class="row justify-content-between ">
                                <h4 class="card-title" style="color:black">โพสต์ทั้งหมด</h4>
                                <div class="row col-12">
                                    <div class="col-md-4 grid-margin stretch-card">
                                        <div class="card" style="background-color:lightskyblue" id="color-card">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="d-flex align-items-center align-self-start">
                                                            <h3 class="mb-0">
                                                                <?php while ($row = mysqli_fetch_array($allPost)) {
                                                                    echo $row[0];
                                                                } ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="icon icon-box-dark ">
                                                            <span class="mdi mdi-file-check"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="text-muted font-weight-normal">โพสต์ทั้งหมด</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 grid-margin stretch-card">
                                        <div class="card" style="background-color:#b3ff99" id="color-card">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="d-flex align-items-center align-self-start">
                                                            <h3 class="mb-0">
                                                                <?php while ($row = mysqli_fetch_array($PostOpen)) {
                                                                    echo $row[0];
                                                                } ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="icon icon-box-primary ">
                                                            <span class="mdi mdi-file-check"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="text-muted font-weight-normal =">โพสต์ที่เปิดอยู่</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 grid-margin stretch-card">
                                        <div class="card" style="background-color:#ff7878" id="color-card">
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="d-flex align-items-center align-self-start">
                                                            <h3 class="mb-0">
                                                                <?php while ($row = mysqli_fetch_array($PostClose)) {
                                                                    echo $row[0];
                                                                } ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="icon icon-box-dark ">
                                                            <span class="mdi mdi-file-excel"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="text-muted font-weight-normal">โพสต์ที่ปิดไปแล้ว</h4>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <hr width="20%" style=" border-top: 2px solid #000;  width:98%">
                        </hr>
                        <div class="template-demo">
                            <a href="<?php echo base_url(); ?>/postmanage" type="button" class="btn btn-outline-primary btn-fw">โพสต์ทั้งหมด</a>
                            <a href="<?php echo base_url(); ?>/viewPostOpen" type="button" class="btn btn-outline-success btn-fw">โพสต์ที่เปิดอยู่</a>
                            <a href="<?php echo base_url(); ?>/viewPostClose" type="button" class="btn btn-outline-danger btn-fw">โพสต์ที่ปิดไปแล้ว</a>

                            <br><br>
                        </div>
                        <?php require('components/Post.php'); ?>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const cardPost = document.querySelector(".allPost");
                let toggle = false;
                cardPost.addEventListener("click", (e) => {
                    const target = e.target.closest(".btn-show-comment")
                    if (!target) return
                    console.log(target.id);
                    const card = target.closest(".card-post");
                    const slidedown = card.querySelector(".slidedown");
                    console.log(toggle);
                    if (!toggle) {
                        toggle = true;
                        slidedown.style.display = "block";
                    } else {
                        toggle = false;
                        slidedown.style.display = "none";
                    }
                })
            }, false);
        </script>
        <!-- plugins:js -->
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/progressbar.js/progressbar.min.js"></script>
        <script src="vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/misc.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/todolist.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="js/dashboard.js"></script>
        <!-- End custom js for this page -->
        </script>
</body>

</html>
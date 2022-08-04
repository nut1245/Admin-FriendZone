<?php if (session()->getFlashdata('Success')) : ?> <div>
        <script>
            Swal.fire({
                icon: 'success',
                title: "<?= session()->getFlashdata('Success') ?>",
            })
        </script>
    </div>
<?php endif ?>

<div class="card" style="background-color: #fff; ">
    <div class="card-body">
        <h3 class="card-title">โพสต์ที่ถูกรายงาน</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
            <?php $no = 1;
            foreach ($report as $key => $value) { ?>
                <div class="col">
                    <div class="card" id="card-color" style="border-radius:none;">
                        <img src="<?php echo $value['imagePost']; ?>" class="card-img-post " alt="..." style="border-radius: 30px;">
                        <div class="card-body ">
                            <h4 class="card-title font-weight-bold">เรื่อง : <?php echo $value['reportTitle']; ?></h4>
                            <p class="card-text">ปัญหาที่พบ : <?php echo $value['reportDetail']; ?></p>
                            <p class="card-text">รายงานโดย : <?php echo $value['FName'] . " " . $value['LName']; ?></p>
                            <div class="col-sm-12 ">
                                <center>
                                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detail<?= $value['postId'] ?>">
                                        <i class="mdi mdi-eye"></i>
                                    </a>

                                    <a href="/deleteReport/<?php echo $value["reportId"] ?>" type="button" class="btn btn-outline-danger">
                                        &nbsp;<i class="mdi mdi-delete"></i>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="card" style="background-color: #fff;  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
    <div class="card-body">
        <h3 class="card-title">โพสต์ที่ถูกรายงาน</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4 ">
            <?php $no = 1;
            foreach ($report as $key => $value) { ?>
                <div class="col">
                    <div class="card" id="card-color" style="border-radius: 10px;">
                        <img src="https://s.isanook.com/tr/0/rp/r/w850/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL3RyLzAvdWQvMjgyLzE0MTIzNjUvc2RmZnJnLmpwZw==.jpg" class="card-img-post " alt="..." style="border-radius: 30px;">
                        <div class="card-body " id="card-color">
                            <h4 class="card-title font-weight-bold"> <?php echo $value['reportTitle']; ?></h4>
                            <p class="card-text"><?php echo $value['reportDetail']; ?></p>
                            <div class="col-sm-12 ">
                                <center>
                                    <a href="#" class="btn btn-primary btn-update" data-bs-toggle="modal" data-bs-target="#update3">
                                        &nbsp;<i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-update" data-bs-toggle="modal" data-bs-target="#update3">
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
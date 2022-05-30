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
    <div class="col-12 grid-margin">
        <div class="card" style="background-color: #fff;  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
            <div class="card-body">
                <div class="row justify-content-between ">
                    <h4 class="card-title">ผู้ใช้งานทั้งหมดในระบบ</h4>
                    <div class="row col-12">
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card" style="background-color:#ccf5ff; box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0">
                                                    <?php while ($row = mysqli_fetch_array($allUser)) {
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
                                    <h4 class="text-muted font-weight-normal">ผู้ใช้ทั้งหมด</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3  grid-margin stretch-card">
                            <div class="card" style="background-color:#E0E0E0;box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0">
                                                    <?php while ($row = mysqli_fetch_array($blockUser)) {
                                                        echo $row[0];
                                                    } ?>
                                                </h3>
                                                <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-danger">
                                                <span class="mdi mdi-block-helper"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="text-muted font-weight-normal">ผู้ใช้ที่ถูกบล็อก</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6  grid-margin stretch-card">
                            <div class="card" style="background-color:#ffbbff ;box-shadow:rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                                <div class="card-body">
                                    <div class="row">
                                        <h4 class="text-muted font-weight-normal">&nbsp;&nbsp; ค้นหาผู้ใช้จากบัตรประชาชน</h4>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center align-self-start">
                                                <form class="col-12">
                                                    
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" name="search" id="inputalluser" class="form-control" placeholder="ค้นหาผู้ใช้จากบัตรประชาชน" >
                                                            <div class="input-group-append">
                                                                <button class="btn btn-sm btn-primary" type="submit" id="button-addon2"> ค้นหา</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

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
                                <th> ชื่อ-นามสกุล </th>
                                <th> รหัสบัตรประชาชน </th>
                                <th> เพศ </th>
                                <th> วันเกิด </th>
                                <th> อีเมล </th>
                                <th> สถานะ </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($user as $key => $value) { ?>
                                <tr>
                                    <td class="id">
                                        <?php echo $value['userId']; ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo $value['userImage']; ?>" alt="image" />
                                        <span class="pl-2"><?php echo $value['FName']; ?></span>
                                    </td>
                                    <td> <?php echo $value['idCard']; ?> </td>
                                    <td> <?php echo $value['gender']; ?></td>
                                    <td> <?php echo $value['birthday']; ?> </td>
                                    <td> <?php echo $value['email']; ?> </td>
                                    <td>
                                        <?php if ($value['statusUser'] == "0") {
                                            echo '<div class="badge badge-outline-warning">รอการยืนยันตัวตน</div>';
                                        } else if ($value['statusUser'] == "1") {
                                            echo '<div class="badge badge-outline-success">ยืนยันตัวตนสำเร็จ</div>';
                                        } else if ($value['statusUser'] == "2") {
                                            echo '<div class="badge badge-outline-danger">รอการแก้ไขข้อมูล</div>';
                                        } else if ($value['statusUser'] == "3") {
                                            echo '<div class="badge badge-outline-dark">ผู้ใช้รายนี้ถูกบล็อก</div>';
                                        };
                                        ?>
                                    </td>
                                    <td>
                                        <a href="/blockUser/<?php echo $value['userId']; ?>" type="button" class="btn btn-outline-danger ">
                                            <i class="mdi mdi-block-helper"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?= $pager->links('pages') ?>
            </div>
        </div>
    </div>
</div>
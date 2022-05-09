
<center>
    <div class="col-10 grid-margin">
        <div class="card" style="background-color: #fff;  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

            <div class="card-body">
                <div class="row justify-content-between ">
                    <h4 class="card-title">จัดการหมวดหมู่กิจกรรม</h4>
                    <form action="/CategoeyController/insertCategory" method="POST">
                        <div class="template-demo">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right;">
                                + เพิ่มหมวดหมู่กิจกรรม
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">เพิ่มหมวดหมู่กิจกรรม</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">

                                                 <input class="form-control"  name="name_category">
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="CategoeyController()">ตกลง</button>
                    </form>
                    <a href="/catagory" type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</a>
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
                    <th></th>
                    <th></th>
                    <th> ชื่อหมวดหมู่กิจกรรม </th>
                    <th> จัดการ </th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($category as $key => $value) { ?>
                <center>
                    <tbody>
                        <tr>
                            <td><?php echo $value['categoryId']; ?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $value['name_category']; ?></td>

                            <td>
                                <a href="/deleteCategory/<?php echo $value["categoryId"] ?>" type="button" class="btn btn-outline-danger ">
                                    &nbsp;<i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                            <?php } ?>
                        </tr>
                        
                    </tbody>
                    
                </center>
            
    </div>
    </div>
    
    </div>
    
    </td>
    
    </tr>
    
    </tbody>
    </table>
    
    </div>
    </div>

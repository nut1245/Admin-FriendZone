<?php foreach ($posts as $post) { ?>
    <div class="col-md-4 ">
        <div class="card-post">
            <div class="card-post-title1">
                <img src="<?php echo $post["userImage"] ?>" class="img-post-profileUser">

                <h6 class="text-post-user"><?php echo $post["FName"] . " " . $post["LName"] ?> </h6>

                <div class="card-post-dropdown">
                    <a class="dropdown" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">

                        <li><a class="dropdown-item" href="/deletePost/<?php echo $post["postId"] ?>">ลบโพสต์</a></li>
                    </ul>
                </div>

                <p class="text-post-title-time"><?php echo $post["creation_date"] ?></p>
            </div>
            <div class="card-post-title2">
                <div class="div-post-title">
                    <h5 class="text-post-title"><?php echo $post["postTitle"] ?></h5>
                </div>
            </div>

            <img src="<?php echo $post["imagePost"] ?>" class="card-img-top" style="width:100%; height:400px">

            <div class="card-post-body">
                <div class="row row-post-body">
                    <div class="col-8">
                        <i class="far fa-calendar-alt fa-post-calendar"></i>
                        <label class="text-post-date">วันที่ :</label>
                        <span class="span span-post-date">&nbsp;<?php echo $post["date_start"] ?>&nbsp;</span>
                        <label class="text-post-date">ถึง</label>
                        <span class="span span-post-date">&nbsp;<?php echo $post["date_end"] ?></span>

                        <br />

                        <i class="fas fa-map-marker-alt fa-post-location"></i>
                        <label class="text-post-province">จังหวัด :</label>
                        <span class="span span-post-province">&nbsp;<?php echo $post["name_th"] ?></span>

                        <br />

                        <i class="fas fa-users fa-post-numPeople"></i>
                        <label class="text-post-numPeople">ต้องการผู้เข้าร่วม :</label>
                        <span class="span span-post-numPeople">&nbsp;<?php echo $post["num_people"] ?> &nbsp; คน</span>
                    </div>

                    <div class="col-4">
                        <a href="#" class="text-post-viewDetail">รายละเอียดเพิ่มเติม</a>
                    </div>

                </div>

                <div class="post-people-join">
                    <i class="fad fa-pennant fa-post-flag"></i>
                    <label class="text-post-people-join">ผู้เข้าร่วม :</label>
                    <?php foreach ($partsProfile as $partProfile) { ?>
                        <?php if ($post["postId"] == $partProfile["postId_post"]) { ?>
                            <img src="<?php echo $partProfile["userImage"] ?>" class="img-post-people-join">
                        <?php } ?>
                    <?php } ?>
                </div>

                <div class="post-line"></div>

                <div class="post-bar-bottom">
                    <div class="row">
                        <div class="col">
                            <div class="post-comment-title btn-show-comment">
                                <a class="text-post-comment" id="down">
                                    <i class="fad fa-comments-alt fa-post-view-comment"></i>
                                    &nbsp;ดูความคิดเห็นทั้งหมด
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slidedown">
                <?php foreach ($comments as $comment) { ?>
                    <?php if ($post["postId"] == $comment["postId"]) { ?>
                        <div class="post-comment-body">
                            <img src="<?php echo $comment["userImage"] ?>" class="img-post-user-comment">
                            <div class="text-post-user-comment">
                                <span class="span-post-user-comment">
                                    <a href="#" class="post-user-comment-username"><?php echo $comment["FName"] ?> : </a>
                                    <?php echo $comment["commentDetail"] ?>
                                </span>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
        <br>
    </div>

<?php } ?>
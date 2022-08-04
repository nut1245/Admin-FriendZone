<div class="card" style="background-color: #fff; ">
    <div class="card-body">
        <h3 class="card-title">รีวิวโพสต์</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4 ">

            <?php foreach ($postreviews as $postreview) { ?>
                <div class="col">
                <div class="card-post">
                    <div class="card-post-title1">
                        <img src="<?php echo $postreview["userImage"] ?>" class="img-post-profileUser">

                        <h6 class="text-post-user"><?php echo $postreview["FName"] . " " . $postreview["LName"] ?> </h6>

                        <p class="text-post-title-time"><?php echo $postreview["creation_date"] ?></p>
                    </div>
                    <div class="card-post-title2">
                        <div class="div-post-title">
                            <h5 class="text-post-title"><?php echo $postreview["postTitle"] ?></h5>
                        </div>
                    </div>

                    <img src="<?php echo $postreview["imagePost"] ?>" class="card-img-top">

                    <div class="card-post-body">
                        <div class="row row-post-body">
                            <div class="col-8">
                                <i class="far fa-calendar-alt fa-post-calendar"></i>
                                <label class="text-post-date">วันที่ :</label>
                                <span class="span span-post-date">&nbsp;<?php echo $postreview["date_start"] ?>&nbsp;</span>
                                <label class="text-post-date">ถึง</label>
                                <span class="span span-post-date">&nbsp;<?php echo $postreview["date_end"] ?></span>
                                <br />

                                <i class="fas fa-map-marker-alt fa-post-location"></i>
                                <label class="text-post-province">จังหวัด :</label>
                                <span class="span span-post-province">&nbsp;<?php echo $postreview["name_th"] ?></span>

                                <br />

                                <i class="fas fa-users fa-post-numPeople"></i>
                                <label class="text-post-numPeople">ต้องการผู้เข้าร่วม :</label>
                                <span class="span span-post-numPeople">&nbsp;<?php echo $postreview["num_people"] ?> &nbsp; คน</span>
                            </div>

                            <div class="col-4">
                                <a href="#" class="text-post-viewDetail">รายละเอียดเพิ่มเติม</a>
                            </div>

                        </div>

                        <div class="post-people-join">
                            <i class="fad fa-pennant fa-post-flag"></i>
                            <label class="text-post-people-join">ผู้เข้าร่วม :</label>
                            <?php foreach ($partsProfile as $partProfile) { ?>
                                <?php if ($postreview["postId"] == $partProfile["postId_post"]) { ?>
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
                                            <i class="fas fa-star"></i>
                                            &nbsp;ดูรีวิว
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-line-bottom"></div>
                    </div>

                    <div class="slidedown slidecomment">

                        <?php foreach ($reviews as $review) { ?>
                            <?php if ($postreview["postId"] == $review["postId"]) { ?>
                                <div class="div-review">
                                    <img class="img-review" src="<?php echo $review["userImage"] ?>">
                                    <?php if ($review["point"] == "1") { ?>
                                        <i class="fas fa-star fa-star-review1"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                    <?php } else if ($review["point"] == "2") { ?>
                                        <i class="fas fa-star fa-star-review1"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                    <?php } else if ($review["point"] == "3") { ?>
                                        <i class="fas fa-star fa-star-review1"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                    <?php } else if ($review["point"] == "4") { ?>
                                        <i class="fas fa-star fa-star-review1"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="far fa-star fa-star-review"></i>
                                    <?php } else if ($review["point"] == "5") { ?>
                                        <i class="fas fa-star fa-star-review1"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                        <i class="fas fa-star fa-star-review"></i>
                                    <?php } ?>
                                    <div class="div-text-review">
                                        <span class="span-review">
                                            <a href="#" class="username-review"><?php echo $review["FName"] ?> : 
                                            <?php echo $review["detail_review"] ?>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>

                </div>
                </div>
                <br>
            <?php } ?>

        </div>
    </div>
</div>
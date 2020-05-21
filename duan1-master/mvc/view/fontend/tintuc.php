<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area blog_banner d_flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="banner_content text-center">
            <h4>Tin tức <br /></h4>
            <p>Trang chủ -> Tin tức</p>
            <a href="index.php?controller=fontend&action=chitiettintuc" class="btn white_btn button_hover">Xem chi tiết</a>
        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================Blog Categorie Area =================-->

<!--================Blog Categorie Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <article class="row blog_item">
                        <div class="col-md-11">
                            <?php
                            foreach ($data as $key => $value) {
                                ?>
                                <div class="blog_post">
                                    <img src="./mvc/Webroot/image/img_news/<?php echo $value["Images"] ?>" alt="" width="700px">
                                    <div class="blog_details">
                                        <a href="index.php?controller=fontend&action=chitiettin&id=<?php echo $value["NewID"] ?>">
                                            <h2><?php echo $value["Title"] ?></h2>
                                        </a>
                                        <div style=" height: 75px; width: 685px; overflow: hidden; text-overflow: ellipsis;">
                                            <?php echo $value["Content"] ?>
                                        </div>
                                        <a href="index.php?controller=fontend&action=chitiettin&id=<?php echo $value["NewID"] ?>" class="view_btn button_hover">Xem chi tiết</a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </article>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link">01</a></li>
                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar" style="margin-top: -35px">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Tin tức khách sạn</h3>
                        <?php
                        foreach ($data as $key => $value) {
                            ?>
                            <div class="media post_item">
                                <img width="100px" height="60px" src="./mvc/Webroot/image/img_news/<?php echo $value["Images"] ?>" alt="post">
                                <div class="media-body">
                                    <a href="index.php?controller=fontend&action=chitiettin&id=<?php echo $value["NewID"] ?>">
                                        <h3><?php echo $value["Title"] ?></h3>
                                    </a>
                                    <p><?php echo $value["CreateAt"] ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <div class="br"></div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->


<!--================ start footer Area  =================-->
<?php require_once("./mvc/view/fontend/include/footer.php") ?>
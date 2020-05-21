<?php require_once("./mvc/view/fontend/include/header.php") ?>
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area blog_banner d_flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="banner_content text-center">
            <h4>Chi tiết tin tức <br /></h4>
            <p>Tin tức -> Chi tiết tin tức</p>
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
                            <h4 style="margin-top: -10PX">CHI TIẾT TIN TỨC</h4>
                            <div class="blog_post">
                                <div class="blog_details">
                                    <a href="#">
                                        <h2><?php echo $dataNew["Title"] ?></h2>
                                    </a>
                                  <?php echo $dataNew["Content"] ?>
                                </div>
                            </div>
                        </div>
                    </article>


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
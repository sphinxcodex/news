
<!-- === === === === === = Home Banner Area === === === === === == -->
<section class = "banner_area">
    <div class = "banner_inner d-flex align-items-center">
        <div class = "overlay bg-parallax" data-stellar-ratio = "0.9" data-stellar-vertical-offset = "0" data-background = ""></div>
        <div class = "container">
            <div class = "banner_content text-center">
                <h2>view single news item</h2>
            </div>
        </div>
    </div>
</section>
<!-- === === === === === = End Home Banner Area === === === === === == -->

<!-- === === === === === = Blog Area === === === === === == -->
<section class = "blog_area single-post-area p_120">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-8 posts-list">
                <div class = "single-post row">
                    <div class = "col-lg-12">
                        <div class = "feature-img">
                            <img class = "img-fluid" src = "" alt = "">
                        </div>
                    </div>
                    <div class = "col-lg-3  col-md-3">
                        <div class = "blog_info text-right">
                            <div class = "post_tag">
                                <a href = "#">Food, </a>
                                <a class = "active" href = "#">Technology, </a>
                                <a href = "#">Politics, </a>
                                <a href = "#">Lifestyle</a>
                            </div>
                            <ul class = "blog_meta list">
                                <li><a href = "#">Mark wiens<i class = "lnr lnr-user"></i></a></li>
                                <li><a href = "#">12 Dec, 2017<i class = "lnr lnr-calendar-full"></i></a></li>
                                <li><a href = "#">1.2M Views<i class = "lnr lnr-eye"></i></a></li>
                                <li><a href = "#">06 Comments<i class = "lnr lnr-bubble"></i></a></li>
                            </ul>
                            <ul class = "social-links">
                                <li><a href = "#"><i class = "fa fa-facebook"></i></a></li>
                                <li><a href = "#"><i class = "fa fa-twitter"></i></a></li>
                                <li><a href = "#"><i class = "fa fa-github"></i></a></li>
                                <li><a href = "#"><i class = "fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class = "col-lg-9 col-md-9 blog_details">
                        <h2><?php echo $news_item['title'] ?></h2>
                        <p class = "excert">
                            <?php echo $news_item['text'] ?>
                        </p>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- === === === === === = Blog Area === === === === === == -->

<body>
 

    <div id="wrapper">
        
 

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-green"><a href="garden-category.html" title=""><?php echo $u["name_category"] ?></a></span>

                                <h3><?php echo $u["name"] ; ?> </h3>

                                 

                                <!-- <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>  -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="<?php echo $u["image"] ?>" style="height: 400px; width : auto ;" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">
                                    <p><?php echo $u["description"] ?></p>

                                    <div style="font-size : 24px ; font-weight : 600 ; ">
                                        Price : <?php echo $u["prix"]. " DT" ;  ?>
                                    </div>
                                    
                                    <button type="button" class="btn btn-primary btn-lg btn-block" style="margin : 25x    ">
                                        <i class="fa fa-shopping-cart"></i>    
                                    Add to Cart</button>
                                </div><!-- end pp -->

                                 
                            </div><!-- end content -->

                              

                            <hr class="invis1">

                            <div class="custombox authorbox clearfix">
                                <h4 class="small-title">About Seller</h4>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <img src="https://images.unsplash.com/photo-1564564244660-5d73c057f2d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Z3V5fGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="" class="img-fluid rounded-circle"> 
                                    </div><!-- end col -->

                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <h4><a href="#"><?php echo $user["username"] ; ?></a></h4>
                                        <p><?php echo $user["adresse"] ;  ?> </p>

                                        <div class="topsocial">
                                        </div><!-- end social -->

                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">

                            <!-- add to cart button -->
                            

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title"><?php echo count($review_all) ; ?> Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="comments-list">

                                            <?php foreach ($review_all as $review ) { ?>
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">Amanda Martines <small><?php echo $review["createdAt"] ; ?></small></h4>
                                                    <p><?php echo $review["description"] ;  ?></p>
                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Leave a Reply</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper" method="post" action="index.php?controller=review&action=created" > 
                                            <input type="hidden" class="form-control" name="id_user" value="<?php echo $user["id"] ; ?>" placeholder="Your name">
                                            <input type="hidden" class="form-control" name="name_user" value="<?php echo $user["username"] ; ?>" placeholder="Your name">
                                            <input type="hidden" class="form-control" name="id_produit" value="<?php echo $u["id"] ; ?>" placeholder="Your name">
                                            
                                            <textarea class="form-control" name="description"  placeholder="Your comment"></textarea>
                                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Events</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <?php foreach ($events as $event) { ?>
                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?php echo $event['image'] ;  ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo $event["title"] ; ?></h5>
                                                <small><?php echo $event["start_date"] ;  ?></small>
                                            </div>
                                        </a>

                                    <?php } ?>
                                         
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            

                            <div class="widget">
                                <h2 class="widget-title">You may also like</h2>
                                <div class="instagram-wrapper clearfix">
                                    <?php foreach ($products as $p)  { ?>
                                        <a href="index.php?controller=produit&action=read&id=<?=$p['id']?>"><img src="<?php echo $p["image"] ; ?>" alt="" class="img-fluid"></a>
                                    <?php } ?>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        <?php foreach ($categories as $c) { ?>
                                        <li><a href="#"><?php echo $c["name_category"] ;  ?> 
                                        <!-- <span>(21)</span> -->
                                    </a></li>
                                        <?php } ?>
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

         

        <div class="dmtop">Scroll to Top</div> 
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
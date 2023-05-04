
<body>
 

    <div id="wrapper">
        
 
<form 
                                action="index.php?controller=commande&action=created"
                                method="post"
                            >
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            
                                
                                <div class="blog-title-area">
                                    <span class="color-green"><a href="garden-category.html" title=""><?php echo $u["start_date"] ?></a></span>

                                    <h3><?php echo $u["title"] ; ?> </h3>

                                    

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
                                           Publié le  <?php echo $u["createdAt"]  ;  ?>
                                        </div>

                                        

                                        <input type="hidden" name="id_produit" value="<?php echo $u["id"] ;  ?>" />
                                                
                                        <input type="hidden" name="name_user" value="<?php echo $_SESSION["user"]["username"] ;  ?>"  />

                                         
                                    </div><!-- end pp -->

                                    
                                </div><!-- end content -->
                            
                              

                            <hr class="invis1">

                             

                            
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
                                        <a href="index.php?controller=event&action=read&id=<?=$event['id']?>" class="list-group-item list-group-item-action flex-column align-items-start">
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
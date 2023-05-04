<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

        <title>Home</title>

</head>
<body>

   <?php include "navbar.php"; ?> 
         

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">

                <?php 
                $i = 0 ;
                foreach ($produits as $produit) { 
                    $i++;
                    if ($i == 4) {
                        break; 
                    }
                    ?>
                    <div class="left-side">
                        <div class="masonry-box post-media">
                             <img src="<?php echo $produit["image"] ?>" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="blog-category-01.html" title=""><?php echo $produit["name_category"] ;  ?> </a></span>
                                        <h4><a href="index.php?controller=produit&action=read&id=<?=$produit['id']?>" title=""><?php echo $produit["name"] ;  ?></a></h4>
                                        <a href="garden-single.html" title=""><?php echo $produit["prix"]." DT" ;  ?></a>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
                <?php } ?>
                     
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">

                                <?php 
                            $v = 0 ;
                            foreach ($produits as $produit) { 
                                $v++;
                                if ($v == 3) {
                                    continue; 
                                }
                                ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="index.php?controller=produit&action=read&id=<?=$produit['id']?>" title="">
                                                <img src="<?php echo $produit["image"] ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="index.php?controller=produit&action=read&id=<?=$produit['id']?>" title=""><?php echo $produit["name_category"] ?></a></span>
                                        <h4><a href="index.php?controller=produit&action=read&id=<?=$produit['id']?>" title=""><?php echo $produit["name"] ;  ?></a></h4>
                                        <p><?php echo $produit["description"] ;  ?></p>
                                        <small><a href="index.php?controller=produit&action=read&id=<?=$produit['id']?>" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <br>
                                        <br>

                                        <a href="#" style="font-size : 20px" title=""><?php echo $produit["prix"]. " DT" ; ?></a>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                            <?php } ?> 

                                 

                                 

                                 
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
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
                                    <?php foreach ($produits as $p)  { ?>
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

     <?php include "footer.php"; ?>

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
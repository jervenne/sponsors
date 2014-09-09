<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/header.php';    // Meta data and header   ?>

<!-- Page content -->
<div id="page-content" class="block full">
    <!-- Header -->
    <div class="block-header">
        <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
        <a href="" class="header-title-link">
            <h1>
                Title<br><small>Description</small>
            </h1>
        </a>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li><i class="fa fa-file-o"></i></li>
        <li>Pages</li>
        <li><a href="">404 Error</a></li>
    </ul>
    <!-- END Header -->

    <!-- Content -->
    <div class="col-sm-4">
        <a href="page_ready_article.html" class="widget">
            <div class="widget-content themed-background text-light-op">
                <i class="fa fa-fw fa-file-text"></i> <strong>Article</strong>
            </div>
            <div class="widget-image widget-image-sm">
                <img src="img/placeholders/photos/photo19.jpg" alt="image">
                <div class="widget-image-content">
                    <h2 class="widget-heading text-light"><strong>How to be more productive</strong></h2>
                    <h3 class="widget-heading text-light-op h4"><em>A step by step guide</em></h3>
                </div>
                <i class="gi gi-check"></i>
            </div>
            <div class="widget-content text-dark">
                <div class="row text-center">
                    <div class="col-xs-4">
                        <i class="fa fa-heart-o"></i> 3.5k
                    </div>
                    <div class="col-xs-4">
                        <i class="fa fa-eye"></i> 35k
                    </div>
                    <div class="col-xs-4">
                        <i class="fa fa-share-alt"></i> 1.5k
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>
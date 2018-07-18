<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="CRE8 CMS">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title><?= h($this->fetch('title')) ?> - CRE8 CMS</title>

        <?= $this->Html->css('Backend.bootstrap.min'); ?>
        <?= $this->Html->css('Backend.icons'); ?>
        <?= $this->Html->css('Backend.style'); ?>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <?=  $this->Html->script('Backend.modernizr.min'); ?>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/admin" class="logo"></i><span>Cre8 CMS</span></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <?= $this->element('notifications'); ?>
                        <?= $this->element('avatar'); ?>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>

                        <?php /*<li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Zoeken..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>*/ ?>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?= $this->element('navigation'); ?>
            <!-- Left Sidebar End -->



            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content'); ?>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    &copy; <?= date('Y'); ?>. <a target="_blank" href="https://www.cre8websolutions.com">CRE8 BVBA</a>.
                </footer>

            </div>


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <?=  $this->Html->script('Backend.jquery.min'); ?>
        <?=  $this->Html->script('Backend.tether.min'); ?>
        <?=  $this->Html->script('Backend.bootstrap.min'); ?>
        <?=  $this->Html->script('Backend.detect'); ?>
        <?=  $this->Html->script('Backend.fastclick'); ?>
        <?=  $this->Html->script('Backend.jquery.slimscroll'); ?>
        <?=  $this->Html->script('Backend.jquery.blockUI'); ?>
        <?=  $this->Html->script('Backend.waves'); ?>
        <?=  $this->Html->script('Backend.wow.min'); ?>
        <?=  $this->Html->script('Backend.jquery.nicescroll'); ?>
        <?=  $this->Html->script('Backend.jquery.scrollTo.min'); ?>

        <?=  $this->Html->script('Backend.jquery.core'); ?>
        <?=  $this->Html->script('Backend.jquery.app'); ?>



    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Cre8 CMS">

        <link rel="shortcut icon" href="/backend/images/favicon.ico">

        <title>Login - Cre8 CMS</title>

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
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <?= $this->fetch('content') ?>
        </div>
        
        

        
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
<?php $this->layout = 'login'; ?>

<div class="card-box">
    <div class="panel-heading">
        <h4 class="text-center"> Inloggen <strong class="text-custom">CRE8 CMS</strong></h4>
		<?= $this->Flash->render() ?>
    </div>


    <div class="p-20">
        <form class="form-horizontal m-t-20" action="" method="POST">

            <div class="form-group ">
                <div class="col-12">
                	<?= $this->Form->control('email', [
                		'label' => false,
                		'div' => false,
                		'class' => 'form-control',
                		'placeholder' => 'E-mailadres'
                	]) ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                	<?= $this->Form->control('password', [
                		'label' => false,
                		'div' => false,
                		'class' => 'form-control',
                		'placeholder' => 'Wachtwoord'
                	]) ?>
                </div>
            </div>

            <div class="form-group text-center m-t-40">
                <div class="col-12">
                    <button class="btn btn-default btn-block text-uppercase waves-effect waves-light"
                            type="submit">Inloggen
                    </button>
                </div>
            </div>

            <?php /*<div class="form-group m-t-30 m-b-0">
                <div class="col-12">
                    <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                        your password?</a>
                </div>
            </div>*/ ?>
        </form>

    </div>
</div>
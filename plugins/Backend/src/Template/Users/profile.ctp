<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
        </div>
        <h4 class="page-title">Gebruikers</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">CMS</a></li>
            <li class="breadcrumb-item"><a href="/admin/users">Gebruikers</a></li>
            <li class="breadcrumb-item active">Profiel</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card-box">
            
            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        <form class="form-horizontal" role="form" method="POST">
                            <div class="form-group row">
                                <label class="col-2 col-form-label">E-mailadres</label>
                                <div class="col-10">
                                    <?= $this->Form->control('email', [
				                		'label' => false,
				                		'div' => false,
				                		'class' => 'form-control',
				                	]) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Wachtwoord</label>
                                <div class="col-10">
                                    <?= $this->Form->control('password', [
				                		'label' => false,
				                		'div' => false,
				                		'class' => 'form-control',
				                	]) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Voornaam</label>
                                <div class="col-10">
                                    <?= $this->Form->control('firstname', [
				                		'label' => false,
				                		'div' => false,
				                		'class' => 'form-control',
				                	]) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Achternaam</label>
                                <div class="col-10">
                                    <?= $this->Form->control('lastname', [
				                		'label' => false,
				                		'div' => false,
				                		'class' => 'form-control',
				                	]) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Avatar</label>
                                <div class="col-10">
                                    <?= $this->Form->control('avatar', [
				                		'label' => false,
				                		'div' => false,
				                		'class' => 'form-control',
                                        'type' => 'file'
				                	]) ?>
                                </div>
                            </div>
                            <button class="btn btn-default btn-block text-uppercase waves-effect waves-light"
                            type="submit">Opslaan
                    </button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->
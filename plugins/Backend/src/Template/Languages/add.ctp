<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="/admin/languages" class="btn btn-default waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Overzicht</a>
        </div>
        <h4 class="page-title">Talen</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/languages">Talen</a></li>
            <li class="breadcrumb-item active">Toevoegen</li>
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
                                <label class="col-2 col-form-label">Naam</label>
                                <div class="col-10">
                                    <?= $this->Form->control('name', [
                                        'label' => false,
                                        'div' => false,
                                        'class' => 'form-control',
                                    ]) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Shortcode</label>
                                <div class="col-10">
                                    <?= $this->Form->control('shortcode', [
                                        'label' => false,
                                        'div' => false,
                                        'class' => 'form-control',
                                    ]) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label">Status</label>
                                <div class="col-10">
                                    <?= $this->Form->control('online', [
                                        'label' => false,
                                        'div' => false,
                                        'class' => 'form-control',
                                        'options' => [
                                            0 => 'Offline',
                                            1 => 'Online'
                                        ],
                                        'default' => 1
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

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="/admin/pages" class="btn btn-default waves-effect waves-light"  aria-expanded="false">Overzicht</a>
        </div>
        <h4 class="page-title">Pagina's</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">CMS</a></li>
            <li class="breadcrumb-item"><a href="/admin/pages">Pagina's</a></li>
            <li class="breadcrumb-item active">Toevoegen</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-12">
                        <?= $this->Form->create($page, ['type' => 'post']); ?>
                             <fieldset>
                                <legend>NL</legend>
                                <?= $this->Form->control('_translations.nl.title'); ?>
                                <?= $this->Form->control('_translations.nl.body'); ?>
                            </fieldset>
                            <fieldset>
                                <legend>EN</legend>
                                <?= $this->Form->control('_translations.en.title'); ?>
                                <?= $this->Form->control('_translations.en.body'); ?>
                            </fieldset>
                            <button class="btn btn-default btn-block text-uppercase waves-effect waves-light"
                            type="submit">Opslaan
                    </button>
                    </form>
                </div>
                
            </div>
        </div>

    </div> <!-- end col -->
    
</div>

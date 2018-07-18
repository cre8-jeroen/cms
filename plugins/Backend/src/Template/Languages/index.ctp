<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="/admin/languages/add" class="btn btn-default waves-effect waves-light"aria-expanded="false">Toevoegen</a>
        </div>
        <h4 class="page-title">Talen</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/languages">Talen</a></li>
            <li class="breadcrumb-item active">Overzicht</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <div class="card-box">
            
            <div class="row">
                <div class="col-12">
                    <div class="p-20">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('Shortcode') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('Status') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($languages as $language): ?>
                                <tr>
                                    <td><?= h($language->name) ?></td>
                                    <td><?= h($language->shortcode) ?></td>
                                    <td><b><a href="/admin/languages/updatestatus/<?= $language->id; ?>/<?= $language->online; ?>"><i style="color:<?= ($language->online)?'green':'red'; ?>;" class="md md-flag"></i></a> </b></td>
                                    <td class="actions">
                                         <a href="/admin/languages/edit/<?= $language->id; ?>" class="table-action-btn"><i class="md md-edit"></i></a>
                                        <a onclick="return(confirm('Weet u zeker dat u deze taal wil verwijderen?'));" href="/admin/languages/delete/<?= $language->id; ?>" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="paginator">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
</div>
<!-- end row -->

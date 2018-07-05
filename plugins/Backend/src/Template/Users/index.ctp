<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <a href="/admin/users/add" class="btn btn-default waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Toevoegen</a>
        </div>
        <h4 class="page-title">Gebruikers</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">CMS</a></li>
            <li class="breadcrumb-item"><a href="/admin/users">Gebruikers</a></li>
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
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->firstname.' '.$user->lastname) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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

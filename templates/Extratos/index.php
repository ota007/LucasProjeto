<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato[]|\Cake\Collection\CollectionInterface $extratos
 */
?>

<?php $this->assign('title', __('Extratos') ); ?>

<?php
// $this->assign('breadcrumb',
//   $this->element('content/breadcrumb', [
//     'home' => true,
//     'breadcrumb' => [
//       'List Extratos',
//     ]
//   ])
// );
?>

<div class="card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title">
    <?= $this->Html->link(__('Receitas'), ['action' => 'receitas'], ['class' => 'btn btn-primary btn-sm']) ?>
    <?= $this->Html->link(__('Despesas'), ['action' => 'despesas'], ['class' => 'btn btn-primary btn-sm']) ?>
    <?= $this->Html->link(__('Receitas e Despesas'), ['action' => 'rd'], ['class' => 'btn btn-primary btn-sm']) ?>
    <?= $this->Html->link(__('CSV'), ['action' => 'export'], ['class' => 'btn btn-primary btn-sm']) ?>
    </h2>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
              <th><?= $this->Paginator->sort('id_extrato') ?></th>
              <th><?= $this->Paginator->sort('valor') ?></th>
              <th><?= $this->Paginator->sort('tipo') ?></th>
              <th><?= $this->Paginator->sort('conta_id') ?></th>
              <th><?= $this->Paginator->sort('created') ?></th>
              <th><?= $this->Paginator->sort('modified') ?></th>
              <th><?= $this->Paginator->sort('descricao') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($extratos as $extrato): ?>
          <tr>
            <td><?= $this->Number->format($extrato->id_extrato) ?></td>
            <td><?= $this->Number->format($extrato->valor) ?></td>
            <td><?= h($extrato->tipo) ?></td>
            <td><?= $extrato->has('conta') ? $this->Html->link($extrato->conta->nconta, ['controller' => 'Contas', 'action' => 'view', $extrato->conta->id_conta]) : '' ?></td>
            <td><?= h($extrato->created) ?></td>
            <td><?= h($extrato->modified) ?></td>
            <td><?= h($extrato->descricao) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->

  <div class="card-footer d-md-flex paginator">
    <div class="mr-auto" style="font-size:.8rem">
      <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
    </div>

    <ul class="pagination pagination-sm">
      <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape'=>false]) ?>
      <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape'=>false]) ?>
    </ul>

  </div>
  <!-- /.card-footer -->
</div>

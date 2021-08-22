<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta[]|\Cake\Collection\CollectionInterface $contas
 */
?>

<?php $this->assign('title', __('Contas') ); ?>

<?php
// $this->assign('breadcrumb',
//   $this->element('content/breadcrumb', [
//     'home' => true,
//     'breadcrumb' => [
//       'List Contas',
//     ]
//   ])
// );
?>

<div class="card card-primary card-outline" style="background-color: #2B4560;color: #E1E7E0;">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><!-- --></h2>
    <div class="card-toolbox">
      <?= $this->Paginator->limitControl([], null, [
            'label'=>false,
            'class' => 'form-control-sm',
          ]); ?>
      <?= $this->Html->link(__('Nova Conta'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('Nova Transação'), ['controller'=>'extratos','action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap" >
        <thead>
          <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('banco_id') ?></th>
              <th><?= $this->Paginator->sort('Agência') ?></th>
              <th><?= $this->Paginator->sort('Conta') ?></th>
              <th><?= $this->Paginator->sort('Saldo') ?></th>
              <th><?= $this->Paginator->sort('Created') ?></th>
              <th><?= $this->Paginator->sort('Modified') ?></th>
              <th class="actions"><?= __('Actions') ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contas as $conta): ?>
          <tr>
            <td><?= $this->Number->format($conta->id_conta) ?></td>
            <td><?= $conta->has('banco') ? $this->Html->link($conta->banco->nome, ['controller' => 'Bancos', 'action' => 'view', $conta->banco->id_banco]) : '' ?></td>
            <td><?=($conta->agencia) ?></td>
            <td><?=($conta->nconta) ?></td>
            <td><?= ($conta->saldo) ?></td>
            <td><?= h($conta->created) ?></td>
            <td><?= h($conta->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['action' => 'view', $conta->id_conta], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conta->id_conta], ['class'=>'btn btn-xs btn-outline-primary', 'escape'=>false]) ?>
              <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conta->id_conta], ['class'=>'btn btn-xs btn-outline-danger', 'escape'=>false, 'confirm' => __('Are you sure you want to delete # {0}?', $conta->id_conta)]) ?>
            </td>
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

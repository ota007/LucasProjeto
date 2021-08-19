<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato $extrato
 */
?>

<?php
$this->assign('title', __('Extrato') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Extratos' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($extrato->id_extrato) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($extrato->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Conta') ?></th>
            <td><?= $extrato->has('conta') ? $this->Html->link($extrato->conta->nconta, ['controller' => 'Contas', 'action' => 'view', $extrato->conta->id_conta]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($extrato->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Extrato') ?></th>
            <td><?= $this->Number->format($extrato->id_extrato) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($extrato->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($extrato->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($extrato->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $extrato->id_extrato],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $extrato->id_extrato), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $extrato->id_extrato], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>



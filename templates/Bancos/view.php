<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banco $banco
 */
?>

<?php
$this->assign('title', __('Banco') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Bancos' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($banco->nome) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($banco->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Banco') ?></th>
            <td><?= $this->Number->format($banco->id_banco) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $banco->id_banco],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $banco->id_banco), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $banco->id_banco], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-contas view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Contas') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Contas' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Contas' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id Conta') ?></th>
          <th><?= __('Banco Id') ?></th>
          <th><?= __('Agencia') ?></th>
          <th><?= __('Nconta') ?></th>
          <th><?= __('Saldo') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($banco->contas)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Contas record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($banco->contas as $contas) : ?>
        <tr>
            <td><?= h($contas->id_conta) ?></td>
            <td><?= h($contas->banco_id) ?></td>
            <td><?= h($contas->agencia) ?></td>
            <td><?= h($contas->nconta) ?></td>
            <td><?= h($contas->saldo) ?></td>
            <td><?= h($contas->created) ?></td>
            <td><?= h($contas->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Contas', 'action' => 'view', $contas->id_conta], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Contas', 'action' => 'edit', $contas->id_conta], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contas', 'action' => 'delete', $contas->id_conta], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $contas->id_conta)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>


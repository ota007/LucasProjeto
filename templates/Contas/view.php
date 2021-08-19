<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conta $conta
 */
?>

<?php
$this->assign('title', __('Conta') );

$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Contas' => ['action'=>'index'],
      'View',
    ]
  ])
);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($conta->nconta) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Banco') ?></th>
            <td><?= $conta->has('banco') ? $this->Html->link($conta->banco->nome, ['controller' => 'Bancos', 'action' => 'view', $conta->banco->id_banco]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id Conta') ?></th>
            <td><?= $this->Number->format($conta->id_conta) ?></td>
        </tr>
        <tr>
            <th><?= __('Agencia') ?></th>
            <td><?= $this->Number->format($conta->agencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Nconta') ?></th>
            <td><?= $this->Number->format($conta->nconta) ?></td>
        </tr>
        <tr>
            <th><?= __('Saldo') ?></th>
            <td><?= $this->Number->format($conta->saldo) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($conta->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($conta->modified) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete',  $conta->id_conta],
          ['confirm' => __('Are you sure you want to delete # {0}?',  $conta->id_conta), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit',  $conta->id_conta], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-extratos view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Extratos') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Extratos' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Extratos' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id Extrato') ?></th>
          <th><?= __('Valor') ?></th>
          <th><?= __('Tipo') ?></th>
          <th><?= __('Conta Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th><?= __('Descricao') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($conta->extratos)) { ?>
        <tr>
            <td colspan="8" class="text-muted">
              Extratos record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($conta->extratos as $extratos) : ?>
        <tr>
            <td><?= h($extratos->id_extrato) ?></td>
            <td><?= h($extratos->valor) ?></td>
            <td><?= h($extratos->tipo) ?></td>
            <td><?= h($extratos->conta_id) ?></td>
            <td><?= h($extratos->created) ?></td>
            <td><?= h($extratos->modified) ?></td>
            <td><?= h($extratos->descricao) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Extratos', 'action' => 'view', $extratos->id_extrato], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Extratos', 'action' => 'edit', $extratos->id_extrato], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Extratos', 'action' => 'delete', $extratos->id_extrato], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $extratos->id_extrato)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato $extrato
 */
?>

<!-- <?php $this->assign('title', __('Add Extrato') ); ?> -->

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Extratos' => ['action'=>'index'],
      'Add',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($extrato) ?>
  <div class="card-body">
    <?php
      $a = ['ENTRADA', 'SAIDA'];
      echo $this->Form->control('valor');
      echo $this->Form->label('tipo');
      echo $this->Form->select('tipo',['ENTRADA' => 'ENTRADA', 'SAIDA' => 'SAIDA']);
      echo $this->Form->control('conta_id', ['options' => $contas, 'empty' => true]);
      echo $this->Form->control('descricao');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

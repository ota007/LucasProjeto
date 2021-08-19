<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extrato $extrato
 */
?>

<?php $this->assign('title', __('Edit Extrato') ); ?>

<?php
$this->assign('breadcrumb',
  $this->element('content/breadcrumb', [
    'home' => true,
    'breadcrumb' => [
      'List Extratos' => ['action'=>'index'],
      'View' => ['action'=>'view', $extrato->id_extrato],
      'Edit',
    ]
  ])
);
?>


<div class="card card-primary card-outline">
  <?= $this->Form->create($extrato) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('valor');
      echo $this->Form->control('tipo');
      echo $this->Form->control('conta_id', ['options' => $contas, 'empty' => true]);
      echo $this->Form->control('descricao');
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $extrato->id_extrato],
          ['confirm' => __('Are you sure you want to delete # {0}?', $extrato->id_extrato), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action'=>'index'], ['class'=>'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

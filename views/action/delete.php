<?php if(!defined('APPLICATION')) exit();

$actionName = $this->data('ActionName');
?>

<h1><?php echo $this->data('Title'); ?></h1>
<div class="alert alert-info padded">
  <?php echo sprintf(Gdn::translate('Are you sure you want to delete this %s?'), $actionName . ' ' . Gdn::translate('Yaga.Action')) ?>
</div>
<?php echo $this->Form->open() . $this->Form->errors(); ?>
<ul>
  <li class="form-group">
    <div class="input-wrap">
      <?php echo $this->Form->checkBox('Move', sprintf(Gdn::translate('Yaga.Action.Move'), $actionName)); ?>
    </div>
  </li>
  <li class="form-group">
    <div class="input-wrap">
      <?php echo $this->Form->dropDown('ReplacementID', $this->data('OtherActions', null)); ?>
    </div>
  </li>
</ul>
<div class="form-footer">
  <?php
  echo $this->Form->button('OK', ['class' => 'btn btn-primary']);
  echo $this->Form->button('Cancel', ['type' => 'button', 'class' => 'btn btn-secondary']);
  ?>
</div>
<?php echo $this->Form->close(); ?>

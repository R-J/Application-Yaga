<?php if (!defined('APPLICATION')) exit();
/* Copyright 2014 Zachary Doll */

$transportType = $this->data('TransportType');

echo heading($this->title());
echo wrap(t("Yaga.$transportType.Desc"), 'div', ['class' => 'padded']);

echo $this->Form->open();
echo $this->Form->errors();
?>
<ul>
  <li class="form-group">
    <?php echo $this->Form->toggle('Action', 'Yaga.Reactions'); ?>
  </li>
  <li class="form-group">
    <?php echo $this->Form->toggle('Badge', 'Yaga.Badges'); ?>
  </li>
  <li class="form-group">
    <?php echo $this->Form->toggle('Rank', 'Yaga.Ranks'); ?>
  </li>
</ul>
<?php
echo $this->Form->close($transportType);

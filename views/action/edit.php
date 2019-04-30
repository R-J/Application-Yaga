<?php if(!defined('APPLICATION')) exit();
/* Copyright 2013 Zachary Doll */

if(property_exists($this, 'Action')) {
  echo '<h1>' . Gdn::translate('Yaga.Action.Edit') . '</h1>';
}
else {
  echo '<h1>' . Gdn::translate('Yaga.Action.Add') . '</h1>';
}
echo $this->Form->open(['class' => 'Action']);
echo $this->Form->errors();
?>
<section>
<ul>
  <li class="form-group">
    <?php
    echo $this->Form->labelWrap('Name', 'Name');
    echo $this->Form->textBoxWrap('Name');
    ?>
  </li>
  <li class="form-group">
    <?php echo $this->Form->labelWrap('Icon'); ?>
    <div class="input-wrap">
      <div id="ActionIcons" class="form-control">
        <?php
        foreach($this->data('Icons') as $icon) {
          $class = 'React' . $icon;
          $selected = '';
          if($this->Form->getValue('CssClass') == $class) {
            $selected = 'Selected';
          }
          echo img(
            'applications/yaga/design/images/action-icons/' . $icon . '.png',
            ['title' => $icon, 'data-class' => $class, 'class' => $selected]
          );
        }
        ?>
      </div>
    </div>
  </li>
  <li class="form-group">
    <?php
    echo $this->Form->labelWrap('Description', 'Description');
    echo $this->Form->textBoxWrap('Description');
    ?>
  </li>
  <li class="form-group">
    <?php
    echo $this->Form->labelWrap('Tooltip', 'Tooltip');
    echo $this->Form->textBoxWrap('Tooltip');
    ?>
  </li>
  <li class="form-group">
    <?php
    echo $this->Form->labelWrap('Award Value', 'AwardValue');
    echo $this->Form->textBoxWrap('AwardValue');
    ?>
  </li>
</ul>
</section>
<h4><?php echo Gdn::translate('Advanced Settings'); ?></h4>
<section>
  <ul>
    <li class="form-group">
      <?php
      echo $this->Form->labelWrap('Css Class', 'CssClass');
      echo $this->Form->textBoxWrap('CssClass', ['id' => 'CssClass']);
      ?>
    </li>
    <li class="form-group">
      <div class="label-wrap">
        <?php echo $this->Form->label('Permission', 'Permission'); ?>
        <div class="info"><?php echo Gdn::translate('Yaga.Action.PermDesc'); ?></div>
      </div>
      <div class="input-wrap">
        <?php echo $this->Form->dropdown('Permission', $this->data('Permissions')); ?>
      </div>
    </li>
  </ul>
</section>
<?php
echo $this->Form->close('Save');
?>

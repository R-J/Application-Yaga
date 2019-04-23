<?php defined('APPLICATION') or die;
$action = $this->data('Action');
?>
<li id="ActionID_<?php echo $action->ActionID; ?>">
  <div class="Tools">
    <?php
    echo anchor(
      Gdn::translate('Edit'),
      "action/edit/{$action->ActionID}",
      ['class' => 'js-modal btn btn-secondary']
    );
    echo anchor(
      Gdn::translate('Delete'),
      "action/delete/{$action->ActionID}",
      ['class' => 'js-modal btn btn-secondary']
    );
    ?>
  </div>
  <div class="Action">
    <h4><?php echo $action->Name; ?></h4>
    <div class="Meta">
      <span><?php echo $action->Description; ?></span>
      <span><?php echo plural($action->AwardValue, '%s Point', '%s Points'); ?></span>
    </div>
    <div class="Preview Reactions">
      <span class="ReactSprite <?php echo "React-{$action->$ActionID} {$action->CssClass}"; ?>">&nbsp;</span>
      <span class="Count"><?php echo rand(0, 18) + 1; ?></span>
      <span class="ReactLabel"><?php echo $action->Name; ?></span>
    </div>
  </div>
</li>

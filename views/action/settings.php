<?php if(!defined('APPLICATION')) exit();
/* Copyright 2013 Zachary Doll */

echo heading(
  $this->title(),
  Gdn::translate('Yaga.Action.Add'),
  'action/add',
  'js-modal btn btn-primary'
);

echo helpAsset(
  Gdn::translate('Yaga.Reactions'),
  Gdn::translate('Yaga.Actions.Desc')
);
echo subHeading(
  Gdn::translate('Yaga.Actions.Current'),
  Gdn::translate('Yaga.Actions.Settings.Desc')
);
?>
<ol id="Actions" class="Sortable">
  <?php
  $actionItem = new Gdn_Module();
  $actionItem->setView('action-item');
  foreach($this->data('Actions') as $action) {
    $actionItem->setData('Action', $action);
    echo $actionItem->toString();
  }
  ?>
</ol>
<style>
  ol#Actions {
    list-style-type:none;
    padding-left:0;
  }
  #Actions li {
    position:relative;
  }
  .Tools {
    position:absolute;
    right:0;
  }
  .Reactions .Count {
    color: white;
    padding: 2px 3px;
  }
</style>

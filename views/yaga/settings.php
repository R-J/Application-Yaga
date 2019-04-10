<?php if (!defined('APPLICATION')) exit();
/* Copyright 2013-2014 Zachary Doll */

echo heading($this->title());

echo $this->configurationModule->toString();

echo subHeading(
  Gdn::translate('Yaga.Transport'),
  Gdn::translate('Yaga.Transport.Desc')
);

echo wrap(
  anchor(
    Gdn::translate('Import'),
    'yaga/import',
    ['class' => 'Button SmallButton']
  ) .
  anchor(
    Gdn::translate('Export'),
    'yaga/export',
    ['class' => 'Button SmallButton']
  ),
  'div',
  ['class' => 'Wrap Buttons']
);

$paypalLink = <<< EOS
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="W277NKS7JF9FW">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
EOS;

echo helpAsset(
  Gdn::translate('Feedback'),
  "<p>{$paypalLink}</p>" .
  '<p>Find this plugin helpful? Want to support a freelance developer?<br/>Click the donate button to buy me a beer. :D</p>' .
  '<p>Confused by something? <strong><a href="open.vanillaforums.com/post/discussion?AddonID=1178">Ask a question</a></strong> about Yaga on the official <a href="http://open.vanillaforums.com/discussions" target="_blank">Vanilla forums</a></p>'
);

<?php if (!defined('APPLICATION')) exit();
/* Copyright 2013-2014 Zachary Doll */

echo heading($this->title());

$this->ConfigurationModule->render();

echo subheading(
    t('Yaga.Transport'),
    t('Yaga.Transport.Desc')
);
echo $this->Form->linkButton(
    t('Import'),
    'yaga/import'
);
echo $this->Form->linkButton(
    t('Export'),
    'yaga/export'
);

echo helpAsset(
    'Find this plugin helpful?',
    ' Want to support a freelance developer?<br/>Click the donate button to buy me a beer. &#x1F642;<br />'.
    '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">' .
    '<input type="hidden" name="cmd" value="_s-xclick">'.
    '<input type="hidden" name="hosted_button_id" value="W277NKS7JF9FW">'.
    '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">'.
    '<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">'.
    '</form>'
);

echo helpAsset(
    'Confused by something?',
    '<a href="https://open.vanillaforums.com/post/discussion?AddonID=1178">Ask a question</a> about Yaga on the official <a href="https://open.vanillaforums.com/discussions" target="_blank">Vanilla forums</a>.'
);

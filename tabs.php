<?php

require_once 'workflows.php';

$workflow = new Workflows();
$tabs = explode(';', trim(exec('./get-tabs.scpt')));

$uid = 1;
foreach ($tabs as $tab) {
    if (strlen(trim($query)) === 0 || (strlen(trim($tab)) > 0 && preg_match('/'.$query.'/', $tab))) {
        $workflow->result($uid, $tab, $tab, '', 'icon.png');
        $uid++;
    }
}

echo $workflow->toxml();

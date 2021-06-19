<?php
//Sugar Language File Date Updater
global $mod_strings;
require('modules/Administration/Upgrade.php');
$link = SugarThemeRegistry::current()->getImage('Repair', 'align="absmiddle" border="0"', null, null, '.gif', $mod_strings['LBL_LANGFILEDATE_TITLE']) .
    "<a href=\"./index.php?module=Administration&action=langFileDateRepair\"><b>{$mod_strings['LBL_LANGFILEDATE_TITLE']}</b></a>";
echo "<script type=\"text/javascript\">
    let row = $(\"<tr></tr>\"),
        col1 = $('<td scope=\"row\">{$link}</td>'),
        col2 = $(\"<td>{$mod_strings['LBL_LANGFILEDATE_DESC']}</td>\");
    row.append(col1,col2).appendTo(\".other\");
</script>";

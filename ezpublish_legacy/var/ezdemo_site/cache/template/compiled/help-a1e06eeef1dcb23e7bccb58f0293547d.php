<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Timestamp: 1389968123 (Fri Jan 17 15:15:23 CET 2014)
$oldSetArray_343ac935264d4f49d1caaf3c7204a156 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

$text .= '<div id="ezwt-help">
<a href="http://ez.no/doc" title="Documentation" target="_blank"><span class="hide">Documentation</span>?</a>
</div>';

$setArray = $oldSetArray_343ac935264d4f49d1caaf3c7204a156;
$tpl->Level--;
?>

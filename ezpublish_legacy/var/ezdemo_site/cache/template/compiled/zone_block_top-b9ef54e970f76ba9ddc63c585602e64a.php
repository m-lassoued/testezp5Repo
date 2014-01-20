<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block_top.tpl
// Timestamp: 1389968184 (Fri Jan 17 15:16:24 CET 2014)
$oldSetArray_2a171f77e7838a83b1a717d1ba88abcc = isset( $setArray ) ? $setArray : array();
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

$text .= '
';

$setArray = $oldSetArray_2a171f77e7838a83b1a717d1ba88abcc;
$tpl->Level--;
?>

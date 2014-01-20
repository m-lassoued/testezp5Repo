<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl
// Timestamp: 1389968184 (Fri Jan 17 15:16:24 CET 2014)
$oldSetArray_e94a3ca52df5857e7cece4237bfe8d6c = isset( $setArray ) ? $setArray : array();
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

$setArray = $oldSetArray_e94a3ca52df5857e7cece4237bfe8d6c;
$tpl->Level--;
?>

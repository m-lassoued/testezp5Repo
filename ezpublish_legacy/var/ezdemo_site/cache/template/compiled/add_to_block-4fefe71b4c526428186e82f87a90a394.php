<?php
// URI:       design:content/parts/add_to_block.tpl
// Filename:  extension/ezflow/design/admin2/templates/content/parts/add_to_block.tpl
// Timestamp: 1389968184 (Fri Jan 17 15:16:24 CET 2014)
$oldSetArray_3702ecb35ee6b7c78578773405e8785e = isset( $setArray ) ? $setArray : array();
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

$setArray = $oldSetArray_3702ecb35ee6b7c78578773405e8785e;
$tpl->Level--;
?>

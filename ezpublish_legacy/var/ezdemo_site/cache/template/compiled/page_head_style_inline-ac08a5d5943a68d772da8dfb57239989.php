<?php
// URI:       design/admin/templates/page_head_style_inline.tpl
// Filename:  design/admin/templates/page_head_style_inline.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_1e7889c29f87919394ff09725ad8d1e8 = isset( $setArray ) ? $setArray : array();
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

<!--[if lt IE 8]>
<style>
/* Terminate floating elements flow in IE < 8 */
.float-break
{
  height: 1%;
}
</style>
<![endif]-->
<!--[if lte IE 8]>
<style>
#controlbar-top .box-bc
{
  filter:progid:DXImageTransform.Microsoft.Shadow(color=\'gray\', Direction=180, Strength=8);
  zoom: 1;
}
</style>
<![endif]-->
<!--[if lte IE 7]>
<style>
#controlbar-top .box-bc
{
padding-bottom:8px;
}
</style>
<![endif]-->
<!--[if IE 6]>
<style>
.yui3-js-enabled .scroll-to-top {display: none;}
input.box, textarea.box {width: 99%}
</style>
<![endif]-->

';

$setArray = $oldSetArray_1e7889c29f87919394ff09725ad8d1e8;
$tpl->Level--;
?>

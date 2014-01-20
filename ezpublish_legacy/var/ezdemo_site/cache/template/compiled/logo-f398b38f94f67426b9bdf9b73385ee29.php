<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Timestamp: 1389968123 (Fri Jan 17 15:15:23 CET 2014)
$oldSetArray_21e12d0612e5a09b8aad626d41d570ad = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="ezwt-ezlogo">
<a href="/testezp/web/index.php/eng/ezinfo/about" title="About" target="_blank"><img src="/testezp/web/extension/ezwt/design/standard/images/websitetoolbar/ezwt-logo.png" width="66" height="25" alt="eZ" /></a>
</div>';

$setArray = $oldSetArray_21e12d0612e5a09b8aad626d41d570ad;
$tpl->Level--;
?>

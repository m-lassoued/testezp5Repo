<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl
// Timestamp: 1389968123 (Fri Jan 17 15:15:23 CET 2014)
$oldSetArray_4f19daa3143cb1b772a8ef382390e1e2 = isset( $setArray ) ? $setArray : array();
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

<script type="text/javascript">
(function()
{
    var body = document.body, ezwt = document.getElementById( \'ezwt\' );
    if ( !ezwt ) return;
    if ( body.className.indexOf(\'ie6\') !== -1 ) return;

    if ( body.className )
        body.className += \' floating-wt\';
    else
        body.className = \'floating-wt\';

    // Set padding on header / body based on height of toolbar
    var page = document.getElementById( \'page\' )
    if ( page )
        page.getElementsByTagName(\'div\')[0].style.paddingTop = ezwt.offsetHeight + \'px\';
    else
        body.style.paddingTop = ezwt.offsetHeight + \'px\';
})();
</script>

';

$setArray = $oldSetArray_4f19daa3143cb1b772a8ef382390e1e2;
$tpl->Level--;
?>

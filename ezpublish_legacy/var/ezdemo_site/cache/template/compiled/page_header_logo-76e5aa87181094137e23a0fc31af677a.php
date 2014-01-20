<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_header_logo.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_header_logo.tpl
// Timestamp: 1389968165 (Fri Jan 17 15:16:05 CET 2014)
$oldSetArray_5625ae547c7330bf1ebd8544da0f251e = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="span8">
    <a href="/testezp/web/index.php/eng" title="';
unset( $var );
$var = 'eZ Publish Demo Site' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" class="logo"><img src="/testezp/web/extension/ezdemo/design/ezdemo/images/logo-ez.png" alt="';
unset( $var );
$var = 'eZ Publish Demo Site' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /></a>
</div>
';

$setArray = $oldSetArray_5625ae547c7330bf1ebd8544da0f251e;
$tpl->Level--;
?>

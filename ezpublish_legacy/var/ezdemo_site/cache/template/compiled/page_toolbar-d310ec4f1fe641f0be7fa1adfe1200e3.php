<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_toolbar.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_toolbar.tpl
// Timestamp: 1389968165 (Fri Jan 17 15:16:05 CET 2014)
$oldSetArray_002511f1ff30d02a829c4006e54a35f8 = isset( $setArray ) ? $setArray : array();
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

$text .= '  <div id="toolbar">
  ';
$oldRestoreIncludeArray_3d843b4dc671d5a14b2dab39875ecec0 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/website_toolbar-8e94f442d2c2d82a9efa6a8effae4b26.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/website_toolbar-8e94f442d2c2d82a9efa6a8effae4b26.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_3d843b4dc671d5a14b2dab39875ecec0;

$text .= '  </div>';

$setArray = $oldSetArray_002511f1ff30d02a829c4006e54a35f8;
$tpl->Level--;
?>

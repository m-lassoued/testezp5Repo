<?php
// URI:       design:pagelayout.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/pagelayout.tpl
// Timestamp: 1389968164 (Fri Jan 17 15:16:04 CET 2014)
$oldSetArray_c1fbe9b6019fb769206584de11463b66 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="unsupported-ie ie" lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"><!--<![endif]-->
<head>';
// def $basket_is_empty
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'is_logged_in' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
$var2 = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchBasket' ),
  array(  ) );
$var2 = isset( $var2['result'] ) ? $var2['result'] : null;
$var3 = compiledFetchAttribute( $var2, "is_empty" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = 1;
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'basket_is_empty', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'basket_is_empty' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 333,
  ),
  1 => 
  array (
    0 => 7,
    1 => 142,
    2 => 570,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'basket_is_empty', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'basket_is_empty', $var, $rootNamespace );
}

// def $user_hash
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var3 = compiledFetchAttribute( $var2, 'role_id_list' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( ",", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var5 = compiledFetchAttribute( $var4, 'limited_assignment_value_list' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = implode( ",", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . ',' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_hash' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 333,
  ),
  1 => 
  array (
    0 => 7,
    1 => 142,
    2 => 570,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'user_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_hash', $var, $rootNamespace );
}

$oldRestoreIncludeArray_bb43a4b2999b2db926775177a7788fa3 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head_displaystyles-9d12002207b136398a8f577ae17d7e5f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_head_displaystyles.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head_displaystyles-9d12002207b136398a8f577ae17d7e5f.php' );
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
$tpl->processURI( 'design/standard/templates/page_head_displaystyles.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_bb43a4b2999b2db926775177a7788fa3;

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $extra_cache_key
if ( $tpl->hasVariable( 'extra_cache_key', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'extra_cache_key' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 4,
    2 => 666,
  ),
  1 => 
  array (
    0 => 12,
    1 => 29,
    2 => 691,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'extra_cache_key', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'extra_cache_key', '', $rootNamespace );
}

}
unset( $if_cond );
// if ends

// def $pagedata
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezpagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedata', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedata' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  1 => 
  array (
    0 => 17,
    1 => 53,
    2 => 844,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedata', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedata', $var, $rootNamespace );
}

// def $inner_column_size
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'inner_column_size' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'inner_column_size', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'inner_column_size' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  1 => 
  array (
    0 => 17,
    1 => 53,
    2 => 844,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'inner_column_size', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'inner_column_size', $var, $rootNamespace );
}

// def $outer_column_size
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'outer_column_size' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'outer_column_size', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'outer_column_size' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 0,
    2 => 701,
  ),
  1 => 
  array (
    0 => 17,
    1 => 53,
    2 => 844,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'outer_column_size', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'outer_column_size', $var, $rootNamespace );
}

unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'basket_is_empty', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['basket_is_empty'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$cacheKeys4 = compiledFetchAttribute( $cacheKeys3, 'contentobject_id' );
unset( $cacheKeys3 );
$cacheKeys3 = $cacheKeys4;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "19_0_19_112_extension/ezdemo/design/ezdemo/templates/pagelayout.tpl", "eng" );

list($cacheHandler_78fe9ca7c1039bac2f325180035b3f27, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
// def $pagestyle
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'css_classes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagestyle', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagestyle' is already defined.", array (
  0 => 
  array (
    0 => 20,
    1 => 0,
    2 => 963,
  ),
  1 => 
  array (
    0 => 22,
    1 => 42,
    2 => 1115,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagestyle', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagestyle', $var, $rootNamespace );
}

// def $locales
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locales', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locales' is already defined.", array (
  0 => 
  array (
    0 => 20,
    1 => 0,
    2 => 963,
  ),
  1 => 
  array (
    0 => 22,
    1 => 42,
    2 => 1115,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'locales', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locales', $var, $rootNamespace );
}

// def $current_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node_id' is already defined.", array (
  0 => 
  array (
    0 => 20,
    1 => 0,
    2 => 963,
  ),
  1 => 
  array (
    0 => 22,
    1 => 42,
    2 => 1115,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'current_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node_id', $var, $rootNamespace );
}

$text .= '
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
$oldRestoreIncludeArray_b5f12599fa0cc559504a7455475ce77f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head-cfeac5b67a861cea99cd0117b8861b2b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_head.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head-cfeac5b67a861cea99cd0117b8861b2b.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_head.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_b5f12599fa0cc559504a7455475ce77f;

$oldRestoreIncludeArray_54565e591c15bb3164ae0807ffe8b0fd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head_style-d8e70372c58ffcd3c913d6e60822fc07.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_head_style.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head_style-d8e70372c58ffcd3c913d6e60822fc07.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_head_style.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_54565e591c15bb3164ae0807ffe8b0fd;

$oldRestoreIncludeArray_8c7cf8399c0c6b76e15025e755e9a5a8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head_script-b11ae32aaa0c3f17533e1e6849d05915.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_head_script.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head_script-b11ae32aaa0c3f17533e1e6849d05915.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_head_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_8c7cf8399c0c6b76e15025e755e9a5a8;

$text .= '
</head>
<body>
<!-- Complete page area: START -->

<div id="page" class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagestyle', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagestyle'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'persistent_variable' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'extra_template_list' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'persistent_variable' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'extra_template_list' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_5f22032aaab3ba673c0479eb337986d2_1 ) ) $fe_variable_stack_5f22032aaab3ba673c0479eb337986d2_1 = array();
$fe_variable_stack_5f22032aaab3ba673c0479eb337986d2_1[] = compact( 'fe_array_5f22032aaab3ba673c0479eb337986d2_1', 'fe_array_keys_5f22032aaab3ba673c0479eb337986d2_1', 'fe_n_items_5f22032aaab3ba673c0479eb337986d2_1', 'fe_n_items_processed_5f22032aaab3ba673c0479eb337986d2_1', 'fe_i_5f22032aaab3ba673c0479eb337986d2_1', 'fe_key_5f22032aaab3ba673c0479eb337986d2_1', 'fe_val_5f22032aaab3ba673c0479eb337986d2_1', 'fe_offset_5f22032aaab3ba673c0479eb337986d2_1', 'fe_max_5f22032aaab3ba673c0479eb337986d2_1', 'fe_reverse_5f22032aaab3ba673c0479eb337986d2_1', 'fe_first_val_5f22032aaab3ba673c0479eb337986d2_1', 'fe_last_val_5f22032aaab3ba673c0479eb337986d2_1' );
unset( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 );
unset( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 );
$fe_array_5f22032aaab3ba673c0479eb337986d2_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$fe_array_5f22032aaab3ba673c0479eb337986d2_11 = compiledFetchAttribute( $fe_array_5f22032aaab3ba673c0479eb337986d2_1, 'persistent_variable' );
unset( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 );
$fe_array_5f22032aaab3ba673c0479eb337986d2_1 = $fe_array_5f22032aaab3ba673c0479eb337986d2_11;
$fe_array_5f22032aaab3ba673c0479eb337986d2_11 = compiledFetchAttribute( $fe_array_5f22032aaab3ba673c0479eb337986d2_1, 'extra_template_list' );
unset( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 );
$fe_array_5f22032aaab3ba673c0479eb337986d2_1 = $fe_array_5f22032aaab3ba673c0479eb337986d2_11;
if (! isset( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 ) ) $fe_array_5f22032aaab3ba673c0479eb337986d2_1 = NULL;
while ( is_object( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 ) and method_exists( $fe_array_5f22032aaab3ba673c0479eb337986d2_1, 'templateValue' ) )
    $fe_array_5f22032aaab3ba673c0479eb337986d2_1 = $fe_array_5f22032aaab3ba673c0479eb337986d2_1->templateValue();

$fe_array_keys_5f22032aaab3ba673c0479eb337986d2_1 = is_array( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 ) ? array_keys( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 ) : array();
$fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 = count( $fe_array_keys_5f22032aaab3ba673c0479eb337986d2_1 );
$fe_n_items_processed_5f22032aaab3ba673c0479eb337986d2_1 = 0;
$fe_offset_5f22032aaab3ba673c0479eb337986d2_1 = 0;
$fe_max_5f22032aaab3ba673c0479eb337986d2_1 = $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 - $fe_offset_5f22032aaab3ba673c0479eb337986d2_1;
$fe_reverse_5f22032aaab3ba673c0479eb337986d2_1 = false;
if ( $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 < 0 || $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 >= $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 )
{
    $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 = ( $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 < 0 ) ? 0 : $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1;
    if ( $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 || $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_5f22032aaab3ba673c0479eb337986d2_1'. Array count: $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1");   
}
}
if ( $fe_max_5f22032aaab3ba673c0479eb337986d2_1 < 0 || $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 + $fe_max_5f22032aaab3ba673c0479eb337986d2_1 > $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 )
{
    if ( $fe_max_5f22032aaab3ba673c0479eb337986d2_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_5f22032aaab3ba673c0479eb337986d2_1");
    $fe_max_5f22032aaab3ba673c0479eb337986d2_1 = $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 - $fe_offset_5f22032aaab3ba673c0479eb337986d2_1;
}
if ( $fe_reverse_5f22032aaab3ba673c0479eb337986d2_1 )
{
    $fe_first_val_5f22032aaab3ba673c0479eb337986d2_1 = $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 - 1 - $fe_offset_5f22032aaab3ba673c0479eb337986d2_1;
    $fe_last_val_5f22032aaab3ba673c0479eb337986d2_1  = 0;
}
else
{
    $fe_first_val_5f22032aaab3ba673c0479eb337986d2_1 = $fe_offset_5f22032aaab3ba673c0479eb337986d2_1;
    $fe_last_val_5f22032aaab3ba673c0479eb337986d2_1  = $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 - 1;
}
// foreach
for ( $fe_i_5f22032aaab3ba673c0479eb337986d2_1 = $fe_first_val_5f22032aaab3ba673c0479eb337986d2_1; $fe_n_items_processed_5f22032aaab3ba673c0479eb337986d2_1 < $fe_max_5f22032aaab3ba673c0479eb337986d2_1 && ( $fe_reverse_5f22032aaab3ba673c0479eb337986d2_1 ? $fe_i_5f22032aaab3ba673c0479eb337986d2_1 >= $fe_last_val_5f22032aaab3ba673c0479eb337986d2_1 : $fe_i_5f22032aaab3ba673c0479eb337986d2_1 <= $fe_last_val_5f22032aaab3ba673c0479eb337986d2_1 ); $fe_reverse_5f22032aaab3ba673c0479eb337986d2_1 ? $fe_i_5f22032aaab3ba673c0479eb337986d2_1-- : $fe_i_5f22032aaab3ba673c0479eb337986d2_1++ )
{
$fe_key_5f22032aaab3ba673c0479eb337986d2_1 = $fe_array_keys_5f22032aaab3ba673c0479eb337986d2_1[$fe_i_5f22032aaab3ba673c0479eb337986d2_1];
$fe_val_5f22032aaab3ba673c0479eb337986d2_1 = $fe_array_5f22032aaab3ba673c0479eb337986d2_1[$fe_key_5f22032aaab3ba673c0479eb337986d2_1];
$vars[$rootNamespace]['extra_template'] = $fe_val_5f22032aaab3ba673c0479eb337986d2_1;
$text .= '        ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:extra/',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'extra_template',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 39,
    1 => 8,
    2 => 1648,
  ),
  1 => 
  array (
    0 => 39,
    1 => 60,
    2 => 1700,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/pagelayout.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_5f22032aaab3ba673c0479eb337986d2_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_5f22032aaab3ba673c0479eb337986d2_1 ) ) extract( array_pop( $fe_variable_stack_5f22032aaab3ba673c0479eb337986d2_1 ) );

else
{

unset( $fe_array_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_array_keys_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_n_items_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_n_items_processed_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_i_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_key_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_val_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_offset_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_max_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_reverse_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_first_val_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_last_val_5f22032aaab3ba673c0479eb337986d2_1 );

unset( $fe_variable_stack_5f22032aaab3ba673c0479eb337986d2_1 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <!-- Header area: START -->
    ';
$oldRestoreIncludeArray_6d4a33f043cdf4909e9c02f7610ab22e = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_header-5d9366406d436d180314ef0b69b457f7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_header.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_header-5d9366406d436d180314ef0b69b457f7.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_header.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6d4a33f043cdf4909e9c02f7610ab22e;

$text .= '    <!-- Header area: END -->

    ';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "47_4_47_78_extension/ezdemo/design/ezdemo/templates/pagelayout.tpl", "eng" );

list($cacheHandler_29bca02a173b27a9e8262c4905dd708a, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
    <div class="navbar main-navi">
        <!-- Top menu area: START -->
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'top_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
$oldRestoreIncludeArray_8f208ca2881f849f2907e6a707f53208 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_topmenu-7c86cb652137f893922b4175732a2eb8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_topmenu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_topmenu-7c86cb652137f893922b4175732a2eb8.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_8f208ca2881f849f2907e6a707f53208;

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        <!-- Top menu area: END -->

        <!-- Path area: START -->
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'show_path' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
$oldRestoreIncludeArray_f1edb41df1aeb0f179f4231ff8e446f8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_toppath-172ca1004db8941f0418f65bf6d381bf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_toppath.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_toppath-172ca1004db8941f0418f65bf6d381bf.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_toppath.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_f1edb41df1aeb0f179f4231ff8e446f8;

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        <!-- Path area: END -->
    </div>

    <!-- Toolbar area: START -->
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'website_toolbar' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'is_edit' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
$oldRestoreIncludeArray_8aac8246fced787e94ea56a64bf767aa = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_toolbar-e0fe05a0fad0e433a9f8387de58ebbe9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_toolbar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_toolbar-e0fe05a0fad0e433a9f8387de58ebbe9.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_8aac8246fced787e94ea56a64bf767aa;

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    <!-- Toolbar area: END -->

    <!-- Columns area: START -->
    <div class="container">
        <div class="row">
            <!-- Side menu area: START -->
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'left_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
$oldRestoreIncludeArray_20c18be8d0bac08d6ae971c94e5d63e2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_leftmenu-c3fe1b83f67afe334e50d3c575f191f5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_leftmenu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_leftmenu-c3fe1b83f67afe334e50d3c575f191f5.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_leftmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_20c18be8d0bac08d6ae971c94e5d63e2;

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            <!-- Side menu area: END -->
    ';
$cachedText = $text;
$cacheHandler_29bca02a173b27a9e8262c4905dd708a->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_29bca02a173b27a9e8262c4905dd708a );
}

$text .= '    ';
$cachedText = $text;
$cacheHandler_78fe9ca7c1039bac2f325180035b3f27->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_78fe9ca7c1039bac2f325180035b3f27 );
}

$text .= '            <!-- Main area: START -->
            ';
$oldRestoreIncludeArray_2861793429172643308ebb97f74d0bc9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_mainarea-769986484857634dadba32f309bdf2db.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_mainarea-769986484857634dadba32f309bdf2db.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_2861793429172643308ebb97f74d0bc9;

$text .= '            <!-- Main area: END -->
            ';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
$cacheKeys4 = compiledFetchAttribute( $cacheKeys3, 'name' );
unset( $cacheKeys3 );
$cacheKeys3 = $cacheKeys4;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "82_12_82_105_extension/ezdemo/design/ezdemo/templates/pagelayout.tpl", "eng" );

list($cacheHandler_9d778d2351c6a18059d8ad5a4783db73, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
            <!-- Extra area: START -->
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'extra_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
$oldRestoreIncludeArray_ab7914016894da0ad538f0ae97ca66ba = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_extramenu-2caa9aab0819cf502635c81db7393135.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_extramenu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_extramenu-2caa9aab0819cf502635c81db7393135.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_extramenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_ab7914016894da0ad538f0ae97ca66ba;

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            <!-- Extra area: END -->
        </div>
    </div>
    <!-- Columns area: END -->

    <!-- Footer area: START -->
    ';
$oldRestoreIncludeArray_5b773c819df21f5197d681ed6981f5d9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_footer-68c4ee88adf8d1a7df3af8e5073e656d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_footer.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_footer-68c4ee88adf8d1a7df3af8e5073e656d.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_footer.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5b773c819df21f5197d681ed6981f5d9;

$text .= '    <!-- Footer area: END -->

</div>
<!-- Complete page area: END -->

<!-- Footer script area: START -->';
$oldRestoreIncludeArray_8f3d6b0f6f141dbbe0838e85c3a11f0d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_footer_script-8559c37d59bcccd69a81a183f7f0a3af.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_footer_script.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_footer_script-8559c37d59bcccd69a81a183f7f0a3af.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_footer_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_8f3d6b0f6f141dbbe0838e85c3a11f0d;

$text .= '<!-- Footer script area: END -->
';
$cachedText = $text;
$cacheHandler_9d778d2351c6a18059d8ad5a4783db73->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_9d778d2351c6a18059d8ad5a4783db73 );
}

$text .= '

<!--DEBUG_REPORT-->
</body>
</html>
';

$setArray = $oldSetArray_c1fbe9b6019fb769206584de11463b66;
$tpl->Level--;
?>

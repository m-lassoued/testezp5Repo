<?php
// URI:       extension/ezflow/design/standard/templates/parts/zone_block.tpl
// Filename:  extension/ezflow/design/standard/templates/parts/zone_block.tpl
// Timestamp: 1389968184 (Fri Jan 17 15:16:24 CET 2014)
$oldSetArray_e4ab95436bc4d33dba6f22186c7a4bd8 = isset( $setArray ) ? $setArray : array();
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

$oldRestoreIncludeArray_a7f58d1ed624cf04be0f75a5f7dcc574 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/zone_block_top-597f7b9465581a9ccc5da24060adcb96.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block_top.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/zone_block_top-597f7b9465581a9ccc5da24060adcb96.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block_top.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a7f58d1ed624cf04be0f75a5f7dcc574;

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'valid_nodes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = isset( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond3 )
    $if_cond2 = false;
else if ( !$if_cond4 )
    $if_cond2 = false;
else
    $if_cond2 = $if_cond4;
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond5 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond5Data = array( 'value' => $if_cond5 );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ManualAddingOfItems',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond5Data, false, false );
$if_cond5 = $if_cond5Data['value'];
unset( $if_cond5Data );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) == ( 'disabled' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond6 );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond6Data = array( 'value' => $if_cond6 );
$tpl->processOperator( 'ezini_hasvariable',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'FetchClass',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond6Data, false, false );
$if_cond6 = $if_cond6Data['value'];
unset( $if_cond6Data );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond5 = !( $if_cond6 );
unset( $if_cond6 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if ( !$if_cond4 )
    $if_cond3 = false;
else if ( !$if_cond5 )
    $if_cond3 = false;
else
    $if_cond3 = $if_cond5;
unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else if ( $if_cond3 )
    $if_cond = $if_cond3;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div id="address-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'zone_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
$vars[$namespace]['block'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'block', $vars[$namespace] ) ) ? $vars[$namespace]['block'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'type' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["type"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'block', $vars[$namespace] ) ) ? $vars[$namespace]['block'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'view' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["view"] = $dKey;
unset( $dKey );

unset( $attributeAccess );
unset( $attributeAccess );
$attributeAccess = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$attributeAccess1 = compiledFetchAttribute( $attributeAccess, 'view_template' );
unset( $attributeAccess );
$attributeAccess = $attributeAccess1;
if (! isset( $attributeAccess ) ) $attributeAccess = NULL;
while ( is_object( $attributeAccess ) and method_exists( $attributeAccess, 'templateValue' ) )
    $attributeAccess = $attributeAccess->templateValue();

if ( $attributeAccess == 'view' )
{

if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Campaign", $dKeys["type"] ) : $dKeys["type"] == "Campaign" ) and
     isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/campaign-4cd9a0ddf9fd4dbb214e6bed7e26cd9b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/campaign-4cd9a0ddf9fd4dbb214e6bed7e26cd9b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/campaign.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "MainStory", $dKeys["type"] ) : $dKeys["type"] == "MainStory" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "highligted", $dKeys["view"] ) : $dKeys["view"] == "highligted" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/main_story_highlighted-d79f0d60bb849898aea2752e3b907494.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_highlighted.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/main_story_highlighted-d79f0d60bb849898aea2752e3b907494.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_highlighted.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "MainStory", $dKeys["type"] ) : $dKeys["type"] == "MainStory" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/main_story_background_image-e43245965d0cd1f82442cef20addd13b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_background_image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/main_story_background_image-e43245965d0cd1f82442cef20addd13b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/main_story_background_image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_1col_2rows-6617dff8403fcbc234f4756674dce8fa.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_2rows.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_1col_2rows-6617dff8403fcbc234f4756674dce8fa.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "1_column_4_rows", $dKeys["view"] ) : $dKeys["view"] == "1_column_4_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_1col_4rows-9c0b4fa4bfcf4e53f87dd3ca79ff3354.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_4rows.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_1col_4rows-9c0b4fa4bfcf4e53f87dd3ca79ff3354.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_1col_4rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "2_columns_2_rows", $dKeys["view"] ) : $dKeys["view"] == "2_columns_2_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_2cols_2rows-db1c6b977ffd6167a08b1d74fd4116a3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_2cols_2rows-db1c6b977ffd6167a08b1d74fd4116a3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_2cols_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "3_columns_1_row", $dKeys["view"] ) : $dKeys["view"] == "3_columns_1_row" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_3cols_1row-d168ec9297a327ef2e79bbad057aa19c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_1row.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_3cols_1row-d168ec9297a327ef2e79bbad057aa19c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_1row.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "3_columns_2_rows", $dKeys["view"] ) : $dKeys["view"] == "3_columns_2_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_3cols_2rows-e1d7c8f862d6706df79f8e44b84522f4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_2rows.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_3cols_2rows-e1d7c8f862d6706df79f8e44b84522f4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_3cols_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "4_columns_1_row", $dKeys["view"] ) : $dKeys["view"] == "4_columns_1_row" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_4cols_1row-403adcac96c881c81a5c2d6c1faae900.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_1row.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_4cols_1row-403adcac96c881c81a5c2d6c1faae900.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_1row.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ContentGrid", $dKeys["type"] ) : $dKeys["type"] == "ContentGrid" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "4_columns_2_rows", $dKeys["view"] ) : $dKeys["view"] == "4_columns_2_rows" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_grid_4cols_2rows-30c10943ddf221bc1ceb255226cbfafc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_2rows.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_grid_4cols_2rows-30c10943ddf221bc1ceb255226cbfafc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/content_grid_4cols_2rows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Gallery", $dKeys["type"] ) : $dKeys["type"] == "Gallery" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/gallery-ee04090429de4b6a90f715ffb627a5d7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/gallery.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/gallery-ee04090429de4b6a90f715ffb627a5d7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Banner", $dKeys["type"] ) : $dKeys["type"] == "Banner" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner_internal-631aa36dcdf4289a71197bae890ffc03.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_internal.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner_internal-631aa36dcdf4289a71197bae890ffc03.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_internal.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Banner", $dKeys["type"] ) : $dKeys["type"] == "Banner" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "external", $dKeys["view"] ) : $dKeys["view"] == "external" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner_external-28c8b9c6443563b54299d56d1d01ca4c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_external.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner_external-28c8b9c6443563b54299d56d1d01ca4c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_external.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Banner", $dKeys["type"] ) : $dKeys["type"] == "Banner" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "code", $dKeys["view"] ) : $dKeys["view"] == "code" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner_code-a53e04490220f11a31ece26dcf6645d4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_code.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner_code-a53e04490220f11a31ece26dcf6645d4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/banner_code.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Video", $dKeys["type"] ) : $dKeys["type"] == "Video" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/video-404c1634235b29383832e1f1541065b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/video-404c1634235b29383832e1f1541065b7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "TagCloud", $dKeys["type"] ) : $dKeys["type"] == "TagCloud" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/tag_cloud-05c4b909e62e99bfb95c1fece0847621.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/tag_cloud.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/tag_cloud-05c4b909e62e99bfb95c1fece0847621.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/tag_cloud.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "Poll", $dKeys["type"] ) : $dKeys["type"] == "Poll" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/poll-f828b64d3beb074e7998a88c8cb2bf2f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/poll.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/poll-f828b64d3beb074e7998a88c8cb2bf2f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "ItemList", $dKeys["type"] ) : $dKeys["type"] == "ItemList" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/item_list-a578f48465e391b9a46d016e96e001fe.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/item_list-a578f48465e391b9a46d016e96e001fe.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/item_list.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "FeedReader", $dKeys["type"] ) : $dKeys["type"] == "FeedReader" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/feed_reader-754700e512aedac01f3b6ce3f25aaff7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/feed_reader-754700e512aedac01f3b6ce3f25aaff7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/feed_reader.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "FeedbackForm", $dKeys["type"] ) : $dKeys["type"] == "FeedbackForm" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/feedback_form-9b3cf0e0a75a47058ccb73fb1f88d29d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/feedback_form.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/feedback_form-9b3cf0e0a75a47058ccb73fb1f88d29d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["type"] ) and ( is_array( $dKeys["type"] ) ? in_array( "HighlightedItem", $dKeys["type"] ) : $dKeys["type"] == "HighlightedItem" ) and
           isset( $dKeys["view"] ) and ( is_array( $dKeys["view"] ) ? in_array( "default", $dKeys["view"] ) : $dKeys["view"] == "default" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/highlighted_item-b7aadae944dc74b5d989c399855c6875.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/block/highlighted_item.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/highlighted_item-b7aadae944dc74b5d989c399855c6875.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/block/highlighted_item.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/view-89ae2611f777881b9f459a0d69f5952a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/block/view/view.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/view-89ae2611f777881b9f459a0d69f5952a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentAttributeBlockView' : ( $currentNamespace . ':' . 'ContentAttributeBlockView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezflow/design/standard/templates/block/view/view.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentAttributeBlockView";
else
    $namespace .= ':ContentAttributeBlockView';
unset( $vars[$namespace]['block'] );
$text .= '    </div>
    <div class="block-separator"></div>';
}
unset( $if_cond );
// if ends

$oldRestoreIncludeArray_be7f1f8335b25608b043ff17293777dd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/zone_block_bottom-5a8787a8c2487bc1f2dd9f897160f953.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/zone_block_bottom-5a8787a8c2487bc1f2dd9f897160f953.php' );
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
$tpl->processURI( 'extension/ezflow/design/standard/templates/parts/zone_block_bottom.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_be7f1f8335b25608b043ff17293777dd;


$setArray = $oldSetArray_e4ab95436bc4d33dba6f22186c7a4bd8;
$tpl->Level--;
?>

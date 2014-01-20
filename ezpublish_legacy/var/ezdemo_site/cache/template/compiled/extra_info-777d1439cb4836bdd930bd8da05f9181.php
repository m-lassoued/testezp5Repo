<?php
// URI:       design:parts/extra_info.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/parts/extra_info.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_3ee3075f90597381fe01ca1a74260870 = isset( $setArray ) ? $setArray : array();
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

// def $global_layout_object
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => 1,
    'sort_by' => array(),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => 1,
    'depth' => false,
    'depth_operator' => false,
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "global_layout" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'global_layout_object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'global_layout_object' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 111,
    2 => 357,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/extra_info.tpl',
) );
    $tpl->setVariable( 'global_layout_object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'global_layout_object', $var, $rootNamespace );
}

$text .= '
<!-- ZONE CONTENT: START -->
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'global_layout_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['global_layout_object'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<aside>
    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'global_layout_object',
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
          0 => 2,
          1 => 0,
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'page',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 430,
  ),
  1 => 
  array (
    0 => 10,
    1 => 71,
    2 => 497,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/parts/extra_info.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</aside>';
}
unset( $if_cond );
// if ends

$text .= '
<!-- ZONE CONTENT: END -->
';

$setArray = $oldSetArray_3ee3075f90597381fe01ca1a74260870;
$tpl->Level--;
?>

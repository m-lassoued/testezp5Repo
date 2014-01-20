<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_7a820b6b0c09290b9243d0d16de85a3e = isset( $setArray ) ? $setArray : array();
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

if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = array (
  'left_menu' => false,
  'extra_menu' => false,
);
}
$text .= '<section class="content-view-full">
    <div class="class-blog">
        <div class="row">
            <div class="span8">
            ';
// def $page_limit
if ( $tpl->hasVariable( 'page_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'page_limit' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 12,
    2 => 291,
  ),
  1 => 
  array (
    0 => 11,
    1 => 37,
    2 => 413,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl',
) );
    $tpl->setVariable( 'page_limit', 10, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'page_limit', 10, $rootNamespace );
}

// def $blogs_count
if ( $tpl->hasVariable( 'blogs_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'blogs_count' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 12,
    2 => 291,
  ),
  1 => 
  array (
    0 => 11,
    1 => 37,
    2 => 413,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl',
) );
    $tpl->setVariable( 'blogs_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'blogs_count', 0, $rootNamespace );
}

// def $uniq_id
if ( $tpl->hasVariable( 'uniq_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'uniq_id' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 12,
    2 => 291,
  ),
  1 => 
  array (
    0 => 11,
    1 => 37,
    2 => 413,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl',
) );
    $tpl->setVariable( 'uniq_id', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'uniq_id', 0, $rootNamespace );
}

// def $uniq_post
if ( $tpl->hasVariable( 'uniq_post', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'uniq_post' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 12,
    2 => 291,
  ),
  1 => 
  array (
    0 => 11,
    1 => 37,
    2 => 413,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl',
) );
    $tpl->setVariable( 'uniq_post', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'uniq_post', array (
), $rootNamespace );
}

$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'tag' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var3 = compiledFetchAttribute( $var2, 'tag' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = rawurldecode( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'node_id' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchKeywordCount' ),
  array(     'alphabet' => $var1,
    'classid' => "blog_post",
    'owner' => false,
    'parent_node_id' => $var2,
    'include_duplicates' => true,
    'strict_matching' => false,
    'depth' => 1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'blogs_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['blogs_count'] = $var;
    unset( $var );
}
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blogs_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blogs_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <section class="content-view-children">
                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) ) $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = array();
$fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_1[] = compact( 'fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1', 'fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, 'tag' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11 = rawurldecode( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, 'offset' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_15 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14, 'node_id' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_15;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchKeyword' ),
  array(     'alphabet' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11,
    'classid' => "blog_post",
    'offset' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12,
    'limit' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13,
    'owner' => false,
    'sort_by' => array( "attribute",
       false,
       "blog_post/publication_date" ),
    'parent_node_id' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14,
    'include_duplicates' => true,
    'strict_matching' => false,
    'depth' => 1 ) );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1['result'] ) ? $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1['result'] : null;
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_11, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_12, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_13, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_14 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1->templateValue();

$fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = is_array( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) ? array_keys( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) : array();
$fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = count( $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );
$fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = 0;
$fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = 0;
$fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1;
$fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = false;
if ( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 < 0 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 >= $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 )
{
    $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = ( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 < 0 ) ? 0 : $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1;
    if ( $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1'. Array count: $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1");   
}
}
if ( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 < 0 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 + $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 > $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 )
{
    if ( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1");
    $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1;
}
if ( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_1 )
{
    $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 - 1 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1;
    $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1  = 0;
}
else
{
    $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1;
    $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1  = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 - 1;
}
// foreach
for ( $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1; $fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_1 < $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 && ( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ? $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1 >= $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 : $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1 <= $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ); $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ? $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1-- : $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1++ )
{
$fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_1[$fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1];
$fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1[$fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_1];
$vars[$rootNamespace]['blog'] = $fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1;
$text .= '                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$var1 = compiledFetchAttribute( $var, 'link_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'uniq_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['uniq_id'] = $var;
    unset( $var );
}
$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uniq_post', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uniq_post'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uniq_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uniq_id'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
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
$text .= '                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
$var1 = compiledFetchAttribute( $var, 'link_object' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
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
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article-fa654a36189100886db46347984ae7a3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article-fa654a36189100886db46347984ae7a3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/geo_article-c30344a0d4856cb87595a033e044d48d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/geo_article-c30344a0d4856cb87595a033e044d48d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_mainpage-2fb224320d99725021591a0d1978fafc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_mainpage-2fb224320d99725021591a0d1978fafc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_subpage-7c26ea4c94ad3ef9eae232ff174db63f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_subpage-7c26ea4c94ad3ef9eae232ff174db63f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner-a948ea8825dfc9612c374270b104217a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner-a948ea8825dfc9612c374270b104217a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog-0bc7d04f5ce81a800555eb4a368f553c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog-0bc7d04f5ce81a800555eb4a368f553c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog_post-2d87d0ddca3749c0176c7edad55af011.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog_post-2d87d0ddca3749c0176c7edad55af011.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/comment-0f12286b31d3dbd22589a5b3d1410aed.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/comment-0f12286b31d3dbd22589a5b3d1410aed.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "wiki_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "wiki_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/wiki_page-a8989541d322d11b298354157259952c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/wiki_page-a8989541d322d11b298354157259952c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event_calendar-9b61d47ed48f1cac70e87f8b38b2de52.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event_calendar-9b61d47ed48f1cac70e87f8b38b2de52.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event-782770145406dbf49525ce93bf44c0be.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event-782770145406dbf49525ce93bf44c0be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/feedback_form-598a693ec816eef4229af437d56a5528.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/feedback_form-598a693ec816eef4229af437d56a5528.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/file-dd28d1302168cf32257b30a8a6147f30.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/file-dd28d1302168cf32257b30a8a6147f30.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/flash-6cf0ad1adfa471b9355557689512cc35.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/flash-6cf0ad1adfa471b9355557689512cc35.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/folder-24ff9c9716b24a48f99e5937bc54dae2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/folder-24ff9c9716b24a48f99e5937bc54dae2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum-493888422cb2ae14ddc478822b6b6326.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum-493888422cb2ae14ddc478822b6b6326.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_reply-e89d8a3ec0895397a18de8d10b6d0ab5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_reply-e89d8a3ec0895397a18de8d10b6d0ab5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_topic-a76ab4f705931145a3916f7fca796526.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_topic-a76ab4f705931145a3916f7fca796526.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forums-e8313403710dba851edaadf87f7998ec.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forums-e8313403710dba851edaadf87f7998ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/gallery-98c7ea6edaf0ae0fbcca05946d2d4663.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/gallery-98c7ea6edaf0ae0fbcca05946d2d4663.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/image-f8a88ace7aa453fc7ef09144417825c0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/image-f8a88ace7aa453fc7ef09144417825c0.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/infobox-f6869b5fa8305035562aae44c89cede4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/infobox-f6869b5fa8305035562aae44c89cede4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/link-2d6e39680d28aaf6c185eed76790fa58.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/link-2d6e39680d28aaf6c185eed76790fa58.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/multicalendar-bceea5f49324cb56fa85a11066b129c7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/multicalendar-bceea5f49324cb56fa85a11066b129c7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/poll-a9620f2e63031bfd89a0a0c0de35d31c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/poll-a9620f2e63031bfd89a0a0c0de35d31c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/product-a009228b2e83fbf344602c65dd291ff3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/product-a009228b2e83fbf344602c65dd291ff3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/silverlight-b29894231750d7710668fbd4446330ad.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/silverlight-b29894231750d7710668fbd4446330ad.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/quicktime-42412a8a15e4deb8dce70a8f2dd18d42.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/quicktime-42412a8a15e4deb8dce70a8f2dd18d42.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/real_video-10fec36ab20a6a923e0b4bb2029b8bd2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/real_video-10fec36ab20a6a923e0b4bb2029b8bd2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/windows_media-5ebe2b18179f32e82062470bb957421f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/windows_media-5ebe2b18179f32e82062470bb957421f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/video-2ece15fb60511473039dc833364d7f76.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/video-2ece15fb60511473039dc833364d7f76.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/line-d09306ebf7875b9e91b93adca11624c9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/line-d09306ebf7875b9e91b93adca11624c9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uniq_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uniq_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uniq_post', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uniq_post'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'uniq_post', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['uniq_post'] = $var;
    unset( $var );
}
$text .= '                        ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) ) extract( array_pop( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_1 ) );

else
{

unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

unset( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_1 );

}

// foreach ends
$text .= '                </section>
                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
else
{
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'month' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'year' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                    ';
// def $start_date
unset( $var );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var5 = compiledFetchAttribute( $var4, 'month' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var8 = compiledFetchAttribute( $var7, 'day' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = ( ( $var7 ) != ( '' ) );
unset( $var7 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
if ( $var6 )
{
    unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var8 = compiledFetchAttribute( $var7, "day" );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();

    $var5 = $var7;
}
else
{
    
    $var5 = '01';
}
unset( $var6, $var7 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var7 = compiledFetchAttribute( $var6, 'year' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var = mktime( 0, 0, 0, $var4, $var5, $var6 );
unset( $var4, $var5, $var6 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'start_date', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'start_date' is already defined.", array (
  0 => 
  array (
    0 => 35,
    1 => 20,
    2 => 2013,
  ),
  1 => 
  array (
    0 => 36,
    1 => 258,
    2 => 2421,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl',
) );
    $tpl->setVariable( 'start_date', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'start_date', $var, $rootNamespace );
}

// def $end_date
unset( $var );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var5 = compiledFetchAttribute( $var4, 'month' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var6 );
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var8 = compiledFetchAttribute( $var7, 'day' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = ( ( $var7 ) != ( '' ) );
unset( $var7 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
if ( $var6 )
{
    unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var8 = compiledFetchAttribute( $var7, "day" );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();

    $var5 = $var7;
}
else
{
    unset( $var8 );
$locale = eZLocale::instance();
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var11 = compiledFetchAttribute( $var10, "month" );
unset( $var10 );
$var10 = $var11;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
unset( $var12 );
unset( $var12 );
$var12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var13 = compiledFetchAttribute( $var12, "year" );
unset( $var12 );
$var12 = $var13;
if (! isset( $var12 ) ) $var12 = NULL;
while ( is_object( $var12 ) and method_exists( $var12, 'templateValue' ) )
    $var12 = $var12->templateValue();
while ( is_object( $var12 ) and method_exists( $var12, 'templateValue' ) )
    $var12 = $var12->templateValue();
$var9 = mktime( 0, 0, 0, $var10, "01", $var12 );
unset( $var10, $var12 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = $locale->formatDateTimeType( "%t", $var9 );
unset( $var9 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();

    $var5 = $var8;
}
unset( $var6, $var7, $var8 );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var7 = compiledFetchAttribute( $var6, 'year' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var = mktime( 23, 59, 59, $var4, $var5, $var6 );
unset( $var4, $var5, $var6 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'end_date', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'end_date' is already defined.", array (
  0 => 
  array (
    0 => 35,
    1 => 20,
    2 => 2013,
  ),
  1 => 
  array (
    0 => 36,
    1 => 258,
    2 => 2421,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/blog.tpl',
) );
    $tpl->setVariable( 'end_date', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'end_date', $var, $rootNamespace );
}

$text .= '
                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'start_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['start_date'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( "blog_post/publication_date", ">=", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'end_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['end_date'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = array( "blog_post/publication_date", "<=", $var5 );unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( "and", $var3, $var4 );unset( $var3, $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array(     'parent_node_id' => $var1,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'attribute_filter' => $var2,
    'depth' => 1,
    'depth_operator' => "le",
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'blogs_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['blogs_count'] = $var;
    unset( $var );
}
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blogs_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blogs_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <section class="content-view-children">
                        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) ) $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = array();
$fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_2[] = compact( 'fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2', 'fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21, 'node_id' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22, 'offset' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'start_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['start_date'] : null;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25 = array( "blog_post/publication_date", ">=", $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'end_date', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['end_date'] : null;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = array( "blog_post/publication_date", "<=", $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 );unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_27 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 = array( "and", $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_25, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_26 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21,
    'sort_by' => array( "attribute",
       false,
       "blog_post/publication_date" ),
    'only_translated' => false,
    'language' => false,
    'offset' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22,
    'limit' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2['result'] ) ? $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2['result'] : null;
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_21, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_22, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_23, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_24 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2->templateValue();

$fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = is_array( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) ? array_keys( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) : array();
$fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = count( $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );
$fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = 0;
$fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = 0;
$fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2;
$fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = false;
if ( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 < 0 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 >= $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 )
{
    $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = ( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 < 0 ) ? 0 : $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2;
    if ( $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2'. Array count: $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2");   
}
}
if ( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 < 0 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 + $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 > $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 )
{
    if ( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2");
    $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2;
}
if ( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_2 )
{
    $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 - 1 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2;
    $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2  = 0;
}
else
{
    $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2;
    $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2  = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 - 1;
}
// foreach
for ( $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2; $fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_2 < $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 && ( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ? $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2 >= $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 : $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2 <= $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ); $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ? $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2-- : $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2++ )
{
$fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_2[$fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2];
$fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2[$fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_2];
$vars[$rootNamespace]['blog'] = $fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2;
$text .= '                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
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
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article-fa654a36189100886db46347984ae7a3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article-fa654a36189100886db46347984ae7a3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/geo_article-c30344a0d4856cb87595a033e044d48d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/geo_article-c30344a0d4856cb87595a033e044d48d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_mainpage-2fb224320d99725021591a0d1978fafc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_mainpage-2fb224320d99725021591a0d1978fafc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_subpage-7c26ea4c94ad3ef9eae232ff174db63f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_subpage-7c26ea4c94ad3ef9eae232ff174db63f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner-a948ea8825dfc9612c374270b104217a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner-a948ea8825dfc9612c374270b104217a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog-0bc7d04f5ce81a800555eb4a368f553c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog-0bc7d04f5ce81a800555eb4a368f553c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog_post-2d87d0ddca3749c0176c7edad55af011.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog_post-2d87d0ddca3749c0176c7edad55af011.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/comment-0f12286b31d3dbd22589a5b3d1410aed.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/comment-0f12286b31d3dbd22589a5b3d1410aed.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "wiki_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "wiki_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/wiki_page-a8989541d322d11b298354157259952c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/wiki_page-a8989541d322d11b298354157259952c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event_calendar-9b61d47ed48f1cac70e87f8b38b2de52.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event_calendar-9b61d47ed48f1cac70e87f8b38b2de52.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event-782770145406dbf49525ce93bf44c0be.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event-782770145406dbf49525ce93bf44c0be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/feedback_form-598a693ec816eef4229af437d56a5528.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/feedback_form-598a693ec816eef4229af437d56a5528.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/file-dd28d1302168cf32257b30a8a6147f30.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/file-dd28d1302168cf32257b30a8a6147f30.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/flash-6cf0ad1adfa471b9355557689512cc35.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/flash-6cf0ad1adfa471b9355557689512cc35.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/folder-24ff9c9716b24a48f99e5937bc54dae2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/folder-24ff9c9716b24a48f99e5937bc54dae2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum-493888422cb2ae14ddc478822b6b6326.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum-493888422cb2ae14ddc478822b6b6326.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_reply-e89d8a3ec0895397a18de8d10b6d0ab5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_reply-e89d8a3ec0895397a18de8d10b6d0ab5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_topic-a76ab4f705931145a3916f7fca796526.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_topic-a76ab4f705931145a3916f7fca796526.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forums-e8313403710dba851edaadf87f7998ec.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forums-e8313403710dba851edaadf87f7998ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/gallery-98c7ea6edaf0ae0fbcca05946d2d4663.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/gallery-98c7ea6edaf0ae0fbcca05946d2d4663.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/image-f8a88ace7aa453fc7ef09144417825c0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/image-f8a88ace7aa453fc7ef09144417825c0.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/infobox-f6869b5fa8305035562aae44c89cede4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/infobox-f6869b5fa8305035562aae44c89cede4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/link-2d6e39680d28aaf6c185eed76790fa58.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/link-2d6e39680d28aaf6c185eed76790fa58.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/multicalendar-bceea5f49324cb56fa85a11066b129c7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/multicalendar-bceea5f49324cb56fa85a11066b129c7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/poll-a9620f2e63031bfd89a0a0c0de35d31c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/poll-a9620f2e63031bfd89a0a0c0de35d31c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/product-a009228b2e83fbf344602c65dd291ff3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/product-a009228b2e83fbf344602c65dd291ff3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/silverlight-b29894231750d7710668fbd4446330ad.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/silverlight-b29894231750d7710668fbd4446330ad.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/quicktime-42412a8a15e4deb8dce70a8f2dd18d42.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/quicktime-42412a8a15e4deb8dce70a8f2dd18d42.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/real_video-10fec36ab20a6a923e0b4bb2029b8bd2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/real_video-10fec36ab20a6a923e0b4bb2029b8bd2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/windows_media-5ebe2b18179f32e82062470bb957421f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/windows_media-5ebe2b18179f32e82062470bb957421f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/video-2ece15fb60511473039dc833364d7f76.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/video-2ece15fb60511473039dc833364d7f76.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/line-d09306ebf7875b9e91b93adca11624c9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/line-d09306ebf7875b9e91b93adca11624c9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                        ';
$fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) ) extract( array_pop( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_2 ) );

else
{

unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

unset( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_2 );

}

// foreach ends
$text .= '                    </section>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                ';
}
else
{
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array(     'parent_node_id' => $var1,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'attribute_filter' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'blogs_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['blogs_count'] = $var;
    unset( $var );
}
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blogs_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blogs_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <section class="content-view-children">
                        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) ) $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = array();
$fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_3[] = compact( 'fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3', 'fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31, 'node_id' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 = compiledFetchAttribute( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32, 'offset' );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32->templateValue();
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 );
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33->templateValue();
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33->templateValue();
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31,
    'sort_by' => array( "attribute",
       false,
       "blog_post/publication_date" ),
    'only_translated' => false,
    'language' => false,
    'offset' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32,
    'limit' => $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3['result'] ) ? $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3['result'] : null;
unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_31, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_32, $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_33 );
if (! isset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) ) $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = NULL;
while ( is_object( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) and method_exists( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3, 'templateValue' ) )
    $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3->templateValue();

$fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = is_array( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) ? array_keys( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) : array();
$fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = count( $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );
$fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = 0;
$fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = 0;
$fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3;
$fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = false;
if ( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 < 0 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 >= $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 )
{
    $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = ( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 < 0 ) ? 0 : $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3;
    if ( $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3'. Array count: $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3");   
}
}
if ( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 < 0 || $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 + $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 > $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 )
{
    if ( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3");
    $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3;
}
if ( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_3 )
{
    $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 - 1 - $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3;
    $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3  = 0;
}
else
{
    $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3;
    $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3  = $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 - 1;
}
// foreach
for ( $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3; $fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_3 < $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 && ( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ? $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3 >= $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 : $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3 <= $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ); $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ? $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3-- : $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3++ )
{
$fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_3[$fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3];
$fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 = $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3[$fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_3];
$vars[$rootNamespace]['blog'] = $fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3;
$text .= '                            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blog', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blog'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
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
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article-fa654a36189100886db46347984ae7a3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article-fa654a36189100886db46347984ae7a3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/geo_article-c30344a0d4856cb87595a033e044d48d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/geo_article-c30344a0d4856cb87595a033e044d48d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_mainpage-2fb224320d99725021591a0d1978fafc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_mainpage-2fb224320d99725021591a0d1978fafc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/article_subpage-7c26ea4c94ad3ef9eae232ff174db63f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/article_subpage-7c26ea4c94ad3ef9eae232ff174db63f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/banner-a948ea8825dfc9612c374270b104217a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/banner-a948ea8825dfc9612c374270b104217a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog-0bc7d04f5ce81a800555eb4a368f553c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog-0bc7d04f5ce81a800555eb4a368f553c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/blog_post-2d87d0ddca3749c0176c7edad55af011.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/blog_post-2d87d0ddca3749c0176c7edad55af011.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/comment-0f12286b31d3dbd22589a5b3d1410aed.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/comment-0f12286b31d3dbd22589a5b3d1410aed.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "wiki_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "wiki_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/wiki_page-a8989541d322d11b298354157259952c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/wiki_page-a8989541d322d11b298354157259952c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/wiki_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event_calendar-9b61d47ed48f1cac70e87f8b38b2de52.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event_calendar-9b61d47ed48f1cac70e87f8b38b2de52.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/event-782770145406dbf49525ce93bf44c0be.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/event-782770145406dbf49525ce93bf44c0be.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/feedback_form-598a693ec816eef4229af437d56a5528.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/feedback_form-598a693ec816eef4229af437d56a5528.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/file-dd28d1302168cf32257b30a8a6147f30.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/file-dd28d1302168cf32257b30a8a6147f30.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/flash-6cf0ad1adfa471b9355557689512cc35.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/flash-6cf0ad1adfa471b9355557689512cc35.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/folder-24ff9c9716b24a48f99e5937bc54dae2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/folder-24ff9c9716b24a48f99e5937bc54dae2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum-493888422cb2ae14ddc478822b6b6326.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum-493888422cb2ae14ddc478822b6b6326.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_reply-e89d8a3ec0895397a18de8d10b6d0ab5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_reply-e89d8a3ec0895397a18de8d10b6d0ab5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forum_topic-a76ab4f705931145a3916f7fca796526.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forum_topic-a76ab4f705931145a3916f7fca796526.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/forums-e8313403710dba851edaadf87f7998ec.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/forums-e8313403710dba851edaadf87f7998ec.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/gallery-98c7ea6edaf0ae0fbcca05946d2d4663.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/gallery-98c7ea6edaf0ae0fbcca05946d2d4663.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/image-f8a88ace7aa453fc7ef09144417825c0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/image-f8a88ace7aa453fc7ef09144417825c0.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/infobox-f6869b5fa8305035562aae44c89cede4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/infobox-f6869b5fa8305035562aae44c89cede4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/link-2d6e39680d28aaf6c185eed76790fa58.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/link-2d6e39680d28aaf6c185eed76790fa58.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/multicalendar-bceea5f49324cb56fa85a11066b129c7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/multicalendar-bceea5f49324cb56fa85a11066b129c7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/poll-a9620f2e63031bfd89a0a0c0de35d31c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/poll-a9620f2e63031bfd89a0a0c0de35d31c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/product-a009228b2e83fbf344602c65dd291ff3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/product-a009228b2e83fbf344602c65dd291ff3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/silverlight-b29894231750d7710668fbd4446330ad.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/silverlight-b29894231750d7710668fbd4446330ad.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/quicktime-42412a8a15e4deb8dce70a8f2dd18d42.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/quicktime-42412a8a15e4deb8dce70a8f2dd18d42.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/real_video-10fec36ab20a6a923e0b4bb2029b8bd2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/real_video-10fec36ab20a6a923e0b4bb2029b8bd2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/windows_media-5ebe2b18179f32e82062470bb957421f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/windows_media-5ebe2b18179f32e82062470bb957421f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/video-2ece15fb60511473039dc833364d7f76.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/video-2ece15fb60511473039dc833364d7f76.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/override/templates/line/video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/line-d09306ebf7875b9e91b93adca11624c9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/line-d09306ebf7875b9e91b93adca11624c9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                        ';
$fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) ) extract( array_pop( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_3 ) );

else
{

unset( $fe_array_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_array_keys_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_n_items_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_n_items_processed_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_i_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_key_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_offset_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_max_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_reverse_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_first_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_last_val_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

unset( $fe_variable_stack_e25842a40ef1533fcd6d1dc1bf05c6f6_3 );

}

// foreach ends
$text .= '                    </section>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '
            ';
$oldRestoreIncludeArray_355a154f3fec7a1c31a4ab80ace56794 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blogs_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blogs_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_count'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $namespace, 'view_parameters', $vars[$namespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['view_parameters'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_limit'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/google-aa64db153b23cca4720a80e62bbb073c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/navigator/google.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/google-aa64db153b23cca4720a80e62bbb073c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_355a154f3fec7a1c31a4ab80ace56794;

$text .= '            </div>
            <div class="span4">
                <aside>
                    <section class="content-view-aside">
                        ';
$oldRestoreIncludeArray_c655005c2ee2d5ec96a75b5e3a02154e = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['used_node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'used_node', $vars[$currentNamespace]['used_node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['used_node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'used_node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['used_node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/extra_info-f65ce4c8cd33fd96ca5f5714fb09bfae.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/parts/blog/extra_info.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/extra_info-f65ce4c8cd33fd96ca5f5714fb09bfae.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/parts/blog/extra_info.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_c655005c2ee2d5ec96a75b5e3a02154e;

$text .= '                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
';

$setArray = $oldSetArray_7a820b6b0c09290b9243d0d16de85a3e;
$tpl->Level--;
?>

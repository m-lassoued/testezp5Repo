<?php
// URI:       design/admin/templates/content/edit_attribute.tpl
// Filename:  design/admin/templates/content/edit_attribute.tpl
// Timestamp: 1385723970 (Fri Nov 29 12:19:30 CET 2013)
$oldSetArray_402cdda56d3185ad3d206668ea8195d3 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['view_parameters'] ) )
{
    $vars[$currentNamespace]['view_parameters'] = array (
);
    $setArray[$currentNamespace]['view_parameters'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_categorys'] ) )
{
    $vars[$currentNamespace]['attribute_categorys'] = array (
  'content' => 'Content',
  'meta' => 'Meta',
);
    $setArray[$currentNamespace]['attribute_categorys'] = true;
}

if ( !isset( $vars[$currentNamespace]['attribute_default_category'] ) )
{
    $vars[$currentNamespace]['attribute_default_category'] = 'content';
    $setArray[$currentNamespace]['attribute_default_category'] = true;
}

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_2 ) ) $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_2 = array();
$fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_2[] = compact( 'fe_array_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_i_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_key_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_val_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_offset_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_max_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_reverse_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_first_val_82af2a836ced2fc0a2145a2b253621e5_2', 'fe_last_val_82af2a836ced2fc0a2145a2b253621e5_2' );
unset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 );
unset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 );
$fe_array_82af2a836ced2fc0a2145a2b253621e5_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes_grouped_data_map', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes_grouped_data_map'] : null;
if (! isset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 ) ) $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 = NULL;
while ( is_object( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 ) and method_exists( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2, 'templateValue' ) )
    $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_array_82af2a836ced2fc0a2145a2b253621e5_2->templateValue();

$fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_2 = is_array( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 ) ? array_keys( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 ) : array();
$fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 = count( $fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_2 );
$fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_2 = 0;
$fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 = 0;
$fe_max_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 - $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2;
$fe_reverse_82af2a836ced2fc0a2145a2b253621e5_2 = false;
if ( $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 < 0 || $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 >= $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 )
{
    $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 = ( $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 < 0 ) ? 0 : $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2;
    if ( $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 || $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_82af2a836ced2fc0a2145a2b253621e5_2'. Array count: $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2");   
}
}
if ( $fe_max_82af2a836ced2fc0a2145a2b253621e5_2 < 0 || $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 + $fe_max_82af2a836ced2fc0a2145a2b253621e5_2 > $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 )
{
    if ( $fe_max_82af2a836ced2fc0a2145a2b253621e5_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_82af2a836ced2fc0a2145a2b253621e5_2");
    $fe_max_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 - $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2;
}
if ( $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_2 )
{
    $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 - 1 - $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2;
    $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_2  = 0;
}
else
{
    $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2;
    $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_2  = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 - 1;
}
// foreach
for ( $fe_i_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_2; $fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_2 < $fe_max_82af2a836ced2fc0a2145a2b253621e5_2 && ( $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_2 ? $fe_i_82af2a836ced2fc0a2145a2b253621e5_2 >= $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_2 : $fe_i_82af2a836ced2fc0a2145a2b253621e5_2 <= $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_2 ); $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_2 ? $fe_i_82af2a836ced2fc0a2145a2b253621e5_2-- : $fe_i_82af2a836ced2fc0a2145a2b253621e5_2++ )
{
$fe_key_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_2[$fe_i_82af2a836ced2fc0a2145a2b253621e5_2];
$fe_val_82af2a836ced2fc0a2145a2b253621e5_2 = $fe_array_82af2a836ced2fc0a2145a2b253621e5_2[$fe_key_82af2a836ced2fc0a2145a2b253621e5_2];
$vars[$rootNamespace]['content_attributes_grouped'] = $fe_val_82af2a836ced2fc0a2145a2b253621e5_2;
$vars[$rootNamespace]['attribute_group'] = $fe_key_82af2a836ced2fc0a2145a2b253621e5_2;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_group'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_default_category', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_default_category'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) != ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <fieldset class="ezcca-collapsible ezcca-attributes-group-';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_group'] : null;
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

$text .= '">
    <legend><a href="JavaScript:void(0);">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_categorys', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_categorys'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_group'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></legend>
    <div class="ezcca-collapsible-fieldset-content">';
}
unset( $if_cond );
// if ends

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_1 ) ) $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_1 = array();
$fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_1[] = compact( 'fe_array_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_i_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_key_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_val_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_offset_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_max_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_reverse_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_first_val_82af2a836ced2fc0a2145a2b253621e5_1', 'fe_last_val_82af2a836ced2fc0a2145a2b253621e5_1' );
unset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 );
unset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 );
$fe_array_82af2a836ced2fc0a2145a2b253621e5_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_attributes_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_attributes_grouped'] : null;
if (! isset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 ) ) $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 = NULL;
while ( is_object( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 ) and method_exists( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1, 'templateValue' ) )
    $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_array_82af2a836ced2fc0a2145a2b253621e5_1->templateValue();

$fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_1 = is_array( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 ) ? array_keys( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 ) : array();
$fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 = count( $fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_1 );
$fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_1 = 0;
$fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 = 0;
$fe_max_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 - $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1;
$fe_reverse_82af2a836ced2fc0a2145a2b253621e5_1 = false;
if ( $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 < 0 || $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 >= $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 )
{
    $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 = ( $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 < 0 ) ? 0 : $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1;
    if ( $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 || $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_82af2a836ced2fc0a2145a2b253621e5_1'. Array count: $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1");   
}
}
if ( $fe_max_82af2a836ced2fc0a2145a2b253621e5_1 < 0 || $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 + $fe_max_82af2a836ced2fc0a2145a2b253621e5_1 > $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 )
{
    if ( $fe_max_82af2a836ced2fc0a2145a2b253621e5_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_82af2a836ced2fc0a2145a2b253621e5_1");
    $fe_max_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 - $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1;
}
if ( $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_1 )
{
    $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 - 1 - $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1;
    $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_1  = 0;
}
else
{
    $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1;
    $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_1  = $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 - 1;
}
// foreach
for ( $fe_i_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_1; $fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_1 < $fe_max_82af2a836ced2fc0a2145a2b253621e5_1 && ( $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_1 ? $fe_i_82af2a836ced2fc0a2145a2b253621e5_1 >= $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_1 : $fe_i_82af2a836ced2fc0a2145a2b253621e5_1 <= $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_1 ); $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_1 ? $fe_i_82af2a836ced2fc0a2145a2b253621e5_1-- : $fe_i_82af2a836ced2fc0a2145a2b253621e5_1++ )
{
$fe_key_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_1[$fe_i_82af2a836ced2fc0a2145a2b253621e5_1];
$fe_val_82af2a836ced2fc0a2145a2b253621e5_1 = $fe_array_82af2a836ced2fc0a2145a2b253621e5_1[$fe_key_82af2a836ced2fc0a2145a2b253621e5_1];
$vars[$rootNamespace]['attribute'] = $fe_val_82af2a836ced2fc0a2145a2b253621e5_1;
$vars[$rootNamespace]['attribute_identifier'] = $fe_key_82af2a836ced2fc0a2145a2b253621e5_1;
// def $contentclass_attribute
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'contentclass_attribute' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'contentclass_attribute', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'contentclass_attribute' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 0,
    2 => 735,
  ),
  1 => 
  array (
    0 => 12,
    1 => 63,
    2 => 798,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
) );
    $tpl->setVariable( 'contentclass_attribute', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'contentclass_attribute', $var, $rootNamespace );
}

$text .= '<div class="block ezcca-edit-datatype-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_type_string' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ezcca-edit-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_identifier', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_identifier'] : null;
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
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_translate' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'initial_language_code' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'language_code' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( $if_cond4 ) );
unset( $if_cond3, $if_cond4 );
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
$text .= '    <label>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_translate' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= ' <span class="nontranslatable">(not translatable)</span>';
}
unset( $if_cond );
// if ends

$text .= ':
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '    </label>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="original">
        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 22,
    1 => 8,
    2 => 1648,
  ),
  1 => 
  array (
    0 => 22,
    1 => 111,
    2 => 1751,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        </div>
    ';
}
else
{
$text .= '        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 26,
    1 => 8,
    2 => 1879,
  ),
  1 => 
  array (
    0 => 26,
    1 => 111,
    2 => 1982,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
    ';
}
unset( $if_cond );
// if ends

}
else
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <label';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_validation_error' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="message-error"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="required">(required)</span>';
}
unset( $if_cond );
// if ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="collector">(information collector)</span>';
}
unset( $if_cond );
// if ends

$text .= ':
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '        </label>
        <div class="original">
        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'from_content_attributes_grouped_data_map',
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
          0 => 4,
          1 => 
          array (
            0 => '',
            1 => 2,
            2 => 'attribute_group',
          ),
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
          0 => 4,
          1 => 
          array (
            0 => '',
            1 => 2,
            2 => 'attribute_identifier',
          ),
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 37,
    1 => 8,
    2 => 2883,
  ),
  1 => 
  array (
    0 => 37,
    1 => 183,
    2 => 3058,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        </div>
        <div class="translation">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'display_info' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'edit' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'grouped_input' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <fieldset>
            ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 42,
    1 => 12,
    2 => 3201,
  ),
  1 => 
  array (
    0 => 42,
    1 => 115,
    2 => 3304,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            </fieldset>
        ';
}
else
{
$text .= '            ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 46,
    1 => 12,
    2 => 3453,
  ),
  1 => 
  array (
    0 => 46,
    1 => 115,
    2 => 3556,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        ';
}
unset( $if_cond );
// if ends

$text .= '        </div>
    ';
}
else
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'display_info' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'edit' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'grouped_input' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <fieldset>
            <legend';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_validation_error' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="message-error"';
}
unset( $if_cond );
// if ends

$text .= '><span class="long-legend-wrap">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="required">(required)</span>';
}
unset( $if_cond );
// if ends

$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="collector">(information collector)</span>';
}
unset( $if_cond );
// if ends

$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '                </span>
            </legend>
            ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 59,
    1 => 12,
    2 => 4579,
  ),
  1 => 
  array (
    0 => 59,
    1 => 115,
    2 => 4682,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            </fieldset>
        ';
}
else
{
$text .= '            <label';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_validation_error' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="message-error"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "nameList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "name" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_required' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="required">(required)</span>';
}
unset( $if_cond );
// if ends

$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_information_collector' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="collector">(information collector)</span>';
}
unset( $if_cond );
// if ends

$text .= ':
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentclass_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentclass_attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' <span class="classattribute-description">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "contentclass_attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["contentclass_attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>';
}
unset( $if_cond );
// if ends

$text .= '            </label>
            ';
$textElements = array();
$tpl->processFunction( 'attribute_edit_gui', $textElements,
                       false,
                       array (
  'attribute_base' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute_base',
      ),
      2 => false,
    ),
  ),
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
      ),
      2 => false,
    ),
  ),
  'view_parameters' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'view_parameters',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 68,
    1 => 12,
    2 => 5569,
  ),
  1 => 
  array (
    0 => 68,
    1 => 115,
    2 => 5672,
  ),
  2 => 'design/admin/templates/content/edit_attribute.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            <input type="hidden" name="ContentObjectAttribute_id[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '</div>';
// undef $contentclass_attribute
$tpl->unsetLocalVariable( 'contentclass_attribute', $rootNamespace );

$fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_1 ) ) extract( array_pop( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_1 ) );

else
{

unset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_i_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_key_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_val_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_offset_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_max_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_1 );

unset( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_1 );

}

// foreach ends
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_group'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_default_category', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_default_category'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) != ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    </div>
    </fieldset>';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_2 ) ) extract( array_pop( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_2 ) );

else
{

unset( $fe_array_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_array_keys_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_n_items_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_n_items_processed_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_i_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_key_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_val_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_offset_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_max_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_reverse_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_first_val_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_last_val_82af2a836ced2fc0a2145a2b253621e5_2 );

unset( $fe_variable_stack_82af2a836ced2fc0a2145a2b253621e5_2 );

}

// foreach ends
if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["a2e7426e56c28654cefc7388948de86c"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["a2e7426e56c28654cefc7388948de86c"] = array( array( 81,
              0,
              5950 ),
       array( 81,
              8,
              5958 ),
       "design/admin/templates/content/edit_attribute.tpl" );
$text .= '
<script type="text/javascript">


jQuery(function( $ )
{
    $(\'fieldset.ezcca-collapsible legend a\').click( function()
    {
        var container = $( this.parentNode.parentNode ), inner = container.find(\'div.ezcca-collapsible-fieldset-content\');
        if ( container.hasClass(\'ezcca-collapsed\') )
        {
            container.removeClass(\'ezcca-collapsed\');
            inner.slideDown( 150 );
        }
        else
        {
            inner.slideUp( 150, function(){
                $( this.parentNode ).addClass(\'ezcca-collapsed\');
            });
        }
    });
    // Collapse by default, unless the group has at least one attribute with label.message-error
    $(\'fieldset.ezcca-collapsible\').each( function(){
        if ( $(this).find(\'label.message-error\').length == 0 )
        {
            $(this).addClass(\'ezcca-collapsed\').find(\'div.ezcca-collapsible-fieldset-content\').hide();
        }
    } );
});


</script>
';
}
if ( isset( $setArray[$currentNamespace]['view_parameters'] ) )
{
unset( $vars[$currentNamespace]['view_parameters'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_categorys'] ) )
{
unset( $vars[$currentNamespace]['attribute_categorys'] );
}

if ( isset( $setArray[$currentNamespace]['attribute_default_category'] ) )
{
unset( $vars[$currentNamespace]['attribute_default_category'] );
}


$setArray = $oldSetArray_402cdda56d3185ad3d206668ea8195d3;
$tpl->Level--;
?>

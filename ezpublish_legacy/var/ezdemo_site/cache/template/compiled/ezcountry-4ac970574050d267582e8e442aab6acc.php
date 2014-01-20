<?php
// URI:       design:content/datatype/collect/ezcountry.tpl
// Filename:  design/standard/templates/content/datatype/collect/ezcountry.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_0b33e9cfefe01b043a31ebcb4fc23d19 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['attribute_base'] ) )
{
    $vars[$currentNamespace]['attribute_base'] = 'ContentObjectAttribute';
    $setArray[$currentNamespace]['attribute_base'] = true;
}

unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchCountryList' ),
  array(     'filter' => null,
    'value' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['countries'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'class_content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['class_content'] = $var;
unset( $var );
// def $country
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( '', $vars ) and array_key_exists( 'collection_attributes', $vars[''] ) ) ? $vars['']['collection_attributes'] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var5 = compiledFetchAttribute( $var4, 'id' );
unset( $var4 );
$var4 = $var5;
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
$var1 = isset( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( '', $vars ) and array_key_exists( "collection_attributes", $vars[''] ) ) ? $vars['']["collection_attributes"] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
$var5 = compiledFetchAttribute( $var4, "id" );
unset( $var4 );
$var4 = $var5;
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

    $var = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "attribute", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["attribute"] : null;
$var4 = compiledFetchAttribute( $var3, "content" );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, "value" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var = $var3;
}
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'country', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'country' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 208,
  ),
  1 => 
  array (
    0 => 6,
    1 => 137,
    2 => 345,
  ),
  2 => 'design/standard/templates/content/datatype/collect/ezcountry.tpl',
) );
    $tpl->setVariable( 'country', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'country', $var, $rootNamespace );
}

$text .= '<select name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_base', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_base'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_country_';
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

$text .= '[]" ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_content'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'multiple_choice' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'multiple="multiple"';
}
unset( $if_cond );
// if ends

$text .= '>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_content'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'multiple_choice' );
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
$text .= '        <option  value="">Not specified</option>
    ';
}
unset( $if_cond );
// if ends

// def $alpha_2
if ( $tpl->hasVariable( 'alpha_2', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'alpha_2' is already defined.", array (
  0 => 
  array (
    0 => 11,
    1 => 0,
    2 => 618,
  ),
  1 => 
  array (
    0 => 11,
    1 => 17,
    2 => 635,
  ),
  2 => 'design/standard/templates/content/datatype/collect/ezcountry.tpl',
) );
    $tpl->setVariable( 'alpha_2', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'alpha_2', '', $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) ) $fe_variable_stack_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = array();
$fe_variable_stack_a1d8247b871e1e25a23e70f8cf3bcdf7_1[] = compact( 'fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_array_keys_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_n_items_processed_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_key_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_reverse_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_first_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1', 'fe_last_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1' );
unset( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );
unset( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );
$fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'countries', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['countries'] : null;
if (! isset( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) ) $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = NULL;
while ( is_object( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) and method_exists( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1, 'templateValue' ) )
    $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1->templateValue();

$fe_array_keys_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = is_array( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) ? array_keys( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) : array();
$fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = count( $fe_array_keys_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );
$fe_n_items_processed_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = 0;
$fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = 0;
$fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 - $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
$fe_reverse_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = false;
if ( $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 < 0 || $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 >= $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 )
{
    $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = ( $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 < 0 ) ? 0 : $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
    if ( $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 || $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1'. Array count: $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1");   
}
}
if ( $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 < 0 || $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 + $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 > $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 )
{
    if ( $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1");
    $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 - $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
}
if ( $fe_reverse_a1d8247b871e1e25a23e70f8cf3bcdf7_1 )
{
    $fe_first_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 - 1 - $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
    $fe_last_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1  = 0;
}
else
{
    $fe_first_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
    $fe_last_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1  = $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 - 1;
}
// foreach
for ( $fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_first_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1; $fe_n_items_processed_a1d8247b871e1e25a23e70f8cf3bcdf7_1 < $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 && ( $fe_reverse_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ? $fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1 >= $fe_last_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 : $fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1 <= $fe_last_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ); $fe_reverse_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ? $fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1-- : $fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1++ )
{
$fe_key_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_array_keys_a1d8247b871e1e25a23e70f8cf3bcdf7_1[$fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1];
$fe_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 = $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1[$fe_key_a1d8247b871e1e25a23e70f8cf3bcdf7_1];
$vars[$rootNamespace]['current_country'] = $fe_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
$vars[$rootNamespace]['key'] = $fe_key_a1d8247b871e1e25a23e70f8cf3bcdf7_1;
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_country'] : null;
$var1 = compiledFetchAttribute( $var, 'Alpha2' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'alpha_2', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['alpha_2'] = $var;
    unset( $var );
}
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( '' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = is_array( $if_cond2 );unset( $if_cond2 );
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
$text .= '            
            <option ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_country'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'name' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= ' value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alpha_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alpha_2'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_country'] : null;
$var1 = compiledFetchAttribute( $var, 'Name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
        ';
}
else
{
$text .= '            <option ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alpha_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alpha_2'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= ' value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alpha_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alpha_2'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_country'] : null;
$var1 = compiledFetchAttribute( $var, 'Name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
else
{
$text .= '            <option ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_content'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'default_countries' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alpha_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alpha_2'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= ' value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'alpha_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['alpha_2'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_country'] : null;
$var1 = compiledFetchAttribute( $var, 'Name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_a1d8247b871e1e25a23e70f8cf3bcdf7_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) ) extract( array_pop( $fe_variable_stack_a1d8247b871e1e25a23e70f8cf3bcdf7_1 ) );

else
{

unset( $fe_array_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_array_keys_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_n_items_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_n_items_processed_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_i_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_key_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_offset_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_max_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_reverse_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_first_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_last_val_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

unset( $fe_variable_stack_a1d8247b871e1e25a23e70f8cf3bcdf7_1 );

}

// foreach ends
$text .= '</select>
';
unset( $vars[$currentNamespace]['countries'] );
unset( $vars[$currentNamespace]['class_content'] );
if ( isset( $setArray[$currentNamespace]['attribute_base'] ) )
{
unset( $vars[$currentNamespace]['attribute_base'] );
}


$setArray = $oldSetArray_0b33e9cfefe01b043a31ebcb4fc23d19;
$tpl->Level--;
?>

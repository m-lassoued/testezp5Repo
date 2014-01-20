<?php
// URI:       design:content/datatype/view/ezmultioption.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/content/datatype/view/ezmultioption.tpl
// Timestamp: 1389968167 (Fri Jan 17 15:16:07 CET 2014)
$oldSetArray_3b1c01c735efd9711a1239bcb525e680 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="block">
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
</div>
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_6 ) ) $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_6 = array();
$fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_6[] = compact( 'fe_array_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_i_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_key_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_val_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_offset_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_max_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_reverse_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_first_val_a918fb27c46a90d3f197f403a46ea67e_6', 'fe_last_val_a918fb27c46a90d3f197f403a46ea67e_6' );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 );
$fe_array_a918fb27c46a90d3f197f403a46ea67e_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$fe_array_a918fb27c46a90d3f197f403a46ea67e_61 = compiledFetchAttribute( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6, 'content' );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 );
$fe_array_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_61;
$fe_array_a918fb27c46a90d3f197f403a46ea67e_61 = compiledFetchAttribute( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6, 'multioption_list' );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 );
$fe_array_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_61;
if (! isset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 ) ) $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 = NULL;
while ( is_object( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 ) and method_exists( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6, 'templateValue' ) )
    $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_6->templateValue();

$fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_6 = is_array( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 ) ? array_keys( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 ) : array();
$fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 = count( $fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_6 );
$fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_6 = 0;
$fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 = 0;
$fe_max_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 - $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6;
$fe_reverse_a918fb27c46a90d3f197f403a46ea67e_6 = false;
if ( $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 < 0 || $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 >= $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 )
{
    $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 = ( $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 < 0 ) ? 0 : $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6;
    if ( $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 || $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_a918fb27c46a90d3f197f403a46ea67e_6'. Array count: $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6");   
}
}
if ( $fe_max_a918fb27c46a90d3f197f403a46ea67e_6 < 0 || $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 + $fe_max_a918fb27c46a90d3f197f403a46ea67e_6 > $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 )
{
    if ( $fe_max_a918fb27c46a90d3f197f403a46ea67e_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_a918fb27c46a90d3f197f403a46ea67e_6");
    $fe_max_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 - $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6;
}
if ( $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_6 )
{
    $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 - 1 - $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6;
    $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_6  = 0;
}
else
{
    $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6;
    $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_6  = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 - 1;
}
// foreach
for ( $fe_i_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_6; $fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_6 < $fe_max_a918fb27c46a90d3f197f403a46ea67e_6 && ( $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_6 ? $fe_i_a918fb27c46a90d3f197f403a46ea67e_6 >= $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_6 : $fe_i_a918fb27c46a90d3f197f403a46ea67e_6 <= $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_6 ); $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_6 ? $fe_i_a918fb27c46a90d3f197f403a46ea67e_6-- : $fe_i_a918fb27c46a90d3f197f403a46ea67e_6++ )
{
$fe_key_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_6[$fe_i_a918fb27c46a90d3f197f403a46ea67e_6];
$fe_val_a918fb27c46a90d3f197f403a46ea67e_6 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_6[$fe_key_a918fb27c46a90d3f197f403a46ea67e_6];
$vars[$rootNamespace]['multioptions'] = $fe_val_a918fb27c46a90d3f197f403a46ea67e_6;
$text .= '<div class="block">
<label>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multioptions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multioptions'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ':</label>
<select name="eZOption[';
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

$text .= '][]">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_5 ) ) $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_5 = array();
$fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_5[] = compact( 'fe_array_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_i_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_key_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_val_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_offset_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_max_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_reverse_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_first_val_a918fb27c46a90d3f197f403a46ea67e_5', 'fe_last_val_a918fb27c46a90d3f197f403a46ea67e_5' );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 );
$fe_array_a918fb27c46a90d3f197f403a46ea67e_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multioptions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multioptions'] : null;
$fe_array_a918fb27c46a90d3f197f403a46ea67e_51 = compiledFetchAttribute( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5, 'optionlist' );
unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 );
$fe_array_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_51;
if (! isset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 ) ) $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 = NULL;
while ( is_object( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 ) and method_exists( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5, 'templateValue' ) )
    $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_5->templateValue();

$fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_5 = is_array( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 ) ? array_keys( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 ) : array();
$fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 = count( $fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_5 );
$fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_5 = 0;
$fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 = 0;
$fe_max_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 - $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5;
$fe_reverse_a918fb27c46a90d3f197f403a46ea67e_5 = false;
if ( $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 < 0 || $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 >= $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 )
{
    $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 = ( $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 < 0 ) ? 0 : $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5;
    if ( $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 || $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_a918fb27c46a90d3f197f403a46ea67e_5'. Array count: $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5");   
}
}
if ( $fe_max_a918fb27c46a90d3f197f403a46ea67e_5 < 0 || $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 + $fe_max_a918fb27c46a90d3f197f403a46ea67e_5 > $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 )
{
    if ( $fe_max_a918fb27c46a90d3f197f403a46ea67e_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_a918fb27c46a90d3f197f403a46ea67e_5");
    $fe_max_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 - $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5;
}
if ( $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_5 )
{
    $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 - 1 - $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5;
    $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_5  = 0;
}
else
{
    $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5;
    $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_5  = $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 - 1;
}
// foreach
for ( $fe_i_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_5; $fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_5 < $fe_max_a918fb27c46a90d3f197f403a46ea67e_5 && ( $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_5 ? $fe_i_a918fb27c46a90d3f197f403a46ea67e_5 >= $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_5 : $fe_i_a918fb27c46a90d3f197f403a46ea67e_5 <= $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_5 ); $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_5 ? $fe_i_a918fb27c46a90d3f197f403a46ea67e_5-- : $fe_i_a918fb27c46a90d3f197f403a46ea67e_5++ )
{
$fe_key_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_5[$fe_i_a918fb27c46a90d3f197f403a46ea67e_5];
$fe_val_a918fb27c46a90d3f197f403a46ea67e_5 = $fe_array_a918fb27c46a90d3f197f403a46ea67e_5[$fe_key_a918fb27c46a90d3f197f403a46ea67e_5];
$vars[$rootNamespace]['option'] = $fe_val_a918fb27c46a90d3f197f403a46ea67e_5;
$vars[$rootNamespace]['index'] = $fe_key_a918fb27c46a90d3f197f403a46ea67e_5;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'additional_price' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = $if_cond2 + 1.000000;
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multioptions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multioptions'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'default_option_id' );
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
$text .= '                    <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'option_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'value' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var2 = compiledFetchAttribute( $var1, 'additional_price' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
                ';
}
else
{
$text .= '                    <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'option_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'value' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var2 = compiledFetchAttribute( $var1, 'additional_price' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
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
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = $if_cond2 + 1.000000;
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multioptions', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multioptions'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'default_option_id' );
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
$text .= '                    <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'option_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'value' );
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
$text .= '                    <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'option_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'option', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['option'] : null;
$var1 = compiledFetchAttribute( $var, 'value' );
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

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_5 ) ) extract( array_pop( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_5 ) );

else
{

unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_i_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_key_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_val_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_offset_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_max_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_5 );

unset( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_5 );

}

// foreach ends
$text .= '    </select>
</div>';
$fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_6++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_6 ) ) extract( array_pop( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_6 ) );

else
{

unset( $fe_array_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_array_keys_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_n_items_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_n_items_processed_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_i_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_key_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_val_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_offset_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_max_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_reverse_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_first_val_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_last_val_a918fb27c46a90d3f197f403a46ea67e_6 );

unset( $fe_variable_stack_a918fb27c46a90d3f197f403a46ea67e_6 );

}

// foreach ends

$setArray = $oldSetArray_3b1c01c735efd9711a1239bcb525e680;
$tpl->Level--;
?>

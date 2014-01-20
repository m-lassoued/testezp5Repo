<?php
// URI:       design/standard/templates/shop/country/edit.tpl
// Filename:  design/standard/templates/shop/country/edit.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_15a2240f2f105c47cc47d00b27f58174 = isset( $setArray ) ? $setArray : array();
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
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'countries', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['countries'] : null;
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
// def $countries
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchCountryList' ),
  array(     'filter' => null,
    'value' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'countries', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'countries' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 4,
    2 => 102,
  ),
  1 => 
  array (
    0 => 4,
    1 => 55,
    2 => 153,
  ),
  2 => 'design/standard/templates/shop/country/edit.tpl',
) );
    $tpl->setVariable( 'countries', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'countries', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

if ( !isset( $vars[$currentNamespace]['max_len'] ) )
{
    $vars[$currentNamespace]['max_len'] = 20;
    $setArray[$currentNamespace]['max_len'] = true;
}

if ( !isset( $vars[$currentNamespace]['select_size'] ) )
{
    $vars[$currentNamespace]['select_size'] = 1;
    $setArray[$currentNamespace]['select_size'] = true;
}

$text .= '
<select name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" size="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'select_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['select_size'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_val', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_val'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_desc', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_desc'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
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
$text .= '    <option ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_val', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_val'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'false' ) );
unset( $if_cond1 );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_val', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_val'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_desc', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_desc'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>';
}
unset( $if_cond );
// if ends

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_a83c7f21d2b19cdb026e67a51b369eaf_1 ) ) $fe_variable_stack_a83c7f21d2b19cdb026e67a51b369eaf_1 = array();
$fe_variable_stack_a83c7f21d2b19cdb026e67a51b369eaf_1[] = compact( 'fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_array_keys_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_n_items_processed_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_key_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_val_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_reverse_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_first_val_a83c7f21d2b19cdb026e67a51b369eaf_1', 'fe_last_val_a83c7f21d2b19cdb026e67a51b369eaf_1' );
unset( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 );
unset( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 );
$fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'countries', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['countries'] : null;
if (! isset( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 ) ) $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 = NULL;
while ( is_object( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 ) and method_exists( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1, 'templateValue' ) )
    $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1->templateValue();

$fe_array_keys_a83c7f21d2b19cdb026e67a51b369eaf_1 = is_array( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 ) ? array_keys( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 ) : array();
$fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 = count( $fe_array_keys_a83c7f21d2b19cdb026e67a51b369eaf_1 );
$fe_n_items_processed_a83c7f21d2b19cdb026e67a51b369eaf_1 = 0;
$fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 = 0;
$fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 - $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1;
$fe_reverse_a83c7f21d2b19cdb026e67a51b369eaf_1 = false;
if ( $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 < 0 || $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 >= $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 )
{
    $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 = ( $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 < 0 ) ? 0 : $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1;
    if ( $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 || $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1'. Array count: $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1");   
}
}
if ( $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 < 0 || $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 + $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 > $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 )
{
    if ( $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1");
    $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 - $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1;
}
if ( $fe_reverse_a83c7f21d2b19cdb026e67a51b369eaf_1 )
{
    $fe_first_val_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 - 1 - $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1;
    $fe_last_val_a83c7f21d2b19cdb026e67a51b369eaf_1  = 0;
}
else
{
    $fe_first_val_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1;
    $fe_last_val_a83c7f21d2b19cdb026e67a51b369eaf_1  = $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 - 1;
}
// foreach
for ( $fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_first_val_a83c7f21d2b19cdb026e67a51b369eaf_1; $fe_n_items_processed_a83c7f21d2b19cdb026e67a51b369eaf_1 < $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 && ( $fe_reverse_a83c7f21d2b19cdb026e67a51b369eaf_1 ? $fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1 >= $fe_last_val_a83c7f21d2b19cdb026e67a51b369eaf_1 : $fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1 <= $fe_last_val_a83c7f21d2b19cdb026e67a51b369eaf_1 ); $fe_reverse_a83c7f21d2b19cdb026e67a51b369eaf_1 ? $fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1-- : $fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1++ )
{
$fe_key_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_array_keys_a83c7f21d2b19cdb026e67a51b369eaf_1[$fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1];
$fe_val_a83c7f21d2b19cdb026e67a51b369eaf_1 = $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1[$fe_key_a83c7f21d2b19cdb026e67a51b369eaf_1];
$vars[$rootNamespace]['country'] = $fe_val_a83c7f21d2b19cdb026e67a51b369eaf_1;
$text .= '    <option ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'Name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_val', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_val'] : null;
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
$text .= ' selected="selected" ';
}
unset( $if_cond );
// if ends

$text .= ' value="';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'use_country_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['use_country_code'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
$var1 = compiledFetchAttribute( $var, 'Alpha2' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
else
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
$var1 = compiledFetchAttribute( $var, 'Name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '">
    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
$var2 = compiledFetchAttribute( $var1, 'Name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'max_len', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['max_len'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = $var2;
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var1 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var1 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var = trim( $substrFunc( $var1, 0, $leftPartLength ) . $seq . $substrFunc( $var1, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var1 ) > $length ) && $strlenFunc( $var1 ) > $maxLength )
                                                                      {
                                                                          $var = trim( $substrFunc( $var1, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var = $var1;
                                                                      }
                                                                  }
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </option>';
$fe_n_items_processed_a83c7f21d2b19cdb026e67a51b369eaf_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_a83c7f21d2b19cdb026e67a51b369eaf_1 ) ) extract( array_pop( $fe_variable_stack_a83c7f21d2b19cdb026e67a51b369eaf_1 ) );

else
{

unset( $fe_array_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_array_keys_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_n_items_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_n_items_processed_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_i_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_key_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_val_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_offset_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_max_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_reverse_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_first_val_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_last_val_a83c7f21d2b19cdb026e67a51b369eaf_1 );

unset( $fe_variable_stack_a83c7f21d2b19cdb026e67a51b369eaf_1 );

}

// foreach ends
$text .= '</select>';
if ( isset( $setArray[$currentNamespace]['max_len'] ) )
{
unset( $vars[$currentNamespace]['max_len'] );
}

if ( isset( $setArray[$currentNamespace]['select_size'] ) )
{
unset( $vars[$currentNamespace]['select_size'] );
}


$setArray = $oldSetArray_15a2240f2f105c47cc47d00b27f58174;
$tpl->Level--;
?>

<?php
// URI:       design:shop/orderview.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/shop/orderview.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_6448838ed11a0825c13f9a649d9cd2ea = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="shop-orderview">

<div class="attribute-header">
  <h1 class="long">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var4 = compiledFetchAttribute( $var3, 'order_nr' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var5 = compiledFetchAttribute( $var4, 'status_name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( '%order_id' => $var3, '%order_status' => $var4 );unset( $var3, $var4 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Order %order_id [%order_status]', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>
</div>
';
$textElements = array();
$tpl->processFunction( 'shop_account_view_gui', $textElements,
                       false,
                       array (
  'view' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'html',
      2 => false,
    ),
  ),
  'order' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'order',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 9,
    1 => 0,
    2 => 265,
  ),
  1 => 
  array (
    0 => 9,
    1 => 44,
    2 => 309,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/orderview.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

// def $currency
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'productcollection' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'currency_code' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchCurrency' ),
  array(     'code' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'currency', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'currency' is already defined.", array (
  0 => 
  array (
    0 => 11,
    1 => 0,
    2 => 313,
  ),
  1 => 
  array (
    0 => 13,
    1 => 26,
    2 => 466,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/orderview.tpl',
) );
    $tpl->setVariable( 'currency', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currency', $var, $rootNamespace );
}

// def $locale
if ( $tpl->hasVariable( 'locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locale' is already defined.", array (
  0 => 
  array (
    0 => 11,
    1 => 0,
    2 => 313,
  ),
  1 => 
  array (
    0 => 13,
    1 => 26,
    2 => 466,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/orderview.tpl',
) );
    $tpl->setVariable( 'locale', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locale', false, $rootNamespace );
}

// def $symbol
if ( $tpl->hasVariable( 'symbol', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'symbol' is already defined.", array (
  0 => 
  array (
    0 => 11,
    1 => 0,
    2 => 313,
  ),
  1 => 
  array (
    0 => 13,
    1 => 26,
    2 => 466,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/orderview.tpl',
) );
    $tpl->setVariable( 'symbol', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'symbol', false, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currency', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currency'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currency', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currency'] : null;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'locale', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['locale'] = $var;
    unset( $var );
}
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currency', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currency'] : null;
$var1 = compiledFetchAttribute( $var, 'symbol' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'symbol', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['symbol'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
<br />

<h3>Product items</h3>
<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <th>
    Product
    </th>
    <th>
    Count
    </th>
    <th>
    VAT
    </th>
    <th>
    Price inc. VAT
    </th>
    <th>
    Discount
    </th>
    <th>
    Total price ex. VAT
    </th>
    <th>
    Total price inc. VAT
    </th>
</tr>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'product_items' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_f763007cb55d54642a74199297527e3a_1 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_f763007cb55d54642a74199297527e3a_1 = current( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_1 );

if ( !isset( $fe_variable_stack_f763007cb55d54642a74199297527e3a_1 ) ) $fe_variable_stack_f763007cb55d54642a74199297527e3a_1 = array();
$fe_variable_stack_f763007cb55d54642a74199297527e3a_1[] = compact( 'fe_array_f763007cb55d54642a74199297527e3a_1', 'fe_array_keys_f763007cb55d54642a74199297527e3a_1', 'fe_n_items_f763007cb55d54642a74199297527e3a_1', 'fe_n_items_processed_f763007cb55d54642a74199297527e3a_1', 'fe_i_f763007cb55d54642a74199297527e3a_1', 'fe_key_f763007cb55d54642a74199297527e3a_1', 'fe_val_f763007cb55d54642a74199297527e3a_1', 'fe_offset_f763007cb55d54642a74199297527e3a_1', 'fe_max_f763007cb55d54642a74199297527e3a_1', 'fe_reverse_f763007cb55d54642a74199297527e3a_1', 'fe_first_val_f763007cb55d54642a74199297527e3a_1', 'fe_last_val_f763007cb55d54642a74199297527e3a_1' );
unset( $fe_array_f763007cb55d54642a74199297527e3a_1 );
unset( $fe_array_f763007cb55d54642a74199297527e3a_1 );
$fe_array_f763007cb55d54642a74199297527e3a_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$fe_array_f763007cb55d54642a74199297527e3a_11 = compiledFetchAttribute( $fe_array_f763007cb55d54642a74199297527e3a_1, 'product_items' );
unset( $fe_array_f763007cb55d54642a74199297527e3a_1 );
$fe_array_f763007cb55d54642a74199297527e3a_1 = $fe_array_f763007cb55d54642a74199297527e3a_11;
if (! isset( $fe_array_f763007cb55d54642a74199297527e3a_1 ) ) $fe_array_f763007cb55d54642a74199297527e3a_1 = NULL;
while ( is_object( $fe_array_f763007cb55d54642a74199297527e3a_1 ) and method_exists( $fe_array_f763007cb55d54642a74199297527e3a_1, 'templateValue' ) )
    $fe_array_f763007cb55d54642a74199297527e3a_1 = $fe_array_f763007cb55d54642a74199297527e3a_1->templateValue();

$fe_array_keys_f763007cb55d54642a74199297527e3a_1 = is_array( $fe_array_f763007cb55d54642a74199297527e3a_1 ) ? array_keys( $fe_array_f763007cb55d54642a74199297527e3a_1 ) : array();
$fe_n_items_f763007cb55d54642a74199297527e3a_1 = count( $fe_array_keys_f763007cb55d54642a74199297527e3a_1 );
$fe_n_items_processed_f763007cb55d54642a74199297527e3a_1 = 0;
$fe_offset_f763007cb55d54642a74199297527e3a_1 = 0;
$fe_max_f763007cb55d54642a74199297527e3a_1 = $fe_n_items_f763007cb55d54642a74199297527e3a_1 - $fe_offset_f763007cb55d54642a74199297527e3a_1;
$fe_reverse_f763007cb55d54642a74199297527e3a_1 = false;
if ( $fe_offset_f763007cb55d54642a74199297527e3a_1 < 0 || $fe_offset_f763007cb55d54642a74199297527e3a_1 >= $fe_n_items_f763007cb55d54642a74199297527e3a_1 )
{
    $fe_offset_f763007cb55d54642a74199297527e3a_1 = ( $fe_offset_f763007cb55d54642a74199297527e3a_1 < 0 ) ? 0 : $fe_n_items_f763007cb55d54642a74199297527e3a_1;
    if ( $fe_n_items_f763007cb55d54642a74199297527e3a_1 || $fe_offset_f763007cb55d54642a74199297527e3a_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f763007cb55d54642a74199297527e3a_1'. Array count: $fe_n_items_f763007cb55d54642a74199297527e3a_1");   
}
}
if ( $fe_max_f763007cb55d54642a74199297527e3a_1 < 0 || $fe_offset_f763007cb55d54642a74199297527e3a_1 + $fe_max_f763007cb55d54642a74199297527e3a_1 > $fe_n_items_f763007cb55d54642a74199297527e3a_1 )
{
    if ( $fe_max_f763007cb55d54642a74199297527e3a_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f763007cb55d54642a74199297527e3a_1");
    $fe_max_f763007cb55d54642a74199297527e3a_1 = $fe_n_items_f763007cb55d54642a74199297527e3a_1 - $fe_offset_f763007cb55d54642a74199297527e3a_1;
}
if ( $fe_reverse_f763007cb55d54642a74199297527e3a_1 )
{
    $fe_first_val_f763007cb55d54642a74199297527e3a_1 = $fe_n_items_f763007cb55d54642a74199297527e3a_1 - 1 - $fe_offset_f763007cb55d54642a74199297527e3a_1;
    $fe_last_val_f763007cb55d54642a74199297527e3a_1  = 0;
}
else
{
    $fe_first_val_f763007cb55d54642a74199297527e3a_1 = $fe_offset_f763007cb55d54642a74199297527e3a_1;
    $fe_last_val_f763007cb55d54642a74199297527e3a_1  = $fe_n_items_f763007cb55d54642a74199297527e3a_1 - 1;
}
// foreach
for ( $fe_i_f763007cb55d54642a74199297527e3a_1 = $fe_first_val_f763007cb55d54642a74199297527e3a_1; $fe_n_items_processed_f763007cb55d54642a74199297527e3a_1 < $fe_max_f763007cb55d54642a74199297527e3a_1 && ( $fe_reverse_f763007cb55d54642a74199297527e3a_1 ? $fe_i_f763007cb55d54642a74199297527e3a_1 >= $fe_last_val_f763007cb55d54642a74199297527e3a_1 : $fe_i_f763007cb55d54642a74199297527e3a_1 <= $fe_last_val_f763007cb55d54642a74199297527e3a_1 ); $fe_reverse_f763007cb55d54642a74199297527e3a_1 ? $fe_i_f763007cb55d54642a74199297527e3a_1-- : $fe_i_f763007cb55d54642a74199297527e3a_1++ )
{
$fe_key_f763007cb55d54642a74199297527e3a_1 = $fe_array_keys_f763007cb55d54642a74199297527e3a_1[$fe_i_f763007cb55d54642a74199297527e3a_1];
$fe_val_f763007cb55d54642a74199297527e3a_1 = $fe_array_f763007cb55d54642a74199297527e3a_1[$fe_key_f763007cb55d54642a74199297527e3a_1];
$vars[$rootNamespace]['product_item'] = $fe_val_f763007cb55d54642a74199297527e3a_1;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_f763007cb55d54642a74199297527e3a_1;
$text .= '<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'style', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['style'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    <td>
    <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/view/full/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
    </td>
    <td>
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var1 = compiledFetchAttribute( $var, 'item_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
    </td>
    <td>
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var1 = compiledFetchAttribute( $var, 'vat_value' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' %
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'price_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'price_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
    <td>
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var1 = compiledFetchAttribute( $var, 'discount_percent' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '%
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_price_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_price_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_price_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_price_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
</tr>';
// sequence iteration
if ( ( $foreach_sequence_var_f763007cb55d54642a74199297527e3a_1 = next( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_1 ) ) === false )
{
   reset( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_1 );
   $foreach_sequence_var_f763007cb55d54642a74199297527e3a_1 = current( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_1 );
}

$fe_n_items_processed_f763007cb55d54642a74199297527e3a_1++;
} // foreach
unset( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_1 );

unset( $foreach_sequence_var_f763007cb55d54642a74199297527e3a_1 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_f763007cb55d54642a74199297527e3a_1 ) ) extract( array_pop( $fe_variable_stack_f763007cb55d54642a74199297527e3a_1 ) );

else
{

unset( $fe_array_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_array_keys_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_n_items_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_n_items_processed_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_i_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_key_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_val_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_offset_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_max_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_reverse_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_first_val_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_last_val_f763007cb55d54642a74199297527e3a_1 );

unset( $fe_variable_stack_f763007cb55d54642a74199297527e3a_1 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '</table>

<h3>Order summary:</h3>
<table class="list" cellspacing="0" cellpadding="0" border="0">
<tr>
    <th>
    Summary:
    </th>
    <th>
    Total price ex. VAT
    </th>
    <th>
    Total price inc. VAT
    </th>
</tr>
<tr class="bglight">
    <td>
    Subtotal of items:
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'product_total_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'product_total_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'product_total_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'product_total_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
</tr>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'order_items' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_f763007cb55d54642a74199297527e3a_2 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_f763007cb55d54642a74199297527e3a_2 = current( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_2 );

if ( !isset( $fe_variable_stack_f763007cb55d54642a74199297527e3a_2 ) ) $fe_variable_stack_f763007cb55d54642a74199297527e3a_2 = array();
$fe_variable_stack_f763007cb55d54642a74199297527e3a_2[] = compact( 'fe_array_f763007cb55d54642a74199297527e3a_2', 'fe_array_keys_f763007cb55d54642a74199297527e3a_2', 'fe_n_items_f763007cb55d54642a74199297527e3a_2', 'fe_n_items_processed_f763007cb55d54642a74199297527e3a_2', 'fe_i_f763007cb55d54642a74199297527e3a_2', 'fe_key_f763007cb55d54642a74199297527e3a_2', 'fe_val_f763007cb55d54642a74199297527e3a_2', 'fe_offset_f763007cb55d54642a74199297527e3a_2', 'fe_max_f763007cb55d54642a74199297527e3a_2', 'fe_reverse_f763007cb55d54642a74199297527e3a_2', 'fe_first_val_f763007cb55d54642a74199297527e3a_2', 'fe_last_val_f763007cb55d54642a74199297527e3a_2' );
unset( $fe_array_f763007cb55d54642a74199297527e3a_2 );
unset( $fe_array_f763007cb55d54642a74199297527e3a_2 );
$fe_array_f763007cb55d54642a74199297527e3a_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$fe_array_f763007cb55d54642a74199297527e3a_21 = compiledFetchAttribute( $fe_array_f763007cb55d54642a74199297527e3a_2, 'order_items' );
unset( $fe_array_f763007cb55d54642a74199297527e3a_2 );
$fe_array_f763007cb55d54642a74199297527e3a_2 = $fe_array_f763007cb55d54642a74199297527e3a_21;
if (! isset( $fe_array_f763007cb55d54642a74199297527e3a_2 ) ) $fe_array_f763007cb55d54642a74199297527e3a_2 = NULL;
while ( is_object( $fe_array_f763007cb55d54642a74199297527e3a_2 ) and method_exists( $fe_array_f763007cb55d54642a74199297527e3a_2, 'templateValue' ) )
    $fe_array_f763007cb55d54642a74199297527e3a_2 = $fe_array_f763007cb55d54642a74199297527e3a_2->templateValue();

$fe_array_keys_f763007cb55d54642a74199297527e3a_2 = is_array( $fe_array_f763007cb55d54642a74199297527e3a_2 ) ? array_keys( $fe_array_f763007cb55d54642a74199297527e3a_2 ) : array();
$fe_n_items_f763007cb55d54642a74199297527e3a_2 = count( $fe_array_keys_f763007cb55d54642a74199297527e3a_2 );
$fe_n_items_processed_f763007cb55d54642a74199297527e3a_2 = 0;
$fe_offset_f763007cb55d54642a74199297527e3a_2 = 0;
$fe_max_f763007cb55d54642a74199297527e3a_2 = $fe_n_items_f763007cb55d54642a74199297527e3a_2 - $fe_offset_f763007cb55d54642a74199297527e3a_2;
$fe_reverse_f763007cb55d54642a74199297527e3a_2 = false;
if ( $fe_offset_f763007cb55d54642a74199297527e3a_2 < 0 || $fe_offset_f763007cb55d54642a74199297527e3a_2 >= $fe_n_items_f763007cb55d54642a74199297527e3a_2 )
{
    $fe_offset_f763007cb55d54642a74199297527e3a_2 = ( $fe_offset_f763007cb55d54642a74199297527e3a_2 < 0 ) ? 0 : $fe_n_items_f763007cb55d54642a74199297527e3a_2;
    if ( $fe_n_items_f763007cb55d54642a74199297527e3a_2 || $fe_offset_f763007cb55d54642a74199297527e3a_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f763007cb55d54642a74199297527e3a_2'. Array count: $fe_n_items_f763007cb55d54642a74199297527e3a_2");   
}
}
if ( $fe_max_f763007cb55d54642a74199297527e3a_2 < 0 || $fe_offset_f763007cb55d54642a74199297527e3a_2 + $fe_max_f763007cb55d54642a74199297527e3a_2 > $fe_n_items_f763007cb55d54642a74199297527e3a_2 )
{
    if ( $fe_max_f763007cb55d54642a74199297527e3a_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f763007cb55d54642a74199297527e3a_2");
    $fe_max_f763007cb55d54642a74199297527e3a_2 = $fe_n_items_f763007cb55d54642a74199297527e3a_2 - $fe_offset_f763007cb55d54642a74199297527e3a_2;
}
if ( $fe_reverse_f763007cb55d54642a74199297527e3a_2 )
{
    $fe_first_val_f763007cb55d54642a74199297527e3a_2 = $fe_n_items_f763007cb55d54642a74199297527e3a_2 - 1 - $fe_offset_f763007cb55d54642a74199297527e3a_2;
    $fe_last_val_f763007cb55d54642a74199297527e3a_2  = 0;
}
else
{
    $fe_first_val_f763007cb55d54642a74199297527e3a_2 = $fe_offset_f763007cb55d54642a74199297527e3a_2;
    $fe_last_val_f763007cb55d54642a74199297527e3a_2  = $fe_n_items_f763007cb55d54642a74199297527e3a_2 - 1;
}
// foreach
for ( $fe_i_f763007cb55d54642a74199297527e3a_2 = $fe_first_val_f763007cb55d54642a74199297527e3a_2; $fe_n_items_processed_f763007cb55d54642a74199297527e3a_2 < $fe_max_f763007cb55d54642a74199297527e3a_2 && ( $fe_reverse_f763007cb55d54642a74199297527e3a_2 ? $fe_i_f763007cb55d54642a74199297527e3a_2 >= $fe_last_val_f763007cb55d54642a74199297527e3a_2 : $fe_i_f763007cb55d54642a74199297527e3a_2 <= $fe_last_val_f763007cb55d54642a74199297527e3a_2 ); $fe_reverse_f763007cb55d54642a74199297527e3a_2 ? $fe_i_f763007cb55d54642a74199297527e3a_2-- : $fe_i_f763007cb55d54642a74199297527e3a_2++ )
{
$fe_key_f763007cb55d54642a74199297527e3a_2 = $fe_array_keys_f763007cb55d54642a74199297527e3a_2[$fe_i_f763007cb55d54642a74199297527e3a_2];
$fe_val_f763007cb55d54642a74199297527e3a_2 = $fe_array_f763007cb55d54642a74199297527e3a_2[$fe_key_f763007cb55d54642a74199297527e3a_2];
$vars[$rootNamespace]['order_item'] = $fe_val_f763007cb55d54642a74199297527e3a_2;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_f763007cb55d54642a74199297527e3a_2;
$text .= '<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'style', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['style'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    <td>
    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item'] : null;
$var1 = compiledFetchAttribute( $var, 'description' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ':
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'price_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'price_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'price_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'price_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
</tr>';
// sequence iteration
if ( ( $foreach_sequence_var_f763007cb55d54642a74199297527e3a_2 = next( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_2 ) ) === false )
{
   reset( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_2 );
   $foreach_sequence_var_f763007cb55d54642a74199297527e3a_2 = current( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_2 );
}

$fe_n_items_processed_f763007cb55d54642a74199297527e3a_2++;
} // foreach
unset( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_2 );

unset( $foreach_sequence_var_f763007cb55d54642a74199297527e3a_2 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_f763007cb55d54642a74199297527e3a_2 ) ) extract( array_pop( $fe_variable_stack_f763007cb55d54642a74199297527e3a_2 ) );

else
{

unset( $fe_array_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_array_keys_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_n_items_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_n_items_processed_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_i_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_key_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_val_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_offset_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_max_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_reverse_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_first_val_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_last_val_f763007cb55d54642a74199297527e3a_2 );

unset( $fe_variable_stack_f763007cb55d54642a74199297527e3a_2 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '<tr class="bgdark">
    <td>
        Order total
    </td>
    <td>
        ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_ex_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
    <td>
        ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$locale = eZLocale::instance( $var2 );
unset( $var1, $var2 );
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_inc_vat' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
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
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
if( $var4 === false)
$var = $locale->formatCurrencyWithSymbol( $var1, $locale->attribute( 'currency_symbol' ) );
else
$var = $locale->formatCurrencyWithSymbol( $var1, $var4 );
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </td>
</tr>
</table>


<h3>Order history:</h3>
<table class="list" cellspacing="0" cellpadding="0" border="0">
<tr>
    <th>Date</th>
    <th>Order status</th>
</tr>';
// def $order_status_history
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var2 = compiledFetchAttribute( $var1, 'order_nr' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchOrderStatusHistory' ),
  array(     'order_id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'order_status_history', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'order_status_history' is already defined.", array (
  0 => 
  array (
    0 => 135,
    1 => 0,
    2 => 3661,
  ),
  1 => 
  array (
    0 => 135,
    1 => 102,
    2 => 3763,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/orderview.tpl',
) );
    $tpl->setVariable( 'order_status_history', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'order_status_history', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_status_history', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_status_history'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_f763007cb55d54642a74199297527e3a_3 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_f763007cb55d54642a74199297527e3a_3 = current( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_3 );

if ( !isset( $fe_variable_stack_f763007cb55d54642a74199297527e3a_3 ) ) $fe_variable_stack_f763007cb55d54642a74199297527e3a_3 = array();
$fe_variable_stack_f763007cb55d54642a74199297527e3a_3[] = compact( 'fe_array_f763007cb55d54642a74199297527e3a_3', 'fe_array_keys_f763007cb55d54642a74199297527e3a_3', 'fe_n_items_f763007cb55d54642a74199297527e3a_3', 'fe_n_items_processed_f763007cb55d54642a74199297527e3a_3', 'fe_i_f763007cb55d54642a74199297527e3a_3', 'fe_key_f763007cb55d54642a74199297527e3a_3', 'fe_val_f763007cb55d54642a74199297527e3a_3', 'fe_offset_f763007cb55d54642a74199297527e3a_3', 'fe_max_f763007cb55d54642a74199297527e3a_3', 'fe_reverse_f763007cb55d54642a74199297527e3a_3', 'fe_first_val_f763007cb55d54642a74199297527e3a_3', 'fe_last_val_f763007cb55d54642a74199297527e3a_3' );
unset( $fe_array_f763007cb55d54642a74199297527e3a_3 );
unset( $fe_array_f763007cb55d54642a74199297527e3a_3 );
$fe_array_f763007cb55d54642a74199297527e3a_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_status_history', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_status_history'] : null;
if (! isset( $fe_array_f763007cb55d54642a74199297527e3a_3 ) ) $fe_array_f763007cb55d54642a74199297527e3a_3 = NULL;
while ( is_object( $fe_array_f763007cb55d54642a74199297527e3a_3 ) and method_exists( $fe_array_f763007cb55d54642a74199297527e3a_3, 'templateValue' ) )
    $fe_array_f763007cb55d54642a74199297527e3a_3 = $fe_array_f763007cb55d54642a74199297527e3a_3->templateValue();

$fe_array_keys_f763007cb55d54642a74199297527e3a_3 = is_array( $fe_array_f763007cb55d54642a74199297527e3a_3 ) ? array_keys( $fe_array_f763007cb55d54642a74199297527e3a_3 ) : array();
$fe_n_items_f763007cb55d54642a74199297527e3a_3 = count( $fe_array_keys_f763007cb55d54642a74199297527e3a_3 );
$fe_n_items_processed_f763007cb55d54642a74199297527e3a_3 = 0;
$fe_offset_f763007cb55d54642a74199297527e3a_3 = 0;
$fe_max_f763007cb55d54642a74199297527e3a_3 = $fe_n_items_f763007cb55d54642a74199297527e3a_3 - $fe_offset_f763007cb55d54642a74199297527e3a_3;
$fe_reverse_f763007cb55d54642a74199297527e3a_3 = false;
if ( $fe_offset_f763007cb55d54642a74199297527e3a_3 < 0 || $fe_offset_f763007cb55d54642a74199297527e3a_3 >= $fe_n_items_f763007cb55d54642a74199297527e3a_3 )
{
    $fe_offset_f763007cb55d54642a74199297527e3a_3 = ( $fe_offset_f763007cb55d54642a74199297527e3a_3 < 0 ) ? 0 : $fe_n_items_f763007cb55d54642a74199297527e3a_3;
    if ( $fe_n_items_f763007cb55d54642a74199297527e3a_3 || $fe_offset_f763007cb55d54642a74199297527e3a_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f763007cb55d54642a74199297527e3a_3'. Array count: $fe_n_items_f763007cb55d54642a74199297527e3a_3");   
}
}
if ( $fe_max_f763007cb55d54642a74199297527e3a_3 < 0 || $fe_offset_f763007cb55d54642a74199297527e3a_3 + $fe_max_f763007cb55d54642a74199297527e3a_3 > $fe_n_items_f763007cb55d54642a74199297527e3a_3 )
{
    if ( $fe_max_f763007cb55d54642a74199297527e3a_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f763007cb55d54642a74199297527e3a_3");
    $fe_max_f763007cb55d54642a74199297527e3a_3 = $fe_n_items_f763007cb55d54642a74199297527e3a_3 - $fe_offset_f763007cb55d54642a74199297527e3a_3;
}
if ( $fe_reverse_f763007cb55d54642a74199297527e3a_3 )
{
    $fe_first_val_f763007cb55d54642a74199297527e3a_3 = $fe_n_items_f763007cb55d54642a74199297527e3a_3 - 1 - $fe_offset_f763007cb55d54642a74199297527e3a_3;
    $fe_last_val_f763007cb55d54642a74199297527e3a_3  = 0;
}
else
{
    $fe_first_val_f763007cb55d54642a74199297527e3a_3 = $fe_offset_f763007cb55d54642a74199297527e3a_3;
    $fe_last_val_f763007cb55d54642a74199297527e3a_3  = $fe_n_items_f763007cb55d54642a74199297527e3a_3 - 1;
}
// foreach
for ( $fe_i_f763007cb55d54642a74199297527e3a_3 = $fe_first_val_f763007cb55d54642a74199297527e3a_3; $fe_n_items_processed_f763007cb55d54642a74199297527e3a_3 < $fe_max_f763007cb55d54642a74199297527e3a_3 && ( $fe_reverse_f763007cb55d54642a74199297527e3a_3 ? $fe_i_f763007cb55d54642a74199297527e3a_3 >= $fe_last_val_f763007cb55d54642a74199297527e3a_3 : $fe_i_f763007cb55d54642a74199297527e3a_3 <= $fe_last_val_f763007cb55d54642a74199297527e3a_3 ); $fe_reverse_f763007cb55d54642a74199297527e3a_3 ? $fe_i_f763007cb55d54642a74199297527e3a_3-- : $fe_i_f763007cb55d54642a74199297527e3a_3++ )
{
$fe_key_f763007cb55d54642a74199297527e3a_3 = $fe_array_keys_f763007cb55d54642a74199297527e3a_3[$fe_i_f763007cb55d54642a74199297527e3a_3];
$fe_val_f763007cb55d54642a74199297527e3a_3 = $fe_array_f763007cb55d54642a74199297527e3a_3[$fe_key_f763007cb55d54642a74199297527e3a_3];
$vars[$rootNamespace]['history'] = $fe_val_f763007cb55d54642a74199297527e3a_3;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_f763007cb55d54642a74199297527e3a_3;
$text .= '<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'style', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['style'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ">
    <td class="date">';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'history', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['history'] : null;
$var2 = compiledFetchAttribute( $var1, 'modified' );
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

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
    <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'history', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['history'] : null;
$var2 = compiledFetchAttribute( $var1, 'status_name' );
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

$text .= '</td>
</tr>';
// sequence iteration
if ( ( $foreach_sequence_var_f763007cb55d54642a74199297527e3a_3 = next( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_3 ) ) === false )
{
   reset( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_3 );
   $foreach_sequence_var_f763007cb55d54642a74199297527e3a_3 = current( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_3 );
}

$fe_n_items_processed_f763007cb55d54642a74199297527e3a_3++;
} // foreach
unset( $foreach_sequence_array_f763007cb55d54642a74199297527e3a_3 );

unset( $foreach_sequence_var_f763007cb55d54642a74199297527e3a_3 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_f763007cb55d54642a74199297527e3a_3 ) ) extract( array_pop( $fe_variable_stack_f763007cb55d54642a74199297527e3a_3 ) );

else
{

unset( $fe_array_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_array_keys_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_n_items_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_n_items_processed_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_i_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_key_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_val_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_offset_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_max_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_reverse_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_first_val_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_last_val_f763007cb55d54642a74199297527e3a_3 );

unset( $fe_variable_stack_f763007cb55d54642a74199297527e3a_3 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '</table>

</div>
';

$setArray = $oldSetArray_6448838ed11a0825c13f9a649d9cd2ea;
$tpl->Level--;
?>

<?php
// URI:       design:shop/customerorderview.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_e18aa6c91b1d814003c120ebdf1c4607 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="shop-customerorderview">
    <div class="attribute-header">
        <h1 class="long">Customer information</h1>
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
        2 => 'order_list',
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
  ),
),
                       array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 189,
  ),
  1 => 
  array (
    0 => 6,
    1 => 52,
    2 => 241,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '

<div class="attribute-header">
    <h1>Order list</h1>
</div>
';
// def $currency
if ( $tpl->hasVariable( 'currency', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'currency' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 358,
  ),
  1 => 
  array (
    0 => 16,
    1 => 34,
    2 => 462,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'currency', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currency', false, $rootNamespace );
}

// def $locale
if ( $tpl->hasVariable( 'locale', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locale' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 358,
  ),
  1 => 
  array (
    0 => 16,
    1 => 34,
    2 => 462,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
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
    0 => 13,
    1 => 0,
    2 => 358,
  ),
  1 => 
  array (
    0 => 16,
    1 => 34,
    2 => 462,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'symbol', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'symbol', false, $rootNamespace );
}

// def $product_info_count
if ( $tpl->hasVariable( 'product_info_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'product_info_count' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 358,
  ),
  1 => 
  array (
    0 => 16,
    1 => 34,
    2 => 462,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'product_info_count', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'product_info_count', false, $rootNamespace );
}

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_list'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <th>
    ID
    </th>
    <th>
    Date
    </th>
    <th>
    Total ex. VAT
    </th>
    <th>
    Total inc. VAT
    </th>
    <th>
    </th>
</tr>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_list'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Order'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Order'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'currency', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['currency'] = $var;
    unset( $var );
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
else
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'locale', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['locale'] = false;
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'symbol', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['symbol'] = false;
}
}
unset( $if_cond );
// if ends

$text .= '
<tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'order_nr' );
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
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'created' );
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

$text .= '
    </td>
    <td>
    ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
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
    <td>
    <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Order'] : null;
$var4 = compiledFetchAttribute( $var3, 'item' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/shop/orderview/' . $var3 . '/' );
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

$text .= '>view</a>
    </td>
</tr>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '</table>';
}

$text .= '

<div class="attribute-header">
  <h1>Purchase list</h1>
</div>
';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_list'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<table class="list" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
    <th>
    Product
    </th>
    <th>
    Amount
    </th>
    <th>
    Total ex. VAT
    </th>
    <th>
    Total inc. VAT
    </th>
</tr>
';
// def $quantity_text
if ( $tpl->hasVariable( 'quantity_text', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'quantity_text' is already defined.", array (
  0 => 
  array (
    0 => 89,
    1 => 0,
    2 => 2266,
  ),
  1 => 
  array (
    0 => 92,
    1 => 17,
    2 => 2366,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'quantity_text', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'quantity_text', '', $rootNamespace );
}

// def $total_ex_vat_text
if ( $tpl->hasVariable( 'total_ex_vat_text', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'total_ex_vat_text' is already defined.", array (
  0 => 
  array (
    0 => 89,
    1 => 0,
    2 => 2266,
  ),
  1 => 
  array (
    0 => 92,
    1 => 17,
    2 => 2366,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'total_ex_vat_text', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'total_ex_vat_text', '', $rootNamespace );
}

// def $total_inc_vat_text
if ( $tpl->hasVariable( 'total_inc_vat_text', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'total_inc_vat_text' is already defined.", array (
  0 => 
  array (
    0 => 89,
    1 => 0,
    2 => 2266,
  ),
  1 => 
  array (
    0 => 92,
    1 => 17,
    2 => 2366,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'total_inc_vat_text', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'total_inc_vat_text', '', $rootNamespace );
}

// def $br_tag
if ( $tpl->hasVariable( 'br_tag', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'br_tag' is already defined.", array (
  0 => 
  array (
    0 => 89,
    1 => 0,
    2 => 2266,
  ),
  1 => 
  array (
    0 => 92,
    1 => 17,
    2 => 2366,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/shop/customerorderview.tpl',
) );
    $tpl->setVariable( 'br_tag', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'br_tag', '', $rootNamespace );
}

unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_list'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['Product'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['Product'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'quantity_text', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['quantity_text'] = '';
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'total_ex_vat_text', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['total_ex_vat_text'] = '';
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'total_inc_vat_text', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['total_inc_vat_text'] = '';
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'br_tag', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['br_tag'] = '';
}
$text .= '
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_52a2bb1d407b38940244f68a9beda36a_1 ) ) $fe_variable_stack_52a2bb1d407b38940244f68a9beda36a_1 = array();
$fe_variable_stack_52a2bb1d407b38940244f68a9beda36a_1[] = compact( 'fe_array_52a2bb1d407b38940244f68a9beda36a_1', 'fe_array_keys_52a2bb1d407b38940244f68a9beda36a_1', 'fe_n_items_52a2bb1d407b38940244f68a9beda36a_1', 'fe_n_items_processed_52a2bb1d407b38940244f68a9beda36a_1', 'fe_i_52a2bb1d407b38940244f68a9beda36a_1', 'fe_key_52a2bb1d407b38940244f68a9beda36a_1', 'fe_val_52a2bb1d407b38940244f68a9beda36a_1', 'fe_offset_52a2bb1d407b38940244f68a9beda36a_1', 'fe_max_52a2bb1d407b38940244f68a9beda36a_1', 'fe_reverse_52a2bb1d407b38940244f68a9beda36a_1', 'fe_first_val_52a2bb1d407b38940244f68a9beda36a_1', 'fe_last_val_52a2bb1d407b38940244f68a9beda36a_1' );
unset( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 );
unset( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 );
$fe_array_52a2bb1d407b38940244f68a9beda36a_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Product', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Product'] : null;
$fe_array_52a2bb1d407b38940244f68a9beda36a_11 = compiledFetchAttribute( $fe_array_52a2bb1d407b38940244f68a9beda36a_1, 'product_info' );
unset( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 );
$fe_array_52a2bb1d407b38940244f68a9beda36a_1 = $fe_array_52a2bb1d407b38940244f68a9beda36a_11;
if (! isset( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 ) ) $fe_array_52a2bb1d407b38940244f68a9beda36a_1 = NULL;
while ( is_object( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 ) and method_exists( $fe_array_52a2bb1d407b38940244f68a9beda36a_1, 'templateValue' ) )
    $fe_array_52a2bb1d407b38940244f68a9beda36a_1 = $fe_array_52a2bb1d407b38940244f68a9beda36a_1->templateValue();

$fe_array_keys_52a2bb1d407b38940244f68a9beda36a_1 = is_array( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 ) ? array_keys( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 ) : array();
$fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 = count( $fe_array_keys_52a2bb1d407b38940244f68a9beda36a_1 );
$fe_n_items_processed_52a2bb1d407b38940244f68a9beda36a_1 = 0;
$fe_offset_52a2bb1d407b38940244f68a9beda36a_1 = 0;
$fe_max_52a2bb1d407b38940244f68a9beda36a_1 = $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 - $fe_offset_52a2bb1d407b38940244f68a9beda36a_1;
$fe_reverse_52a2bb1d407b38940244f68a9beda36a_1 = false;
if ( $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 < 0 || $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 >= $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 )
{
    $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 = ( $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 < 0 ) ? 0 : $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1;
    if ( $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 || $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_52a2bb1d407b38940244f68a9beda36a_1'. Array count: $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1");   
}
}
if ( $fe_max_52a2bb1d407b38940244f68a9beda36a_1 < 0 || $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 + $fe_max_52a2bb1d407b38940244f68a9beda36a_1 > $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 )
{
    if ( $fe_max_52a2bb1d407b38940244f68a9beda36a_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_52a2bb1d407b38940244f68a9beda36a_1");
    $fe_max_52a2bb1d407b38940244f68a9beda36a_1 = $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 - $fe_offset_52a2bb1d407b38940244f68a9beda36a_1;
}
if ( $fe_reverse_52a2bb1d407b38940244f68a9beda36a_1 )
{
    $fe_first_val_52a2bb1d407b38940244f68a9beda36a_1 = $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 - 1 - $fe_offset_52a2bb1d407b38940244f68a9beda36a_1;
    $fe_last_val_52a2bb1d407b38940244f68a9beda36a_1  = 0;
}
else
{
    $fe_first_val_52a2bb1d407b38940244f68a9beda36a_1 = $fe_offset_52a2bb1d407b38940244f68a9beda36a_1;
    $fe_last_val_52a2bb1d407b38940244f68a9beda36a_1  = $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 - 1;
}
// foreach
for ( $fe_i_52a2bb1d407b38940244f68a9beda36a_1 = $fe_first_val_52a2bb1d407b38940244f68a9beda36a_1; $fe_n_items_processed_52a2bb1d407b38940244f68a9beda36a_1 < $fe_max_52a2bb1d407b38940244f68a9beda36a_1 && ( $fe_reverse_52a2bb1d407b38940244f68a9beda36a_1 ? $fe_i_52a2bb1d407b38940244f68a9beda36a_1 >= $fe_last_val_52a2bb1d407b38940244f68a9beda36a_1 : $fe_i_52a2bb1d407b38940244f68a9beda36a_1 <= $fe_last_val_52a2bb1d407b38940244f68a9beda36a_1 ); $fe_reverse_52a2bb1d407b38940244f68a9beda36a_1 ? $fe_i_52a2bb1d407b38940244f68a9beda36a_1-- : $fe_i_52a2bb1d407b38940244f68a9beda36a_1++ )
{
$fe_key_52a2bb1d407b38940244f68a9beda36a_1 = $fe_array_keys_52a2bb1d407b38940244f68a9beda36a_1[$fe_i_52a2bb1d407b38940244f68a9beda36a_1];
$fe_val_52a2bb1d407b38940244f68a9beda36a_1 = $fe_array_52a2bb1d407b38940244f68a9beda36a_1[$fe_key_52a2bb1d407b38940244f68a9beda36a_1];
$vars[$rootNamespace]['info'] = $fe_val_52a2bb1d407b38940244f68a9beda36a_1;
$vars[$rootNamespace]['currency_code'] = $fe_key_52a2bb1d407b38940244f68a9beda36a_1;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currency_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currency_code'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currency_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currency_code'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'currency', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['currency'] = $var;
    unset( $var );
}
$text .= '        ';
}
else
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'currency', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['currency'] = false;
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currency', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currency'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
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
$text .= '        ';
}
else
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'locale', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['locale'] = false;
}
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'symbol', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['symbol'] = false;
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'quantity_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['quantity_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'br_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['br_tag'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['info'] : null;
$var4 = compiledFetchAttribute( $var3, 'sum_count' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . $var2 . $var3 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'quantity_text', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['quantity_text'] = $var;
    unset( $var );
}
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_ex_vat_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_ex_vat_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'br_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['br_tag'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
// l10nTransformation begin
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['info'] : null;
$var5 = compiledFetchAttribute( $var4, 'sum_ex_vat' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$locale = eZLocale::instance( $var5 );
unset( $var4, $var5 );
// l10nTransformation: static
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['info'] : null;
$var5 = compiledFetchAttribute( $var4, 'sum_ex_vat' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
if( $var7 === false)
$var3 = $locale->formatCurrencyWithSymbol( $var4, $locale->attribute( 'currency_symbol' ) );
else
$var3 = $locale->formatCurrencyWithSymbol( $var4, $var7 );
unset( $var4, $var5, $var6, $var7 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . $var2 . $var3 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'total_ex_vat_text', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['total_ex_vat_text'] = $var;
    unset( $var );
}
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_inc_vat_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_inc_vat_text'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'br_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['br_tag'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
// l10nTransformation begin
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['info'] : null;
$var5 = compiledFetchAttribute( $var4, 'sum_inc_vat' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$locale = eZLocale::instance( $var5 );
unset( $var4, $var5 );
// l10nTransformation: static
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['info'] : null;
$var5 = compiledFetchAttribute( $var4, 'sum_inc_vat' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var6 );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'symbol', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['symbol'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
if( $var7 === false)
$var3 = $locale->formatCurrencyWithSymbol( $var4, $locale->attribute( 'currency_symbol' ) );
else
$var3 = $locale->formatCurrencyWithSymbol( $var4, $var7 );
unset( $var4, $var5, $var6, $var7 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . $var2 . $var3 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'total_inc_vat_text', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['total_inc_vat_text'] = $var;
    unset( $var );
}
$text .= '
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'br_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['br_tag'] : null;
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
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'br_tag', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['br_tag'] = '<br />';
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_52a2bb1d407b38940244f68a9beda36a_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_52a2bb1d407b38940244f68a9beda36a_1 ) ) extract( array_pop( $fe_variable_stack_52a2bb1d407b38940244f68a9beda36a_1 ) );

else
{

unset( $fe_array_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_array_keys_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_n_items_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_n_items_processed_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_i_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_key_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_val_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_offset_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_max_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_reverse_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_first_val_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_last_val_52a2bb1d407b38940244f68a9beda36a_1 );

unset( $fe_variable_stack_52a2bb1d407b38940244f68a9beda36a_1 );

}

// foreach ends
$text .= '
    <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Product', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Product'] : null;
$var1 = compiledFetchAttribute( $var, 'sequence' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Product', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Product'] : null;
$var1 = compiledFetchAttribute( $var, 'product' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object'] = $var;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'id' );
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/text_linked-ddf367865cb579c54e3c31995eb56f79.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/content/view/text_linked.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/text_linked-ddf367865cb579c54e3c31995eb56f79.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/content/view/text_linked.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object'] );
$text .= '</td>
        <td align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'quantity_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['quantity_text'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
        <td align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_ex_vat_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_ex_vat_text'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
        <td align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_inc_vat_text', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_inc_vat_text'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
    </tr>
';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '
</table>';
}

// undef all
$tpl->unsetLocalVariables();
$text .= '
</div>
';

$setArray = $oldSetArray_e18aa6c91b1d814003c120ebdf1c4607;
$tpl->Level--;
?>

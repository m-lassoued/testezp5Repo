<?php
// URI:       design:shop/orderemail.tpl
// Filename:  design/base/templates/shop/orderemail.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_602340e6c7009eee18b5d68bee180f65 = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= 'Order: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'order_nr' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$blockText = $text;
$vars[$rootNamespace]['subject'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
$text .= 'Order: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'order_nr' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
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
      1 => 'ascii',
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
    0 => 4,
    1 => 0,
    2 => 169,
  ),
  1 => 
  array (
    0 => 4,
    1 => 45,
    2 => 214,
  ),
  2 => 'design/base/templates/shop/orderemail.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '
';
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
    0 => 7,
    1 => 0,
    2 => 219,
  ),
  1 => 
  array (
    0 => 10,
    1 => 40,
    2 => 413,
  ),
  2 => 'design/base/templates/shop/orderemail.tpl',
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
    0 => 7,
    1 => 0,
    2 => 219,
  ),
  1 => 
  array (
    0 => 10,
    1 => 40,
    2 => 413,
  ),
  2 => 'design/base/templates/shop/orderemail.tpl',
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
    0 => 7,
    1 => 0,
    2 => 219,
  ),
  1 => 
  array (
    0 => 10,
    1 => 40,
    2 => 413,
  ),
  2 => 'design/base/templates/shop/orderemail.tpl',
) );
    $tpl->setVariable( 'symbol', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'symbol', false, $rootNamespace );
}

// def $order_info
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'order_info' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'order_info', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'order_info' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 0,
    2 => 219,
  ),
  1 => 
  array (
    0 => 10,
    1 => 40,
    2 => 413,
  ),
  2 => 'design/base/templates/shop/orderemail.tpl',
) );
    $tpl->setVariable( 'order_info', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'order_info', $var, $rootNamespace );
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
Product items:
';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'product_items' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'ProductItem';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
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

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ProductItem";
else
    $namespace .= ':ProductItem';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'object_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ': ';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ProductItem";
else
    $namespace .= ':ProductItem';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'item_count' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' x ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ProductItem";
else
    $namespace .= ':ProductItem';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
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
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ProductItem";
else
    $namespace .= ':ProductItem';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
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

$text .= ': ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ProductItem";
else
    $namespace .= ':ProductItem';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
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
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "ProductItem";
else
    $namespace .= ':ProductItem';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
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
';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '
Subtotal inc. VAT: ';
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
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_1 ) ) $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_1 = array();
$fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_1[] = compact( 'fe_array_651f3d3ad406f57c7eef78664faa1935_1', 'fe_array_keys_651f3d3ad406f57c7eef78664faa1935_1', 'fe_n_items_651f3d3ad406f57c7eef78664faa1935_1', 'fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_1', 'fe_i_651f3d3ad406f57c7eef78664faa1935_1', 'fe_key_651f3d3ad406f57c7eef78664faa1935_1', 'fe_val_651f3d3ad406f57c7eef78664faa1935_1', 'fe_offset_651f3d3ad406f57c7eef78664faa1935_1', 'fe_max_651f3d3ad406f57c7eef78664faa1935_1', 'fe_reverse_651f3d3ad406f57c7eef78664faa1935_1', 'fe_first_val_651f3d3ad406f57c7eef78664faa1935_1', 'fe_last_val_651f3d3ad406f57c7eef78664faa1935_1' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$fe_array_651f3d3ad406f57c7eef78664faa1935_11 = compiledFetchAttribute( $fe_array_651f3d3ad406f57c7eef78664faa1935_1, 'additional_info' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_1 = $fe_array_651f3d3ad406f57c7eef78664faa1935_11;
if (! isset( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 ) ) $fe_array_651f3d3ad406f57c7eef78664faa1935_1 = NULL;
while ( is_object( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 ) and method_exists( $fe_array_651f3d3ad406f57c7eef78664faa1935_1, 'templateValue' ) )
    $fe_array_651f3d3ad406f57c7eef78664faa1935_1 = $fe_array_651f3d3ad406f57c7eef78664faa1935_1->templateValue();

$fe_array_keys_651f3d3ad406f57c7eef78664faa1935_1 = is_array( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 ) ? array_keys( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 ) : array();
$fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 = count( $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_1 );
$fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_1 = 0;
$fe_offset_651f3d3ad406f57c7eef78664faa1935_1 = 0;
$fe_max_651f3d3ad406f57c7eef78664faa1935_1 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_1;
$fe_reverse_651f3d3ad406f57c7eef78664faa1935_1 = false;
if ( $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 < 0 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 >= $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 )
{
    $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 = ( $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 < 0 ) ? 0 : $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1;
    if ( $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_651f3d3ad406f57c7eef78664faa1935_1'. Array count: $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1");   
}
}
if ( $fe_max_651f3d3ad406f57c7eef78664faa1935_1 < 0 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 + $fe_max_651f3d3ad406f57c7eef78664faa1935_1 > $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 )
{
    if ( $fe_max_651f3d3ad406f57c7eef78664faa1935_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_651f3d3ad406f57c7eef78664faa1935_1");
    $fe_max_651f3d3ad406f57c7eef78664faa1935_1 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_1;
}
if ( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_1 )
{
    $fe_first_val_651f3d3ad406f57c7eef78664faa1935_1 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 - 1 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_1;
    $fe_last_val_651f3d3ad406f57c7eef78664faa1935_1  = 0;
}
else
{
    $fe_first_val_651f3d3ad406f57c7eef78664faa1935_1 = $fe_offset_651f3d3ad406f57c7eef78664faa1935_1;
    $fe_last_val_651f3d3ad406f57c7eef78664faa1935_1  = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 - 1;
}
// foreach
for ( $fe_i_651f3d3ad406f57c7eef78664faa1935_1 = $fe_first_val_651f3d3ad406f57c7eef78664faa1935_1; $fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_1 < $fe_max_651f3d3ad406f57c7eef78664faa1935_1 && ( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_1 ? $fe_i_651f3d3ad406f57c7eef78664faa1935_1 >= $fe_last_val_651f3d3ad406f57c7eef78664faa1935_1 : $fe_i_651f3d3ad406f57c7eef78664faa1935_1 <= $fe_last_val_651f3d3ad406f57c7eef78664faa1935_1 ); $fe_reverse_651f3d3ad406f57c7eef78664faa1935_1 ? $fe_i_651f3d3ad406f57c7eef78664faa1935_1-- : $fe_i_651f3d3ad406f57c7eef78664faa1935_1++ )
{
$fe_key_651f3d3ad406f57c7eef78664faa1935_1 = $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_1[$fe_i_651f3d3ad406f57c7eef78664faa1935_1];
$fe_val_651f3d3ad406f57c7eef78664faa1935_1 = $fe_array_651f3d3ad406f57c7eef78664faa1935_1[$fe_key_651f3d3ad406f57c7eef78664faa1935_1];
$vars[$rootNamespace]['additional_info'] = $fe_val_651f3d3ad406f57c7eef78664faa1935_1;
$vars[$rootNamespace]['order_item_type'] = $fe_key_651f3d3ad406f57c7eef78664faa1935_1;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ezcustomshipping' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'Shipping total inc. VAT: ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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

}
else
{
$text .= 'Item total inc. VAT: ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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

}
unset( $if_cond );
// if ends

$fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_1 ) ) extract( array_pop( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_1 ) );

else
{

unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_n_items_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_i_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_key_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_val_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_offset_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_max_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_first_val_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_last_val_651f3d3ad406f57c7eef78664faa1935_1 );

unset( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_1 );

}

// foreach ends
$text .= '
Total inc. VAT: ';
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


Order summary:

Subtotal of items ex. VAT: ';
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
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_2 ) ) $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_2 = array();
$fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_2[] = compact( 'fe_array_651f3d3ad406f57c7eef78664faa1935_2', 'fe_array_keys_651f3d3ad406f57c7eef78664faa1935_2', 'fe_n_items_651f3d3ad406f57c7eef78664faa1935_2', 'fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_2', 'fe_i_651f3d3ad406f57c7eef78664faa1935_2', 'fe_key_651f3d3ad406f57c7eef78664faa1935_2', 'fe_val_651f3d3ad406f57c7eef78664faa1935_2', 'fe_offset_651f3d3ad406f57c7eef78664faa1935_2', 'fe_max_651f3d3ad406f57c7eef78664faa1935_2', 'fe_reverse_651f3d3ad406f57c7eef78664faa1935_2', 'fe_first_val_651f3d3ad406f57c7eef78664faa1935_2', 'fe_last_val_651f3d3ad406f57c7eef78664faa1935_2' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$fe_array_651f3d3ad406f57c7eef78664faa1935_21 = compiledFetchAttribute( $fe_array_651f3d3ad406f57c7eef78664faa1935_2, 'additional_info' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_2 = $fe_array_651f3d3ad406f57c7eef78664faa1935_21;
if (! isset( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 ) ) $fe_array_651f3d3ad406f57c7eef78664faa1935_2 = NULL;
while ( is_object( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 ) and method_exists( $fe_array_651f3d3ad406f57c7eef78664faa1935_2, 'templateValue' ) )
    $fe_array_651f3d3ad406f57c7eef78664faa1935_2 = $fe_array_651f3d3ad406f57c7eef78664faa1935_2->templateValue();

$fe_array_keys_651f3d3ad406f57c7eef78664faa1935_2 = is_array( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 ) ? array_keys( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 ) : array();
$fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 = count( $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_2 );
$fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_2 = 0;
$fe_offset_651f3d3ad406f57c7eef78664faa1935_2 = 0;
$fe_max_651f3d3ad406f57c7eef78664faa1935_2 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_2;
$fe_reverse_651f3d3ad406f57c7eef78664faa1935_2 = false;
if ( $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 < 0 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 >= $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 )
{
    $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 = ( $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 < 0 ) ? 0 : $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2;
    if ( $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_651f3d3ad406f57c7eef78664faa1935_2'. Array count: $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2");   
}
}
if ( $fe_max_651f3d3ad406f57c7eef78664faa1935_2 < 0 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 + $fe_max_651f3d3ad406f57c7eef78664faa1935_2 > $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 )
{
    if ( $fe_max_651f3d3ad406f57c7eef78664faa1935_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_651f3d3ad406f57c7eef78664faa1935_2");
    $fe_max_651f3d3ad406f57c7eef78664faa1935_2 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_2;
}
if ( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_2 )
{
    $fe_first_val_651f3d3ad406f57c7eef78664faa1935_2 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 - 1 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_2;
    $fe_last_val_651f3d3ad406f57c7eef78664faa1935_2  = 0;
}
else
{
    $fe_first_val_651f3d3ad406f57c7eef78664faa1935_2 = $fe_offset_651f3d3ad406f57c7eef78664faa1935_2;
    $fe_last_val_651f3d3ad406f57c7eef78664faa1935_2  = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 - 1;
}
// foreach
for ( $fe_i_651f3d3ad406f57c7eef78664faa1935_2 = $fe_first_val_651f3d3ad406f57c7eef78664faa1935_2; $fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_2 < $fe_max_651f3d3ad406f57c7eef78664faa1935_2 && ( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_2 ? $fe_i_651f3d3ad406f57c7eef78664faa1935_2 >= $fe_last_val_651f3d3ad406f57c7eef78664faa1935_2 : $fe_i_651f3d3ad406f57c7eef78664faa1935_2 <= $fe_last_val_651f3d3ad406f57c7eef78664faa1935_2 ); $fe_reverse_651f3d3ad406f57c7eef78664faa1935_2 ? $fe_i_651f3d3ad406f57c7eef78664faa1935_2-- : $fe_i_651f3d3ad406f57c7eef78664faa1935_2++ )
{
$fe_key_651f3d3ad406f57c7eef78664faa1935_2 = $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_2[$fe_i_651f3d3ad406f57c7eef78664faa1935_2];
$fe_val_651f3d3ad406f57c7eef78664faa1935_2 = $fe_array_651f3d3ad406f57c7eef78664faa1935_2[$fe_key_651f3d3ad406f57c7eef78664faa1935_2];
$vars[$rootNamespace]['additional_info'] = $fe_val_651f3d3ad406f57c7eef78664faa1935_2;
$vars[$rootNamespace]['order_item_type'] = $fe_key_651f3d3ad406f57c7eef78664faa1935_2;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_item_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_item_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ezcustomshipping' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'Shipping total ex. VAT: ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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

}
else
{
$text .= 'Item total ex. VAT: ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total' );
unset( $var1 );
$var1 = $var2;
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

}
unset( $if_cond );
// if ends

$fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_2 ) ) extract( array_pop( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_2 ) );

else
{

unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_n_items_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_i_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_key_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_val_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_offset_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_max_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_first_val_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_last_val_651f3d3ad406f57c7eef78664faa1935_2 );

unset( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_2 );

}

// foreach ends
$text .= '
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'additional_info' );
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
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_3 ) ) $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_3 = array();
$fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_3[] = compact( 'fe_array_651f3d3ad406f57c7eef78664faa1935_3', 'fe_array_keys_651f3d3ad406f57c7eef78664faa1935_3', 'fe_n_items_651f3d3ad406f57c7eef78664faa1935_3', 'fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_3', 'fe_i_651f3d3ad406f57c7eef78664faa1935_3', 'fe_key_651f3d3ad406f57c7eef78664faa1935_3', 'fe_val_651f3d3ad406f57c7eef78664faa1935_3', 'fe_offset_651f3d3ad406f57c7eef78664faa1935_3', 'fe_max_651f3d3ad406f57c7eef78664faa1935_3', 'fe_reverse_651f3d3ad406f57c7eef78664faa1935_3', 'fe_first_val_651f3d3ad406f57c7eef78664faa1935_3', 'fe_last_val_651f3d3ad406f57c7eef78664faa1935_3' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$fe_array_651f3d3ad406f57c7eef78664faa1935_31 = compiledFetchAttribute( $fe_array_651f3d3ad406f57c7eef78664faa1935_3, 'price_info' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_3 = $fe_array_651f3d3ad406f57c7eef78664faa1935_31;
$fe_array_651f3d3ad406f57c7eef78664faa1935_31 = compiledFetchAttribute( $fe_array_651f3d3ad406f57c7eef78664faa1935_3, 'items' );
unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 );
$fe_array_651f3d3ad406f57c7eef78664faa1935_3 = $fe_array_651f3d3ad406f57c7eef78664faa1935_31;
if (! isset( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 ) ) $fe_array_651f3d3ad406f57c7eef78664faa1935_3 = NULL;
while ( is_object( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 ) and method_exists( $fe_array_651f3d3ad406f57c7eef78664faa1935_3, 'templateValue' ) )
    $fe_array_651f3d3ad406f57c7eef78664faa1935_3 = $fe_array_651f3d3ad406f57c7eef78664faa1935_3->templateValue();

$fe_array_keys_651f3d3ad406f57c7eef78664faa1935_3 = is_array( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 ) ? array_keys( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 ) : array();
$fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 = count( $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_3 );
$fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_3 = 0;
$fe_offset_651f3d3ad406f57c7eef78664faa1935_3 = 0;
$fe_max_651f3d3ad406f57c7eef78664faa1935_3 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_3;
$fe_reverse_651f3d3ad406f57c7eef78664faa1935_3 = false;
if ( $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 < 0 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 >= $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 )
{
    $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 = ( $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 < 0 ) ? 0 : $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3;
    if ( $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_651f3d3ad406f57c7eef78664faa1935_3'. Array count: $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3");   
}
}
if ( $fe_max_651f3d3ad406f57c7eef78664faa1935_3 < 0 || $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 + $fe_max_651f3d3ad406f57c7eef78664faa1935_3 > $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 )
{
    if ( $fe_max_651f3d3ad406f57c7eef78664faa1935_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_651f3d3ad406f57c7eef78664faa1935_3");
    $fe_max_651f3d3ad406f57c7eef78664faa1935_3 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_3;
}
if ( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_3 )
{
    $fe_first_val_651f3d3ad406f57c7eef78664faa1935_3 = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 - 1 - $fe_offset_651f3d3ad406f57c7eef78664faa1935_3;
    $fe_last_val_651f3d3ad406f57c7eef78664faa1935_3  = 0;
}
else
{
    $fe_first_val_651f3d3ad406f57c7eef78664faa1935_3 = $fe_offset_651f3d3ad406f57c7eef78664faa1935_3;
    $fe_last_val_651f3d3ad406f57c7eef78664faa1935_3  = $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 - 1;
}
// foreach
for ( $fe_i_651f3d3ad406f57c7eef78664faa1935_3 = $fe_first_val_651f3d3ad406f57c7eef78664faa1935_3; $fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_3 < $fe_max_651f3d3ad406f57c7eef78664faa1935_3 && ( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_3 ? $fe_i_651f3d3ad406f57c7eef78664faa1935_3 >= $fe_last_val_651f3d3ad406f57c7eef78664faa1935_3 : $fe_i_651f3d3ad406f57c7eef78664faa1935_3 <= $fe_last_val_651f3d3ad406f57c7eef78664faa1935_3 ); $fe_reverse_651f3d3ad406f57c7eef78664faa1935_3 ? $fe_i_651f3d3ad406f57c7eef78664faa1935_3-- : $fe_i_651f3d3ad406f57c7eef78664faa1935_3++ )
{
$fe_key_651f3d3ad406f57c7eef78664faa1935_3 = $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_3[$fe_i_651f3d3ad406f57c7eef78664faa1935_3];
$fe_val_651f3d3ad406f57c7eef78664faa1935_3 = $fe_array_651f3d3ad406f57c7eef78664faa1935_3[$fe_key_651f3d3ad406f57c7eef78664faa1935_3];
$vars[$rootNamespace]['order_info'] = $fe_val_651f3d3ad406f57c7eef78664faa1935_3;
$vars[$rootNamespace]['vat_value'] = $fe_key_651f3d3ad406f57c7eef78664faa1935_3;
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'total_price_vat' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'Total VAT (';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'vat_value', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['vat_value'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '%) ';
unset( $var );
// l10nTransformation begin
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_price_vat' );
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'total_price_vat' );
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
';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_3 ) ) extract( array_pop( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_3 ) );

else
{

unset( $fe_array_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_array_keys_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_n_items_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_n_items_processed_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_i_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_key_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_val_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_offset_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_max_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_reverse_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_first_val_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_last_val_651f3d3ad406f57c7eef78664faa1935_3 );

unset( $fe_variable_stack_651f3d3ad406f57c7eef78664faa1935_3 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= 'Order total: ';
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

// undef $currency
$tpl->unsetLocalVariable( 'currency', $rootNamespace );

// undef $locale
$tpl->unsetLocalVariable( 'locale', $rootNamespace );

// undef $symbol
$tpl->unsetLocalVariable( 'symbol', $rootNamespace );


$setArray = $oldSetArray_602340e6c7009eee18b5d68bee180f65;
$tpl->Level--;
?>

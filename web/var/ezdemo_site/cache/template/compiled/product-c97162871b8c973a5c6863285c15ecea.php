<?php
// URI:       extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_5153fd2c37056d3d30f4af9e54b55805 = isset( $setArray ) ? $setArray : array();
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

$text .= '<article class="selected-products">
    <div class="attribute-image">
        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'href' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'url_alias',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezurl',
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'productthumbnail',
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
        2 => 'node',
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
          1 => 'data_map',
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
          1 => 'image',
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
    0 => 3,
    1 => 8,
    2 => 79,
  ),
  1 => 
  array (
    0 => 3,
    1 => 113,
    2 => 184,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/block_item/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>
    <div class="product-info">
        <div class="attribute-header">
            <a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" class="teaser-link">
                <h3>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</h3>
            </a>
        </div>
        <ul class="breadcrumb">
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_5 ) ) $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_5 = array();
$fe_variable_stack_eaeefba7d2d71e68503610f69933f288_5[] = compact( 'fe_array_eaeefba7d2d71e68503610f69933f288_5', 'fe_array_keys_eaeefba7d2d71e68503610f69933f288_5', 'fe_n_items_eaeefba7d2d71e68503610f69933f288_5', 'fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_5', 'fe_i_eaeefba7d2d71e68503610f69933f288_5', 'fe_key_eaeefba7d2d71e68503610f69933f288_5', 'fe_val_eaeefba7d2d71e68503610f69933f288_5', 'fe_offset_eaeefba7d2d71e68503610f69933f288_5', 'fe_max_eaeefba7d2d71e68503610f69933f288_5', 'fe_reverse_eaeefba7d2d71e68503610f69933f288_5', 'fe_first_val_eaeefba7d2d71e68503610f69933f288_5', 'fe_last_val_eaeefba7d2d71e68503610f69933f288_5' );
unset( $fe_array_eaeefba7d2d71e68503610f69933f288_5 );
unset( $fe_array_eaeefba7d2d71e68503610f69933f288_5 );
$fe_array_eaeefba7d2d71e68503610f69933f288_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_eaeefba7d2d71e68503610f69933f288_51 = compiledFetchAttribute( $fe_array_eaeefba7d2d71e68503610f69933f288_5, 'path' );
unset( $fe_array_eaeefba7d2d71e68503610f69933f288_5 );
$fe_array_eaeefba7d2d71e68503610f69933f288_5 = $fe_array_eaeefba7d2d71e68503610f69933f288_51;
if (! isset( $fe_array_eaeefba7d2d71e68503610f69933f288_5 ) ) $fe_array_eaeefba7d2d71e68503610f69933f288_5 = NULL;
while ( is_object( $fe_array_eaeefba7d2d71e68503610f69933f288_5 ) and method_exists( $fe_array_eaeefba7d2d71e68503610f69933f288_5, 'templateValue' ) )
    $fe_array_eaeefba7d2d71e68503610f69933f288_5 = $fe_array_eaeefba7d2d71e68503610f69933f288_5->templateValue();

$fe_array_keys_eaeefba7d2d71e68503610f69933f288_5 = is_array( $fe_array_eaeefba7d2d71e68503610f69933f288_5 ) ? array_keys( $fe_array_eaeefba7d2d71e68503610f69933f288_5 ) : array();
$fe_n_items_eaeefba7d2d71e68503610f69933f288_5 = count( $fe_array_keys_eaeefba7d2d71e68503610f69933f288_5 );
$fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_5 = 0;
$fe_offset_eaeefba7d2d71e68503610f69933f288_5 = 0;
$fe_max_eaeefba7d2d71e68503610f69933f288_5 = $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 - $fe_offset_eaeefba7d2d71e68503610f69933f288_5;
$fe_reverse_eaeefba7d2d71e68503610f69933f288_5 = false;
if ( $fe_offset_eaeefba7d2d71e68503610f69933f288_5 < 0 || $fe_offset_eaeefba7d2d71e68503610f69933f288_5 >= $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 )
{
    $fe_offset_eaeefba7d2d71e68503610f69933f288_5 = ( $fe_offset_eaeefba7d2d71e68503610f69933f288_5 < 0 ) ? 0 : $fe_n_items_eaeefba7d2d71e68503610f69933f288_5;
    if ( $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 || $fe_offset_eaeefba7d2d71e68503610f69933f288_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_eaeefba7d2d71e68503610f69933f288_5'. Array count: $fe_n_items_eaeefba7d2d71e68503610f69933f288_5");   
}
}
if ( $fe_max_eaeefba7d2d71e68503610f69933f288_5 < 0 || $fe_offset_eaeefba7d2d71e68503610f69933f288_5 + $fe_max_eaeefba7d2d71e68503610f69933f288_5 > $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 )
{
    if ( $fe_max_eaeefba7d2d71e68503610f69933f288_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_eaeefba7d2d71e68503610f69933f288_5");
    $fe_max_eaeefba7d2d71e68503610f69933f288_5 = $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 - $fe_offset_eaeefba7d2d71e68503610f69933f288_5;
}
if ( $fe_reverse_eaeefba7d2d71e68503610f69933f288_5 )
{
    $fe_first_val_eaeefba7d2d71e68503610f69933f288_5 = $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 - 1 - $fe_offset_eaeefba7d2d71e68503610f69933f288_5;
    $fe_last_val_eaeefba7d2d71e68503610f69933f288_5  = 0;
}
else
{
    $fe_first_val_eaeefba7d2d71e68503610f69933f288_5 = $fe_offset_eaeefba7d2d71e68503610f69933f288_5;
    $fe_last_val_eaeefba7d2d71e68503610f69933f288_5  = $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 - 1;
}
// foreach
for ( $fe_i_eaeefba7d2d71e68503610f69933f288_5 = $fe_first_val_eaeefba7d2d71e68503610f69933f288_5; $fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_5 < $fe_max_eaeefba7d2d71e68503610f69933f288_5 && ( $fe_reverse_eaeefba7d2d71e68503610f69933f288_5 ? $fe_i_eaeefba7d2d71e68503610f69933f288_5 >= $fe_last_val_eaeefba7d2d71e68503610f69933f288_5 : $fe_i_eaeefba7d2d71e68503610f69933f288_5 <= $fe_last_val_eaeefba7d2d71e68503610f69933f288_5 ); $fe_reverse_eaeefba7d2d71e68503610f69933f288_5 ? $fe_i_eaeefba7d2d71e68503610f69933f288_5-- : $fe_i_eaeefba7d2d71e68503610f69933f288_5++ )
{
$fe_key_eaeefba7d2d71e68503610f69933f288_5 = $fe_array_keys_eaeefba7d2d71e68503610f69933f288_5[$fe_i_eaeefba7d2d71e68503610f69933f288_5];
$fe_val_eaeefba7d2d71e68503610f69933f288_5 = $fe_array_eaeefba7d2d71e68503610f69933f288_5[$fe_key_eaeefba7d2d71e68503610f69933f288_5];
$vars[$rootNamespace]['path_item'] = $fe_val_eaeefba7d2d71e68503610f69933f288_5;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '                <span class="divider">»</span>
                ';
} // delimiter ends

$text .= '            <li>
                <a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'path_item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['path_item'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '</a>
                            </li>
            ';
$fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_5 ) ) extract( array_pop( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_5 ) );

else
{

unset( $fe_array_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_array_keys_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_n_items_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_n_items_processed_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_i_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_key_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_val_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_offset_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_max_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_reverse_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_first_val_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_last_val_eaeefba7d2d71e68503610f69933f288_5 );

unset( $fe_variable_stack_eaeefba7d2d71e68503610f69933f288_5 );

}

// foreach ends
$text .= '        </ul>
        <form method="post" action="/testezp/web/index.php/eng/content/action">
            <fieldset>
                <div class="item-price">
                    ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'price' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'inc_vat_price' );
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

$text .= '
                </div>
                <div class="item-buying-action form-inline">
                    <label>
                        <span class="hidden">Amount</span>
                        <input type="text" name="Quantity" />
                    </label>
                    <button class="btn btn-warning" type="submit" name="ActionAddToBasket">
                        Buy
                    </button>
                </div>
            </fieldset>
            <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
            <input type="hidden" name="ViewMode" value="full" />
        </form>
    </div>
</article>
';

$setArray = $oldSetArray_5153fd2c37056d3d30f4af9e54b55805;
$tpl->Level--;
?>

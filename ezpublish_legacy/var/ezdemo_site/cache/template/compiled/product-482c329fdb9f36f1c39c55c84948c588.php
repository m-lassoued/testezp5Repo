<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/full/product.tpl
// Timestamp: 1389968167 (Fri Jan 17 15:16:07 CET 2014)
$oldSetArray_acae2607f641e73d0f8a4912febdc420 = isset( $setArray ) ? $setArray : array();
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
if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = array (
  'left_menu' => false,
  'extra_menu' => false,
);
}
$text .= '

<section class="content-view-full">
    <article class="class-product row">
        <div class="span8">
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'image' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <div class="attribute-image full-head">
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
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'productimage',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 12,
    1 => 20,
    2 => 392,
  ),
  1 => 
  array (
    0 => 12,
    1 => 94,
    2 => 466,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '
                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'caption' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <div class="attribute-caption">
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
          1 => 'caption',
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
    0 => 16,
    1 => 28,
    2 => 614,
  ),
  1 => 
  array (
    0 => 16,
    1 => 79,
    2 => 665,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                        </div>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '
            <div class="attribute-short">
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
          1 => 'short_description',
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
    0 => 23,
    1 => 15,
    2 => 824,
  ),
  1 => 
  array (
    0 => 23,
    1 => 76,
    2 => 885,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            </div>

            <div class="attribute-long">
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
          1 => 'description',
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
    0 => 27,
    1 => 15,
    2 => 964,
  ),
  1 => 
  array (
    0 => 27,
    1 => 70,
    2 => 1019,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            </div>

            
            ';
// def $product_category_attribute
if ( $tpl->hasVariable( 'product_category_attribute', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'product_category_attribute' is already defined.", array (
  0 => 
  array (
    0 => 31,
    1 => 12,
    2 => 1082,
  ),
  1 => 
  array (
    0 => 31,
    1 => 106,
    2 => 1176,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
) );
    $tpl->setVariable( 'product_category_attribute', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'product_category_attribute', '', $rootNamespace );
}

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_category_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_category_attribute'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'data_map' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product_category_attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product_category_attribute'] : null;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = compiledFetchAttribute( $if_cond3, $if_cond5 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
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
$text .= '            <div class="attribute-long">
              <p>Category:&nbsp;';
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
          0 => 4,
          1 => 
          array (
            0 => '',
            1 => 2,
            2 => 'product_category_attribute',
          ),
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
    0 => 34,
    1 => 32,
    2 => 1358,
  ),
  1 => 
  array (
    0 => 34,
    1 => 103,
    2 => 1429,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
            </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// undef $product_category_attribute
$tpl->unsetLocalVariable( 'product_category_attribute', $rootNamespace );

$text .= '
           
           ';
// def $related_purchase
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchRelatedPurchaseList' ),
  array(     'contentobject_id' => $var1,
    'limit' => 10 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_purchase', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_purchase' is already defined.", array (
  0 => 
  array (
    0 => 40,
    1 => 11,
    2 => 1568,
  ),
  1 => 
  array (
    0 => 40,
    1 => 126,
    2 => 1683,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
) );
    $tpl->setVariable( 'related_purchase', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_purchase', $var, $rootNamespace );
}

$text .= '           ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_purchase', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_purchase'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="relatedorders">
                <h2>People who bought this also bought</h2>

                <ul>
                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_440dbe5a7bea565de77743286e42fb1b_1 ) ) $fe_variable_stack_440dbe5a7bea565de77743286e42fb1b_1 = array();
$fe_variable_stack_440dbe5a7bea565de77743286e42fb1b_1[] = compact( 'fe_array_440dbe5a7bea565de77743286e42fb1b_1', 'fe_array_keys_440dbe5a7bea565de77743286e42fb1b_1', 'fe_n_items_440dbe5a7bea565de77743286e42fb1b_1', 'fe_n_items_processed_440dbe5a7bea565de77743286e42fb1b_1', 'fe_i_440dbe5a7bea565de77743286e42fb1b_1', 'fe_key_440dbe5a7bea565de77743286e42fb1b_1', 'fe_val_440dbe5a7bea565de77743286e42fb1b_1', 'fe_offset_440dbe5a7bea565de77743286e42fb1b_1', 'fe_max_440dbe5a7bea565de77743286e42fb1b_1', 'fe_reverse_440dbe5a7bea565de77743286e42fb1b_1', 'fe_first_val_440dbe5a7bea565de77743286e42fb1b_1', 'fe_last_val_440dbe5a7bea565de77743286e42fb1b_1' );
unset( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 );
unset( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 );
$fe_array_440dbe5a7bea565de77743286e42fb1b_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_purchase', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_purchase'] : null;
if (! isset( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 ) ) $fe_array_440dbe5a7bea565de77743286e42fb1b_1 = NULL;
while ( is_object( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 ) and method_exists( $fe_array_440dbe5a7bea565de77743286e42fb1b_1, 'templateValue' ) )
    $fe_array_440dbe5a7bea565de77743286e42fb1b_1 = $fe_array_440dbe5a7bea565de77743286e42fb1b_1->templateValue();

$fe_array_keys_440dbe5a7bea565de77743286e42fb1b_1 = is_array( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 ) ? array_keys( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 ) : array();
$fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 = count( $fe_array_keys_440dbe5a7bea565de77743286e42fb1b_1 );
$fe_n_items_processed_440dbe5a7bea565de77743286e42fb1b_1 = 0;
$fe_offset_440dbe5a7bea565de77743286e42fb1b_1 = 0;
$fe_max_440dbe5a7bea565de77743286e42fb1b_1 = $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 - $fe_offset_440dbe5a7bea565de77743286e42fb1b_1;
$fe_reverse_440dbe5a7bea565de77743286e42fb1b_1 = false;
if ( $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 < 0 || $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 >= $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 )
{
    $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 = ( $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 < 0 ) ? 0 : $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1;
    if ( $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 || $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_440dbe5a7bea565de77743286e42fb1b_1'. Array count: $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1");   
}
}
if ( $fe_max_440dbe5a7bea565de77743286e42fb1b_1 < 0 || $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 + $fe_max_440dbe5a7bea565de77743286e42fb1b_1 > $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 )
{
    if ( $fe_max_440dbe5a7bea565de77743286e42fb1b_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_440dbe5a7bea565de77743286e42fb1b_1");
    $fe_max_440dbe5a7bea565de77743286e42fb1b_1 = $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 - $fe_offset_440dbe5a7bea565de77743286e42fb1b_1;
}
if ( $fe_reverse_440dbe5a7bea565de77743286e42fb1b_1 )
{
    $fe_first_val_440dbe5a7bea565de77743286e42fb1b_1 = $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 - 1 - $fe_offset_440dbe5a7bea565de77743286e42fb1b_1;
    $fe_last_val_440dbe5a7bea565de77743286e42fb1b_1  = 0;
}
else
{
    $fe_first_val_440dbe5a7bea565de77743286e42fb1b_1 = $fe_offset_440dbe5a7bea565de77743286e42fb1b_1;
    $fe_last_val_440dbe5a7bea565de77743286e42fb1b_1  = $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 - 1;
}
// foreach
for ( $fe_i_440dbe5a7bea565de77743286e42fb1b_1 = $fe_first_val_440dbe5a7bea565de77743286e42fb1b_1; $fe_n_items_processed_440dbe5a7bea565de77743286e42fb1b_1 < $fe_max_440dbe5a7bea565de77743286e42fb1b_1 && ( $fe_reverse_440dbe5a7bea565de77743286e42fb1b_1 ? $fe_i_440dbe5a7bea565de77743286e42fb1b_1 >= $fe_last_val_440dbe5a7bea565de77743286e42fb1b_1 : $fe_i_440dbe5a7bea565de77743286e42fb1b_1 <= $fe_last_val_440dbe5a7bea565de77743286e42fb1b_1 ); $fe_reverse_440dbe5a7bea565de77743286e42fb1b_1 ? $fe_i_440dbe5a7bea565de77743286e42fb1b_1-- : $fe_i_440dbe5a7bea565de77743286e42fb1b_1++ )
{
$fe_key_440dbe5a7bea565de77743286e42fb1b_1 = $fe_array_keys_440dbe5a7bea565de77743286e42fb1b_1[$fe_i_440dbe5a7bea565de77743286e42fb1b_1];
$fe_val_440dbe5a7bea565de77743286e42fb1b_1 = $fe_array_440dbe5a7bea565de77743286e42fb1b_1[$fe_key_440dbe5a7bea565de77743286e42fb1b_1];
$vars[$rootNamespace]['product'] = $fe_val_440dbe5a7bea565de77743286e42fb1b_1;
$text .= '                    <li>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'product', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['product'] : null;
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
$text .= '</li>
                ';
$fe_n_items_processed_440dbe5a7bea565de77743286e42fb1b_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_440dbe5a7bea565de77743286e42fb1b_1 ) ) extract( array_pop( $fe_variable_stack_440dbe5a7bea565de77743286e42fb1b_1 ) );

else
{

unset( $fe_array_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_array_keys_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_n_items_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_n_items_processed_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_i_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_key_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_val_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_offset_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_max_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_reverse_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_first_val_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_last_val_440dbe5a7bea565de77743286e42fb1b_1 );

unset( $fe_variable_stack_440dbe5a7bea565de77743286e42fb1b_1 );

}

// foreach ends
$text .= '                </ul>
            </div>
           ';
}
unset( $if_cond );
// if ends

$text .= '           ';
// undef $related_purchase
$tpl->unsetLocalVariable( 'related_purchase', $rootNamespace );

$text .= '        </div>
        <div class="span4">
            <aside>
                <section class="content-view-aside">
                    <div class="product-main">
                        <div class="attribute-header">
                            <h2>';
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

$text .= '</h2>
                            <span class="subheadline">';
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
          1 => 'product_number',
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
    0 => 60,
    1 => 54,
    2 => 2479,
  ),
  1 => 
  array (
    0 => 60,
    1 => 112,
    2 => 2537,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</span>
                        </div>
                        <article>
                            <form method="post" action="/testezp/web/index.php/eng/content/action">
                                <fieldset class="row">
                                    <div class="item-price span4">
                                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'price' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_discount' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                                        ';
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
$var2 = compiledFetchAttribute( $var1, 'discount_price_inc_vat' );
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

$text .= ' <span class="old-price">';
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

$text .= '</span>
                                    ';
}
else
{
$text .= '                                        ';
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
                                    ';
}
unset( $if_cond );
// if ends

$text .= '                                    </div>
                                    <div class="span4">
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
          1 => 'additional_options',
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
    0 => 73,
    1 => 40,
    2 => 3426,
  ),
  1 => 
  array (
    0 => 73,
    1 => 102,
    2 => 3488,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/full/product.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                                    </div>
                                    <div class="item-buying-action form-inline span4">
                                        <label>
                                            <span class="hidden">Amount</span>
                                            <input type="text" name="Quantity" />
                                        </label>
                                        <button class="btn btn-warning" type="submit" name="ActionAddToBasket">
                                        Add to basket
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
                        </article>
                        <div class="attribute-socialize">
                            ';
$oldRestoreIncludeArray_d6accaf98a264aaca330465cdb7b7ee9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/social_buttons-481d874da412085e3a85ae32b7725056.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/parts/social_buttons.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/social_buttons-481d874da412085e3a85ae32b7725056.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/parts/social_buttons.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d6accaf98a264aaca330465cdb7b7ee9;

$text .= '                        </div>
                    </div>
                </section>
            </aside>
        </div>
   </article>
</section>
';

$setArray = $oldSetArray_acae2607f641e73d0f8a4912febdc420;
$tpl->Level--;
?>

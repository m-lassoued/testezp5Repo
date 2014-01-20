<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_extramenu.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_extramenu.tpl
// Timestamp: 1389968164 (Fri Jan 17 15:16:04 CET 2014)
$oldSetArray_85e76228c22240aaf8036501f931bd6c = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="span';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'outer_column_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['outer_column_size'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' extra-menu">
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'extra_menu' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_f4b71a8117971b94f8a963324573f269_2 ) ) $fe_variable_stack_f4b71a8117971b94f8a963324573f269_2 = array();
$fe_variable_stack_f4b71a8117971b94f8a963324573f269_2[] = compact( 'fe_array_f4b71a8117971b94f8a963324573f269_2', 'fe_array_keys_f4b71a8117971b94f8a963324573f269_2', 'fe_n_items_f4b71a8117971b94f8a963324573f269_2', 'fe_n_items_processed_f4b71a8117971b94f8a963324573f269_2', 'fe_i_f4b71a8117971b94f8a963324573f269_2', 'fe_key_f4b71a8117971b94f8a963324573f269_2', 'fe_val_f4b71a8117971b94f8a963324573f269_2', 'fe_offset_f4b71a8117971b94f8a963324573f269_2', 'fe_max_f4b71a8117971b94f8a963324573f269_2', 'fe_reverse_f4b71a8117971b94f8a963324573f269_2', 'fe_first_val_f4b71a8117971b94f8a963324573f269_2', 'fe_last_val_f4b71a8117971b94f8a963324573f269_2' );
unset( $fe_array_f4b71a8117971b94f8a963324573f269_2 );
unset( $fe_array_f4b71a8117971b94f8a963324573f269_2 );
$fe_array_f4b71a8117971b94f8a963324573f269_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$fe_array_f4b71a8117971b94f8a963324573f269_21 = compiledFetchAttribute( $fe_array_f4b71a8117971b94f8a963324573f269_2, 'extra_menu' );
unset( $fe_array_f4b71a8117971b94f8a963324573f269_2 );
$fe_array_f4b71a8117971b94f8a963324573f269_2 = $fe_array_f4b71a8117971b94f8a963324573f269_21;
if (! isset( $fe_array_f4b71a8117971b94f8a963324573f269_2 ) ) $fe_array_f4b71a8117971b94f8a963324573f269_2 = NULL;
while ( is_object( $fe_array_f4b71a8117971b94f8a963324573f269_2 ) and method_exists( $fe_array_f4b71a8117971b94f8a963324573f269_2, 'templateValue' ) )
    $fe_array_f4b71a8117971b94f8a963324573f269_2 = $fe_array_f4b71a8117971b94f8a963324573f269_2->templateValue();

$fe_array_keys_f4b71a8117971b94f8a963324573f269_2 = is_array( $fe_array_f4b71a8117971b94f8a963324573f269_2 ) ? array_keys( $fe_array_f4b71a8117971b94f8a963324573f269_2 ) : array();
$fe_n_items_f4b71a8117971b94f8a963324573f269_2 = count( $fe_array_keys_f4b71a8117971b94f8a963324573f269_2 );
$fe_n_items_processed_f4b71a8117971b94f8a963324573f269_2 = 0;
$fe_offset_f4b71a8117971b94f8a963324573f269_2 = 0;
$fe_max_f4b71a8117971b94f8a963324573f269_2 = $fe_n_items_f4b71a8117971b94f8a963324573f269_2 - $fe_offset_f4b71a8117971b94f8a963324573f269_2;
$fe_reverse_f4b71a8117971b94f8a963324573f269_2 = false;
if ( $fe_offset_f4b71a8117971b94f8a963324573f269_2 < 0 || $fe_offset_f4b71a8117971b94f8a963324573f269_2 >= $fe_n_items_f4b71a8117971b94f8a963324573f269_2 )
{
    $fe_offset_f4b71a8117971b94f8a963324573f269_2 = ( $fe_offset_f4b71a8117971b94f8a963324573f269_2 < 0 ) ? 0 : $fe_n_items_f4b71a8117971b94f8a963324573f269_2;
    if ( $fe_n_items_f4b71a8117971b94f8a963324573f269_2 || $fe_offset_f4b71a8117971b94f8a963324573f269_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f4b71a8117971b94f8a963324573f269_2'. Array count: $fe_n_items_f4b71a8117971b94f8a963324573f269_2");   
}
}
if ( $fe_max_f4b71a8117971b94f8a963324573f269_2 < 0 || $fe_offset_f4b71a8117971b94f8a963324573f269_2 + $fe_max_f4b71a8117971b94f8a963324573f269_2 > $fe_n_items_f4b71a8117971b94f8a963324573f269_2 )
{
    if ( $fe_max_f4b71a8117971b94f8a963324573f269_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f4b71a8117971b94f8a963324573f269_2");
    $fe_max_f4b71a8117971b94f8a963324573f269_2 = $fe_n_items_f4b71a8117971b94f8a963324573f269_2 - $fe_offset_f4b71a8117971b94f8a963324573f269_2;
}
if ( $fe_reverse_f4b71a8117971b94f8a963324573f269_2 )
{
    $fe_first_val_f4b71a8117971b94f8a963324573f269_2 = $fe_n_items_f4b71a8117971b94f8a963324573f269_2 - 1 - $fe_offset_f4b71a8117971b94f8a963324573f269_2;
    $fe_last_val_f4b71a8117971b94f8a963324573f269_2  = 0;
}
else
{
    $fe_first_val_f4b71a8117971b94f8a963324573f269_2 = $fe_offset_f4b71a8117971b94f8a963324573f269_2;
    $fe_last_val_f4b71a8117971b94f8a963324573f269_2  = $fe_n_items_f4b71a8117971b94f8a963324573f269_2 - 1;
}
// foreach
for ( $fe_i_f4b71a8117971b94f8a963324573f269_2 = $fe_first_val_f4b71a8117971b94f8a963324573f269_2; $fe_n_items_processed_f4b71a8117971b94f8a963324573f269_2 < $fe_max_f4b71a8117971b94f8a963324573f269_2 && ( $fe_reverse_f4b71a8117971b94f8a963324573f269_2 ? $fe_i_f4b71a8117971b94f8a963324573f269_2 >= $fe_last_val_f4b71a8117971b94f8a963324573f269_2 : $fe_i_f4b71a8117971b94f8a963324573f269_2 <= $fe_last_val_f4b71a8117971b94f8a963324573f269_2 ); $fe_reverse_f4b71a8117971b94f8a963324573f269_2 ? $fe_i_f4b71a8117971b94f8a963324573f269_2-- : $fe_i_f4b71a8117971b94f8a963324573f269_2++ )
{
$fe_key_f4b71a8117971b94f8a963324573f269_2 = $fe_array_keys_f4b71a8117971b94f8a963324573f269_2[$fe_i_f4b71a8117971b94f8a963324573f269_2];
$fe_val_f4b71a8117971b94f8a963324573f269_2 = $fe_array_f4b71a8117971b94f8a963324573f269_2[$fe_key_f4b71a8117971b94f8a963324573f269_2];
$vars[$rootNamespace]['extra_menu'] = $fe_val_f4b71a8117971b94f8a963324573f269_2;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '<div class="hr"></div>';
} // delimiter ends

$text .= '        ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:parts/',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'extra_menu',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '.tpl',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 4,
    1 => 8,
    2 => 155,
  ),
  1 => 
  array (
    0 => 4,
    1 => 64,
    2 => 211,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/page_extramenu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                    ';
$fe_n_items_processed_f4b71a8117971b94f8a963324573f269_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_f4b71a8117971b94f8a963324573f269_2 ) ) extract( array_pop( $fe_variable_stack_f4b71a8117971b94f8a963324573f269_2 ) );

else
{

unset( $fe_array_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_array_keys_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_n_items_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_n_items_processed_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_i_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_key_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_val_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_offset_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_max_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_reverse_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_first_val_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_last_val_f4b71a8117971b94f8a963324573f269_2 );

unset( $fe_variable_stack_f4b71a8117971b94f8a963324573f269_2 );

}

// foreach ends
$text .= '        ';
}
else
{
$text .= '    ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:parts/',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'pagedata',
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
                1 => 'extra_menu',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '.tpl',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 310,
  ),
  1 => 
  array (
    0 => 8,
    1 => 69,
    2 => 375,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/page_extramenu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '</div>
';

$setArray = $oldSetArray_85e76228c22240aaf8036501f931bd6c;
$tpl->Level--;
?>

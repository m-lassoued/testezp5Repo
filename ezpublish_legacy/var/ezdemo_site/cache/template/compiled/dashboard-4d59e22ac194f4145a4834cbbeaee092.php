<?php
// URI:       design:tags/dashboard.tpl
// Filename:  extension/eztags/design/admin2/templates/tags/dashboard.tpl
// Timestamp: 1381143708 (Mon Oct 7 13:01:48 CEST 2013)
$oldSetArray_fc7f3e05ac07cb478c4b353a4ca3bdd9 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="context-block tags-dashboard">
    <div class="box-header">
        <h1 class="context-title">Tags Dashboard</h1>
        <div class="header-mainline"></div>
    </div>

    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'show_reindex_message', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['show_reindex_message'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="message-warning">
            <h2>Manual search index regeneration is required for changes to be seen in search. Enable DelayedIndexing in site.ini to reindex automatically.</h2>
        </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <div class="box-content">
        <div id="controlbar-top" class="controlbar">
            <div class="box-bc"><div class="box-ml">
                <div class="button-left">
                    <form name="tagadd" id="tagadd" style="float:left;" enctype="multipart/form-data" method="post" action="/testezp/web/index.php/ezdemo_site_admin/tags/add/0">
                        <input class="defaultbutton" type="submit" name="SubmitButton" value="Add child tag" />
                    </form>
                </div>
                <div class="float-break"></div>
            </div></div>
        </div>

        <div class="block">
            ';
// def $right_blocks
if ( $tpl->hasVariable( 'right_blocks', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'right_blocks' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 12,
    2 => 1176,
  ),
  1 => 
  array (
    0 => 26,
    1 => 39,
    2 => 1203,
  ),
  2 => 'extension/eztags/design/admin2/templates/tags/dashboard.tpl',
) );
    $tpl->setVariable( 'right_blocks', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'right_blocks', array (
), $rootNamespace );
}

$text .= '
            <div class="left">
                ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_3ba89514dafb45c518c42992edfd631a_1 = array (
  0 => 'left',
  1 => 'right',
);
$foreach_sequence_var_3ba89514dafb45c518c42992edfd631a_1 = current( $foreach_sequence_array_3ba89514dafb45c518c42992edfd631a_1 );

if ( !isset( $fe_variable_stack_3ba89514dafb45c518c42992edfd631a_1 ) ) $fe_variable_stack_3ba89514dafb45c518c42992edfd631a_1 = array();
$fe_variable_stack_3ba89514dafb45c518c42992edfd631a_1[] = compact( 'fe_array_3ba89514dafb45c518c42992edfd631a_1', 'fe_array_keys_3ba89514dafb45c518c42992edfd631a_1', 'fe_n_items_3ba89514dafb45c518c42992edfd631a_1', 'fe_n_items_processed_3ba89514dafb45c518c42992edfd631a_1', 'fe_i_3ba89514dafb45c518c42992edfd631a_1', 'fe_key_3ba89514dafb45c518c42992edfd631a_1', 'fe_val_3ba89514dafb45c518c42992edfd631a_1', 'fe_offset_3ba89514dafb45c518c42992edfd631a_1', 'fe_max_3ba89514dafb45c518c42992edfd631a_1', 'fe_reverse_3ba89514dafb45c518c42992edfd631a_1', 'fe_first_val_3ba89514dafb45c518c42992edfd631a_1', 'fe_last_val_3ba89514dafb45c518c42992edfd631a_1' );
unset( $fe_array_3ba89514dafb45c518c42992edfd631a_1 );
unset( $fe_array_3ba89514dafb45c518c42992edfd631a_1 );
$fe_array_3ba89514dafb45c518c42992edfd631a_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['blocks'] : null;
if (! isset( $fe_array_3ba89514dafb45c518c42992edfd631a_1 ) ) $fe_array_3ba89514dafb45c518c42992edfd631a_1 = NULL;
while ( is_object( $fe_array_3ba89514dafb45c518c42992edfd631a_1 ) and method_exists( $fe_array_3ba89514dafb45c518c42992edfd631a_1, 'templateValue' ) )
    $fe_array_3ba89514dafb45c518c42992edfd631a_1 = $fe_array_3ba89514dafb45c518c42992edfd631a_1->templateValue();

$fe_array_keys_3ba89514dafb45c518c42992edfd631a_1 = is_array( $fe_array_3ba89514dafb45c518c42992edfd631a_1 ) ? array_keys( $fe_array_3ba89514dafb45c518c42992edfd631a_1 ) : array();
$fe_n_items_3ba89514dafb45c518c42992edfd631a_1 = count( $fe_array_keys_3ba89514dafb45c518c42992edfd631a_1 );
$fe_n_items_processed_3ba89514dafb45c518c42992edfd631a_1 = 0;
$fe_offset_3ba89514dafb45c518c42992edfd631a_1 = 0;
$fe_max_3ba89514dafb45c518c42992edfd631a_1 = $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 - $fe_offset_3ba89514dafb45c518c42992edfd631a_1;
$fe_reverse_3ba89514dafb45c518c42992edfd631a_1 = false;
if ( $fe_offset_3ba89514dafb45c518c42992edfd631a_1 < 0 || $fe_offset_3ba89514dafb45c518c42992edfd631a_1 >= $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 )
{
    $fe_offset_3ba89514dafb45c518c42992edfd631a_1 = ( $fe_offset_3ba89514dafb45c518c42992edfd631a_1 < 0 ) ? 0 : $fe_n_items_3ba89514dafb45c518c42992edfd631a_1;
    if ( $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 || $fe_offset_3ba89514dafb45c518c42992edfd631a_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_3ba89514dafb45c518c42992edfd631a_1'. Array count: $fe_n_items_3ba89514dafb45c518c42992edfd631a_1");   
}
}
if ( $fe_max_3ba89514dafb45c518c42992edfd631a_1 < 0 || $fe_offset_3ba89514dafb45c518c42992edfd631a_1 + $fe_max_3ba89514dafb45c518c42992edfd631a_1 > $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 )
{
    if ( $fe_max_3ba89514dafb45c518c42992edfd631a_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_3ba89514dafb45c518c42992edfd631a_1");
    $fe_max_3ba89514dafb45c518c42992edfd631a_1 = $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 - $fe_offset_3ba89514dafb45c518c42992edfd631a_1;
}
if ( $fe_reverse_3ba89514dafb45c518c42992edfd631a_1 )
{
    $fe_first_val_3ba89514dafb45c518c42992edfd631a_1 = $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 - 1 - $fe_offset_3ba89514dafb45c518c42992edfd631a_1;
    $fe_last_val_3ba89514dafb45c518c42992edfd631a_1  = 0;
}
else
{
    $fe_first_val_3ba89514dafb45c518c42992edfd631a_1 = $fe_offset_3ba89514dafb45c518c42992edfd631a_1;
    $fe_last_val_3ba89514dafb45c518c42992edfd631a_1  = $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 - 1;
}
// foreach
for ( $fe_i_3ba89514dafb45c518c42992edfd631a_1 = $fe_first_val_3ba89514dafb45c518c42992edfd631a_1; $fe_n_items_processed_3ba89514dafb45c518c42992edfd631a_1 < $fe_max_3ba89514dafb45c518c42992edfd631a_1 && ( $fe_reverse_3ba89514dafb45c518c42992edfd631a_1 ? $fe_i_3ba89514dafb45c518c42992edfd631a_1 >= $fe_last_val_3ba89514dafb45c518c42992edfd631a_1 : $fe_i_3ba89514dafb45c518c42992edfd631a_1 <= $fe_last_val_3ba89514dafb45c518c42992edfd631a_1 ); $fe_reverse_3ba89514dafb45c518c42992edfd631a_1 ? $fe_i_3ba89514dafb45c518c42992edfd631a_1-- : $fe_i_3ba89514dafb45c518c42992edfd631a_1++ )
{
$fe_key_3ba89514dafb45c518c42992edfd631a_1 = $fe_array_keys_3ba89514dafb45c518c42992edfd631a_1[$fe_i_3ba89514dafb45c518c42992edfd631a_1];
$fe_val_3ba89514dafb45c518c42992edfd631a_1 = $fe_array_3ba89514dafb45c518c42992edfd631a_1[$fe_key_3ba89514dafb45c518c42992edfd631a_1];
$vars[$rootNamespace]['block'] = $fe_val_3ba89514dafb45c518c42992edfd631a_1;
// setting current sequence value
$vars[$rootNamespace]['position'] = $foreach_sequence_var_3ba89514dafb45c518c42992edfd631a_1;
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'position', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['position'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'left' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <div class="dashboard-item">
                            ';
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
            1 => 'design:tags/dashboard/',
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
              2 => 'block',
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
    0 => 32,
    1 => 28,
    2 => 1458,
  ),
  1 => 
  array (
    0 => 32,
    1 => 90,
    2 => 1520,
  ),
  2 => 'extension/eztags/design/admin2/templates/tags/dashboard.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                        </div>
                    ';
}
else
{
$text .= '                        ';
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '                            <div class="dashboard-item">
                                ';
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
            1 => 'design:tags/dashboard/',
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
              2 => 'block',
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
    0 => 37,
    1 => 32,
    2 => 1732,
  ),
  1 => 
  array (
    0 => 37,
    1 => 94,
    2 => 1794,
  ),
  2 => 'extension/eztags/design/admin2/templates/tags/dashboard.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                            </div>
                        ';
$blockText = $text;
unset( $blockData );
unset( $blockData );
$blockData = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'right_blocks', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['right_blocks'] : null;
if (! isset( $blockData ) ) $blockData = NULL;
while ( is_object( $blockData ) and method_exists( $blockData, 'templateValue' ) )
    $blockData = $blockData->templateValue();

if ( is_null ( $blockData ) ) $blockData = array();
if ( is_array ( $blockData ) ) $blockData[] = $blockText;
else eZDebug::writeError( "Variable 'right_blocks' is already in use." );
$vars[$currentNamespace]['right_blocks'] = $blockData;
unset( $blockData );

unset( $blockText );

$text = array_pop( $textStack );
$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                ';
// sequence iteration
if ( ( $foreach_sequence_var_3ba89514dafb45c518c42992edfd631a_1 = next( $foreach_sequence_array_3ba89514dafb45c518c42992edfd631a_1 ) ) === false )
{
   reset( $foreach_sequence_array_3ba89514dafb45c518c42992edfd631a_1 );
   $foreach_sequence_var_3ba89514dafb45c518c42992edfd631a_1 = current( $foreach_sequence_array_3ba89514dafb45c518c42992edfd631a_1 );
}

$fe_n_items_processed_3ba89514dafb45c518c42992edfd631a_1++;
} // foreach
unset( $foreach_sequence_array_3ba89514dafb45c518c42992edfd631a_1 );

unset( $foreach_sequence_var_3ba89514dafb45c518c42992edfd631a_1 );

unset( $vars[$rootNamespace]['position'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_3ba89514dafb45c518c42992edfd631a_1 ) ) extract( array_pop( $fe_variable_stack_3ba89514dafb45c518c42992edfd631a_1 ) );

else
{

unset( $fe_array_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_array_keys_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_n_items_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_n_items_processed_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_i_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_key_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_val_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_offset_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_max_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_reverse_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_first_val_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_last_val_3ba89514dafb45c518c42992edfd631a_1 );

unset( $fe_variable_stack_3ba89514dafb45c518c42992edfd631a_1 );

}

// foreach ends
$text .= '            </div>
            <div class="right">
                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'right_blocks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['right_blocks'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
            </div>
            <div class="float-break"></div>
        </div>
    </div>
</div>
';
$oldRestoreIncludeArray_9be5a31bdc3447cadd70d1fcb8a9a992 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/eztags_children-e0c689cd97cfdbbbc21af7805c012fc9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/eztags/design/admin2/templates/eztags_children.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/eztags_children-e0c689cd97cfdbbbc21af7805c012fc9.php' );
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
$tpl->processURI( 'extension/eztags/design/admin2/templates/eztags_children.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9be5a31bdc3447cadd70d1fcb8a9a992;


$setArray = $oldSetArray_fc7f3e05ac07cb478c4b353a4ca3bdd9;
$tpl->Level--;
?>

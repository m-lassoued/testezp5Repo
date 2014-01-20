<?php
// URI:       design:tags/dashboard/latest_tags.tpl
// Filename:  extension/eztags/design/admin2/templates/tags/dashboard/latest_tags.tpl
// Timestamp: 1381143708 (Mon Oct 7 13:01:48 CEST 2013)
$oldSetArray_3ab9250757c30971435da7345e4f4045 = isset( $setArray ) ? $setArray : array();
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

// def $latest_tags
unset( $var );
$var = call_user_func_array( array( new eZTagsFunctionCollection(), 'fetchLatestTags' ),
  array(     'parent_tag_id' => false,
    'limit' => 10 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'latest_tags', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'latest_tags' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 1,
    1 => 64,
    2 => 65,
  ),
  2 => 'extension/eztags/design/admin2/templates/tags/dashboard/latest_tags.tpl',
) );
    $tpl->setVariable( 'latest_tags', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'latest_tags', $var, $rootNamespace );
}

$text .= '
<h2>Latest tags</h2>
<table class="list" cellpadding="0" border="0">
    <tbody>
        <tr>
            <th class="tight">&nbsp;</th>
            <th>ID</th>
            <th>Tag name</th>
            <th>Parent tag name</th>
            <th>Modified</th>
        </tr>
        ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_d6e78e44773d340984d55b3eab250bf7_2 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_d6e78e44773d340984d55b3eab250bf7_2 = current( $foreach_sequence_array_d6e78e44773d340984d55b3eab250bf7_2 );

if ( !isset( $fe_variable_stack_d6e78e44773d340984d55b3eab250bf7_2 ) ) $fe_variable_stack_d6e78e44773d340984d55b3eab250bf7_2 = array();
$fe_variable_stack_d6e78e44773d340984d55b3eab250bf7_2[] = compact( 'fe_array_d6e78e44773d340984d55b3eab250bf7_2', 'fe_array_keys_d6e78e44773d340984d55b3eab250bf7_2', 'fe_n_items_d6e78e44773d340984d55b3eab250bf7_2', 'fe_n_items_processed_d6e78e44773d340984d55b3eab250bf7_2', 'fe_i_d6e78e44773d340984d55b3eab250bf7_2', 'fe_key_d6e78e44773d340984d55b3eab250bf7_2', 'fe_val_d6e78e44773d340984d55b3eab250bf7_2', 'fe_offset_d6e78e44773d340984d55b3eab250bf7_2', 'fe_max_d6e78e44773d340984d55b3eab250bf7_2', 'fe_reverse_d6e78e44773d340984d55b3eab250bf7_2', 'fe_first_val_d6e78e44773d340984d55b3eab250bf7_2', 'fe_last_val_d6e78e44773d340984d55b3eab250bf7_2' );
unset( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 );
unset( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 );
$fe_array_d6e78e44773d340984d55b3eab250bf7_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tags', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tags'] : null;
if (! isset( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 ) ) $fe_array_d6e78e44773d340984d55b3eab250bf7_2 = NULL;
while ( is_object( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 ) and method_exists( $fe_array_d6e78e44773d340984d55b3eab250bf7_2, 'templateValue' ) )
    $fe_array_d6e78e44773d340984d55b3eab250bf7_2 = $fe_array_d6e78e44773d340984d55b3eab250bf7_2->templateValue();

$fe_array_keys_d6e78e44773d340984d55b3eab250bf7_2 = is_array( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 ) ? array_keys( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 ) : array();
$fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 = count( $fe_array_keys_d6e78e44773d340984d55b3eab250bf7_2 );
$fe_n_items_processed_d6e78e44773d340984d55b3eab250bf7_2 = 0;
$fe_offset_d6e78e44773d340984d55b3eab250bf7_2 = 0;
$fe_max_d6e78e44773d340984d55b3eab250bf7_2 = $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 - $fe_offset_d6e78e44773d340984d55b3eab250bf7_2;
$fe_reverse_d6e78e44773d340984d55b3eab250bf7_2 = false;
if ( $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 < 0 || $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 >= $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 )
{
    $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 = ( $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 < 0 ) ? 0 : $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2;
    if ( $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 || $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d6e78e44773d340984d55b3eab250bf7_2'. Array count: $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2");   
}
}
if ( $fe_max_d6e78e44773d340984d55b3eab250bf7_2 < 0 || $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 + $fe_max_d6e78e44773d340984d55b3eab250bf7_2 > $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 )
{
    if ( $fe_max_d6e78e44773d340984d55b3eab250bf7_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d6e78e44773d340984d55b3eab250bf7_2");
    $fe_max_d6e78e44773d340984d55b3eab250bf7_2 = $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 - $fe_offset_d6e78e44773d340984d55b3eab250bf7_2;
}
if ( $fe_reverse_d6e78e44773d340984d55b3eab250bf7_2 )
{
    $fe_first_val_d6e78e44773d340984d55b3eab250bf7_2 = $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 - 1 - $fe_offset_d6e78e44773d340984d55b3eab250bf7_2;
    $fe_last_val_d6e78e44773d340984d55b3eab250bf7_2  = 0;
}
else
{
    $fe_first_val_d6e78e44773d340984d55b3eab250bf7_2 = $fe_offset_d6e78e44773d340984d55b3eab250bf7_2;
    $fe_last_val_d6e78e44773d340984d55b3eab250bf7_2  = $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 - 1;
}
// foreach
for ( $fe_i_d6e78e44773d340984d55b3eab250bf7_2 = $fe_first_val_d6e78e44773d340984d55b3eab250bf7_2; $fe_n_items_processed_d6e78e44773d340984d55b3eab250bf7_2 < $fe_max_d6e78e44773d340984d55b3eab250bf7_2 && ( $fe_reverse_d6e78e44773d340984d55b3eab250bf7_2 ? $fe_i_d6e78e44773d340984d55b3eab250bf7_2 >= $fe_last_val_d6e78e44773d340984d55b3eab250bf7_2 : $fe_i_d6e78e44773d340984d55b3eab250bf7_2 <= $fe_last_val_d6e78e44773d340984d55b3eab250bf7_2 ); $fe_reverse_d6e78e44773d340984d55b3eab250bf7_2 ? $fe_i_d6e78e44773d340984d55b3eab250bf7_2-- : $fe_i_d6e78e44773d340984d55b3eab250bf7_2++ )
{
$fe_key_d6e78e44773d340984d55b3eab250bf7_2 = $fe_array_keys_d6e78e44773d340984d55b3eab250bf7_2[$fe_i_d6e78e44773d340984d55b3eab250bf7_2];
$fe_val_d6e78e44773d340984d55b3eab250bf7_2 = $fe_array_d6e78e44773d340984d55b3eab250bf7_2[$fe_key_d6e78e44773d340984d55b3eab250bf7_2];
$vars[$rootNamespace]['latest_tag'] = $fe_val_d6e78e44773d340984d55b3eab250bf7_2;
// setting current sequence value
$vars[$rootNamespace]['sequence'] = $foreach_sequence_var_d6e78e44773d340984d55b3eab250bf7_2;
$text .= '            <tr>
                <td><img class="transparent-png-icon" src=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var4 = compiledFetchAttribute( $var3, 'icon' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'tag_icons/small/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1 = eZURLOperator::eZImage( $tpl, $var1, "ezimage", false );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
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

$text .= '" /></td>
                <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
                <td><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'tags/id/' . $var3 );
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
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
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

$text .= '</a></td>
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'parent' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <td><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var4 = compiledFetchAttribute( $var3, 'parent' );
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
$var1 = ( 'tags/id/' . $var3 );
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
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'parent' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'keyword' );
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

$text .= '</a></td>
                ';
}
else
{
$text .= '                    <td>No parent</td>
                ';
}
unset( $if_cond );
// if ends

$text .= '                <td>';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_tag', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_tag'] : null;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%d.%m.%Y %H:%i', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
            </tr>
        ';
// sequence iteration
if ( ( $foreach_sequence_var_d6e78e44773d340984d55b3eab250bf7_2 = next( $foreach_sequence_array_d6e78e44773d340984d55b3eab250bf7_2 ) ) === false )
{
   reset( $foreach_sequence_array_d6e78e44773d340984d55b3eab250bf7_2 );
   $foreach_sequence_var_d6e78e44773d340984d55b3eab250bf7_2 = current( $foreach_sequence_array_d6e78e44773d340984d55b3eab250bf7_2 );
}

$fe_n_items_processed_d6e78e44773d340984d55b3eab250bf7_2++;
} // foreach
unset( $foreach_sequence_array_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $foreach_sequence_var_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $vars[$rootNamespace]['sequence'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_d6e78e44773d340984d55b3eab250bf7_2 ) ) extract( array_pop( $fe_variable_stack_d6e78e44773d340984d55b3eab250bf7_2 ) );

else
{

unset( $fe_array_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_array_keys_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_n_items_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_n_items_processed_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_i_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_key_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_val_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_offset_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_max_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_reverse_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_first_val_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_last_val_d6e78e44773d340984d55b3eab250bf7_2 );

unset( $fe_variable_stack_d6e78e44773d340984d55b3eab250bf7_2 );

}

// foreach ends
$text .= '    </tbody>
</table>
';

$setArray = $oldSetArray_3ab9250757c30971435da7345e4f4045;
$tpl->Level--;
?>

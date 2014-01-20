<?php
// URI:       extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl
// Timestamp: 1389968167 (Fri Jan 17 15:16:07 CET 2014)
$oldSetArray_3f0c9e1aaac2468f6ac119c694ea76bb = isset( $setArray ) ? $setArray : array();
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

<div class="content-view-line">
    <article class="class-blog-post">

    <div class="attribute-header">
        <h2><a href=';
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
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'title' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'title' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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

$text .= '</a></h2>
     </div>

    <div class="attribute-byline with-comments">
        <span class="date">';
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
$var2 = compiledFetchAttribute( $var1, 'publication_date' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'timestamp' );
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

$text .= '</span>
        <span class="author">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'owner' );
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

$text .= '</span>
        <span class="tags"> Tags: ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_98537240317bc9bbea9929abcfa06c94_4 ) ) $fe_variable_stack_98537240317bc9bbea9929abcfa06c94_4 = array();
$fe_variable_stack_98537240317bc9bbea9929abcfa06c94_4[] = compact( 'fe_array_98537240317bc9bbea9929abcfa06c94_4', 'fe_array_keys_98537240317bc9bbea9929abcfa06c94_4', 'fe_n_items_98537240317bc9bbea9929abcfa06c94_4', 'fe_n_items_processed_98537240317bc9bbea9929abcfa06c94_4', 'fe_i_98537240317bc9bbea9929abcfa06c94_4', 'fe_key_98537240317bc9bbea9929abcfa06c94_4', 'fe_val_98537240317bc9bbea9929abcfa06c94_4', 'fe_offset_98537240317bc9bbea9929abcfa06c94_4', 'fe_max_98537240317bc9bbea9929abcfa06c94_4', 'fe_reverse_98537240317bc9bbea9929abcfa06c94_4', 'fe_first_val_98537240317bc9bbea9929abcfa06c94_4', 'fe_last_val_98537240317bc9bbea9929abcfa06c94_4' );
unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );
unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );
$fe_array_98537240317bc9bbea9929abcfa06c94_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_98537240317bc9bbea9929abcfa06c94_41 = compiledFetchAttribute( $fe_array_98537240317bc9bbea9929abcfa06c94_4, 'data_map' );
unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );
$fe_array_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_98537240317bc9bbea9929abcfa06c94_41;
$fe_array_98537240317bc9bbea9929abcfa06c94_41 = compiledFetchAttribute( $fe_array_98537240317bc9bbea9929abcfa06c94_4, 'tags' );
unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );
$fe_array_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_98537240317bc9bbea9929abcfa06c94_41;
$fe_array_98537240317bc9bbea9929abcfa06c94_41 = compiledFetchAttribute( $fe_array_98537240317bc9bbea9929abcfa06c94_4, 'content' );
unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );
$fe_array_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_98537240317bc9bbea9929abcfa06c94_41;
$fe_array_98537240317bc9bbea9929abcfa06c94_41 = compiledFetchAttribute( $fe_array_98537240317bc9bbea9929abcfa06c94_4, 'keywords' );
unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );
$fe_array_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_98537240317bc9bbea9929abcfa06c94_41;
if (! isset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 ) ) $fe_array_98537240317bc9bbea9929abcfa06c94_4 = NULL;
while ( is_object( $fe_array_98537240317bc9bbea9929abcfa06c94_4 ) and method_exists( $fe_array_98537240317bc9bbea9929abcfa06c94_4, 'templateValue' ) )
    $fe_array_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_98537240317bc9bbea9929abcfa06c94_4->templateValue();

$fe_array_keys_98537240317bc9bbea9929abcfa06c94_4 = is_array( $fe_array_98537240317bc9bbea9929abcfa06c94_4 ) ? array_keys( $fe_array_98537240317bc9bbea9929abcfa06c94_4 ) : array();
$fe_n_items_98537240317bc9bbea9929abcfa06c94_4 = count( $fe_array_keys_98537240317bc9bbea9929abcfa06c94_4 );
$fe_n_items_processed_98537240317bc9bbea9929abcfa06c94_4 = 0;
$fe_offset_98537240317bc9bbea9929abcfa06c94_4 = 0;
$fe_max_98537240317bc9bbea9929abcfa06c94_4 = $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 - $fe_offset_98537240317bc9bbea9929abcfa06c94_4;
$fe_reverse_98537240317bc9bbea9929abcfa06c94_4 = false;
if ( $fe_offset_98537240317bc9bbea9929abcfa06c94_4 < 0 || $fe_offset_98537240317bc9bbea9929abcfa06c94_4 >= $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 )
{
    $fe_offset_98537240317bc9bbea9929abcfa06c94_4 = ( $fe_offset_98537240317bc9bbea9929abcfa06c94_4 < 0 ) ? 0 : $fe_n_items_98537240317bc9bbea9929abcfa06c94_4;
    if ( $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 || $fe_offset_98537240317bc9bbea9929abcfa06c94_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_98537240317bc9bbea9929abcfa06c94_4'. Array count: $fe_n_items_98537240317bc9bbea9929abcfa06c94_4");   
}
}
if ( $fe_max_98537240317bc9bbea9929abcfa06c94_4 < 0 || $fe_offset_98537240317bc9bbea9929abcfa06c94_4 + $fe_max_98537240317bc9bbea9929abcfa06c94_4 > $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 )
{
    if ( $fe_max_98537240317bc9bbea9929abcfa06c94_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_98537240317bc9bbea9929abcfa06c94_4");
    $fe_max_98537240317bc9bbea9929abcfa06c94_4 = $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 - $fe_offset_98537240317bc9bbea9929abcfa06c94_4;
}
if ( $fe_reverse_98537240317bc9bbea9929abcfa06c94_4 )
{
    $fe_first_val_98537240317bc9bbea9929abcfa06c94_4 = $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 - 1 - $fe_offset_98537240317bc9bbea9929abcfa06c94_4;
    $fe_last_val_98537240317bc9bbea9929abcfa06c94_4  = 0;
}
else
{
    $fe_first_val_98537240317bc9bbea9929abcfa06c94_4 = $fe_offset_98537240317bc9bbea9929abcfa06c94_4;
    $fe_last_val_98537240317bc9bbea9929abcfa06c94_4  = $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 - 1;
}
// foreach
for ( $fe_i_98537240317bc9bbea9929abcfa06c94_4 = $fe_first_val_98537240317bc9bbea9929abcfa06c94_4; $fe_n_items_processed_98537240317bc9bbea9929abcfa06c94_4 < $fe_max_98537240317bc9bbea9929abcfa06c94_4 && ( $fe_reverse_98537240317bc9bbea9929abcfa06c94_4 ? $fe_i_98537240317bc9bbea9929abcfa06c94_4 >= $fe_last_val_98537240317bc9bbea9929abcfa06c94_4 : $fe_i_98537240317bc9bbea9929abcfa06c94_4 <= $fe_last_val_98537240317bc9bbea9929abcfa06c94_4 ); $fe_reverse_98537240317bc9bbea9929abcfa06c94_4 ? $fe_i_98537240317bc9bbea9929abcfa06c94_4-- : $fe_i_98537240317bc9bbea9929abcfa06c94_4++ )
{
$fe_key_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_keys_98537240317bc9bbea9929abcfa06c94_4[$fe_i_98537240317bc9bbea9929abcfa06c94_4];
$fe_val_98537240317bc9bbea9929abcfa06c94_4 = $fe_array_98537240317bc9bbea9929abcfa06c94_4[$fe_key_98537240317bc9bbea9929abcfa06c94_4];
$vars[$rootNamespace]['keyword'] = $fe_val_98537240317bc9bbea9929abcfa06c94_4;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '                                               ,
                                           ';
} // delimiter ends

$text .= '                                           <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'parent' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'url_alias' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = rawurlencode( $var5 );
unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '/(tag)/' . $var4 );
unset( $var2, $var4 );
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

$text .= ' title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'keyword', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['keyword'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
                                                                                ';
$fe_n_items_processed_98537240317bc9bbea9929abcfa06c94_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_98537240317bc9bbea9929abcfa06c94_4 ) ) extract( array_pop( $fe_variable_stack_98537240317bc9bbea9929abcfa06c94_4 ) );

else
{

unset( $fe_array_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_array_keys_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_n_items_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_n_items_processed_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_i_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_key_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_val_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_offset_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_max_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_reverse_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_first_val_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_last_val_98537240317bc9bbea9929abcfa06c94_4 );

unset( $fe_variable_stack_98537240317bc9bbea9929abcfa06c94_4 );

}

// foreach ends
$text .= '        </span>
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

$text .= '" class="comments">
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'data_map' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'comments' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'language_id' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new ezcomFunctionCollection(), 'fetchCommentCount' ),
  array(     'contentobject_id' => $var1,
    'language_id' => $var2,
    'status' => "1" ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
        </a>
    </div>

        <div class="attribute-body">
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
          1 => 'body',
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
    0 => 28,
    1 => 12,
    2 => 1436,
  ),
  1 => 
  array (
    0 => 28,
    1 => 60,
    2 => 1484,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/line/blog_post.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        </div>

    </article>
</div>
';

$setArray = $oldSetArray_3f0c9e1aaac2468f6ac119c694ea76bb;
$tpl->Level--;
?>

<?php
// URI:       design:shop/accounthandlers/ascii/ez.tpl
// Filename:  design/standard/templates/shop/accounthandlers/ascii/ez.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_9fbf52a3bdf7d3c325ca986549cc0414 = isset( $setArray ) ? $setArray : array();
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
Customer information:
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'first_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'last_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'account_information' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'street1' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' (';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'street1' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ')';
}
unset( $if_cond );
// if ends

$text .= '
Email:
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'email' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

Shipping address:
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'street2' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'zip' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'place' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'account_information' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'state' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'state' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ';
}
unset( $if_cond );
// if ends

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'country' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'account_information' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'comment' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '

Comment:
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var1 = compiledFetchAttribute( $var, 'account_information' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'comment' );
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


$setArray = $oldSetArray_9fbf52a3bdf7d3c325ca986549cc0414;
$tpl->Level--;
?>

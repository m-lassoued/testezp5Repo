<?php
// URI:       design:shop/accounthandlers/html/ez.tpl
// Filename:  design/standard/templates/shop/accounthandlers/html/ez.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_7a72f524fb493e4cc46ee64209cde83e = isset( $setArray ) ? $setArray : array();
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
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
<td valign="top">
<p>
<b>Customer</b>
</p>
<p>
Name: ';
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

$text .= '<br />
Email: ';
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

$text .= '<br />
</p>

</td>
<td valign="top">

<p>
<b>Address</b>
</p>
<p>
Company: ';
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

$text .= '<br />
Street: ';
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

$text .= '<br />
Zip: ';
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

$text .= '<br />
Place: ';
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

$text .= '<br />
State: ';
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

$text .= '<br />
Country/region: ';
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

$text .= '<br />
</p>
</td>
</tr>
</table>
';
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
$text .= '<p>
<b>Comment</b>
</p>
<p>
';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['order'] : null;
$var3 = compiledFetchAttribute( $var2, 'account_information' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'comment' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = nl2br( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_7a72f524fb493e4cc46ee64209cde83e;
$tpl->Level--;
?>

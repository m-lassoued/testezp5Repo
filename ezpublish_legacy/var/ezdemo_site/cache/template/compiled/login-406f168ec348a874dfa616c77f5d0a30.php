<?php
// URI:       design:user/login.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/user/login.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_2dfae2aefdf8ab599974348714d404e3 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="user-login">

<form method="post" action="/testezp/web/index.php/eng/user/login" name="loginform">

<div class="attribute-header">
    <h1 class="long">Login</h1>
</div>
';
// if begins
unset( $if_cond );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond );
$if_cond = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'warning', $vars[$namespace] ) ) ? $vars[$namespace]['warning'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'bad_login' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="warning">
<h2>Could not login</h2>
<ul>
    <li>A valid username and password is required to login.</li>
</ul>
</div>';
}
else
{
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_access'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'allowed' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= '<div class="warning">
<h2>Access not allowed</h2>
<ul>
    <li>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_access'] : null;
$var4 = compiledFetchAttribute( $var3, 'name' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'You are not allowed to access %1.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</li>
</ul>
</div>';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
<div class="block">
<label for="id1">Username</label><div class="labelbreak"></div>
<input class="halfbox" type="text" size="10" name="Login" id="id1" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'login', $vars[$namespace] ) ) ? $vars[$namespace]['login'] : null;
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

$text .= '" tabindex="1" />
</div>

<div class="block">
<label for="id2">Password</label><div class="labelbreak"></div>
<input class="halfbox" type="password" size="10" name="Password" id="id2" value="" tabindex="1" />
</div>';
// if begins
$if_cond = 'http://localhost/testezp/web/index.php/ezdemo_site_admin/user/login';
if ( $if_cond )
{
$text .= '    <div class="button-right">
    <a href="http://localhost/testezp/web/index.php/ezdemo_site_admin/user/login">Log in to the eZ Publish Administration Interface</a>
    </div>';
}
unset( $if_cond );
// if ends

// if begins
$if_cond = '';
if ( $if_cond )
{
$text .= '<div class="block">
<input type="checkbox" tabindex="1" name="Cookie" id="id4" /><label for="id4" style="display:inline;">Remember me</label>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
<div class="buttonblock">
<input class="defaultbutton" type="submit" name="LoginButton" value="Login" tabindex="1" />';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezmodule',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'user/register',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="RegisterButton" id="RegisterButton" value="Sign up" tabindex="1" />';
}
unset( $if_cond );
// if ends

$text .= '</div>
';
// if begins
$if_cond = false;
if ( $if_cond )
{
$text .= '    <p><a href="/testezp/web/index.php/eng/user/forgotpassword">Forgot your password?</a></p>';
}
unset( $if_cond );
// if ends

$text .= '
<input type="hidden" name="RedirectURI" value="';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'redirect_uri', $vars[$namespace] ) ) ? $vars[$namespace]['redirect_uri'] : null;
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

$text .= '" />
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'post_data', $vars[$namespace] ) ) ? $vars[$namespace]['post_data'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'post_data', $vars[$namespace] ) ) ? $vars[$namespace]['post_data'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = is_array( $if_cond3 );unset( $if_cond3 );
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
$text .= '  ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_17b8490d994a8191aa12f795559b66a6_1 ) ) $fe_variable_stack_17b8490d994a8191aa12f795559b66a6_1 = array();
$fe_variable_stack_17b8490d994a8191aa12f795559b66a6_1[] = compact( 'fe_array_17b8490d994a8191aa12f795559b66a6_1', 'fe_array_keys_17b8490d994a8191aa12f795559b66a6_1', 'fe_n_items_17b8490d994a8191aa12f795559b66a6_1', 'fe_n_items_processed_17b8490d994a8191aa12f795559b66a6_1', 'fe_i_17b8490d994a8191aa12f795559b66a6_1', 'fe_key_17b8490d994a8191aa12f795559b66a6_1', 'fe_val_17b8490d994a8191aa12f795559b66a6_1', 'fe_offset_17b8490d994a8191aa12f795559b66a6_1', 'fe_max_17b8490d994a8191aa12f795559b66a6_1', 'fe_reverse_17b8490d994a8191aa12f795559b66a6_1', 'fe_first_val_17b8490d994a8191aa12f795559b66a6_1', 'fe_last_val_17b8490d994a8191aa12f795559b66a6_1' );
unset( $fe_array_17b8490d994a8191aa12f795559b66a6_1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "User";
else
    $namespace .= ':User';
unset( $fe_array_17b8490d994a8191aa12f795559b66a6_1 );
$fe_array_17b8490d994a8191aa12f795559b66a6_1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'post_data', $vars[$namespace] ) ) ? $vars[$namespace]['post_data'] : null;
if (! isset( $fe_array_17b8490d994a8191aa12f795559b66a6_1 ) ) $fe_array_17b8490d994a8191aa12f795559b66a6_1 = NULL;
while ( is_object( $fe_array_17b8490d994a8191aa12f795559b66a6_1 ) and method_exists( $fe_array_17b8490d994a8191aa12f795559b66a6_1, 'templateValue' ) )
    $fe_array_17b8490d994a8191aa12f795559b66a6_1 = $fe_array_17b8490d994a8191aa12f795559b66a6_1->templateValue();

$fe_array_keys_17b8490d994a8191aa12f795559b66a6_1 = is_array( $fe_array_17b8490d994a8191aa12f795559b66a6_1 ) ? array_keys( $fe_array_17b8490d994a8191aa12f795559b66a6_1 ) : array();
$fe_n_items_17b8490d994a8191aa12f795559b66a6_1 = count( $fe_array_keys_17b8490d994a8191aa12f795559b66a6_1 );
$fe_n_items_processed_17b8490d994a8191aa12f795559b66a6_1 = 0;
$fe_offset_17b8490d994a8191aa12f795559b66a6_1 = 0;
$fe_max_17b8490d994a8191aa12f795559b66a6_1 = $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 - $fe_offset_17b8490d994a8191aa12f795559b66a6_1;
$fe_reverse_17b8490d994a8191aa12f795559b66a6_1 = false;
if ( $fe_offset_17b8490d994a8191aa12f795559b66a6_1 < 0 || $fe_offset_17b8490d994a8191aa12f795559b66a6_1 >= $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 )
{
    $fe_offset_17b8490d994a8191aa12f795559b66a6_1 = ( $fe_offset_17b8490d994a8191aa12f795559b66a6_1 < 0 ) ? 0 : $fe_n_items_17b8490d994a8191aa12f795559b66a6_1;
    if ( $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 || $fe_offset_17b8490d994a8191aa12f795559b66a6_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_17b8490d994a8191aa12f795559b66a6_1'. Array count: $fe_n_items_17b8490d994a8191aa12f795559b66a6_1");   
}
}
if ( $fe_max_17b8490d994a8191aa12f795559b66a6_1 < 0 || $fe_offset_17b8490d994a8191aa12f795559b66a6_1 + $fe_max_17b8490d994a8191aa12f795559b66a6_1 > $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 )
{
    if ( $fe_max_17b8490d994a8191aa12f795559b66a6_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_17b8490d994a8191aa12f795559b66a6_1");
    $fe_max_17b8490d994a8191aa12f795559b66a6_1 = $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 - $fe_offset_17b8490d994a8191aa12f795559b66a6_1;
}
if ( $fe_reverse_17b8490d994a8191aa12f795559b66a6_1 )
{
    $fe_first_val_17b8490d994a8191aa12f795559b66a6_1 = $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 - 1 - $fe_offset_17b8490d994a8191aa12f795559b66a6_1;
    $fe_last_val_17b8490d994a8191aa12f795559b66a6_1  = 0;
}
else
{
    $fe_first_val_17b8490d994a8191aa12f795559b66a6_1 = $fe_offset_17b8490d994a8191aa12f795559b66a6_1;
    $fe_last_val_17b8490d994a8191aa12f795559b66a6_1  = $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 - 1;
}
// foreach
for ( $fe_i_17b8490d994a8191aa12f795559b66a6_1 = $fe_first_val_17b8490d994a8191aa12f795559b66a6_1; $fe_n_items_processed_17b8490d994a8191aa12f795559b66a6_1 < $fe_max_17b8490d994a8191aa12f795559b66a6_1 && ( $fe_reverse_17b8490d994a8191aa12f795559b66a6_1 ? $fe_i_17b8490d994a8191aa12f795559b66a6_1 >= $fe_last_val_17b8490d994a8191aa12f795559b66a6_1 : $fe_i_17b8490d994a8191aa12f795559b66a6_1 <= $fe_last_val_17b8490d994a8191aa12f795559b66a6_1 ); $fe_reverse_17b8490d994a8191aa12f795559b66a6_1 ? $fe_i_17b8490d994a8191aa12f795559b66a6_1-- : $fe_i_17b8490d994a8191aa12f795559b66a6_1++ )
{
$fe_key_17b8490d994a8191aa12f795559b66a6_1 = $fe_array_keys_17b8490d994a8191aa12f795559b66a6_1[$fe_i_17b8490d994a8191aa12f795559b66a6_1];
$fe_val_17b8490d994a8191aa12f795559b66a6_1 = $fe_array_17b8490d994a8191aa12f795559b66a6_1[$fe_key_17b8490d994a8191aa12f795559b66a6_1];
$vars[$rootNamespace]['postData'] = $fe_val_17b8490d994a8191aa12f795559b66a6_1;
$vars[$rootNamespace]['key'] = $fe_key_17b8490d994a8191aa12f795559b66a6_1;
$text .= '      <input name="Last_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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

$text .= '" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'postData', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['postData'] : null;
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

$text .= '" type="hidden" /><br/>
  ';
$fe_n_items_processed_17b8490d994a8191aa12f795559b66a6_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_17b8490d994a8191aa12f795559b66a6_1 ) ) extract( array_pop( $fe_variable_stack_17b8490d994a8191aa12f795559b66a6_1 ) );

else
{

unset( $fe_array_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_array_keys_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_n_items_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_n_items_processed_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_i_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_key_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_val_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_offset_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_max_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_reverse_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_first_val_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_last_val_17b8490d994a8191aa12f795559b66a6_1 );

unset( $fe_variable_stack_17b8490d994a8191aa12f795559b66a6_1 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '
</form>

</div>
';

$setArray = $oldSetArray_2dfae2aefdf8ab599974348714d404e3;
$tpl->Level--;
?>

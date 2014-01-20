<?php
// URI:       design:shop/userregister.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/shop/userregister.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_3e52c2311ad8f189e9d82415d26f11f5 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="shop-userregister">

<ul>
     <li>1. Shopping basket</li>
     <li class="selected">2. Account information
</li>
     <li>3. Confirm order</li>
</ul>

</div>

<div class="shop-userregister">

<div class="attribute-header">
     <h1 class="long">Your account information</h1>
</div>
';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'input_error', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['input_error'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<div class="warning">
<p>
Input did not validate. All fields marked with * must be filled in.
</p>
</div>
';
}

$text .= '<form method="post" action="/testezp/web/index.php/eng/shop/userregister">

<div class="block">
    <div class="element">
    <label>
    First name:*
    </label><div class="labelbreak"></div>
    <input class="halfbox" type="text" name="FirstName" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'first_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['first_name'] : null;
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
    </div>
    <div class="element">
    <label>
    Last name:*
    </label><div class="labelbreak"></div>
    <input class="halfbox" type="text" name="LastName" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'last_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['last_name'] : null;
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
    </div>
    <div class="break"></div>
</div>
<br />
<div class="block">
<label>
Email:*
</label><div class="labelbreak"></div>
<input class="box" type="text" name="EMail" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'email', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['email'] : null;
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
</div>

<div class="block">
<label>
Company:
</label><div class="labelbreak"></div>
<input class="box" type="text" name="Street1" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'street1', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['street1'] : null;
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
</div>

<div class="block">
<label>
Street:*
</label><div class="labelbreak"></div>
<input class="box" type="text" name="Street2" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'street2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['street2'] : null;
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
</div>

<div class="block">
    <div class="element">
    <label>
    Zip:*
    </label><div class="labelbreak"></div>
    <input class="halfbox" type="text" name="Zip" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zip', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zip'] : null;
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
    </div>
    <div class="element">
    <label>
    Place:*
    </label><div class="labelbreak"></div>
    <input class="halfbox" type="text" name="Place" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'place', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['place'] : null;
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
    </div>
    <div class="break"></div>
</div>
<br/>
<div class="block">
<label>
State:
</label><div class="labelbreak"></div>
<input class="box" type="text" name="State" size="20" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
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
</div>

<div class="block">
<label>
Country:*
</label><div class="labelbreak"></div>';
$oldRestoreIncludeArray_591bfde280eb75d87563d1a993ce171b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['select_name'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'select_name', $vars[$currentNamespace]['select_name'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['select_name'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'select_name', 'unset' );

$vars[$currentNamespace]['select_name'] = 'Country';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['select_size'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'select_size', $vars[$currentNamespace]['select_size'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['select_size'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'select_size', 'unset' );

$vars[$currentNamespace]['select_size'] = 5;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['current_val'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'current_val', $vars[$currentNamespace]['current_val'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['current_val'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'current_val', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'country', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['country'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['current_val'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit-64b09989b2852ef328a6b185014553c3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/shop/country/edit.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit-64b09989b2852ef328a6b185014553c3.php' );
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
$tpl->processURI( 'design/standard/templates/shop/country/edit.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_591bfde280eb75d87563d1a993ce171b;

$text .= '</div>


<div class="block">
<label>
Comment:
</label><div class="labelbreak"></div>
<textarea name="Comment" cols="80" rows="5">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'comment', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['comment'] : null;
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

$text .= '</textarea>
</div>


<div class="buttonblock">
    <input class="button" type="submit" name="CancelButton" value="Cancel" />
    <input class="defaultbutton" type="submit" name="StoreButton" value="Continue" />
</div>

</form>

<p>
All fields marked with * must be filled in.
</p>

</div>
';

$setArray = $oldSetArray_3e52c2311ad8f189e9d82415d26f11f5;
$tpl->Level--;
?>

<?php
// URI:       design:user/register.tpl
// Filename:  design/admin/templates/user/register.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_70b593ad63ef1e93dbc77e19c3b15a36 = isset( $setArray ) ? $setArray : array();
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

unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$show1 = compiledFetchAttribute( $show, 'processed' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<div class="message-warning">
<h2><span class="time">[';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
$var1 = time();
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ']</span> The information could not be stored...</h2>
<p>The following information is either incorrect or missing:</p>
<ul>';
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$show1 = compiledFetchAttribute( $show, 'attributes' );
unset( $show );
$show = $show1;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'validation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['validation'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'attributes' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'UnvalidatedAttributes';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '<li>';
unset( $var );
unset( $var1 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "UnvalidatedAttributes";
else
    $namespace .= ':UnvalidatedAttributes';
unset( $var1 );
$var1 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
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

$text .= ': ';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "UnvalidatedAttributes";
else
    $namespace .= ':UnvalidatedAttributes';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
$var1 = compiledFetchAttribute( $var, 'description' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</li>';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

}

$text .= '</ul>
<p>Please correct the inputs (marked with red labels) and try again.</p>
</div>';
}

$text .= '

<div class="context-block">

<form name="registerform" method="post" action="/testezp/web/index.php/ezdemo_site_admin/user/register" enctype="multipart/form-data">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'content_attributes',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
<div class="box-header">
    <h1 class="context-title">Register new user</h1>
</div>

<div class="box-ml"><div class="box-mr"><div class="box-content">

<div class="context-attributes">
    ';
$oldRestoreIncludeArray_91495f128a53d3fd26ca4771dfde6113 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/edit_attribute-906f2c248d558c6be8ac68be9dcc766e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/content/edit_attribute.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/edit_attribute-906f2c248d558c6be8ac68be9dcc766e.php' );
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
$tpl->processURI( 'design/admin/templates/content/edit_attribute.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_91495f128a53d3fd26ca4771dfde6113;

$text .= '</div>

</div></div></div>

<div class="controlbar">
<div class="box-bc"><div class="box-ml">
    <div class="block">
        <input class="defaultbutton" type="submit" id="PublishButton" name="PublishButton" value="OK" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
        <input class="button" type="submit" id="CancelButton" name="CancelButton" value="Cancel" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
    </div>
</div></div>
</div>
';
}
else
{
$text .= '
<div class="message-warning">
<h2>Unable to register new user</h2>
</div>
<div class="controlbar">
<div class="box-bc"><div class="box-ml">
    <div class="block">
        <input class="button button-disabled" disabled="disabled" type="submit" id="PublishButton" name="PublishButton" value="OK" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
        <input class="button" type="submit" id="CancelButton" name="CancelButton" value="Back" onclick="window.setTimeout( disableButtons, 1 ); return true;" />
    </div>
</div></div>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</form>

</div>





<script type="text/javascript">
jQuery(function( $ )//called on document.ready
{
    with( document.registerform )
    {
        for( var i = 0, l = elements.length; i < l; i++ )
        {
            if( elements[i].type == \'text\' )
            {
                elements[i].focus();
                return;
            }
        }
    }
});

function disableButtons()
{
    document.getElementById( \'PublishButton\' ).disabled = true;
    document.getElementById( \'CancelButton\' ).disabled = true;
}
</script>

';

$setArray = $oldSetArray_70b593ad63ef1e93dbc77e19c3b15a36;
$tpl->Level--;
?>

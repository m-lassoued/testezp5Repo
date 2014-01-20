<?php
// URI:       design:content/datatype/view/ezgmaplocation.tpl
// Filename:  extension/ezdemo/design/ezdemo/override/templates/datatype/view/ezgmaplocation_article.tpl
// Timestamp: 1389968167 (Fri Jan 17 15:16:07 CET 2014)
$oldSetArray_cc88bfb56974fe71d504f09b2ad35bc5 = isset( $setArray ) ? $setArray : array();
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

// def $latitude
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var3 = compiledFetchAttribute( $var2, 'content' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'latitude' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( ",", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "," ), array_slice( $var2, "," ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ".", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'latitude', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'latitude' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 46,
  ),
  1 => 
  array (
    0 => 3,
    1 => 72,
    2 => 189,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/datatype/view/ezgmaplocation_article.tpl',
) );
    $tpl->setVariable( 'latitude', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'latitude', $var, $rootNamespace );
}

// def $longitude
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var3 = compiledFetchAttribute( $var2, 'content' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'longitude' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( ",", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "," ), array_slice( $var2, "," ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ".", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'longitude', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'longitude' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 46,
  ),
  1 => 
  array (
    0 => 3,
    1 => 72,
    2 => 189,
  ),
  2 => 'extension/ezdemo/design/ezdemo/override/templates/datatype/view/ezgmaplocation_article.tpl',
) );
    $tpl->setVariable( 'longitude', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'longitude', $var, $rootNamespace );
}

if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["ee9117cdb497072dee2ec3850f25b23d"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["ee9117cdb497072dee2ec3850f25b23d"] = array( array( 4,
              0,
              192 ),
       array( 4,
              8,
              200 ),
       "extension/ezdemo/design/ezdemo/override/templates/datatype/view/ezgmaplocation_article.tpl" );
$text .= '<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

function eZGmapLocation_MapView( attributeId, latitude, longitude )
{
    var zoommax = 13;

    if( latitude && longitude )
    {
        var startPoint = new google.maps.LatLng( latitude, longitude );
        var zoom = zoommax;

    }
  else
  {
      var startPoint = new google.maps.LatLng( 0, 0 );
      var zoom = 0;
  }

  var map = new google.maps.Map( document.getElementById( \'ezgml-map-\' + attributeId ), { center: startPoint, zoom : zoom, mapTypeId: google.maps.MapTypeId.ROADMAP } );
    var marker = new google.maps.Marker({ map: map, position: startPoint });
}

</script>';
}
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<script type="text/javascript">
<!--

if ( window.addEventListener )
    window.addEventListener(\'load\', function(){ eZGmapLocation_MapView( ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "latitude", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["latitude"] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = "0.0";
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ', ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "longitude", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["longitude"] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = "0.0";
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' ) }, false);
else if ( window.attachEvent )
    window.attachEvent(\'onload\', function(){ eZGmapLocation_MapView( ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "latitude", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["latitude"] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = "0.0";
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ', ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "longitude", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["longitude"] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = "0.0";
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' ) } );

-->
</script>
<div id="ezgml-map-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" style="width: 100%; height: 330px;">';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_cc88bfb56974fe71d504f09b2ad35bc5;
$tpl->Level--;
?>

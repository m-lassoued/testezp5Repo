<?php
// URI:       design:content/datatype/view/ezgmaplocation.tpl
// Filename:  extension/ezgmaplocation/design/standard/templates/content/datatype/view/ezgmaplocation.tpl
// Timestamp: 1389968150 (Fri Jan 17 15:15:50 CET 2014)
$oldSetArray_e847113af737211048e7aa5c6d82316c = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'width', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['width'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $width
if ( $tpl->hasVariable( 'width', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'width' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 4,
    2 => 29,
  ),
  1 => 
  array (
    0 => 2,
    1 => 18,
    2 => 43,
  ),
  2 => 'extension/ezgmaplocation/design/standard/templates/content/datatype/view/ezgmaplocation.tpl',
) );
    $tpl->setVariable( 'width', 500, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'width', 500, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'height', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['height'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $height
if ( $tpl->hasVariable( 'height', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'height' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 4,
    2 => 81,
  ),
  1 => 
  array (
    0 => 5,
    1 => 19,
    2 => 96,
  ),
  2 => 'extension/ezgmaplocation/design/standard/templates/content/datatype/view/ezgmaplocation.tpl',
) );
    $tpl->setVariable( 'height', 280, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'height', 280, $rootNamespace );
}

}
unset( $if_cond );
// if ends

$text .= '
';
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
    0 => 9,
    1 => 0,
    2 => 151,
  ),
  1 => 
  array (
    0 => 10,
    1 => 72,
    2 => 294,
  ),
  2 => 'extension/ezgmaplocation/design/standard/templates/content/datatype/view/ezgmaplocation.tpl',
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
    0 => 9,
    1 => 0,
    2 => 151,
  ),
  1 => 
  array (
    0 => 10,
    1 => 72,
    2 => 294,
  ),
  2 => 'extension/ezgmaplocation/design/standard/templates/content/datatype/view/ezgmaplocation.tpl',
) );
    $tpl->setVariable( 'longitude', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'longitude', $var, $rootNamespace );
}

if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["d800c9355b63a9105a04c1a7dcebc95c"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["d800c9355b63a9105a04c1a7dcebc95c"] = array( array( 11,
              0,
              297 ),
       array( 11,
              8,
              305 ),
       "extension/ezgmaplocation/design/standard/templates/content/datatype/view/ezgmaplocation.tpl" );
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
</script>

<div class="block">
<label>Latitude:</label> ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latitude', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latitude'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
<label>Longitude:</label> ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'longitude', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['longitude'] : null;
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
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'address' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <label>Address:</label> ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'address' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
  ';
}
unset( $if_cond );
// if ends

$text .= '</div>

<label>Map:</label>
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

$text .= '" style="width: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'width', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['width'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= 'px; height: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'height', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['height'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= 'px;"></div>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_e847113af737211048e7aa5c6d82316c;
$tpl->Level--;
?>

<?php
// URI:       design:parts/media/menu.tpl
// Filename:  design/admin/templates/parts/media/menu.tpl
// Timestamp: 1385723972 (Fri Nov 29 12:19:32 CET 2013)
$oldSetArray_397d59206308132c42adbfefadccdbba = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="content-tree">

<div class="box-header"><div class="box-ml">
<h4>Media library</h4>
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">
    ';
$oldRestoreIncludeArray_9c94011ac9a719e86b9317e8a95d3f90 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node_id', $vars[$currentNamespace]['custom_root_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node_id', 'unset' );

$vars[$currentNamespace]['custom_root_node_id'] = '43';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/content_structure_menu_dynamic-a87f5ffa2a7f10c546398ec90fb4d4fc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/content_structure_menu_dynamic-a87f5ffa2a7f10c546398ec90fb4d4fc.php' );
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
$tpl->processURI( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9c94011ac9a719e86b9317e8a95d3f90;

$text .= '</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="trash">
<a class="image-text" href=';
unset( $var );
unset( $var1 );
$var1 = ( '/content/trash/' . 2 );
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

$text .= ' title="View and manage the contents of the trash bin."><img src="/testezp/web/design/admin/images/trash-icon-16x16.gif" width="16" height="16" alt="Trash" />&nbsp;<span>Trash</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div></div></div>
</div>

';
$oldRestoreIncludeArray_00c819b2ddf540eb1fad2835425b023e = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_media';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/ini_menu-24dc6ed072fd331263db8ad7af08b22f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/parts/ini_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/ini_menu-24dc6ed072fd331263db8ad7af08b22f.php' );
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
$tpl->processURI( 'design/admin/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_00c819b2ddf540eb1fad2835425b023e;

$text .= '

<div id="widthcontrol-links" class="widthcontrol">
<p>';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '    ',
    3 => 
    array (
      0 => 
      array (
        0 => 30,
        1 => 51,
        2 => 1312,
      ),
      1 => 
      array (
        0 => 31,
        1 => 4,
        2 => 1317,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 31,
            1 => 23,
            2 => 1338,
          ),
          1 => 
          array (
            0 => 32,
            1 => 12,
            2 => 1351,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 32,
            1 => 12,
            2 => 1352,
          ),
          1 => 
          array (
            0 => 32,
            1 => 68,
            2 => 1408,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 32,
            1 => 68,
            2 => 1409,
          ),
          1 => 
          array (
            0 => 32,
            1 => 76,
            2 => 1417,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 32,
            1 => 76,
            2 => 1418,
          ),
          1 => 
          array (
            0 => 32,
            1 => 159,
            2 => 1501,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 32,
            1 => 159,
            2 => 1502,
          ),
          1 => 
          array (
            0 => 32,
            1 => 161,
            2 => 1504,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 32,
            1 => 161,
            2 => 1505,
          ),
          1 => 
          array (
            0 => 32,
            1 => 208,
            2 => 1552,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 32,
            1 => 208,
            2 => 1553,
          ),
          1 => 
          array (
            0 => 33,
            1 => 26,
            2 => 1584,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 33,
            1 => 26,
            2 => 1585,
          ),
          1 => 
          array (
            0 => 33,
            1 => 74,
            2 => 1633,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 33,
            1 => 74,
            2 => 1634,
          ),
          1 => 
          array (
            0 => 34,
            1 => 12,
            2 => 1654,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 12,
            2 => 1655,
          ),
          1 => 
          array (
            0 => 34,
            1 => 68,
            2 => 1711,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 68,
            2 => 1712,
          ),
          1 => 
          array (
            0 => 34,
            1 => 76,
            2 => 1720,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 76,
            2 => 1721,
          ),
          1 => 
          array (
            0 => 34,
            1 => 159,
            2 => 1804,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 159,
            2 => 1805,
          ),
          1 => 
          array (
            0 => 34,
            1 => 161,
            2 => 1807,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 161,
            2 => 1808,
          ),
          1 => 
          array (
            0 => 34,
            1 => 208,
            2 => 1855,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 208,
            2 => 1856,
          ),
          1 => 
          array (
            0 => 35,
            1 => 4,
            2 => 1865,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'medium',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 31,
        1 => 4,
        2 => 1318,
      ),
      1 => 
      array (
        0 => 31,
        1 => 23,
        2 => 1337,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 35,
        1 => 8,
        2 => 1872,
      ),
      1 => 
      array (
        0 => 37,
        1 => 4,
        2 => 1878,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 37,
            1 => 22,
            2 => 1898,
          ),
          1 => 
          array (
            0 => 38,
            1 => 12,
            2 => 1911,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 12,
            2 => 1912,
          ),
          1 => 
          array (
            0 => 38,
            1 => 68,
            2 => 1968,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 68,
            2 => 1969,
          ),
          1 => 
          array (
            0 => 38,
            1 => 76,
            2 => 1977,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 76,
            2 => 1978,
          ),
          1 => 
          array (
            0 => 38,
            1 => 159,
            2 => 2061,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 159,
            2 => 2062,
          ),
          1 => 
          array (
            0 => 38,
            1 => 161,
            2 => 2064,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 161,
            2 => 2065,
          ),
          1 => 
          array (
            0 => 38,
            1 => 208,
            2 => 2112,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 208,
            2 => 2113,
          ),
          1 => 
          array (
            0 => 39,
            1 => 12,
            2 => 2130,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 12,
            2 => 2131,
          ),
          1 => 
          array (
            0 => 39,
            1 => 69,
            2 => 2188,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 69,
            2 => 2189,
          ),
          1 => 
          array (
            0 => 39,
            1 => 77,
            2 => 2197,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 77,
            2 => 2198,
          ),
          1 => 
          array (
            0 => 39,
            1 => 161,
            2 => 2282,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 161,
            2 => 2283,
          ),
          1 => 
          array (
            0 => 39,
            1 => 163,
            2 => 2285,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 163,
            2 => 2286,
          ),
          1 => 
          array (
            0 => 39,
            1 => 211,
            2 => 2334,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 211,
            2 => 2335,
          ),
          1 => 
          array (
            0 => 40,
            1 => 26,
            2 => 2366,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 26,
            2 => 2367,
          ),
          1 => 
          array (
            0 => 40,
            1 => 73,
            2 => 2414,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 73,
            2 => 2415,
          ),
          1 => 
          array (
            0 => 41,
            1 => 4,
            2 => 2427,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'large',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 37,
        1 => 4,
        2 => 1879,
      ),
      1 => 
      array (
        0 => 37,
        1 => 22,
        2 => 1897,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 41,
        1 => 8,
        2 => 2434,
      ),
      1 => 
      array (
        0 => 43,
        1 => 4,
        2 => 2440,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 43,
            1 => 32,
            2 => 2470,
          ),
          1 => 
          array (
            0 => 44,
            1 => 26,
            2 => 2497,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 26,
            2 => 2498,
          ),
          1 => 
          array (
            0 => 44,
            1 => 73,
            2 => 2545,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 73,
            2 => 2546,
          ),
          1 => 
          array (
            0 => 45,
            1 => 12,
            2 => 2566,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 12,
            2 => 2567,
          ),
          1 => 
          array (
            0 => 45,
            1 => 69,
            2 => 2624,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 69,
            2 => 2625,
          ),
          1 => 
          array (
            0 => 45,
            1 => 77,
            2 => 2633,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 77,
            2 => 2634,
          ),
          1 => 
          array (
            0 => 45,
            1 => 161,
            2 => 2718,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 161,
            2 => 2719,
          ),
          1 => 
          array (
            0 => 45,
            1 => 163,
            2 => 2721,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 163,
            2 => 2722,
          ),
          1 => 
          array (
            0 => 45,
            1 => 211,
            2 => 2770,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 211,
            2 => 2771,
          ),
          1 => 
          array (
            0 => 46,
            1 => 12,
            2 => 2788,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 12,
            2 => 2789,
          ),
          1 => 
          array (
            0 => 46,
            1 => 68,
            2 => 2845,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 68,
            2 => 2846,
          ),
          1 => 
          array (
            0 => 46,
            1 => 76,
            2 => 2854,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 76,
            2 => 2855,
          ),
          1 => 
          array (
            0 => 46,
            1 => 159,
            2 => 2938,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 159,
            2 => 2939,
          ),
          1 => 
          array (
            0 => 46,
            1 => 161,
            2 => 2941,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 161,
            2 => 2942,
          ),
          1 => 
          array (
            0 => 46,
            1 => 208,
            2 => 2989,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 208,
            2 => 2990,
          ),
          1 => 
          array (
            0 => 47,
            1 => 4,
            2 => 2999,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
      array (
        0 => 
        array (
          0 => 6,
          1 => 
          array (
            0 => 'array',
            1 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => 'small',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => '',
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 43,
        1 => 4,
        2 => 2441,
      ),
      1 => 
      array (
        0 => 43,
        1 => 32,
        2 => 2469,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 47,
        1 => 8,
        2 => 3006,
      ),
      1 => 
      array (
        0 => 49,
        1 => 4,
        2 => 3012,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 49,
            1 => 8,
            2 => 3018,
          ),
          1 => 
          array (
            0 => 50,
            1 => 12,
            2 => 3031,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 12,
            2 => 3032,
          ),
          1 => 
          array (
            0 => 50,
            1 => 68,
            2 => 3088,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 68,
            2 => 3089,
          ),
          1 => 
          array (
            0 => 50,
            1 => 76,
            2 => 3097,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 76,
            2 => 3098,
          ),
          1 => 
          array (
            0 => 50,
            1 => 159,
            2 => 3181,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 159,
            2 => 3182,
          ),
          1 => 
          array (
            0 => 50,
            1 => 161,
            2 => 3184,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 161,
            2 => 3185,
          ),
          1 => 
          array (
            0 => 50,
            1 => 208,
            2 => 3232,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 208,
            2 => 3233,
          ),
          1 => 
          array (
            0 => 51,
            1 => 12,
            2 => 3250,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 12,
            2 => 3251,
          ),
          1 => 
          array (
            0 => 51,
            1 => 69,
            2 => 3308,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 69,
            2 => 3309,
          ),
          1 => 
          array (
            0 => 51,
            1 => 77,
            2 => 3317,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 77,
            2 => 3318,
          ),
          1 => 
          array (
            0 => 51,
            1 => 161,
            2 => 3402,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 161,
            2 => 3403,
          ),
          1 => 
          array (
            0 => 51,
            1 => 163,
            2 => 3405,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 163,
            2 => 3406,
          ),
          1 => 
          array (
            0 => 51,
            1 => 211,
            2 => 3454,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 211,
            2 => 3455,
          ),
          1 => 
          array (
            0 => 52,
            1 => 12,
            2 => 3472,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 12,
            2 => 3473,
          ),
          1 => 
          array (
            0 => 52,
            1 => 68,
            2 => 3529,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 68,
            2 => 3530,
          ),
          1 => 
          array (
            0 => 52,
            1 => 76,
            2 => 3538,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 76,
            2 => 3539,
          ),
          1 => 
          array (
            0 => 52,
            1 => 159,
            2 => 3622,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 159,
            2 => 3623,
          ),
          1 => 
          array (
            0 => 52,
            1 => 161,
            2 => 3625,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 161,
            2 => 3626,
          ),
          1 => 
          array (
            0 => 52,
            1 => 208,
            2 => 3673,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 208,
            2 => 3674,
          ),
          1 => 
          array (
            0 => 53,
            1 => 4,
            2 => 3683,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 49,
        1 => 4,
        2 => 3013,
      ),
      1 => 
      array (
        0 => 49,
        1 => 8,
        2 => 3017,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  8 => 
  array (
    0 => 2,
    1 => false,
    2 => false,
    3 => 
    array (
      0 => 
      array (
        0 => 53,
        1 => 8,
        2 => 3690,
      ),
      1 => 
      array (
        0 => 54,
        1 => 0,
        2 => 3691,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezpreference',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'admin_left_menu_size',
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
    0 => 30,
    1 => 0,
    2 => 1260,
  ),
  1 => 
  array (
    0 => 30,
    1 => 51,
    2 => 1311,
  ),
  2 => 'design/admin/templates/parts/media/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>
';

$setArray = $oldSetArray_397d59206308132c42adbfefadccdbba;
$tpl->Level--;
?>

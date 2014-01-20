<?php
// URI:       design:content/datatype/view/ezcomcomments.tpl
// Filename:  extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl
// Timestamp: 1389968201 (Fri Jan 17 15:16:41 CET 2014)
$oldSetArray_22e422f22beb0b1bd231de31d2f52781 = isset( $setArray ) ? $setArray : array();
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

unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcss_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'comment.css',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'show_comments' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_node'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
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
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( '', $vars ) and array_key_exists( 'node', $vars[''] ) ) ? $vars['']['node'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// def $attribute_node
unset( $var );
unset( $var );
$var = ( array_key_exists( '', $vars ) and array_key_exists( 'node', $vars[''] ) ) ? $vars['']['node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'attribute_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_node' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 12,
    2 => 156,
  ),
  1 => 
  array (
    0 => 6,
    1 => 38,
    2 => 182,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'attribute_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_node', $var, $rootNamespace );
}

$text .= '        ';
}
else
{
$text .= '            ';
// def $attribute_node
if ( $tpl->hasVariable( 'attribute_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attribute_node' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 12,
    2 => 212,
  ),
  1 => 
  array (
    0 => 8,
    1 => 39,
    2 => 239,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'attribute_node', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attribute_node', false, $rootNamespace );
}

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    
    ';
// def $contentobject
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'contentobject', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'contentobject' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 4,
    2 => 275,
  ),
  1 => 
  array (
    0 => 12,
    1 => 42,
    2 => 313,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'contentobject', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'contentobject', $var, $rootNamespace );
}

$text .= '    ';
// def $language_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'language_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'language_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'language_id' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 4,
    2 => 320,
  ),
  1 => 
  array (
    0 => 13,
    1 => 45,
    2 => 361,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'language_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'language_id', $var, $rootNamespace );
}

$text .= '    ';
// def $language_code
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'language_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'language_code', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'language_code' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 4,
    2 => 368,
  ),
  1 => 
  array (
    0 => 14,
    1 => 49,
    2 => 413,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'language_code', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'language_code', $var, $rootNamespace );
}

$text .= '    ';
// def $can_read
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_node'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new ezcomPermission(), 'hasAccessToFunction' ),
  array(     'function' => "read",
    'contentobject' => $var1,
    'language_code' => $var2,
    'comment' => null,
    'scope' => null,
    'node' => $var3 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_read', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_read' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 4,
    2 => 420,
  ),
  1 => 
  array (
    0 => 18,
    1 => 98,
    2 => 812,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'can_read', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_read', $var, $rootNamespace );
}

$text .= '    
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_read', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_read'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $sort_field
if ( $tpl->hasVariable( 'sort_field', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sort_field' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 8,
    2 => 878,
  ),
  1 => 
  array (
    0 => 21,
    1 => 94,
    2 => 964,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'sort_field', 'created', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sort_field', 'created', $rootNamespace );
}

$text .= '        ';
// def $sort_order
if ( $tpl->hasVariable( 'sort_order', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sort_order' is already defined.", array (
  0 => 
  array (
    0 => 22,
    1 => 8,
    2 => 975,
  ),
  1 => 
  array (
    0 => 22,
    1 => 94,
    2 => 1061,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'sort_order', 'desc', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sort_order', 'desc', $rootNamespace );
}

$text .= '        ';
// def $default_shown_length
if ( $tpl->hasVariable( 'default_shown_length', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_shown_length' is already defined.", array (
  0 => 
  array (
    0 => 23,
    1 => 8,
    2 => 1072,
  ),
  1 => 
  array (
    0 => 23,
    1 => 100,
    2 => 1164,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'default_shown_length', '8', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_shown_length', '8', $rootNamespace );
}

$text .= '
        
        ';
// def $total_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_id'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new ezcomFunctionCollection(), 'fetchCommentCount' ),
  array(     'contentobject_id' => $var1,
    'language_id' => $var2,
    'status' => 1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'total_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'total_count' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 8,
    2 => 1210,
  ),
  1 => 
  array (
    0 => 30,
    1 => 54,
    2 => 1495,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'total_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'total_count', $var, $rootNamespace );
}

$text .= '        
        
        ';
// def $comments
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_id'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_field'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_order', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_order'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_shown_length', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_shown_length'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var = call_user_func_array( array( new ezcomFunctionCollection(), 'fetchCommentList' ),
  array(     'contentobject_id' => $var1,
    'language_id' => $var2,
    'status' => 1,
    'sort_field' => $var3,
    'sort_order' => $var4,
    'offset' => 0,
    'length' => $var5 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'comments', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'comments' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 8,
    2 => 1544,
  ),
  1 => 
  array (
    0 => 41,
    1 => 51,
    2 => 2062,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'comments', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'comments', $var, $rootNamespace );
}

$text .= '        
        
        ';
// def $self_policy
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_node'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new ezcomPermission(), 'selfPolicies' ),
  array(     'contentobject' => $var1,
    'node' => $var2 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'self_policy', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'self_policy' is already defined.", array (
  0 => 
  array (
    0 => 44,
    1 => 8,
    2 => 2168,
  ),
  1 => 
  array (
    0 => 44,
    1 => 126,
    2 => 2286,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'self_policy', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'self_policy', $var, $rootNamespace );
}

$text .= '
        
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'comments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['comments'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
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
$text .= '            <div id="ezcom-comment-list" class="ezcom-view-list">
                ';
// for begins
if ( !isset( $for_variable_stack_fc0d4bcb2f34960039a1b0fcc758088d_1 ) ) $for_variable_stack_fc0d4bcb2f34960039a1b0fcc758088d_1 = array();
$for_variable_stack_fc0d4bcb2f34960039a1b0fcc758088d_1[] = compact( 'for_firstval_fc0d4bcb2f34960039a1b0fcc758088d_1', 'for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1', 'for_i_fc0d4bcb2f34960039a1b0fcc758088d_1' );
$for_firstval_fc0d4bcb2f34960039a1b0fcc758088d_1 = 0;
unset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 );
unset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 );
unset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 );
$for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'comments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['comments'] : null;
if (! isset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 ) ) $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 = NULL;
while ( is_object( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 ) and method_exists( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11, 'templateValue' ) )
    $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 = $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11->templateValue();
$for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11Data = array( 'value' => $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11Data, false, false );
$for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 = $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11Data['value'];
unset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11Data );
if (! isset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 ) ) $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 = NULL;
while ( is_object( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 ) and method_exists( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11, 'templateValue' ) )
    $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 = $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11->templateValue();
$for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 = $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 - 1.000000;
unset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_11 );
if (! isset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 ) ) $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 = NULL;
while ( is_object( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 ) and method_exists( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1, 'templateValue' ) )
    $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 = $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1->templateValue();

$skipDelimiter = true;
for ( $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1 = $for_firstval_fc0d4bcb2f34960039a1b0fcc758088d_1 ; ; $for_firstval_fc0d4bcb2f34960039a1b0fcc758088d_1 < $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 ? $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1++ : $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1-- )
{
$vars[$rootNamespace]['index'] = $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1;
if ( !( $for_firstval_fc0d4bcb2f34960039a1b0fcc758088d_1 < $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 ? $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1 <= $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 : $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1 >= $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 ) )
   break;

$text .= '                        ';
$oldRestoreIncludeArray_6f8b345e8b913ea7493be36b07d14460 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['contentobject'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'contentobject', $vars[$currentNamespace]['contentobject'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['contentobject'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'contentobject', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['contentobject'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['language_code'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'language_code', $vars[$currentNamespace]['language_code'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['language_code'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'language_code', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['language_code'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['comment'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'comment', $vars[$currentNamespace]['comment'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['comment'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'comment', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'comments', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['comments'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['comment'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['index'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'index', $vars[$currentNamespace]['index'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['index'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'index', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['index'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['base_index'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'base_index', $vars[$currentNamespace]['base_index'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['base_index'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'base_index', 'unset' );

$vars[$currentNamespace]['base_index'] = 0;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['can_self_edit'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'can_self_edit', $vars[$currentNamespace]['can_self_edit'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['can_self_edit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'can_self_edit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'self_policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['self_policy'] : null;
$var1 = compiledFetchAttribute( $var, 'edit' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['can_self_edit'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['can_self_delete'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'can_self_delete', $vars[$currentNamespace]['can_self_delete'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['can_self_delete'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'can_self_delete', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'self_policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['self_policy'] : null;
$var1 = compiledFetchAttribute( $var, 'delete' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['can_self_delete'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'node', $vars[$currentNamespace]['node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/comment_item-50e8a7b236e45ff5c6cb2f8f248479f3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/comment/view/comment_item.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/comment_item-50e8a7b236e45ff5c6cb2f8f248479f3.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/comment/view/comment_item.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6f8b345e8b913ea7493be36b07d14460;

$text .= '                ';
} // for
if ( count( $for_variable_stack_fc0d4bcb2f34960039a1b0fcc758088d_1 ) ) extract( array_pop( $for_variable_stack_fc0d4bcb2f34960039a1b0fcc758088d_1 ) );

else
{

unset( $vars[$rootNamespace]['index'] );
unset( $for_firstval_fc0d4bcb2f34960039a1b0fcc758088d_1 );

unset( $for_lastval_fc0d4bcb2f34960039a1b0fcc758088d_1 );

unset( $for_i_fc0d4bcb2f34960039a1b0fcc758088d_1 );

unset( $for_variable_stack_fc0d4bcb2f34960039a1b0fcc758088d_1 );

}

$skipDelimiter = false;
// for ends

$text .= '                <div class="ezcom-view-all">
                  <p>
                      ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'total_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['total_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
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
        2 => 'comments',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) > ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                          <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/comment/view/' . $var3 );
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

$text .= '>
                            ';
unset( $var );
$var = 'View all %total_count comments';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ezcomments/comment/view',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%total_count',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'total_count',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                          </a>
                      ';
}
else
{
$text .= '                        ';
unset( $var );
$var = 'Total %total_count comments';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ezcomments/comment/view',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%total_count',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'total_count',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                      ';
}
unset( $if_cond );
// if ends

$text .= '                  </p>
                </div>
            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '        
        
        ';
// undef $comments
$tpl->unsetLocalVariable( 'comments', $rootNamespace );

// undef $total_count
$tpl->unsetLocalVariable( 'total_count', $rootNamespace );

// undef $default_shown_length
$tpl->unsetLocalVariable( 'default_shown_length', $rootNamespace );

// undef $sort_order
$tpl->unsetLocalVariable( 'sort_order', $rootNamespace );

// undef $sort_field
$tpl->unsetLocalVariable( 'sort_field', $rootNamespace );

$text .= '    ';
}
else
{
$text .= '        <div class="message-error">
            <p>
                    You don\'t have access to view comment.
            </p>
        </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $can_read
$tpl->unsetLocalVariable( 'can_read', $rootNamespace );

$text .= '    
    
    
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'enable_comment' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $can_add
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_node'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new ezcomPermission(), 'hasAccessToFunction' ),
  array(     'function' => "add",
    'contentobject' => $var1,
    'language_code' => $var2,
    'comment' => null,
    'scope' => null,
    'node' => $var3 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_add', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_add' is already defined.", array (
  0 => 
  array (
    0 => 88,
    1 => 8,
    2 => 4173,
  ),
  1 => 
  array (
    0 => 92,
    1 => 75,
    2 => 4635,
  ),
  2 => 'extension/ezcomments/design/standard/templates/content/datatype/view/ezcomcomments.tpl',
) );
    $tpl->setVariable( 'can_add', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_add', $var, $rootNamespace );
}

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_add', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_add'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
$oldRestoreIncludeArray_eac6fb36f38d0f4da466f0363d33e737 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['redirect_uri'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'redirect_uri', $vars[$currentNamespace]['redirect_uri'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['redirect_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'redirect_uri', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['redirect_uri'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['contentobject_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'contentobject_id', $vars[$currentNamespace]['contentobject_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['contentobject_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'contentobject_id', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentobject', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentobject'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['contentobject_id'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['language_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'language_id', $vars[$currentNamespace]['language_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['language_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'language_id', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['language_id'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/add_comment-fd8d301be0c4f530d24c831cc0e08513.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/comment/add_comment.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/add_comment-fd8d301be0c4f530d24c831cc0e08513.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/comment/add_comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_eac6fb36f38d0f4da466f0363d33e737;

$text .= '        ';
}
else
{
$text .= '            <div class="message-error">
                    <p>
                        You don\'t have access to post comment.
                    </p>
            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// undef $can_add
$tpl->unsetLocalVariable( 'can_add', $rootNamespace );

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    
    
    ';
// undef $contentobject
$tpl->unsetLocalVariable( 'contentobject', $rootNamespace );

// undef $language_id
$tpl->unsetLocalVariable( 'language_id', $rootNamespace );

// undef $language_code
$tpl->unsetLocalVariable( 'language_code', $rootNamespace );

}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_22e422f22beb0b1bd231de31d2f52781;
$tpl->Level--;
?>

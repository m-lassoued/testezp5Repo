<?php
// URI:       extension/ezdemo/design/ezdemo/templates/parts/social_buttons.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/parts/social_buttons.tpl
// Timestamp: 1389968166 (Fri Jan 17 15:16:06 CET 2014)
$oldSetArray_25afe467c73c97ed42f2c40051ff4cf2 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="social-button">
    <a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="ezpublish">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<div class="social-button">
    <div class="fb-like" data-send="false" data-layout="button_count" data-width="90" data-show-faces="false"></div>

    <div id="fb-root"></div>
    
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, \'script\', \'facebook-jssdk\'));</script>
    
</div>
<div class="social-button">
    <div class="g-plusone" data-size="medium"></div>

    <script type="text/javascript">
        
        (function() {
        var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
        po.src = \'https://apis.google.com/js/plusone.js\';
        var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
        })();
        
    </script>
</div>
';

$setArray = $oldSetArray_25afe467c73c97ed42f2c40051ff4cf2;
$tpl->Level--;
?>

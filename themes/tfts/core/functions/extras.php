<?php

// Allow svg file tyoe upload from Media Upload
function tfts_upload_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'tfts_upload_mime_types');


// Resize image using img thumb
if ( !( function_exists('tfts_imgsize') ) ) :
  // Use of phpthumb -- Resize your image appearing on a site
  function tfts_imgsize($w, $h, $src, $fr=1) {
    if ($w != 0 && $h == 0):
      return TFTS_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;q=100";

    elseif ($w == 0 && $h != 0):
      return TFTS_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;h=" . $h . "&amp;q=100";

    else:
      if($fr==0):
        return TFTS_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&bg=ffffff&amp;far=1";
      else:
        return TFTS_THEME_LIBS_URL ."/imgthumb/phpThumb.php?src=" . $src . "&amp;w=" . $w . "&amp;h=" . $h . "&amp;q=100&amp;zc=T";
      endif;
    endif;
  }
endif;
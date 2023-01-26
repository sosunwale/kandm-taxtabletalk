<?php
//Variables
$button_font_size = block_value('button-font');
$button_color = block_value('button-color');
?>
<div class="wp-block-button has-custom-font-size is-style-outline" style="color:<?php echo $button_color ?>;"><a class="<?php echo $button_font_size ?> wp-block-button__link wp-element-button" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'taxtbt_podcast_google_pod', true ) );?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M24.5 12L24.5 12c-1.381 0-2.5-1.119-2.5-2.5v-3C22 5.119 23.119 4 24.5 4h0C25.881 4 27 5.119 27 6.5v3C27 10.881 25.881 12 24.5 12zM24.5 47L24.5 47c-1.381 0-2.5-1.119-2.5-2.5v-3c0-1.381 1.119-2.5 2.5-2.5h0c1.381 0 2.5 1.119 2.5 2.5v3C27 45.881 25.881 47 24.5 47zM24.5 36L24.5 36c-1.381 0-2.5-1.119-2.5-2.5v-16c0-1.381 1.119-2.5 2.5-2.5h0c1.381 0 2.5 1.119 2.5 2.5v16C27 34.881 25.881 36 24.5 36zM33.5 12L33.5 12c-1.381 0-2.5 1.119-2.5 2.5v3c0 1.381 1.119 2.5 2.5 2.5h0c1.381 0 2.5-1.119 2.5-2.5v-3C36 13.119 34.881 12 33.5 12zM33.5 23L33.5 23c-1.381 0-2.5 1.119-2.5 2.5v10c0 1.381 1.119 2.5 2.5 2.5h0c1.381 0 2.5-1.119 2.5-2.5v-10C36 24.119 34.881 23 33.5 23zM41.5 21L41.5 21c-1.381 0-2.5 1.119-2.5 2.5v3c0 1.381 1.119 2.5 2.5 2.5h0c1.381 0 2.5-1.119 2.5-2.5v-3C44 22.119 42.881 21 41.5 21zM15.5 38L15.5 38c-1.381 0-2.5-1.119-2.5-2.5v-3c0-1.381 1.119-2.5 2.5-2.5h0c1.381 0 2.5 1.119 2.5 2.5v3C18 36.881 16.881 38 15.5 38zM15.5 27L15.5 27c-1.381 0-2.5-1.119-2.5-2.5v-10c0-1.381 1.119-2.5 2.5-2.5h0c1.381 0 2.5 1.119 2.5 2.5v10C18 25.881 16.881 27 15.5 27zM7.5 21L7.5 21c1.381 0 2.5 1.119 2.5 2.5v3c0 1.381-1.119 2.5-2.5 2.5h0C6.119 29 5 27.881 5 26.5v-3C5 22.119 6.119 21 7.5 21z"/></svg>Google Podcast</a></div>
<?php
//Variables
$button_font_size = block_value('button-font');
$button_color = block_value('button-color');
?>
<div class="wp-block-button has-custom-font-size is-style-outline" style="color:<?php echo $button_color ?>;"><a class="<?php echo $button_font_size ?> wp-block-button__link wp-element-button" href="<?php echo esc_attr( get_post_meta( get_the_ID(), 'taxtbt_podcast_facebook', true ) );?>"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg>Facebook</a></div>
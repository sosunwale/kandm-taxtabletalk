<div class="taxtbt_box">
    <style scoped>
        .taxtbt_box{
            display: grid;
            grid-template-columns: 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .taxtbt_field{
            display: contents;
            width: 100%;
        }
    </style>
    <p class="meta-options taxtbt_field">
        <label for="taxtbt_podcast_applepod">Apple Podcast</label>
        <input id="taxtbt_podcast_applepod" type="url" name="taxtbt_podcast_applepod" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'taxtbt_podcast_applepod', true ) ); ?>">
    </p>
    <p class="meta-options taxtbt_field">
        <label for="taxtbt_podcast_iheart">iHeart Radio</label>
        <input id="taxtbt_podcast_iheart" type="url" name="taxtbt_podcast_iheart" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'taxtbt_podcast_iheart', true ) ); ?>">
    </p>
    <p class="meta-options taxtbt_field">
        <label for="taxtbt_podcast_youtube">Youtube</label>
        <input id="taxtbt_podcast_youtube" type="url" name="taxtbt_podcast_youtube" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'taxtbt_podcast_youtube', true ) ); ?>">
    </p>
    <p class="meta-options taxtbt_field">
        <label for="taxtbt_podcast_facebook">Facebook</label>
        <input id="taxtbt_podcast_facebook" type="url" name="taxtbt_podcast_facebook" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'taxtbt_podcast_facebook', true ) ); ?>">
    </p>
</div>
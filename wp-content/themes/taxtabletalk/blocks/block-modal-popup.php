<?php
//Variables
$button_text = block_value('modal-button-text');
$button_color = block_value('modal-button-color');
$background_color = block_value('modal-button-background-color');
$button_font_size = block_value('button-font');
$button_align = block_value('button-align');
$button_float = block_value('button-position');
$inner_content_position = block_value('modal-position');
//Button Float

if ( block_value( 'limit-float' ) ) {
  ?>  
  <style> 
    .modal-trigger.center-center, .modal-trigger.center-left, .modal-trigger.center-right, .modal-trigger.top-center, .modal-trigger.bottom-center, .modal-trigger.top-left, .modal-trigger.top-right, .modal-trigger.bottom-left, .modal-trigger.bottom-right {
        position: absolute;
    }
    </style>
<?php 
} else {
    ?>
    <style> 
    .modal-trigger.center-center, .modal-trigger.center-left, .modal-trigger.center-right, .modal-trigger.top-center, .modal-trigger.bottom-center, .modal-trigger.top-left, .modal-trigger.top-right, .modal-trigger.bottom-left, .modal-trigger.bottom-right {
        position: fixed;
    }
    </style>
    <?php
}
?>
<div class="<?php block_field('className'); ?>">
<!--    Modal Button -->
<div class="<?php echo $button_align;?> <?php echo $button_float;?> is-layout-flex wp-block-buttons modal-trigger">
<div class="has-custom-font-size wp-block-button"><a style="background:<?php echo $background_color; ?> ; color: <?php echo $button_color; ?>;" class="<?php echo $button_font_size;?> wp-block-button__link wp-element-button"> <?php echo $button_text; ?></a></div>
</div>
<!--  Inner Content   -->

<div class="modal-content <?php echo $inner_content_position;?>">
<span class="close-button">&times;</span>
    <?php echo block_value('modal-content'); ?>

</div>
</div>
<script>
const modal = document.querySelector(".modal-content");
const trigger = document.querySelector(".modal-trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
</script>
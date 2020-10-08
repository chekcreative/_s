<?php

/**
 * chek_s Example Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'chek_s-exampleblock-' . $block['id'];

?>
<?php if ($is_preview) : ?>
  <div>
    <!-- preview for editor here -->
  </div>
<?php else: ?>
  <div>
    <!-- rendered block here -->
  </div>

  <script>
    // script for block here
  </script>
  
<?php endif;
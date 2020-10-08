(function($){

  /**
   * initializeBlock
   *
   * Adds custom JavaScript to the block HTML.
   *
   * @since   2020.2
   *
   * @param   object $block The block jQuery element.
   * @param   object attributes The block attributes (only available when editing).
   * @return  void
   */
  var initializeBlock = function( $block ) {
    
  }

  // Initialize each block on page load (front end).
  $(function(){
    
  });

  // Initialize dynamic block preview (editor).
  if( window.acf ) {
      window.acf.addAction( 'render_block_preview/type=chek_s-exampleblock', initializeBlock );
  }

})(jQuery);
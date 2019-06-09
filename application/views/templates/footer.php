        </div>
        <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editorCK' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script> 
        <script src="<?php echo base_url();?>assets/js/active.js"></script>
    </body>
 </html>
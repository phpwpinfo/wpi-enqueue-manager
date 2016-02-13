<?php
class wpiEnqueueManage{
    public function __construct(){
        
        add_action( 'wp_enqueue_scripts', array($this,'wpi_dequeue_script'), 100 );
        add_action( 'wp_enqueue_scripts', array($this,'wpi_print_scripts' ));
    }
    
        function wpi_print_scripts() {
            global $wp_scripts;
            echo "<!--\n";
            echo "--------------------------------------------\n";
            echo "Script Handles\n";
            echo "--------------------------------------------\n";
            foreach( $wp_scripts->queue as $handle ) :
                echo $handle." \n";
            endforeach;
            echo "--------------------------------------------\n";
            
            global $wp_styles;
            echo "--------------------------------------------\n";
            echo "Style Handles\n";
            echo "--------------------------------------------\n";
            foreach( $wp_styles->queue as $handle ) :
                echo $handle." \n";
            endforeach;
            echo "--------------------------------------------\n";
            echo "-->\n";
        }

    
    
    function wpi_dequeue_script() {
        $scripts=get_post_meta(get_the_ID(),"wpi_selective_scripts_dequeue",TRUE);
        if($scripts != NULL){
            $scripts_array=  explode("|", $scripts);
            foreach($scripts_array as $script_handle)
            {
                wp_deregister_script($style_handle);
                wp_dequeue_script( $script_handle );
            }
        }
        
        $styles=get_post_meta(get_the_ID(),"wpi_selective_styles_deregister",TRUE);
    
        
        

        if($styles != NULL){
            $styles_array=  explode("|", $styles);
            foreach($styles_array as $style_handle)
            {   wp_deregister_style($style_handle);
        wp_dequeue_style( $style_handle );             }
           
        }
     }
}
?>

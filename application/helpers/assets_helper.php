<?php
    function css_url($nom){
        return base_url().'assets/css/'.$nom.'.css';
    }

    function js_url($nom){
        return base_url().'assets/js/'.$nom.'.js';
    }

    function images_url($image){
        return base_url().'assets/img/'.$image ;
    }

    function font_url(){
        return base_url().'assets/fontfamily/style.css';
    }

    function svg_url($image){
        return base_url().'assets/svg/'.$image.'.svg';
    }

    function addPanier_url($id){
        return base_url().'applications/views/function/addpanier.php?id='.$id;
    }
?>
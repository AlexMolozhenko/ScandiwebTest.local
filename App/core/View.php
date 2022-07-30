<?php

namespace Core;

include_once "../config/configView.php";

class View
{

    /**
     * properties to store the name of the default  directory
     * @var string
     */
    protected $view_template_dir ;
    /**
     * properties to store the name of the default mapping file
     * @var string
     */
    protected $view_template_file ;

    /**
     * property initialization
     * @param string $template
     */
    public function __construct(string $template)
    {
        $this->view_template_dir = $template;
        $this->view_template_file = $template;

    }

    /**
     *method for connecting a display file and passing an array of data
     * @param string $pageTemplate
     * @param array $data
     */
    public function render(string $pageTemplate, array $data = []){
        extract($data);
include_once ROOT_DIRECTORY . DIRECTORY_SEPARATOR . VIEW_DIR . DIRECTORY_SEPARATOR . TEMPLATE_DIR . DIRECTORY_SEPARATOR . $this->view_template_file.'.php';
    }



    /**
     * includes a file for generating attribute input fields. passes an array of attributes
     * @param $attributes
     */
    public function includeAttribute($attributes){
        $fileName ="../App/View/user/includes/attribute.php";
        if(file_exists($fileName)){
            include_once $fileName;
        }else{
            echo 'attribute file not found';
        }
    }
}
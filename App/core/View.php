<?php

namespace Core;

include_once "../config/configView.php";

class View
{

    protected $view_template_dir ;
    protected $view_template_file ;

    public function __construct(string $template)
    {
        $this->view_template_dir = $template;
        $this->view_template_file = $template;

    }

    public function render(string $pageTemplate, array $data = []){
        extract($data);
include_once ROOT_DIRECTORY . DIRECTORY_SEPARATOR . VIEW_DIR . DIRECTORY_SEPARATOR . TEMPLATE_DIR . DIRECTORY_SEPARATOR . $this->view_template_file.'.php';
    }
}
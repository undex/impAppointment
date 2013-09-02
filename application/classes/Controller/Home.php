<?php

    defined('SYSPATH') or die('No direct script access.');

    class Controller_home extends Controller_DefaultTemplate {

        public function action_index() {
            $home = array();
            $this->template->title = 'L and As Hotel';
            $this->template->meta_keywords = 'Your Hotel';
            $this->template->meta_description = 'have it your way';
            $this->template->header = View::factory('pages/header');
            $this->template->content = View::factory('pages/home');
            $this->template->footer = View::factory('pages/footer');
            $this->template->styles = array('assets/css/main.css' => 'screen');
            $this->template->scripts = array('assets/js/jquery-1.10.1.js');
        }
    }
?>
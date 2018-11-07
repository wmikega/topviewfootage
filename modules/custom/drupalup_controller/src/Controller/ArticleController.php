<?php 

namespace Drupal\drupalup_controller\Controller;

class ArticleController {

    public function page() {

        $items = array (
            array('name' => 'https://www.youtube.com/watch?v=GPJ8-xQWDks'),
            array('name' => 'Video two'),
            array('name' => 'Video three'),
            array('name' => 'Video four'),
        );
        
        return array(
            '#theme' => 'article_list',
            '#items' => $items,
            '#title' => 'Video list'
        );
    }
}
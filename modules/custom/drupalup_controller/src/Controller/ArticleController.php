<?php 

namespace Drupal\drupalup_controller\Controller;

class ArticleController {

    public function page() {

        $items = array (
            array('name' => 'Video One'),
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
<?php


namespace app\controllers;


use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'Dmitriy';
        $age = 36;
        $names = ['Andrey', 'Jane'];
        $cache = Cache::instance();
        $cache->delete('test');
        $data = $cache->get('test');
        if (!$data){
            $cache->set('test', $names);
        }

        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: at15
 * Date: 15-7-25
 * Time: 下午2:53
 */
class BookPrototype
{
    protected $title;

    public function setTitle($title){
        $this->title = $title;
    }

    // the _clone will have significant effect compared with new
    public function __clone(){

    }
}
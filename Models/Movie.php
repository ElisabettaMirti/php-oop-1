<?php

class Movie{
    public $title;
    public $genre;
    public $vote;

    public function __construct( $_title, $_genre, $_vote ){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->vote = $_vote;
    }

    public function getTitle(){
        return $this->title;
    }
}
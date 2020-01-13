<?php

class Image {
    private $id;
    private $images;
    private $descriptions;

    function __construct($id, $images, $descriptions) {
        $this->id = $id;
        $this->images = $images;
        $this->descriptions = $descriptions;
    }

    function render() {
        echo "<img src='/assets/images/{$this->images[$this->id]}' title='{$this->descriptions[$this->id]}' alt='{$this->descriptions[$this->id]}'/>";
    }

    function getImages() {
        return $this->images;
    }
}

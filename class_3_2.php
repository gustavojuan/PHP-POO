<?php

class Collection
{
    protected array $items;

    /**
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));
    }


}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    /**
     * @param $title
     * @param $length
     */
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


$videos = new VideosCollection([
    new Video('video 1', 98),
    new Video('video 2', 112),
    new Video('video 3', 124),
]);


var_dump($videos->length());
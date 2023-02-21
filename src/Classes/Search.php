<?php

namespace App\Classes;

use App\Entity\Category;

class Search{
    
    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $string = '';

    /**
     * @var Category[]
     */
    public $categories = [];
}
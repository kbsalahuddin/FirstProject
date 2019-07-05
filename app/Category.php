<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //only works for 2nd posting style at CategoryController.php
    protected $fillable=['categoryName', 'categoryDescription', 'categoryStatus'];
}

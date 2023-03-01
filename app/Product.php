<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
	use HasFactory;
		
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

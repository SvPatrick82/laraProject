<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	public function getImgAttribute($value){
		return $value ? : '/images/no_image.png';
	}

	public function category()
	{
		return $this->belongsTo(Category::class,'category_id','id','id');
		// модель , название столбца с внешним ключом, название столбца текущей модели , название столбца связаной модели
	}


}

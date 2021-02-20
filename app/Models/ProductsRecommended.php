<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRecommended extends Model
{
    use HasFactory;

	public function products()
	{
		return $this->belongsToMany(Product::class,'products_recommended');
    }

	public function product()
	{
		return $this->belongsTo(Product::class);
    }
}

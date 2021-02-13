<?php

namespace App\Models;

use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	protected $fillable = ['name','price','description', 'action_price','slug', 'img','category_id','recommended'];

	public function getImgAttribute($value){
		return $value ? $value : '/images/no_image.png';
	}

	public function category()
	{
		return $this->belongsTo(Category::class,'category_id','id','id');
		// модель , название столбца с внешним ключом, название столбца текущей модели , название столбца связаной модели
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}

	protected static function booted()
	{
		static::addGlobalScope(new ProductScope);
	}

	public function scopeRecommended($query)
	{
		$query->where('recommended', 1);
	}
	public function scopeLastes($query)
	{
		$query->orderByDesc('created_at');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','name_tr','featured_image','location_id','price','sale','type','bedrooms','drawing_rooms','bathrooms','net_sqm','gross_sqm','pool','overview','overview_tr','why_buy','why_buy_tr','description','description_tr',
    ];

    //    public function featured() {
    //        $this->belongsTo(Media::class, 'featured_media_id');
    //    }

    public function location() {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function gallery() {
        return $this->hasMany(Media::class, 'property_id');
    }
}

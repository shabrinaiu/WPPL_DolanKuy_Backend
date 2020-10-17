<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLocation extends Model
{
    use HasFactory;

    
    protected $table = 'rating_reviews';
    public $timestamps = true;

    protected $fillable = [
<<<<<<< Updated upstream:app/Models/CategoryLocation.php
        'name',
        'address',
        'description',
        'image',
        'contact',
        'latitude',
        'longitude',
=======
        'rating',
        'review',
        'created_at',
>>>>>>> Stashed changes:app/Models/RatingReviews.php
    ];

    
    protected $hidden = [
    ];

    
    protected $casts = [
        
    ];
}
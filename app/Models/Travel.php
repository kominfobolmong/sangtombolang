<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travels';
    use HasFactory;
    
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * getImageAttribute
     *
     * @param  mixed $image
     * @return void
     */
    // public function getImageAttribute($image)
    // {
    //     return asset('storage/statik-images/' . $image);
    // }
}

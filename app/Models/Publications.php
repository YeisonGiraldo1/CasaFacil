<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Publications extends Model
{
    protected $table = 'publications';

    protected $fillable = [
        'id',
        'offer_type',
        'property_type',
        'city',
        'neighborhood',
        'address',
        'price',
        'stratum',
        'status',
        'size',
        'number_rooms',
        'number_bathrooms',
        'description',
        'main_image',
        'additional_image_1',
        'additional_image_2',
        'additional_image_3',
        'additional_image_4',
        'additional_image_5',
        'additional_image_6',
        'additional_image_7',
        'additional_image_8',
        'additional_image_9',
        'additional_image_10',
        'email',
        'name',
        'lastname',
        'phone'


    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public $timestamps = true;
    use HasFactory;
}

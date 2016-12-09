<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model {
    protected $table = "resume";
    protected $fillable = [
        'name',
        'date_birthday',
        'home',
        'telephone',
        'home_telephone',
        'education',
        'specialty',
        'experience',
        'possession',
        'salary',
        'files',
        'created_at'
    ];

}

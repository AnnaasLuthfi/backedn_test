<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationallity extends Model
{
    use HasFactory;

    protected $fillable = [
		'nationallity_id' ,
		'nationallity_name' ,
		'nationallity_code',
    ];
    protected $table = 'nationallity';

    public function customer()
    {
        $this->hasMany(Customer::class);
    }
}

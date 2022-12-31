<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'cst_id',
        'nationally_id',
		'cst_name',
		'cst_dob',
		'cst_phoneNum' ,
		'cst_email'
    ];
    protected $table = 'customers';

    public function nationallity()
    {
        $this->belongsTo(Nationallity::class,'nationally_id','nationally_id');
    }
    
    public function family_list()
    {
        $this->hasMany(Family_list::class);
    }
}

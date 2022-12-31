<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family_list extends Model
{
    use HasFactory;

    protected $fillable = [
		'fl_id',
		'cst_id' ,
		'fl_relation' ,
		'fl_name' ,
		'fl_dob' ,
    ];
    protected $table = "family_list";

     public function customer()
     {
         $this->belongsTo(Customer::class);
     }
	 
}

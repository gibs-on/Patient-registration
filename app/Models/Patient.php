<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'dob', 'id_number', 'address', 'county', 'sub_county', 'telephone', 'email',
        'gender', 'marital_status', 'next_of_kin_name', 'next_of_kin_dob', 'next_of_kin_id_number',
        'next_of_kin_gender', 'next_of_kin_relationship', 'next_of_kin_telephone',
    ];
    
}

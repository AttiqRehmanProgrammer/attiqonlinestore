<?php

namespace App\Models;
use App\Models\user;
use App\Models\product; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo(product::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
    
    
}


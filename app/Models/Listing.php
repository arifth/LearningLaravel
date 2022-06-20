<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query,array $filters){
        dd($filters);
        // if($filters['tag']?? false){
        //     $query->where('tag','like','%'.request('tag').'%');
        // }
    }

    // public function apasih($param1){
    //     dd($param1);
    // }
}



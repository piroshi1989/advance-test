<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = 
    ['fullname','gender', 'email', 'postcode', 'address', 'building_name', 'opinion' ];


    public function scopeContactSearch($query, $fullname=null, $gender=null, $email=null, $from=null, $until=null)
    {
        if ($fullname) {
        $query->where('fullname', 'like', '%' . $fullname . '%');
        }

        if ($gender !=='all') {
        $query->where('gender', 'like', '%' . $gender . '%');
        }

        if ($email) {
        $query->where('email', 'like', '%' . $email . '%');
        }

        if ($from && $until) {
        $query->whereBetween('created_at', [$from, $until])->get();
        }elseif($from){
            $query->where('created_at', '>=', $from);
        }

        return $query;

    }
}
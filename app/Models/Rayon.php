<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        //menghubungkan ke primary key nya
        //dalam kurung merupakan model yang akan disambungkan (tempat fk)
        return $this->belongsTo(User::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }
}

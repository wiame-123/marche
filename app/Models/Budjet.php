<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budjet extends Model
{
    use HasFactory;
    public function Appeloffre()
    {
        return $this->hasMany(ppeloffre::class);
    }
}

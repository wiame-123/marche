<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appeloffre extends Model
{
    use HasFactory;


    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
    public function budjet()
    {
        return $this->belongsTo(Budjet::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

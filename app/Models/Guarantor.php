<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'name',
        'phone_number',
        'id_number',
        'nationality',
        'residence',
        'relationship',
        'occupation',
        'id_card_front',
        'id_card_back',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

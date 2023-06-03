<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosts extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'description'];
    protected $guarded = [];

    // rooms
    public function rooms()
    {
        return $this->hasMany(Rooms::class);
    }
}

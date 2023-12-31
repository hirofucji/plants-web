<?php

namespace App\Models;

use App\Models\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Costumer extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'gender', 'phone', 'birthday'];

    public function addresses(): MorphToMany
    {
        return $this->morphToMany(Address::class, 'addressable');
    }
}

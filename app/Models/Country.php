<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class Country extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = ['country_code','name'];

    /**
     * Get all of the states for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }

    /**
     * Get all of the employees for the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}

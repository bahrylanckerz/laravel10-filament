<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class Department extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = ['name'];

    /**
     * Get all of the employees for the Department
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}

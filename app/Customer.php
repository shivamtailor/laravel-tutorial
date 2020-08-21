<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Fillable Example
    // protected $fillable = ['name','email','active'];

    protected $guarded = [];

    /**
     * @param $attribute get<columnName>Attribute
     * @return string
     */
    public function getActiveAttribute($attribute)
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
        ][$attribute];
    }

    public function scopeActive($query) {
        return $query->where('active',1);
    }

    public function scopeInactive($query) {
        return $query->where('active',0)->get();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

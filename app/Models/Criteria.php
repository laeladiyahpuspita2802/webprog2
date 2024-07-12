<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Criteria extends Model
{
    use SoftDeletes;

    protected $fillable = ['code', 'name'];
    protected $dates = ['deleted_at'];

    public function perbandingan() {
        return $this->hasMany(CriteriaPerbandingan::class, 'first_criteria_id')->orderBy('second_criteria_id', 'asc');
    }

    public function perbandinganX() {
        return $this->hasMany(CriteriaPerbandingan::class, 'first_criteria_id')->orderBy('second_criteria_id', 'asc');
    }

    public function perbandinganY() {
        return $this->hasMany(CriteriaPerbandingan::class, 'second_criteria_id');
    }

    public function priority() {
        return $this->hasOne(CriteriaPriority::class);
    }

    public function alternativePerbandingan() {
        return $this->hasMany(AlternativePerbandingan::class);
    }

    public function alternativePriorities() {
        return $this->hasMany(AlternativePriority::class);
    }
}

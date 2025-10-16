<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $fillable = ['nama_mk', 'sks']; // kolom yang boleh diisi

    public $incrementing = false; // UUID, bukan auto increment
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}

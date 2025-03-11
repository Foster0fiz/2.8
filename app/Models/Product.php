<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Если имя таблицы соответствует стандарту (products), можно указать явно:
    protected $table = 'products';

    // Поля, доступные для массового заполнения:
    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'tipo',
        'valor',
        'categoria',
        'descricao',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'valor' => 'decimal:2',
            'created_at' => 'datetime',
        ];
    }

    /**
     * Get the possible types for the transaction.
     *
     * @return array<string>
     */
    public static function pegarTipos(): array
    {
        return ['entrada', 'saída'];
    }
}

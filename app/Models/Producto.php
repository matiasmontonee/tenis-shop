<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'producto_id';

    protected function precio(): Attribute
    {
        return Attribute::make(
            get: fn ($precio) => $precio / 1000,
            set: fn ($precio) => $precio * 1000
        );
    }

    public function peso(): BelongsTo
    {
        return $this->belongsTo(Peso::class, 'peso_fk', 'peso_id');
    }

    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(
            Categoria::class,
            'productos_tienen_categorias',
            'producto_fk',
            'categoria_fk',
            'producto_id',
            'categoria_id'
        );
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'producto_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'imagem'];

    public static function getNoticias(string $filter = null)
    {
        $noticias = DB::table('noticias')
            ->where(function ($query) use ($filter) {
                if ($filter != '') {
                    $query->where('titulo', 'LIKE', "%{$filter}%");
                }
            })->paginate(6);

        return $noticias;

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['titulo', 'descricao', 'link'];
    protected $table = 'videos';

    public function comentario(){
        return $this->morphMany(Comentario::class, 'comentario');
    }
}

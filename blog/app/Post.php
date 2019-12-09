<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Post extends Model
{
	use Commentable;
    protected $fillable = ['titulo', 'descricao'];
    protected $table = 'posts';

    public function comentario(){
        return $this->morphMany(Comentario::class, 'comentario');
    }
}

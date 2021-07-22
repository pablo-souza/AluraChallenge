<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model{

    public function categoria()
    {
        $this->belongsTo(Categoria::class);
    }
}
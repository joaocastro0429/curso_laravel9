<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

  protected  $fillable=[
      'file_name',
      'user_id'
    ];

    public function user()
    {
        // muitos arquivos pertence a um unico usuario
        return $this->belongsTo(User::class);
    }
}

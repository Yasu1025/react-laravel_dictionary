<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Synonym extends Model
{
  use HasFactory;

  protected $fillable = [
    'word_id',
    'similars',
  ];

  public function word()
  {
    return $this->belongsTo(Word::class);
  }
}

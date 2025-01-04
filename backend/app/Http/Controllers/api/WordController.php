<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WordResource;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
  // Find word by terms
  public function findWordByTerm($serachTerm)
  {
    return WordResource::collection(
      Word::where('name', 'LIKE', '%' . $serachTerm . '%')
        ->with(['definitions', 'synonyms'])
        ->get()
    );
  }

  // Find words that starts with a given char
  public function findWordStartWith($char)
  {
    return WordResource::collection(
      Word::where('name', 'LIKE', $char . '%')
        ->with(['definitions', 'synonyms'])
        ->get()
    );
  }

  // Get a random word
  public function getRandomWord()
  {
    return WordResource::make(
      Word::inRandomOrder()
        ->with(['definitions', 'synonyms'])
        ->get()
    );
  }
}

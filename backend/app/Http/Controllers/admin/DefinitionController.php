<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AddDefinitionRequest;
use App\Http\Requests\admin\UpdateDefinitionRequest;
use App\Models\Definition;
use App\Models\Word;

class DefinitionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $definitions = Definition::all();
    return view('admin.definitions.index')->with([
      'definitions' => $definitions
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $words = Word::all();
    return view('admin.definitions.create')->with([
      'words' => $words
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(AddDefinitionRequest $request)
  {
    if ($request->validated()) {
      Definition::create($request->validated());
      return redirect()->route('admin.definitions.index')->with([
        'success' => 'Definition added successfully'
      ]);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Definition $definition)
  {
    abort(404);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Definition $definition)
  {
    $words = Word::all();
    return view('admin.definitions.edit')->with([
      'words' => $words,
      'definition' => $definition
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateDefinitionRequest $request, Definition $definition)
  {
    if ($request->validated()) {
      $definition->update($request->validated());
      return redirect()->route('admin.definitions.index')->with([
        'success' => 'Definition updated successfully'
      ]);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Definition $definition)
  {
    $definition->delete();
    return redirect()->route('admin.definitions.index')->with([
      'success' => 'Definition deleted successfully'
    ]);
  }
}

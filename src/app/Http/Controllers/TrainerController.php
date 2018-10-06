<?php

namespace App\Http\Controllers;

use App\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
   public function index() {
      return Trainer::all();
   }

   public function show(Trainer $trainer) {
      return $trainer;
   }

   public function create(Request $request) {
      $trainer = Trainer::create($request->all());

      return response()->json($trainer, 201);
   }

   public function update(Request $request, Trainer $trainer) {
      $trainer->update($request->all());

      return response()->json($trainer, 200);
   }

   public function delete(Trainer $trainer) {
      $trainer->delete();

      return response()->json(null, 204);
   }
}

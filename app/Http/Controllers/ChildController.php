<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\ParentModel;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Child  $child
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ParentModel $parent, Child $child)
    {
        return response()->json($child);
    }
}

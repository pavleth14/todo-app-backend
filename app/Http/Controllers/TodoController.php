<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter');

        $todos = Todo::query();

        if ($filter === 'completed') {
            $todos->where('completed', true);
        } elseif ($filter === 'uncompleted') {
            $todos->where('completed', false);
        }

        return response()->json($todos->orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['completed'] = false;
        $todo = Todo::create($data);
        return response()->json($todo, 201);
    }

    public function show($id)
    {
        return Todo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->only(['completed']));
        return response()->json($todo, 200);
    }

    public function destroy($id)
    {
        Todo::destroy($id);
        return response()->json(null, 204);
    }
}

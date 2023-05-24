<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    use ApiResponse;
    
    public function index()
    {
        //
        $user = auth()->user();
        $todos = Todo::with('user')->where('user_id', $user->id)->get();
        return $this->apiSuccess($todos);
    }

    public function store(TodoRequest $request)
    {
        //
        $request->validated();
        $user = auth()->user();
        $todo = new Todo($request->all());
        $todo->user()->associate($user);
        $todo->save();
        return $this->apiSuccess($todo->load('user'));
    }

    public function show(Todo $todo)
    {
        //
        return $this->apiSuccess($todo->load('user'));
    }

    
    public function update(TodoRequest $request, Todo $todo)
    {
        //
        $request->validated();
        $todo->todo = $request->todo;
        $todo->label = $request->label;
        $todo->done = $request->done;
        $todo->save();
        return $this->apiSuccess($todo->load('user'));
    }

    
    public function destroy(Todo $todo)
    {
        //
        if (auth()->user()->id == $todo->user_id) {
            $todo->delete();
            return $this->apiSuccess($todo);
        }
        return $this->apiError('Unauthorized', Response::HTTP_UNAUTHORIZED);
    }
}

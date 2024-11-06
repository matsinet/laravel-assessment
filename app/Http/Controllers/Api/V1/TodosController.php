<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreTodoRequest;
use App\Http\Requests\Api\V1\UpdateTodoRequest;
use App\Http\Resources\V1\TodoResource;
use App\Models\User;
use App\Models\V1\Todo;
use App\Traits\ApiResponses;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TodosController extends Controller
{
    use ApiResponses;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TodoResource::collection(Todo::paginate(25));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodoRequest $request)
    {
        // try {
        //     $user = User::findorFail($request->input('data.attributes.user_id'));
        // } catch (ModelNotFoundException $exception) {
        //     return $this->error('User not found', 404);
        // }

        return new TodoResource(Todo::create($request->mappedAttributes()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return new TodoResource(Todo::findOrFail($id));
        } catch (\Exception $exception) {
            return $this->error('Todo not found', 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, string $id)
    {
        try {
            $todo = Todo::findOrFail($id);

            $todo->update($request->mappedAttributes());

            return new TodoResource($todo);
        } catch (ModelNotFoundException $exception) {
            return $this->error('Todo not found', 404);
        } catch (AuthenticationException $exception) {
            return $this->error('You are not authorized for this action', 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $todo = Todo::findOrFail($id);

            $todo->delete();

            return $this->success('Todo successfully deleted');
        } catch (ModelNotFoundException $exception) {
            return $this->error('Todo not found', 404);
        }
    }
}

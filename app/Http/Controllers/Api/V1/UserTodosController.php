<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TodoResource;
use App\Models\V1\Todo;

class UserTodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userId)
    {
        return TodoResource::collection(Todo::where('user_id', $userId)->paginate(25));
    }
}

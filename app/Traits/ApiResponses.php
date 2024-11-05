<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponses
{
    protected function success($data = [], $statusCode = 200): JsonResponse
    {
        return response()->json([
            'data' => $data,
        ], $statusCode);
    }

    protected function error($title, $statusCode, $detail = '', $meta = ''): JsonResponse
    {
        return response()->json([
            'status' => $statusCode,
            'title' => $title,
            'detail' => $detail,
            'meta' => $meta,
        ], 200);
    }
}

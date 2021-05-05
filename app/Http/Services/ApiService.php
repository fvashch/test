<?php


namespace App\Http\Services;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ApiService
{
    public function respondSuccess(string $message = 'Success', array $data = []): JsonResponse
    {
        return $this->respondWithData($message, $data);
    }

    private function respondWithData(
        string $message,
        array $data = [],
        array $headers = [],
        $statusCode = Response::HTTP_OK,
        $rootWrapper = 'data'
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            $rootWrapper => $data,
        ], $statusCode, $headers);
    }
}

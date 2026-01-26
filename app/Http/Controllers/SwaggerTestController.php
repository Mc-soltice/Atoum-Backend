<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *     title="Documentation Ecommerce Atoum-ra mbianga",
 *     version="1.0.0"
 * )
 */
class SwaggerTestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/test",
     *     summary="Test Swagger",
     *     @OA\Response(response=200, description="OK")
     * )
     */
    public function test()
    {
        return response()->json(['status' => 'ok']);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class APIController
 *
 * @package App\Http\Controllers\API
 *
 * @SWG\Swagger(
 *     basePath="/api",
 *     host="127.0.0.1:8000",
 *     schemes={"http","https"},
 *     @SWG\SecurityScheme(
 *         securityDefinition="Bearer",
 *         type="apiKey",
 *         name="Authorization",
 *         in="header"
 *     ),
 *     @SWG\Info(
 *         version="1.0",
 *         title="Blog API",
 *         description="Blog API",
 *     )
 * )
 */
class APIController extends Controller
{
    //
}

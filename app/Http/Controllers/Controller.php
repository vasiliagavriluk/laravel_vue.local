<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(title="My First API", version="0.1")
 *
 * @OA\Post(
 *     path="/api/auth/login",
 *     @OA\Parameter (
 *          name="Email",
 *          description="users@mail.ru",
 *          in="query",
 *          required=false
 *      ),
 *     @OA\Parameter (
 *          parameter="eventID_in_query",
 *          name="Passord",
 *          description="123123",
 *          in="query",
 *          required=false
 *      ),
 *     @OA\Response(response="200", description="Token")
 * )
 *
 * @OA\Post(
 *     path="/api/auth/register",
 *     @OA\Response(response="200", description="An example resource")
 * )
 *
 * @OA\Post(
 *     path="/api/auth/logout",
 *     @OA\Response(response="200", description="An example resource")
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

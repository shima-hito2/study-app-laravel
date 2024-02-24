<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * @OA\Post(
     *     path="/registUser",
     *     operationId="registUser",
     *     tags={"ユーザー"},
     *     summary="ユーザー新規登録",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="email",
     *                     description="メールアドレス",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     description="パスワード",
     *                     type="string"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *     response="200",
     *     description="successful operation",
     *     @OA\JsonContent(
     *     ref="#/components/schemas/SubjectMaster"
     *     )
     * )
     * )
     *
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function create(Request $request)
    {
        // dd($request);
        $users = new Users();
        $users->email = $request->email;
        $users->password = password_hash($request->password, PASSWORD_DEFAULT);
        $users->save();
        return;
        // dd($request);
        // return redirect('http://localhost:3000/admin/regist');
    }

    /**
     * @OA\Get(
     *     path="/getUserById",
     *     operationId="getUserById",
     *     tags={"ユーザー"},
     *     summary="アドレスに紐づくユーザー取得",
     *      @OA\Parameter(
     *          name="email",
     *          in="query",
     *          description="メールアドレス",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          ),
     *      ),
     *     @OA\Response(
     *     response="200",
     *     description="successful operation",
     *     @OA\JsonContent(
     *     ref="#/components/schemas/SubjectMaster"
     *     )
     * )
     * )
     *
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function getById(Request $request)
    {
        $users = new Users();
        $item = $users::whereEmail($request->email)->get();



        return $item;
    }

    public function loginCheck(Request $request)
}

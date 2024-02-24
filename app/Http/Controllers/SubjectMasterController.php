<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubjectMaster;
use Illuminate\Http\Request;

class SubjectMasterController extends Controller
{

    public function create(Request $request)
    {
        $tasks = new SubjectMaster();
        $tasks->name = $request->name;
        $tasks->save();
        return;
    }
    /**
     * @OA\Get(
     *     path="/getSubjectAll",
     *     operationId="getSubjectAll",
     *     tags={"科目マスタ"},
     *     summary="科目マスタ全権取得",
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
    public function getAll()
    {
        $subjectMaster = new SubjectMaster();
        $items = $subjectMaster->get();

        return $items;
    }

    /**
     * @OA\Get(
     *     path="/getSubjectById",
     *     operationId="getSubjectById",
     *     tags={"科目マスタ"},
     *     summary="IDに紐づく科目マスタ取得",
     *      @OA\Parameter(
     *          name="id",
     *          in="query",
     *          description="検索する科目ID",
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
        $subjectMaster = new SubjectMaster();
        $item = $subjectMaster::find((int)$request->id);

        return $item;
    }

    public function delete(Request $request)
    {
        $subjectMaster = new SubjectMaster();
        $member = $subjectMaster::find((int)$request->id);

        $member->delete();
        // echo ((int)$request->id);
        // dd($member);
        // return $member;
        return;
    }
}

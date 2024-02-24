<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Users"
 * )
 */
class Users extends Model
{
    /**
     *      @OA\Property(
     *          property="id",
     *          description="ID",
     *          type="integer",
     *          format="bigint(20)",
     *          example="1"
     *      ),
     *      @OA\Property(
     *          property="name",
     *          description="Name",
     *          type="string",
     *          format="varchar(255)",
     *          example="HTML"
     *      )
     *
     * @package App\Models
     */
    // use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @SWG\Definition(
 *  definition="Blog",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="user_id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="content",
 *      type="string"
 *  )
 * )
 */

class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable =
        [
            'title',
            'content',
            'user_id'
        ]; //перечесление всех полей в базе

    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class,'id', 'user_id');
    }


    public function getEdit($id): \LaravelIdea\Helper\App\Models\_IH_Blog_C|array|Blog|null
    {
        return $this->find($id);
    }

    public function getAll($perPage = null): \LaravelIdea\Helper\App\Models\_IH_Blog_C|array|\Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Pagination\LengthAwarePaginator
    {
        $columns = ['id', 'title', 'content', 'user_id'];

        $result = $this
            ->select($columns)
            ->with(
                [
                    'users:id,name',
                ])
            ->paginate($perPage, $columns);

        return $result;
    }


}

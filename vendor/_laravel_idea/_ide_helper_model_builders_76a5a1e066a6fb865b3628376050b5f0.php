<?php //18591faa5216d8423ab1956d71c3cab9
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Blog;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Blog|null getOrPut($key, $value)
     * @method Blog|$this shift(int $count = 1)
     * @method Blog|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|$this pop(int $count = 1)
     * @method Blog|null pull($key, \Closure $default = null)
     * @method Blog|null last(callable $callback = null, \Closure $default = null)
     * @method Blog|$this random(callable|int|null $number = null)
     * @method Blog|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|null get($key, \Closure $default = null)
     * @method Blog|null first(callable $callback = null, \Closure $default = null)
     * @method Blog|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Blog|null find($key, $default = null)
     * @method Blog[] all()
     */
    class _IH_Blog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Blog[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Blog_QB whereId($value)
     * @method _IH_Blog_QB whereTitle($value)
     * @method _IH_Blog_QB whereContent($value)
     * @method _IH_Blog_QB whereUserId($value)
     * @method _IH_Blog_QB whereCreatedAt($value)
     * @method _IH_Blog_QB whereUpdatedAt($value)
     * @method _IH_Blog_QB whereDeletedAt($value)
     * @method Blog baseSole(array|string $columns = ['*'])
     * @method Blog create(array $attributes = [])
     * @method _IH_Blog_C|Blog[] cursor()
     * @method Blog|null|_IH_Blog_C|Blog[] find($id, array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog|_IH_Blog_C|Blog[] findOrFail($id, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOrNew($id, array|string $columns = ['*'])
     * @method Blog first(array|string $columns = ['*'])
     * @method Blog firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog firstOrCreate(array $attributes = [], array $values = [])
     * @method Blog firstOrFail(array|string $columns = ['*'])
     * @method Blog firstOrNew(array $attributes = [], array $values = [])
     * @method Blog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Blog forceCreate(array $attributes)
     * @method _IH_Blog_C|Blog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Blog_C|Blog[] get(array|string $columns = ['*'])
     * @method Blog getModel()
     * @method Blog[] getModels(array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] hydrate(array $items)
     * @method Blog make(array $attributes = [])
     * @method Blog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Blog[]|_IH_Blog_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Blog[]|_IH_Blog_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Blog sole(array|string $columns = ['*'])
     * @method Blog updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Blog_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}

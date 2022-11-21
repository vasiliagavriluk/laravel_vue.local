<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Repository\BlogRepository;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $modal = new Blog();
        $data = $modal->getAll();
        $value = null;
        foreach ($data as $val)
        {
            $value[] =
                [
                    'id'     => $val->id,
                    'title'  => $val->title,
                    'content'=> $val->content,
                    'user_id'=> $val->user_id,
                    'users'  => $val->users[0]->name,
                ];

        }

        return $value;

    }

    public function create()
    {

    }
    public function edit(Request $request)
    {
        $modal = new Blog();
        $id = $request['id'];
        $item = $modal->getEdit($id);
        $users = DB::table('users')->where('id', $item['user_id'])->get();
        $item['author'] = $users[0]->name;

        return $item;
    }
    public function delete(Request $request)
    {
        $da = Blog::where('id', $request->id)->delete();
        return $da;
    }

    public function update(Request $request)
    {
        $modal = new Blog();
        $id = $request['id'];
        $item = $modal->getEdit($id);

        if (empty($item))
        {
            return back()
                ->withErrors(['msg'=> "Запись id=[{ $id }] не найдена"])
                ->withInput();
        }

        $data = $request->all();

        $result = $item->update($data);

        if ($result)
        {
            return ['success'=>'Успешно сохранено'];
        }
        else
        {
            return ['success'=> "Ошибка сохранения"];
        }



    }



}

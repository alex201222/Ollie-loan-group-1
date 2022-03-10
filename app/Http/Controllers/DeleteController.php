<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function destroy($id)
    {
        //find post by ID
        $post =User::findOrfail($id);

        //delete post
        $post->delete();

       

    }
}

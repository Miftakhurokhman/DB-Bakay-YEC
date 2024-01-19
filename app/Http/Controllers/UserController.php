<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

;

class UserController extends Controller
{
    public function index() {
        $id = Auth::id();
        $userclass = User::findOrFail($id);
        return $userclass->loadMissing('user_class.class:id,class_name,class_thumbnail');
    }

    public function show($id) {
        $user_id = Auth::id();
        $class = UserClass::where('class_id', $id)->where('user_id', $user_id)->first();
        return $class->loadMissing(
            [
                'class.category:id,category_name',
                'class.class_fasil.fasil:id,fasil_name,fasil_photo,fasil_desc',
                'class.class_activity.sub_activity.user_progress' => function($query) {
                    $query->where('user_id', Auth::user()->id);
                }
            ]
        );
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'rate' => 'required',
            'ulasan' => 'required'
        ]);

        $user_id = Auth::id();
        $class = UserClass::where('class_id', $id)->where('user_id', $user_id)->first();

        $class->update($request->all());
    }


}

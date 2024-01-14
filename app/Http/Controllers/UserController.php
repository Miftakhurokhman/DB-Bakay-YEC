<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

;

class UserController extends Controller
{
    public function index() {
        $id = Auth::id();
        $userclass = User::findOrFail($id);
        return $userclass->loadMissing('user_class.class:id,class_name,class_thumbnail');
    }

    public function show($class) {

        $id = Auth::id();
        $class = Kelas::findOrFail($class);
        return $class->loadMissing(
            [
                'category:id,category_name',
                'class_fasil.fasil:id,fasil_name,fasil_photo,fasil_desc',
                'class_activity.sub_activity.user_progress.user'
            ]
        );

        // $id = Auth::id();
        // $userclass = User::findOrFail($id);

        // return $userclass->loadMissing(
        //     [
        //         // 'user_progress',
        //         'user_class.class.category',
        //         'user_class.class.class_fasil.fasil',
        //         'user_class.class.class_activity.sub_activity.type:id,type_name',
        //         'user_class.class.class_activity.sub_activity.user_progress',
        //     ]
        // );
    }
}

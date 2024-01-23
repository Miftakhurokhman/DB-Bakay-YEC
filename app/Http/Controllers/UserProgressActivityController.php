<?php

namespace App\Http\Controllers;

use App\Models\UserProgressActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProgressActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required',
            'sub_activity_id' => 'required'
        ]);
        $request['user_id'] = Auth::id();
        UserProgressActivity::create($request->all());

        return "Success";
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProgressActivity $userProgressActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProgressActivity $userProgressActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'answer' => 'required',
        //     'sub_activity_id' => 'required'
        // ]);

        $file_name = '';

        if ($request->file) {

            $file_name = $request->file->getClientOriginalName();

            Storage::putFileAs('answer', $request->file, $file_name);

        }
        $request['user_id'] = Auth::id();
        $request['answer'] = $file_name;
        $request['sub_activity_id'] = $id;
        UserProgressActivity::create($request->all());

        return "Success";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProgressActivity $userProgressActivity)
    {
        //
    }
}

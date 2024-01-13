<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Http\Resources\ClassResource;
use App\Http\Resources\ClassDetailResource;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Kelas::get();
        return ClassResource::collection($classes);
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
    public function store(StoreKelasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $class = Kelas::findOrFail($id);
        return new ClassDetailResource(
            $class->loadMissing(
                [
                    'category:id,category_name',
                    'user_class'
                    // 'class_fasil:id,class_id,fasil_id',
                    // 'class_activity.sub_activity.type:id,type_name',
                    // 'class_activity.sub_activity.user_progress',
                ]
            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}

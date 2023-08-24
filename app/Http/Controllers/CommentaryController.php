<?php

namespace App\Http\Controllers;

use App\Models\Commentary;
use App\Http\Requests\StoreCommentaryRequest;
use App\Http\Requests\UpdateCommentaryRequest;

class CommentaryController extends Controller
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
    public function store(StoreCommentaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentary $commentary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentary $commentary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentaryRequest $request, Commentary $commentary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentary $commentary)
    {
        //
    }
}

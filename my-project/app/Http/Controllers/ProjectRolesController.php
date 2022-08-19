<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProjectRole;

use Carbon\Carbon;

class ProjectRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProjectRole::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->only(['name', 'description', 'user_id', 'project_id']);
        $req['begum_at'] = Carbon::now();
        return ProjectRole::create($req);
    }
}

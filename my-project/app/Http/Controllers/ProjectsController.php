<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

use Carbon\Carbon;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->only(['creator_id', 'description', 'date_of_creation']);
        $req['date_of_creation'] = Carbon::parse($req['date_of_creation'])->toDate();
        return Project::create($req);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Project::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->only(['creator_id', 'description', 'date_of_creation']));
        return $project;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
    }

    /* Receives the project id and returns its creator.
     * */
    public function creator($id) {
        return Project::findOrFail($id)->creator;
    }

    public function getDonations($id) {
        return Project::findOrFail($id)->donations;
    }

    public function getLikes($id) {
        return Project::findOrFail($id)->likes;
    }

    public function getRoles($id) {
        return Project::findOrFail($id)->projectRoles;
    }
}

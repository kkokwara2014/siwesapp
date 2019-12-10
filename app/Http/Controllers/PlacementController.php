<?php

namespace App\Http\Controllers;

use App\Itcompany;
use App\Sentto;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $students = User::where('role_id', '4')->orderBy('created_at', 'desc')->get();
        $companies = Itcompany::orderBy('name', 'asc')->get();
        $placements = Sentto::orderBy('created_at','desc')->get();

        return view('admin.placement.index', compact('user', 'students', 'companies','placements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'itcompany_id' => 'required',
        ]);

        $inputs = $request->all();
        $user_ids = $inputs['user_id'];

        //Multiple insert queries
        foreach ($user_ids as $user_id) {
            $users[] = [
                'itcompany_id' => $request->itcompany_id,
                'user_id' => $user_id
            ];
        }

        Sentto::insert($users);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

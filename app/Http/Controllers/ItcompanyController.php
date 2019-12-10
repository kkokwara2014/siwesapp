<?php

namespace App\Http\Controllers;

use App\Itcompany;
use App\Location;
use Illuminate\Http\Request;

use Auth;

class ItcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $locations = Location::orderBy('name', 'asc')->get();
        $itcompanies = Itcompany::orderBy('created_at', 'desc')->get();

        return view('admin.itcompany.index', compact('user', 'locations','itcompanies'));
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
            'name' => 'required',
            'address' => 'required',
            'address' => 'required',
            'location_id' => 'required',
        ]);

        Itcompany::create($request->all());

        return redirect(route('itcompany.index'));
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
        $locations = Location::orderBy('name', 'asc')->get();
        $itcompanies = Itcompany::where('id', $id)->first();;
        return view('admin.itcompany.edit', array('user' => Auth::user()), compact('itcompanies','locations'));
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
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'address' => 'required',
            'location_id' => 'required',
        ]);

        $itcompany = Itcompany::find($id);
        $itcompany->user_id = $request->user_id;
        $itcompany->name = $request->name;
        $itcompany->address = $request->address;
        $itcompany->phone = $request->phone;
        $itcompany->location_id = $request->location_id;

        $itcompany->save();

        return redirect(route('itcompany.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itcompanies = Itcompany::where('id', $id)->delete();
        return redirect()->back();
    }
}

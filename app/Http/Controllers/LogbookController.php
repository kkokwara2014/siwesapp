<?php

namespace App\Http\Controllers;

use App\Logbook;
use Illuminate\Http\Request;
use Auth;

class LogbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        $itlogbooks = Logbook::orderBy('created_at', 'desc')->get();

        return view('admin.logbook.index', compact('user', 'itlogbooks'));
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
            'title' => 'required',
            'filename' => 'required|file|max:5000|mimes:docx,doc,pdf',
        ]);


        if ($request->hasFile('filename')) {
            $filenameWithTime = time() . '_' . $request->filename->getClientOriginalName();
            $filenameToStore = $request->filename->storeAs('public/it_logbooks', $filenameWithTime);
        }

        //    create an instance of Logbook
        $logbook = new Logbook;
        $logbook->title = $request->title;
        $logbook->user_id = $request->user_id;
        $logbook->filename = $filenameToStore;

        $logbook->save();

        
        return redirect()->route('logbook.index');
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
        
        $logbooks = Logbook::where('id', $id)->first();;
        return view('admin.logbook.edit', array('user' => Auth::user()), compact('logbooks'));
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
            'title' => 'required',
            'filename' => 'required|file|max:5000|mimes:docx,doc,pdf',
        ]);


        if ($request->hasFile('filename')) {
            $filenameWithTime = time() . '_' . $request->filename->getClientOriginalName();
            $filenameToStore = $request->filename->storeAs('public/it_logbooks', $filenameWithTime);
        }

        //    create an instance of Logbook
        $logbook = Logbook::find($id);
        $logbook->title = $request->title;
        $logbook->user_id = $request->user_id;
        $logbook->filename = $filenameToStore;

        $logbook->save();

        
        return redirect()->route('logbook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itlogbooks = Logbook::where('id', $id)->delete();
        return redirect()->back();
    }
}

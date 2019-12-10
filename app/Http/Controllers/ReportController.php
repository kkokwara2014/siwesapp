<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

use Auth;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        $itreports = Report::orderBy('created_at', 'desc')->get();

        return view('admin.itreport.index', compact('user', 'itreports'));
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
            $filenameToStore = $request->filename->storeAs('public/it_reports', $filenameWithTime);
        }

        //    create an instance of Logbook
        $report = new Report;
        $report->title = $request->title;
        $report->casestudy = $request->casestudy;
        $report->user_id = $request->user_id;
        $report->filename = $filenameToStore;

        $report->save();

        
        return redirect()->route('report.index');
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
        $reports = Report::where('id', $id)->first();;
        return view('admin.itreport.edit', array('user' => Auth::user()), compact('reports'));
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
            $filenameToStore = $request->filename->storeAs('public/it_reports', $filenameWithTime);
        }

        //    create an instance of Logbook
        $report = Report::find($id);
        $report->title = $request->title;
        $report->casestudy = $request->casestudy;
        $report->user_id = $request->user_id;
        $report->filename = $filenameToStore;

        $report->save();

        
        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reports = Report::where('id', $id)->delete();
        return redirect()->back();
    }
}

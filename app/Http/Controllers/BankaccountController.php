<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Bankaccount;
use Illuminate\Http\Request;

use Auth;

class BankaccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $banks = Bank::orderBy('name', 'asc')->get();
        $bankaccounts = Bankaccount::orderBy('created_at', 'desc')->get();

        return view('admin.bankaccount.index', compact('user', 'banks','bankaccounts'));
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
            'bank_id' => 'required',
            'accounttype' => 'required',
            'accountnumber' => 'required',
            
        ]);

        Bankaccount::create($request->all());

        return redirect(route('bankaccount.index'));
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
        $user = Auth::user();
        $banks = Bank::orderBy('name', 'asc')->get();
        $bankaccounts = Bankaccount::where('id', $id)->first();

        return view('admin.bankaccount.edit', compact('user', 'banks','bankaccounts'));
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
            'bank_id' => 'required',
            'accounttype' => 'required',
            'accountnumber' => 'required',
            
        ]);

        $bankaccount = Bankaccount::find($id);
        $bankaccount->user_id = $request->user_id;
        $bankaccount->bank_id = $request->bank_id;
        $bankaccount->accounttype = $request->accounttype;
        $bankaccount->accountnumber = $request->accountnumber;
        
        $bankaccount->save();

        return redirect(route('bankaccount.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bankaccounts = Bankaccount::where('id', $id)->delete();
        return redirect()->back();
    }
}

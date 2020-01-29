<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return $customer;//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store($a = 'default',$b = 'default',$c = 'default',$d = 'default',$e = 'default',$f = 'default',$g = 'default')
    {
        $customer = new Customer;
        $customer->code = $a;
        $customer->name = $b;
        $customer->email = $c;
        $customer->country = $d;
        $customer->city = $e;
        $customer->address = $f;
        $customer->contact_number = $g;
        $customer->save();
        return $customer;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return $customer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$a = 'default',$b = 'default',$c = 'default',$d = 'default',$e = 'default',$f = 'default',$g = 'default')
    {
        $customer = new Customer;
        $customer->code = $a;
        $customer->name = $b;
        $customer->email = $c;
        $customer->country = $d;
        $customer->city = $e;
        $customer->address = $f;
        $customer->contact_number = $g;
        $customer->save();
        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return $customer;
    }
}

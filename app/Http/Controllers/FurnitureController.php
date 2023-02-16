<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logins()
    {
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.furniture.logins', ['pageConfigs' => $pageConfigs]);
    }
    public function index()
    {
        return view('content.furniture.index');
    }
   //ผู้ใช้งาน
    public function users()
    {
        return view('content.furniture.tb-users');
    }
    public function addusers()
    {
        return view('content.furniture.add-users');
    }
    public function editusers()
    {
        return view('content.furniture.edit-users');
    }
    //ตัวแทนจำหน่าย
    public function agents()
    {
        return view('content.furniture.tb-agents');
    }
    public function addagents()
    {
        return view('content.furniture.add-agents');
    }
    public function editagents()
    {
        return view('content.furniture.edit-agents');
    }
    //ลูกค้า
    public function customer()
    {
        return view('content.furniture.tb-customer');
    }
    public function addcustomer()
    {
        return view('content.furniture.add-customer');
    }
    public function editcustomer()
    {
        return view('content.furniture.edit-customer');
    }
    //ประเภทเฟอร์นิเจอร์
    public function furtype()
    {
        return view('content.furniture.tb-furtype');
    }
    public function addfurtype()
    {
        return view('content.furniture.add-furtype');
    }
    public function editfurtype()
    {
        return view('content.furniture.edit-furtype');
    }
    //เฟอร์นิเจอร์
    public function fur()
    {
        return view('content.furniture.tb-furniture');
    }
    public function addfur()
    {
        return view('content.furniture.add-furniture');
    }
    public function editfur()
    {
        return view('content.furniture.edit-furniture');
    }

    //เฟอร์นิเจอร์
    public function order()
    {
        return view('content.furniture.order');
    }
    public function addorders()
    {
        return view('content.furniture.add-orders');
    }
    public function editorders()
    {
        return view('content.furniture.edit-orders');
    }

    public function tbfurniture()
    {
        return view('content.furniture.tb-furniture');
    }

    public function tborders()
    {
        return view('content.furniture.tb-orders');
    }
    public function tbfurtype()
    {
        return view('content.furniture.tb-furtype');
    }

    public function tbusers()
    {
        return view('content.furniture.tb-users');
    }

    public function tbcustomer()
    {
        return view('content.furniture.tb-customer');
    }
     public function sale()
    {
        return view('content.furniture.sale');
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
        //
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
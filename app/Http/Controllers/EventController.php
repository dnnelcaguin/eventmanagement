<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use QrCode;

class EventController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function add()
    {
        return view('add');
    }
    public function addRecord(Request $request)
    {
        $image     = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $firstname = $request->input('firstname');
        $lastname  = $request->input('lastname');
        $event     = $request->input('event');
        $role      = $request->input('role');
        try {
            $randomCode = DB::table('generatecode')
                ->inRandomOrder()
                ->where('status', null)
                ->Orwhere('status', "")
                ->first();
            $getCode = $randomCode->code;

            $moveImage = $image->move('images', $imageName);
            DB::table("events")->insert([
                'image'     => $moveImage,
                'event_id'  => $getCode,
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'event'     => $event,
                'role'      => $role,
            ]);
            DB::table("generatecode")->where('code', $getCode)->update([
                'status' => 'Used',

            ]);
            toastr()->success('Record has been saved successfully!');
        } catch (Exception $e) {
            toastr()->error('Record Not Save');
        }

        return view('add');
    }

    public function viewrecord()
    {
        $getRecord = DB::table("events")->get();
        return view('view')->with('getRecord', $getRecord);
    }

    public function viewsinglerecord($id)
    {
        $getRecord  = DB::table("events")->where('id', $id)->get();
        $getRecord2 = DB::table("events")->where('id', $id)->first();
        $getQrCode = QrCode::size(300)->generate($getRecord2->event_id);
        return view('viewrecord')->with('getRecord', $getRecord)->with('getRecord2', $getRecord2);
    }
}

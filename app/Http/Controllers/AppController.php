<?php

namespace App\Http\Controllers;

use App\Models\my_app_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;


class AppController extends Controller
{
    //
    public $layout="app";

    public function index()
    {
        $appdata = my_app_data::all();
        return view('index', compact('appdata'));
    }

    public function create()
    {
        return view('create')->layouts('app');
    }
    public function storeData(Request $request)
    {
        // we can write here validation code here also:
        // in this way we can write the validation
        try {
            $fileName=Str::of($request->name)->slug("-") . ".webp";
            $img = Image::make($request->image)->resize(200,null,function($constraints){
                $constraints->aspectRatio();
            })->encode("webp",100);
            if(Storage::disk('local')->put($fileName, $img)){
                $request->merge(['images'=>$fileName]);
                my_app_data::create($request->all());
                return redirect()->back()->with('message', 'Data has been inserted');
            }else{    
                return redirect()->back()->with('error', 'Data couldnt not be inserted');
            }
        } catch (\Throwable $er) {
            return redirect()->back()->with('error', "$er Something went worng");
        }
    }

    public function delete($id)
    {
        try {
            my_app_data::findOrFail($id)->delete();
            return redirect()->back()->with('message', 'row deleted');
        } catch (\Exception $err) {
            return redirect()->back()->with('error', 'Error on deletion');
        }
    }

    public function updateData(Request $request, $id)
    {
            $get_user = my_app_data::find($id);
            if ($get_user) 
            {
                $get_user->phone = $request-> input('phone');
                $get_user->update();
                return redirect()->back()->with('message', 'Update scussesfully');
            } else {
                return redirect()->back()->with('error', 'No record of user in database');
            }

    }
    public function getData($id)
    {
        $appdata = my_app_data::where('id', $id)->get();
        // return $appdata;
        return view('update', compact('appdata'));
    }
}


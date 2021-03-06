<?php

namespace App\Http\Controllers\Trend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trend;

class TrendController extends Controller



{

    // public function home()
    // {
    //     $trends = Trend::all();
    //     return view('/home/index')->with('trends', $trends);
    // }

    public function index()
    {
        $trends = Trend::all();
        return view('/dashboard/trends/index')->with('trends', $trends);
    }

    public function show($id)
    {
       $trends = Trend::find($id);
       return view('/trend/show')->with('trends',$trends);
    }

    public function store()
    {
        $trend = new Trend;
        $trend->title = request()->input('title');
        $trend->description = request()->input('description');
        if (request()->has('avatar')) {
            $avatarUploaded = request()->file('avatar');
            $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
            $avatarPath = public_path('/image/trend');
            $avatarUploaded->move($avatarPath, $avatarName);
            $trend->avatar = '/image/trend/' . $avatarName;
        }

        $trend->save();
        return redirect('/trends/all');
    }


    public function destroy($id)
    {
        $trend = Trend::find($id);
        $trend->delete();

        return redirect('/trends/all');
    }
 
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;

class videoController extends Controller
{
    public function add_video_category(Request $request)
    {
            $date = Carbon::now()->toDateTimeString();

            $category_name = $request->input('category_name');
            
            DB::table('video_category')->insert(['name' => $category_name, 'created_at' => $date]);

            return redirect()->back()->with('success', 'Video Category Added Successfully'); 
    }

    public function add_video_url(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        $video_id = $request->input('video_id');
        $short_url = $request->input('short_url');
        $full_url = $request->input('full_url');

        DB::table('video_url')->insert(['video_id' => $video_id, 'short_url' => $short_url, 'full_url' => $full_url, 'created_at' => $date]);
        return redirect()->back()->with('success', 'Video URL Added Successfully'); 
    }

    public function edit_video_url(Request $request)
    {
        $date = Carbon::now()->toDateTimeString();
        $category_name = $request->input('category_name');
        $video_id = $request->input('hidden_id');
        $short_url = $request->input('short_url');
        $full_url = $request->input('full_url');

        DB::table('video_url')->where('url_id', $video_id)->update(['short_url' => $short_url, 'full_url' => $full_url, 'updated_at' => $date ]);

        DB::table('video_category')->where('video_id', $video_id)->update(['name' => $category_name,'updated_at' => $date ]); 

        return redirect()->back()->with('success', 'Data Updated Successfully');
    }
    public function delete_video($id)
    {
        DB::table('video_url')->where('url_id',$id)->delete();

        return redirect()->back()->with('success2', 'Video Deleted Successfully'); 
    }

}

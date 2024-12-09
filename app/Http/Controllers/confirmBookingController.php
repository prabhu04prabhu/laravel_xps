<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Hash;
use DB;
use Session;
use Carbon\Carbon;
use App\Short;
use Image; //Intervention Image
use Illuminate\Support\Facades\Storage; //Laravel Filesystem
use Illuminate\Support\Str; //for string random

class confirmBookingController extends Controller
{

    //Function for accessing long links from shorten links
    public function shortenLink($code)
    {
        $find = Short::where('code', $code)->first();
        return redirect($find->link);
    }
}

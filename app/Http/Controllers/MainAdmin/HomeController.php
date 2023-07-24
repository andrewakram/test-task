<?php

namespace App\Http\Controllers\MainAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if(session()->get('email')==null || session()->get('password')==null)
            return view('MainAdmin.auth.login');

        $path_to_file = isset($request->path_to_file) ? $request->path_to_file : '';
        $path = public_path("$path_to_file");
        $check = file_exists($path);
        $data = [];
        if ($check) {
            $filesInFolder = collect(File::allFiles($path));
            if (sizeof($filesInFolder) > 0) {

                foreach ($filesInFolder as $key => $item){
                    $i = [];
                    $i['id'] = $key+1;
                    $i['filename'] = $item->getFileName();
                    $i['filecontent'] = file_get_contents($item->getPathName());
                    array_push($data,$i);
                }
            }
        }
        return view('MainAdmin.pages.home',compact('data'));
    }


}

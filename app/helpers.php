<?php

use Illuminate\Support\Facades\Config;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


function getLang()
{
    return session()->get('lang');
}

function admin()
{
    return Auth::guard('admin')->user();
}

function success()
{
    return 200;
}

function failed()
{
    return 401;
}

function not_authoize()
{
    return 403;
}

function not_found()
{
    return 404;
}

function not_active()
{
    return 405;
}

function msg($request,$status,$key)
{
    $msg['status'] = $status;
    $msg['msg'] = Config::get('response.'.$key.'.'.getLang());

    return $msg;
}

function msgdata($request,$status,$key,$data)
{
    $msg['status'] = $status;
    $msg['msg'] = Config::get('response.'.$key.'.'.getLang());
    $msg['data'] = $data;

    return $msg;
}
// function getLang()
// {
//     $lang = request()->header('lang');
//     if($lang)
//         return $lang;
//     return "ar";
// }
function image($path,$url)
{
    return 'http://'.$_SERVER['SERVER_NAME'].$path.$url;
}

function unique_file($fileName)
{
    $fileName = str_replace(' ','-',$fileName);
    return time() . uniqid().'-'.$fileName;
}

function generateJWT()
{
    return Str::random(25).time();
}

function generateActivationCode()
{
    return rand(1000,9999);
}

function checkJWT()
{
    return Auth::guard('api')->user();
}


function checkLang()
{
    if(!isset(getallheaders()['lang'])){
        return response()->json(['status' => 401, 'msg' => 'The language is Required']);
    }
}

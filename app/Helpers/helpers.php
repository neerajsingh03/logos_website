<?php


use App\Models\AppLog;



function saveAppLog($title = "", $message = "")
{
    $appLog = new AppLog;
    $appLog->title = $title;
    $appLog->message = $message;
    $appLog->save();
    return true;
}

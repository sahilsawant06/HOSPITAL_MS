<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logindetail;

class userlogindetail extends Controller
{
    function index(){
    //    return logindetail::count("id") ;
    // logindetail::destroy(array(3)); //delete
    // $res = new logindetail; // insert
    // $res->email="sahil@gmail.com";
    // $res->password="sahil123";
    // $res->save();

    // $res = logindetail::find(8); // update with only ORM
    //  $res->email="mayur@gmail.com";
    // $res->password="mayur123";
    // $res->save();

    $res=logindetail::where('id',7)->update(array('email'=>'vishal@gmail.com','password'=>'vishal@123'));

    return(logindetail::all()); //view data
    }
}

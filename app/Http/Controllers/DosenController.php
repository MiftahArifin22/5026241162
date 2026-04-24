<?php

namespace App\Http\Controllers;
//package untuk controller

use Illuminate\Http\Request;
//import

class DosenController extends Controller
{
    //
    public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}
public function biodata(){
    $nama = "Miftahul Arifin Sofyan";
    $umur = 20 ;
    $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    return view('biodata',['nama' => $nama,'umur' => $umur,'matkul' => $pelajaran]);
    }
}

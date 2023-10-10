<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $title = "Home";
        $data['title']= $title;
        return view('front_home',$data);
    }
    public function about(){
        $title = "About";
        $data['title']= $title;
        return view('front_about',$data);
    }
    public function services(){
        $title = "Services";
        $data['title']= $title;
        return view('front_services',$data);
    }
    public function Booking(){
        $title = "Booking";
        $data['title']= $title;
        return view('front_booking',$data);
    }
    public function Team(){
        $title = "Team";
        $data['title']= $title;
        return view('front_team',$data);
    }
    public function Testimonials(){
        $title = "Testimonials";
        $data['title']= $title;
        return view('front_testimonials',$data);
    }
    public function Packages(){
        $title = "Packages";
        $data['title']= $title;
        return view('front_packages',$data);
    }
    public function Destination(){
        $title = "Destination";
        $data['title']= $title;
        return view('front_destination',$data);
    }
    public function Contact(){
        $title = "Contact";
        $data['title']= $title;
        return view('front_contact',$data);
    }
}

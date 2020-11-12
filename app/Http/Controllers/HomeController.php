<?php

namespace App\Http\Controllers;
use MacsiDigital\Zoom\Zoom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function zoom()
    {
        $zoom = new \MacsiDigital\Zoom\Support\Entry;

        $user = new \MacsiDigital\Zoom\User($zoom);
        $users = $user->find('sherin.jose@logezy.com');
      
        $zoom_meet = $zoom->meeting;
        
       // $zoom_meet->create($users->id);
        $zoom_meeting =  $user->create([
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'sherin.jose@logezy.com',
            'password' => '12345678990'
        ]); 
dd($zoom_meeting);
    }
}

<?php

namespace App\Http\Controllers;
use MacsiDigital\Zoom\Zoom;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function zoom()
    {

        
        $zoom = new \MacsiDigital\Zoom\Support\Entry;

        $user = new \MacsiDigital\Zoom\User($zoom);
        $users = $user->find('sherin.jose@logezy.com');
        
        $zoom_meet = $users->meetings;
      
        
        
       
          $new = $user->find('21lGz-gMTgehAX8aDR6I1g')->meetings; 
          //dd($new);
          $new->create([
            'topic' => 'Introo',
            'type' => 2,
            'start_time' => new Carbon('2020-08-12 10:00:00'),
          ]); 
       // $zoom_meet->create($users->id);
        

    }
}

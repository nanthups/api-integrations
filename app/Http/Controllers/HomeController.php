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
        
       
       
          $new = $user->find('21lGz-gMTgehAX8aDR6I1g')->meetings; 
          dd($new);
          $new->create([
            'topic' => 'Introo',
            'type' => 2,
            'start_time' => new Carbon('2020-08-12 10:00:00'),
          ]); 
       // $zoom_meet->create($users->id);
        

    }
    public function zoomVap(){
      $zoom = new \vaporic\Zoom\Zoom;
      $user = $zoom->user->find('sherin.jose@logezy.com');
      $users = $zoom->user->all();
      
      $meeting = $user->meetings()->create([
        'type' => '2',
        'topic' => 'Sherin',
        'start_time' => '2019-06-29T20:00:00Z'
      ]);
      
      $registrant = $meeting->registrants()->create([
        'email' => 'registratn@domain.com',
        'first_name' => 'Test',
        'last_name' => 'Registrant'
      ]);
      
    }
}

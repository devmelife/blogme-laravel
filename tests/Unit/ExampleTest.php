<?php

namespace Tests\Unit;
use App\User;
use App\Post;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRoutes()
    {
        $appURL = env('APP_URL');
        $users = User::find(1);
        // var_dump($users);
        $response = $this->actingAs($users);
       
        $urls = [
            '/',
            '/dashboard',
            '/mypost' ,
            '/posts' ,
            '/showdash'
     

        ];

        echo  PHP_EOL;

        foreach ($urls as $url) {
            $response = $this->get($url);
            if((int)$response->status() !== 200){
                echo  $appURL . $url . ' (FAILED) did not return a 200.';
                $this->assertTrue(false);
            } else {
                echo $appURL . $url . ' (success ?)';
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }

    }

   
    
}

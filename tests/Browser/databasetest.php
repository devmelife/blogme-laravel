<?php
namespace Tests\Browser;

use App\User;
use App\Post;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class databasetest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_owner_post_can_create()
    {
       
        $this->browse(function ($browser) {
            $users = User::find(1);
            
            $browser->loginAs($users)
                    ->visit('/posts/create')
                    ->type('title', 'new created')
                    ->click('#page-wrapper > div > div > div > form > input.btn.btn-success')
                    ->logout();

            $new = Post::latest()->first();
           
           

            $posts = Post::find($new->id);
                $this->assertDatabaseHas('posts', [
                    'title' => $posts->title
        
                ]);
                echo  PHP_EOL;
                echo 'test_Post_Is_On_Database' . ' (success ?)';
               
            
                    
        });

       
    }

    public function test_owner_post_can_edit()
    {
       
        $this->browse(function ($browser) {
            $users = User::find(1);
            $new = Post::latest()->first();
            $browser->loginAs($users)
                    ->visit('posts/'.$new->id.'/edit')
                    ->type('title', 'edit created')
                    ->press('Submit')
                    
                    ->logout();

            
                    $posts = Post::find($new->id);

                    $this->assertDatabaseHas('posts', [
                        'title' => $posts->title
            
                    ]);
                    echo  PHP_EOL;
                    echo 'test_Edited_Post_Is_On_Database' . ' (success ?)';
                    
        });
       
    }

    public function test_owner_post_can_delete()
    {
       
        $this->browse(function ($browser) {
            $users = User::find(1);
            $store = ' ';
          
            $new = Post::latest()->first();
            $store .= $new->title;
           
         
            $browser->loginAs($users)
                    ->visit('posts/'.$new->id.'/delete')
               
                    ->logout();

                  
                    $this->assertDatabaseMissing('posts', [
                        'title' => $store
            
                    ]);
                    echo  PHP_EOL;
                    echo 'test_Post_Is_deleted_Database' . ' (success ?)';
                    
                   
                    
        });
    }
}

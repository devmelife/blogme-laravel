<?php

namespace Tests\Browser;

use App\User;
use App\Post;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class loginTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
 
   
    public function testlogcorrect()
    {
        $this->browse(function ($browser){
            $browser->visit('/login')
                    ->type('email', 'ryan@test.com')
                    ->type('password','123456')
                    ->press('LOGIN')
                    ->assertPathIs('/dashboard')
                    ->logout();
                    echo  PHP_EOL;
                    echo ' test_login_correct' . ' (success ?)';
                   
                    
        });     
    
    }

    public function testlogincorrect()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'ryan@test.com'

        ]);
        
        $this->browse(function ($browser){
            $browser->visit('/login')
                    ->type('email', 'ryan@test.com')
                    ->type('password','wrong')
                    ->press('LOGIN')
                    ->assertSee('These credentials do not match our records.');
                    echo  PHP_EOL;
                    echo ' test_login_Incorrect' . ' (success ?)';
                    
        });     
    }

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
                    ->assertSee('Post Upddated')
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
                    ->assertSee('Post Deleted')
                    ->logout();

                  
                    $this->assertDatabaseMissing('posts', [
                        'title' => $store
            
                    ]);
                    echo  PHP_EOL;
                    echo 'test_Post_Is_deleted_Database' . ' (success ?)';
                    
                   
                    
        });
    }

    public function test_not_post_cant_edit()
    {
       
        $this->browse(function ($browser) {
            $users = User::find(1);
            $browser->loginAs($users)
                    ->visit('posts/3/edit')
                    ->pause(1000)
                    ->assertSee('Unauthorized Page')
                    ->logout();
                    echo  PHP_EOL;
                    echo 'test_not_post_cant_edit' . ' (success ?)';
                   
                    
        });
    }

  

    public function test_not_post_cant_delete()
    {
       
        $this->browse(function ($browser) {
            $users = User::find(1);
            $browser->loginAs($users)
                    ->visit('posts/3/delete')
                    ->pause(1000)
                    ->assertSee('Unauthorized Page')
                    ->logout();
                    echo  PHP_EOL;
                    echo 'test_not_post_cant_delete' . ' (success ?)';
                    
        });
    }

   


    // public function testaddUser()
    // {
    //     $this->browse(function ($browser){
    //         $browser->visit('/register')
    //                 ->type('name', 'test')
    //                 ->type('email','test@gmail.com')
    //                 ->type('password','123456')
    //                 ->type('password_confirmation','123456')
    //                 ->press('REGISTER')
    //                 ->assertPathIs('/dashboard')
    //                 ->logout();
    //     });     
    // }

    
  
}

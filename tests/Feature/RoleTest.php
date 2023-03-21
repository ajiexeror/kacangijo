<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function Pest\Laravel\get;

class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanShowRolePage()
    {
        $user = User::role('admin')->get()->random();
        $this->actingAs($user);
        $this->get('/role')
        ->assertOk();
    }
    
    public function testCannotShowRolePage()
    {
        $user = User::role('staff')->get()->random();
        $this->actingAs($user)
        ->get('role')
        ->assertStatus(403);
    }

    public function testCannotShowRoleNotLogin()
    {
        $this->get('role')
        ->assertRedirect('login')
        ->assertStatus(302);
    }
    
    public function testCanCreateRole()
    {
        $user = User::role('admin')->get()->random();
        $this->actingAs($user);
        $this->get('/role/create')
        ->assertOk();
    }
    
    public function testCannotCreateRolePage()
    {
        $user = User::role('staff')->get()->random();
        $this->actingAs($user)
        ->get('/role/create')
        ->assertStatus(403);
    }
    
    public function testCannotCreateRoleNotLogin()
    {
        $this->get('/role/create')
        ->assertRedirect('login')
        ->assertStatus(302);
    }
}    

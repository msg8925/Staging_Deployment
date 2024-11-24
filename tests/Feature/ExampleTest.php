<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

uses(RefreshDatabase::class, WithFaker::class)->group('api');

it('Test Users route is accessible', function () {
    $response = $this->get('/api/user');

    $response->assertStatus(200);
});


// it('Test the user route', function () {
    
//     $response = $this->get('/api/user');

//     $response->assertStatus(200);
// });


// it('Test the user route returns correct value', function () {
    
//     $response = $this->get('/api/user');

//     $response->assertJson([
//         'Name' => 'Hellen',
//     ]);
// });


// it('Test user being correctly fetched from DB', function () {
    
//     User::factory(10)->create();

//     $response = DB::table("users")->first();

//     dd($response);

//     // $response = $this->get('/api/user');

//     // $response->assertJson([
//     //     'Name' => 'Hellen',
//     // ]);
// });

// Test GET all User route
test('fetch all users', function () {

    // Create 5 random user and store them in the DB
    User::factory()->count(5)->create();

    // Peform a HTTP GET request on user route
    $response = $this->getJson('/api/user');

    // dd($response);

    // Check HTTP status and ensure 5 users are returned
    $response->assertStatus(200)->assertJsonCount(5, 'data');
});


<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


it('Test the user route', function () {
    
    $response = $this->get('/api/user');

    $response->assertStatus(200);
});


it('Test the user route returns correct value', function () {
    
    $response = $this->get('/api/user');

    $response->assertJson([
        'Name' => 'Hellen',
    ]);
});

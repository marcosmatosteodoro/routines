<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /** @test */
    public function check_if_index_method_respons_200(): void
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    /** @test */
    public function check_if_create_method_respons_200(): void
    {
        $response = $this->get('/categories/create');

        $response->assertStatus(200);
    }
    /*
    protected function show(Request $request)
    {
        //GET /categories/{id}
        return 'entrei em show';
    }

    protected function edit(Request $request)
    {
        //GET /categories/{id}/edit
        return 'entrei em edit';
    }

    protected function store(Request $request)
    {
        //POST /categories
    }

    protected function update(Request $request)
    {
        //PUT/PATCH /categories/{id}
    }

    protected function destroy(Request $request)
    {
        //DELETE /categories/{id}
    }
    */
}

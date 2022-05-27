<?php

namespace Tests\Feature\Models;

use App\Models\ParentModel;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChildTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $parents = ParentModel::factory()->count(2)->hasChildren()->create();

        $this->getJson('/api/parent/' . $parents->first()->id . '/child/' . $parents->last()->children()->first()->id)->assertNotFound();
    }
}

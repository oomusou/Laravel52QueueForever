<?php

use App\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->see('Laravel 5');
    }

    /** @test */
    public function SQLiteInMemory連線()
    {
        /** arrange */
        $expected = 0;

        /** act */
        $actual = Post::all();

        /** assert */
        $this->assertCount($expected, $actual);
    }
}

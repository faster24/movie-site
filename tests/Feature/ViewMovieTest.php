<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMovieTest extends TestCase
{
    public function the_main_page_show_correct_info()
    {
        $response = $this->get( route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('popular Movies');
    }
}

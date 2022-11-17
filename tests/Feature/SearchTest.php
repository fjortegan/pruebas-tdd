<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\SearchController;
use Tests\TestCase;

class SearchTest extends TestCase
{
    use RefreshDatabase;


    /**
     * Tests search controller
     *
     * @return void
     */
    public function test_params()
    {
        $params = [ "entity" => "Hola" ];

        $result = SearchController::search($params);
        $this->assertTrue(count($result)>0);

        $this->assertTrue(get_class($result[0]) == "App\\Models\\" . $params['entity']);
    }
}

<?php

namespace DevOption\Helio\FeatureRequest\Test;

use Illuminate\Http\Response;
use Orchestra\Testbench\TestCase;
use DevOption\Helio\FeatureRequest\HelioFeatureRequestProvider;

class CreateFeatureRequestTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            HelioFeatureRequestProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        //
    }

    /** @test */
    public function it_can_load_the_routes()
    {
        $this->json('get', 'api/v1/features')
            ->assertStatus(Response::HTTP_OK);
    }
}
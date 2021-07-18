<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Scout;

class ScoutApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_scout()
    {
        $scout = Scout::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/scouts', $scout
        );

        $this->assertApiResponse($scout);
    }

    /**
     * @test
     */
    public function test_read_scout()
    {
        $scout = Scout::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/scouts/'.$scout->id
        );

        $this->assertApiResponse($scout->toArray());
    }

    /**
     * @test
     */
    public function test_update_scout()
    {
        $scout = Scout::factory()->create();
        $editedScout = Scout::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/scouts/'.$scout->id,
            $editedScout
        );

        $this->assertApiResponse($editedScout);
    }

    /**
     * @test
     */
    public function test_delete_scout()
    {
        $scout = Scout::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/scouts/'.$scout->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/scouts/'.$scout->id
        );

        $this->response->assertStatus(404);
    }
}

<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Nuritionist;

class NuritionistApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/nuritionists', $nuritionist
        );

        $this->assertApiResponse($nuritionist);
    }

    /**
     * @test
     */
    public function test_read_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/nuritionists/'.$nuritionist->id
        );

        $this->assertApiResponse($nuritionist->toArray());
    }

    /**
     * @test
     */
    public function test_update_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->create();
        $editedNuritionist = Nuritionist::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/nuritionists/'.$nuritionist->id,
            $editedNuritionist
        );

        $this->assertApiResponse($editedNuritionist);
    }

    /**
     * @test
     */
    public function test_delete_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/nuritionists/'.$nuritionist->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/nuritionists/'.$nuritionist->id
        );

        $this->response->assertStatus(404);
    }
}

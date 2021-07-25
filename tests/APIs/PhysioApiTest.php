<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Physio;

class PhysioApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_physio()
    {
        $physio = Physio::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/physios', $physio
        );

        $this->assertApiResponse($physio);
    }

    /**
     * @test
     */
    public function test_read_physio()
    {
        $physio = Physio::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/physios/'.$physio->id
        );

        $this->assertApiResponse($physio->toArray());
    }

    /**
     * @test
     */
    public function test_update_physio()
    {
        $physio = Physio::factory()->create();
        $editedPhysio = Physio::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/physios/'.$physio->id,
            $editedPhysio
        );

        $this->assertApiResponse($editedPhysio);
    }

    /**
     * @test
     */
    public function test_delete_physio()
    {
        $physio = Physio::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/physios/'.$physio->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/physios/'.$physio->id
        );

        $this->response->assertStatus(404);
    }
}

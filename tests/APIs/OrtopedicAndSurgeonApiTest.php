<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\OrtopedicAndSurgeon;

class OrtopedicAndSurgeonApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/ortopedic_and_surgeons', $ortopedicAndSurgeon
        );

        $this->assertApiResponse($ortopedicAndSurgeon);
    }

    /**
     * @test
     */
    public function test_read_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/ortopedic_and_surgeons/'.$ortopedicAndSurgeon->id
        );

        $this->assertApiResponse($ortopedicAndSurgeon->toArray());
    }

    /**
     * @test
     */
    public function test_update_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->create();
        $editedOrtopedicAndSurgeon = OrtopedicAndSurgeon::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/ortopedic_and_surgeons/'.$ortopedicAndSurgeon->id,
            $editedOrtopedicAndSurgeon
        );

        $this->assertApiResponse($editedOrtopedicAndSurgeon);
    }

    /**
     * @test
     */
    public function test_delete_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/ortopedic_and_surgeons/'.$ortopedicAndSurgeon->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/ortopedic_and_surgeons/'.$ortopedicAndSurgeon->id
        );

        $this->response->assertStatus(404);
    }
}

<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Academy;

class AcademyApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_academy()
    {
        $academy = Academy::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/academies', $academy
        );

        $this->assertApiResponse($academy);
    }

    /**
     * @test
     */
    public function test_read_academy()
    {
        $academy = Academy::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/academies/'.$academy->id
        );

        $this->assertApiResponse($academy->toArray());
    }

    /**
     * @test
     */
    public function test_update_academy()
    {
        $academy = Academy::factory()->create();
        $editedAcademy = Academy::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/academies/'.$academy->id,
            $editedAcademy
        );

        $this->assertApiResponse($editedAcademy);
    }

    /**
     * @test
     */
    public function test_delete_academy()
    {
        $academy = Academy::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/academies/'.$academy->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/academies/'.$academy->id
        );

        $this->response->assertStatus(404);
    }
}

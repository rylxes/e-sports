<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Coach;

class CoachApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_coach()
    {
        $coach = Coach::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/coaches', $coach
        );

        $this->assertApiResponse($coach);
    }

    /**
     * @test
     */
    public function test_read_coach()
    {
        $coach = Coach::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/coaches/'.$coach->id
        );

        $this->assertApiResponse($coach->toArray());
    }

    /**
     * @test
     */
    public function test_update_coach()
    {
        $coach = Coach::factory()->create();
        $editedCoach = Coach::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/coaches/'.$coach->id,
            $editedCoach
        );

        $this->assertApiResponse($editedCoach);
    }

    /**
     * @test
     */
    public function test_delete_coach()
    {
        $coach = Coach::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/coaches/'.$coach->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/coaches/'.$coach->id
        );

        $this->response->assertStatus(404);
    }
}

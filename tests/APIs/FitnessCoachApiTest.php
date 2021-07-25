<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\FitnessCoach;

class FitnessCoachApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/fitness_coaches', $fitnessCoach
        );

        $this->assertApiResponse($fitnessCoach);
    }

    /**
     * @test
     */
    public function test_read_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/fitness_coaches/'.$fitnessCoach->id
        );

        $this->assertApiResponse($fitnessCoach->toArray());
    }

    /**
     * @test
     */
    public function test_update_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->create();
        $editedFitnessCoach = FitnessCoach::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/fitness_coaches/'.$fitnessCoach->id,
            $editedFitnessCoach
        );

        $this->assertApiResponse($editedFitnessCoach);
    }

    /**
     * @test
     */
    public function test_delete_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/fitness_coaches/'.$fitnessCoach->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/fitness_coaches/'.$fitnessCoach->id
        );

        $this->response->assertStatus(404);
    }
}

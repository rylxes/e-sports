<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\PerformanceCoach;

class PerformanceCoachApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/performance_coaches', $performanceCoach
        );

        $this->assertApiResponse($performanceCoach);
    }

    /**
     * @test
     */
    public function test_read_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/performance_coaches/'.$performanceCoach->id
        );

        $this->assertApiResponse($performanceCoach->toArray());
    }

    /**
     * @test
     */
    public function test_update_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->create();
        $editedPerformanceCoach = PerformanceCoach::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/performance_coaches/'.$performanceCoach->id,
            $editedPerformanceCoach
        );

        $this->assertApiResponse($editedPerformanceCoach);
    }

    /**
     * @test
     */
    public function test_delete_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/performance_coaches/'.$performanceCoach->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/performance_coaches/'.$performanceCoach->id
        );

        $this->response->assertStatus(404);
    }
}

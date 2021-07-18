<?php namespace Tests\Repositories;

use App\Models\PerformanceCoach;
use App\Repositories\PerformanceCoachRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PerformanceCoachRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PerformanceCoachRepository
     */
    protected $performanceCoachRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->performanceCoachRepo = \App::make(PerformanceCoachRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->make()->toArray();

        $createdPerformanceCoach = $this->performanceCoachRepo->create($performanceCoach);

        $createdPerformanceCoach = $createdPerformanceCoach->toArray();
        $this->assertArrayHasKey('id', $createdPerformanceCoach);
        $this->assertNotNull($createdPerformanceCoach['id'], 'Created PerformanceCoach must have id specified');
        $this->assertNotNull(PerformanceCoach::find($createdPerformanceCoach['id']), 'PerformanceCoach with given id must be in DB');
        $this->assertModelData($performanceCoach, $createdPerformanceCoach);
    }

    /**
     * @test read
     */
    public function test_read_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->create();

        $dbPerformanceCoach = $this->performanceCoachRepo->find($performanceCoach->id);

        $dbPerformanceCoach = $dbPerformanceCoach->toArray();
        $this->assertModelData($performanceCoach->toArray(), $dbPerformanceCoach);
    }

    /**
     * @test update
     */
    public function test_update_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->create();
        $fakePerformanceCoach = PerformanceCoach::factory()->make()->toArray();

        $updatedPerformanceCoach = $this->performanceCoachRepo->update($fakePerformanceCoach, $performanceCoach->id);

        $this->assertModelData($fakePerformanceCoach, $updatedPerformanceCoach->toArray());
        $dbPerformanceCoach = $this->performanceCoachRepo->find($performanceCoach->id);
        $this->assertModelData($fakePerformanceCoach, $dbPerformanceCoach->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_performance_coach()
    {
        $performanceCoach = PerformanceCoach::factory()->create();

        $resp = $this->performanceCoachRepo->delete($performanceCoach->id);

        $this->assertTrue($resp);
        $this->assertNull(PerformanceCoach::find($performanceCoach->id), 'PerformanceCoach should not exist in DB');
    }
}

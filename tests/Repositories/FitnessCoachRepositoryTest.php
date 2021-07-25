<?php namespace Tests\Repositories;

use App\Models\FitnessCoach;
use App\Repositories\FitnessCoachRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class FitnessCoachRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var FitnessCoachRepository
     */
    protected $fitnessCoachRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->fitnessCoachRepo = \App::make(FitnessCoachRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->make()->toArray();

        $createdFitnessCoach = $this->fitnessCoachRepo->create($fitnessCoach);

        $createdFitnessCoach = $createdFitnessCoach->toArray();
        $this->assertArrayHasKey('id', $createdFitnessCoach);
        $this->assertNotNull($createdFitnessCoach['id'], 'Created FitnessCoach must have id specified');
        $this->assertNotNull(FitnessCoach::find($createdFitnessCoach['id']), 'FitnessCoach with given id must be in DB');
        $this->assertModelData($fitnessCoach, $createdFitnessCoach);
    }

    /**
     * @test read
     */
    public function test_read_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->create();

        $dbFitnessCoach = $this->fitnessCoachRepo->find($fitnessCoach->id);

        $dbFitnessCoach = $dbFitnessCoach->toArray();
        $this->assertModelData($fitnessCoach->toArray(), $dbFitnessCoach);
    }

    /**
     * @test update
     */
    public function test_update_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->create();
        $fakeFitnessCoach = FitnessCoach::factory()->make()->toArray();

        $updatedFitnessCoach = $this->fitnessCoachRepo->update($fakeFitnessCoach, $fitnessCoach->id);

        $this->assertModelData($fakeFitnessCoach, $updatedFitnessCoach->toArray());
        $dbFitnessCoach = $this->fitnessCoachRepo->find($fitnessCoach->id);
        $this->assertModelData($fakeFitnessCoach, $dbFitnessCoach->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_fitness_coach()
    {
        $fitnessCoach = FitnessCoach::factory()->create();

        $resp = $this->fitnessCoachRepo->delete($fitnessCoach->id);

        $this->assertTrue($resp);
        $this->assertNull(FitnessCoach::find($fitnessCoach->id), 'FitnessCoach should not exist in DB');
    }
}

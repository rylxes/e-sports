<?php namespace Tests\Repositories;

use App\Models\Coach;
use App\Repositories\CoachRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class CoachRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var CoachRepository
     */
    protected $coachRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->coachRepo = \App::make(CoachRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_coach()
    {
        $coach = Coach::factory()->make()->toArray();

        $createdCoach = $this->coachRepo->create($coach);

        $createdCoach = $createdCoach->toArray();
        $this->assertArrayHasKey('id', $createdCoach);
        $this->assertNotNull($createdCoach['id'], 'Created Coach must have id specified');
        $this->assertNotNull(Coach::find($createdCoach['id']), 'Coach with given id must be in DB');
        $this->assertModelData($coach, $createdCoach);
    }

    /**
     * @test read
     */
    public function test_read_coach()
    {
        $coach = Coach::factory()->create();

        $dbCoach = $this->coachRepo->find($coach->id);

        $dbCoach = $dbCoach->toArray();
        $this->assertModelData($coach->toArray(), $dbCoach);
    }

    /**
     * @test update
     */
    public function test_update_coach()
    {
        $coach = Coach::factory()->create();
        $fakeCoach = Coach::factory()->make()->toArray();

        $updatedCoach = $this->coachRepo->update($fakeCoach, $coach->id);

        $this->assertModelData($fakeCoach, $updatedCoach->toArray());
        $dbCoach = $this->coachRepo->find($coach->id);
        $this->assertModelData($fakeCoach, $dbCoach->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_coach()
    {
        $coach = Coach::factory()->create();

        $resp = $this->coachRepo->delete($coach->id);

        $this->assertTrue($resp);
        $this->assertNull(Coach::find($coach->id), 'Coach should not exist in DB');
    }
}

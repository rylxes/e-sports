<?php namespace Tests\Repositories;

use App\Models\Scout;
use App\Repositories\ScoutRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ScoutRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ScoutRepository
     */
    protected $scoutRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->scoutRepo = \App::make(ScoutRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_scout()
    {
        $scout = Scout::factory()->make()->toArray();

        $createdScout = $this->scoutRepo->create($scout);

        $createdScout = $createdScout->toArray();
        $this->assertArrayHasKey('id', $createdScout);
        $this->assertNotNull($createdScout['id'], 'Created Scout must have id specified');
        $this->assertNotNull(Scout::find($createdScout['id']), 'Scout with given id must be in DB');
        $this->assertModelData($scout, $createdScout);
    }

    /**
     * @test read
     */
    public function test_read_scout()
    {
        $scout = Scout::factory()->create();

        $dbScout = $this->scoutRepo->find($scout->id);

        $dbScout = $dbScout->toArray();
        $this->assertModelData($scout->toArray(), $dbScout);
    }

    /**
     * @test update
     */
    public function test_update_scout()
    {
        $scout = Scout::factory()->create();
        $fakeScout = Scout::factory()->make()->toArray();

        $updatedScout = $this->scoutRepo->update($fakeScout, $scout->id);

        $this->assertModelData($fakeScout, $updatedScout->toArray());
        $dbScout = $this->scoutRepo->find($scout->id);
        $this->assertModelData($fakeScout, $dbScout->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_scout()
    {
        $scout = Scout::factory()->create();

        $resp = $this->scoutRepo->delete($scout->id);

        $this->assertTrue($resp);
        $this->assertNull(Scout::find($scout->id), 'Scout should not exist in DB');
    }
}

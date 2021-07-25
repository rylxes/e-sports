<?php namespace Tests\Repositories;

use App\Models\Nuritionist;
use App\Repositories\NuritionistRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class NuritionistRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var NuritionistRepository
     */
    protected $nuritionistRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->nuritionistRepo = \App::make(NuritionistRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->make()->toArray();

        $createdNuritionist = $this->nuritionistRepo->create($nuritionist);

        $createdNuritionist = $createdNuritionist->toArray();
        $this->assertArrayHasKey('id', $createdNuritionist);
        $this->assertNotNull($createdNuritionist['id'], 'Created Nuritionist must have id specified');
        $this->assertNotNull(Nuritionist::find($createdNuritionist['id']), 'Nuritionist with given id must be in DB');
        $this->assertModelData($nuritionist, $createdNuritionist);
    }

    /**
     * @test read
     */
    public function test_read_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->create();

        $dbNuritionist = $this->nuritionistRepo->find($nuritionist->id);

        $dbNuritionist = $dbNuritionist->toArray();
        $this->assertModelData($nuritionist->toArray(), $dbNuritionist);
    }

    /**
     * @test update
     */
    public function test_update_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->create();
        $fakeNuritionist = Nuritionist::factory()->make()->toArray();

        $updatedNuritionist = $this->nuritionistRepo->update($fakeNuritionist, $nuritionist->id);

        $this->assertModelData($fakeNuritionist, $updatedNuritionist->toArray());
        $dbNuritionist = $this->nuritionistRepo->find($nuritionist->id);
        $this->assertModelData($fakeNuritionist, $dbNuritionist->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_nuritionist()
    {
        $nuritionist = Nuritionist::factory()->create();

        $resp = $this->nuritionistRepo->delete($nuritionist->id);

        $this->assertTrue($resp);
        $this->assertNull(Nuritionist::find($nuritionist->id), 'Nuritionist should not exist in DB');
    }
}

<?php namespace Tests\Repositories;

use App\Models\Physio;
use App\Repositories\PhysioRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class PhysioRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var PhysioRepository
     */
    protected $physioRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->physioRepo = \App::make(PhysioRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_physio()
    {
        $physio = Physio::factory()->make()->toArray();

        $createdPhysio = $this->physioRepo->create($physio);

        $createdPhysio = $createdPhysio->toArray();
        $this->assertArrayHasKey('id', $createdPhysio);
        $this->assertNotNull($createdPhysio['id'], 'Created Physio must have id specified');
        $this->assertNotNull(Physio::find($createdPhysio['id']), 'Physio with given id must be in DB');
        $this->assertModelData($physio, $createdPhysio);
    }

    /**
     * @test read
     */
    public function test_read_physio()
    {
        $physio = Physio::factory()->create();

        $dbPhysio = $this->physioRepo->find($physio->id);

        $dbPhysio = $dbPhysio->toArray();
        $this->assertModelData($physio->toArray(), $dbPhysio);
    }

    /**
     * @test update
     */
    public function test_update_physio()
    {
        $physio = Physio::factory()->create();
        $fakePhysio = Physio::factory()->make()->toArray();

        $updatedPhysio = $this->physioRepo->update($fakePhysio, $physio->id);

        $this->assertModelData($fakePhysio, $updatedPhysio->toArray());
        $dbPhysio = $this->physioRepo->find($physio->id);
        $this->assertModelData($fakePhysio, $dbPhysio->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_physio()
    {
        $physio = Physio::factory()->create();

        $resp = $this->physioRepo->delete($physio->id);

        $this->assertTrue($resp);
        $this->assertNull(Physio::find($physio->id), 'Physio should not exist in DB');
    }
}

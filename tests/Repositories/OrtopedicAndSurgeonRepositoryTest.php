<?php namespace Tests\Repositories;

use App\Models\OrtopedicAndSurgeon;
use App\Repositories\OrtopedicAndSurgeonRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class OrtopedicAndSurgeonRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var OrtopedicAndSurgeonRepository
     */
    protected $ortopedicAndSurgeonRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->ortopedicAndSurgeonRepo = \App::make(OrtopedicAndSurgeonRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->make()->toArray();

        $createdOrtopedicAndSurgeon = $this->ortopedicAndSurgeonRepo->create($ortopedicAndSurgeon);

        $createdOrtopedicAndSurgeon = $createdOrtopedicAndSurgeon->toArray();
        $this->assertArrayHasKey('id', $createdOrtopedicAndSurgeon);
        $this->assertNotNull($createdOrtopedicAndSurgeon['id'], 'Created OrtopedicAndSurgeon must have id specified');
        $this->assertNotNull(OrtopedicAndSurgeon::find($createdOrtopedicAndSurgeon['id']), 'OrtopedicAndSurgeon with given id must be in DB');
        $this->assertModelData($ortopedicAndSurgeon, $createdOrtopedicAndSurgeon);
    }

    /**
     * @test read
     */
    public function test_read_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->create();

        $dbOrtopedicAndSurgeon = $this->ortopedicAndSurgeonRepo->find($ortopedicAndSurgeon->id);

        $dbOrtopedicAndSurgeon = $dbOrtopedicAndSurgeon->toArray();
        $this->assertModelData($ortopedicAndSurgeon->toArray(), $dbOrtopedicAndSurgeon);
    }

    /**
     * @test update
     */
    public function test_update_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->create();
        $fakeOrtopedicAndSurgeon = OrtopedicAndSurgeon::factory()->make()->toArray();

        $updatedOrtopedicAndSurgeon = $this->ortopedicAndSurgeonRepo->update($fakeOrtopedicAndSurgeon, $ortopedicAndSurgeon->id);

        $this->assertModelData($fakeOrtopedicAndSurgeon, $updatedOrtopedicAndSurgeon->toArray());
        $dbOrtopedicAndSurgeon = $this->ortopedicAndSurgeonRepo->find($ortopedicAndSurgeon->id);
        $this->assertModelData($fakeOrtopedicAndSurgeon, $dbOrtopedicAndSurgeon->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_ortopedic_and_surgeon()
    {
        $ortopedicAndSurgeon = OrtopedicAndSurgeon::factory()->create();

        $resp = $this->ortopedicAndSurgeonRepo->delete($ortopedicAndSurgeon->id);

        $this->assertTrue($resp);
        $this->assertNull(OrtopedicAndSurgeon::find($ortopedicAndSurgeon->id), 'OrtopedicAndSurgeon should not exist in DB');
    }
}

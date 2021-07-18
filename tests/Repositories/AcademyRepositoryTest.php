<?php namespace Tests\Repositories;

use App\Models\Academy;
use App\Repositories\AcademyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AcademyRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AcademyRepository
     */
    protected $academyRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->academyRepo = \App::make(AcademyRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_academy()
    {
        $academy = Academy::factory()->make()->toArray();

        $createdAcademy = $this->academyRepo->create($academy);

        $createdAcademy = $createdAcademy->toArray();
        $this->assertArrayHasKey('id', $createdAcademy);
        $this->assertNotNull($createdAcademy['id'], 'Created Academy must have id specified');
        $this->assertNotNull(Academy::find($createdAcademy['id']), 'Academy with given id must be in DB');
        $this->assertModelData($academy, $createdAcademy);
    }

    /**
     * @test read
     */
    public function test_read_academy()
    {
        $academy = Academy::factory()->create();

        $dbAcademy = $this->academyRepo->find($academy->id);

        $dbAcademy = $dbAcademy->toArray();
        $this->assertModelData($academy->toArray(), $dbAcademy);
    }

    /**
     * @test update
     */
    public function test_update_academy()
    {
        $academy = Academy::factory()->create();
        $fakeAcademy = Academy::factory()->make()->toArray();

        $updatedAcademy = $this->academyRepo->update($fakeAcademy, $academy->id);

        $this->assertModelData($fakeAcademy, $updatedAcademy->toArray());
        $dbAcademy = $this->academyRepo->find($academy->id);
        $this->assertModelData($fakeAcademy, $dbAcademy->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_academy()
    {
        $academy = Academy::factory()->create();

        $resp = $this->academyRepo->delete($academy->id);

        $this->assertTrue($resp);
        $this->assertNull(Academy::find($academy->id), 'Academy should not exist in DB');
    }
}

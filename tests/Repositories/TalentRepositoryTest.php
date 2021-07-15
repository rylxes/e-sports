<?php namespace Tests\Repositories;

use App\Models\Talent;
use App\Repositories\TalentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TalentRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TalentRepository
     */
    protected $talentRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->talentRepo = \App::make(TalentRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_talent()
    {
        $talent = Talent::factory()->make()->toArray();

        $createdTalent = $this->talentRepo->create($talent);

        $createdTalent = $createdTalent->toArray();
        $this->assertArrayHasKey('id', $createdTalent);
        $this->assertNotNull($createdTalent['id'], 'Created Talent must have id specified');
        $this->assertNotNull(Talent::find($createdTalent['id']), 'Talent with given id must be in DB');
        $this->assertModelData($talent, $createdTalent);
    }

    /**
     * @test read
     */
    public function test_read_talent()
    {
        $talent = Talent::factory()->create();

        $dbTalent = $this->talentRepo->find($talent->id);

        $dbTalent = $dbTalent->toArray();
        $this->assertModelData($talent->toArray(), $dbTalent);
    }

    /**
     * @test update
     */
    public function test_update_talent()
    {
        $talent = Talent::factory()->create();
        $fakeTalent = Talent::factory()->make()->toArray();

        $updatedTalent = $this->talentRepo->update($fakeTalent, $talent->id);

        $this->assertModelData($fakeTalent, $updatedTalent->toArray());
        $dbTalent = $this->talentRepo->find($talent->id);
        $this->assertModelData($fakeTalent, $dbTalent->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_talent()
    {
        $talent = Talent::factory()->create();

        $resp = $this->talentRepo->delete($talent->id);

        $this->assertTrue($resp);
        $this->assertNull(Talent::find($talent->id), 'Talent should not exist in DB');
    }
}

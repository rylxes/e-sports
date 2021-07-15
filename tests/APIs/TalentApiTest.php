<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Talent;

class TalentApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_talent()
    {
        $talent = Talent::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/talent', $talent
        );

        $this->assertApiResponse($talent);
    }

    /**
     * @test
     */
    public function test_read_talent()
    {
        $talent = Talent::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/talent/'.$talent->id
        );

        $this->assertApiResponse($talent->toArray());
    }

    /**
     * @test
     */
    public function test_update_talent()
    {
        $talent = Talent::factory()->create();
        $editedTalent = Talent::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/talent/'.$talent->id,
            $editedTalent
        );

        $this->assertApiResponse($editedTalent);
    }

    /**
     * @test
     */
    public function test_delete_talent()
    {
        $talent = Talent::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/talent/'.$talent->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/talent/'.$talent->id
        );

        $this->response->assertStatus(404);
    }
}

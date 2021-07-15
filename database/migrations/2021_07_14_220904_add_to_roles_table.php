<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

class AddToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Role::create([
            'name' => 'talent',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'coach',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'scout',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'agents',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'performance_coach',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'academies',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'physios',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'fitness_coach',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'nutritionist',
            'guard_name' => 'api',
        ]);
        Role::create([
            'name' => 'specialists',
            'guard_name' => 'api',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
}

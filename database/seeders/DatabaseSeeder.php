<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(UsersTableSeeder::class);
        $this->call(Area3BBSeeder::class);
        $this->call(AreaAisSeeder::class);
        $this->call(AreaFibetnetSeeder::class);
        $this->call(AreatrueSeeder::class);
        $this->call(AreatrueNewSeeder::class);
        $this->call(CallverSeeder::class);
        $this->call(CallverstatusSeeder::class);
        $this->call(GeneratingactionSeeder::class);
        $this->call(JobTypeSeeder::class);
        $this->call(IspSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(OperaterSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProblemSolutionsSeeder::class);
        $this->call(ProvidertrueSeeder::class);
        $this->call(SalefmSeeder::class);
        $this->call(TeamserwaySeeder::class);
        $this->call(TechnicianSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(workStatusSeeder::class);
        $this->call(WorkTimeSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(BbnSeeder::class);
        $this->call(AgentSeeder::class);
        $this->call(LaratrustSeeder::class);
        // $this->call(AreaSeeder::class);
        // $this->call(BbnSeeder::class);
        // \App\Models\Category::factory(10)->create();
        // \App\Models\Ticket::factory(20)->create();
        // \App\Models\Building::factory(200)->create();
        // \App\Models\User::factory(50)->create();
        // \App\Models\Team::factory(20)->create();

        // $this->call(TeamUserTableSeeder::class);
        // \App\Models\Planing::factory(100)->create();
    }
}

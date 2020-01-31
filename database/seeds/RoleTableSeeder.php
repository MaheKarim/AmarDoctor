<?php

use Illuminate\Database\Seeder;
use App\User;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
   \Bouncer::allow('admin')->toManage(User::class);
   \Bouncer::allow('doctor')->to('update', \App\User::class);
   \Bouncer::allow('nurse')->to('update', \App\User::class);

    $admin = factory(App\User::class)->create([
        'email' => 'admin@example.com'
    ]);

    $admin->assign('admin');

    $doctor = factory(App\User::class)->create([
        'email' => 'doctor@example.com'
    ]);

    $doctor->assign('doctor');

    $nurse = factory(App\User::class)->create([
        'email' => 'doctor@example.com'
    ]);

    $nurse->assign('nurse');

    factory(App\User::class)->create([
        'email' => 'user@example.com'
    ]);
    }
}

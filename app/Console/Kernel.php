<?php

namespace App\Console;

use App\Bot\Massage;
use App\Bot\SendMassage;
use App\Models\Users\BotUsers;
use App\Models\Users\UserMasseges;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {


        $schedule->call(function () {

            $users = BotUsers::all();

            foreach ($users as $user){
                $m = new Massage();
                $m->sendMassage($user['chat_id'],'1sd'.date('H:i:s',time()));

            }

        })->everyMinute();


    }


    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

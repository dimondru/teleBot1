<?php

namespace App\Console;

use App\Bot\SendMassage;
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
           $message = new UserMasseges;
            $message->chat_id =  '1sd' ;
           $message->text =  '1sd'.date('H:i:s',time()) ;
           $message->save();
           return '1';
        })->everyMinute();

        $schedule->call(function () {
            $sender = new SendMassage();
            $sender->sendMassage('508562772','hello '.date('H:i:s',time()));
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

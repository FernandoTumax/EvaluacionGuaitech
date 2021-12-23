<?php

namespace App\Console;

use App\Models\Tanque;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function() {
            $date = Carbon::now();
            $registroNuevo = new Tanque();
            $registroNuevo->Hora = $date->time;
            $registroNuevo->Golpes = 0;
            $registroNuevo->NIVPKT03 = 0;
            $registroNuevo->ControlConsistencia = 0;
            $registroNuevo->NivelCuba = 0;
            $registroNuevo->TanqueAgua = 0;
            $registroNuevo->VacioTrans = 0;
            $registroNuevo->Presion = 0;
            Tanque::create($registroNuevo);
        })->everyTenMinutes();
        // $schedule->command('inspire')->hourly();
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

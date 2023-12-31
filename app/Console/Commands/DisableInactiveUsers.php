<?php

namespace App\Console\Commands;

// use Carbon\Carbon;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Console\Command;

class DisableInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:disable_inactive';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menonaktifkan pengguna yang tidak aktif selama 7 hari';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $inactiveUsers = User::where('last_activity', '<=', Carbon::now()->subDays(7))->where('status', 'Aktif')->get();
        foreach ($inactiveUsers as $user)
        {
            $user->status = 'Non Aktif';
            $user->save();
        }

        $this->info('Akun pengguna yang tidak aktif selama 7 hari telah dinonaktifkan');
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        $this->call('DoctorsSeeder');
        $this->call('PatientsSeeder'); 
        $this->call('ResetTokensSeeder');
        $this->call('UserOtpSeeder');
        $this->call('ActivationTokensSeeder');
    }
}

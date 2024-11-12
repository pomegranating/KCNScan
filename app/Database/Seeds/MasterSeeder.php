<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        $this->call('CountrySeeder');
        $this->call('CountySeeder');
        $this->call('SubCountySeeder');
        $this->call('UserRoleSeeder');
        $this->call('GenderSeeder');
        $this->call('UsersSeeder');
        $this->call('EmergencyContactSeeder');
        $this->call('InsuranceDetailsSeeder');
        $this->call('ResetTokensSeeder');
        $this->call('UserOtpSeeder');
        $this->call('ActivationTokensSeeder');
    }
}

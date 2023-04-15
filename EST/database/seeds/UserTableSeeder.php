<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_infos')->insert(array(
            array(
                'name' => "test",
                'age' => "test",
                'birthdate' => "test",
                'email' => "test@gmail.com",
                'address' => "test",
                'contactNo' => "test",
                'qualification' => "test",
                'recentResult' => "test",
                'jobid' => "0",
                'deptId' => "0",
                'designation' => "test",
                'joindate' => "test",
                'permanentDate' => "test",
                'basicSalary' => "0",
                'salaryAmount' => "0",
                'totalLeave' => "0",
                'totalWorkTime' => "0",
                'PromotionDate' => "test",
                'creator' => "test",
            ),
        ));
    }
}

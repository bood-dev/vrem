<?php

use Illuminate\Database\Seeder;
use App\Models\Checklist\Checklist;

class ChecklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $checklist = new Checklist;
        $checklist->name = 'Web Application';
        $checklist->description = 'Description for web application security checklist';
        $checklist->save();

        $checklist = new Checklist;
        $checklist->name = 'Mobile';
        $checklist->description = 'Description for mobile security checklist';
        $checklist->save();
    }
}

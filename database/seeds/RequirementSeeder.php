<?php

use Illuminate\Database\Seeder;
use App\Models\Checklist\Requirement;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * OWASP ASVS 4.0.2
         */

        $requirement = new Requirement;
        $requirement->chapter = 'V1: Architecture, Design and Threat Modeling Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Secure Software Development Lifecycle Requirements';
        $requirement->section_level = 1;
        $requirement->description = 'Verify the use of a secure software development lifecycle that addresses security in all stages of development.';
        $requirement->description_level = 1;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = true;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->chapter = 'V1: Architecture, Design and Threat Modeling Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Secure Software Development Lifecycle Requirements';
        $requirement->section_level = 1;
        $requirement->description = 'Verify the use of threat modeling for every design change or sprint planning to identify threats, plan for countermeasures, facilitate appropriate risk responses, and guide security testing.';
        $requirement->description_level = 2;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = true;
        $requirement->cwe = 1053;
        $requirement->cwe_link = 'https://cwe.mitre.org/data/definitions/521.html';
        $requirement->save();

        $requirement = new Requirement;
        $requirement->chapter = 'V1: Architecture, Design and Threat Modeling Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Secure Software Development Lifecycle Requirements';
        $requirement->section_level = 1;
        $requirement->description = 'Verify that all user stories and features contain functional security constraints, such as "As a user, I should be able to view and edit my profile. I should not beable to view or edit anyone else\'s profile"';
        $requirement->description_level = 3;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = true;
        $requirement->cwe = 1110;
        $requirement->cwe_link = 'https://cwe.mitre.org/data/definitions/1110.html';
        $requirement->save();

    }
}

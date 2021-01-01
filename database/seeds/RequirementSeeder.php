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
        $requirement->checklist_id = 1;
        $requirement->chapter = 'V1: Architecture, Design and Threat Modeling 
            Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Secure Software Development Lifecycle 
            Requirements';
        $requirement->section_level = 1;
        $requirement->description = 'Verify the use of a secure software 
            development lifecycle that addresses security in all stages of 
            development.';
        $requirement->description_level = 1;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = true;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 1;
        $requirement->chapter = 'V1: Architecture, Design and Threat Modeling 
            Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Secure Software Development Lifecycle 
            Requirements';
        $requirement->section_level = 1;
        $requirement->description = 'Verify the use of threat modeling for every
             design change or sprint planning to identify threats, plan for 
             countermeasures, facilitate appropriate risk responses, and guide 
             security testing.';
        $requirement->description_level = 2;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = true;
        $requirement->testing_procedures = null;
        $requirement->cwe = 1053;
        $requirement->cwe_link = 
            'https://cwe.mitre.org/data/definitions/521.html';
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 1;
        $requirement->chapter = 'V1: Architecture, Design and Threat Modeling 
            Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Secure Software Development Lifecycle 
            Requirements';
        $requirement->section_level = 1;
        $requirement->description = 'Verify that all user stories and features 
            contain functional security constraints, such as "As a user, I 
            should be able to view and edit my profile. I should not beable to 
            view or edit anyone else\'s profile"';
        $requirement->description_level = 3;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = true;
        $requirement->testing_procedures = null;
        $requirement->cwe = 1110;
        $requirement->cwe_link = 
            'https://cwe.mitre.org/data/definitions/1110.html';
        $requirement->save();


        /**
         * OWASP MSTG 1.2
         * 
         * V1 - Architecture, Design and Threat Modelling
         * 
         */
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'Verify that all app components are 
            identified and known to be needed.';
        $requirement->description_level = 1;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04b-Mobile-App-Security-Testing.md#architectural-information';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'Verify that security controls are never 
            enforced only on the client side, but on the respective remote 
            endpoints.';
        $requirement->description_level = 2;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04h-Testing-Code-Quality.md#injection-flaws-mstg-arch-2-and-mstg-platform-2';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'A high-level architecture for the mobile 
            app and all connected remote services has been defined and security 
            has been addressed in that architecture.';
        $requirement->description_level = 3;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04b-Mobile-App-Security-Testing.md#architectural-information';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'Data considered sensisitve in the context 
            of the mobile app is clearly defined.';
        $requirement->description_level = 4;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04b-Mobile-App-Security-Testing.md#identifying-sensitive-data';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'All app components are defined in terms of
            the business functions and/or security functions they provide';
        $requirement->description_level = 5;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04b-Mobile-App-Security-Testing.md#environmental-information';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'A threat model for the mobile app and the 
            associated remote services has been produced that identifies 
            potential threats and countermeasures.';
        $requirement->description_level = 6;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04b-Mobile-App-Security-Testing.md#mapping-the-application';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'All security controls have a centralized 
            implementation.';
        $requirement->description_level = 7;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05h-Testing-Platform-Interaction.md#testing-for-insecure-configuration-of-instant-apps-mstg-arch-1-mstg-arch-7';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'There is an explicit policy for how 
            cryptographic keys (if any) are managed, and the lifecycle of 
            cryptographic keys is enforced. Ideally, follow a key management 
            standard such as NIST SP 800-57.';
        $requirement->description_level = 8;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04g-Testing-Cryptography.md#cryptographic-policy';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'A mechanism for enforcing updates of the 
            mobile app exists.';
        $requirement->description_level = 9;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05h-Testing-Platform-Interaction.md#testing-enforced-updating-mstg-arch-9';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'Security is addressed within all parts of 
            the software development lifecycle.';
        $requirement->description_level = 10;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04b-Mobile-App-Security-Testing.md#security-testing-and-the-sdlc';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'A responsible disclosure policy is in place
             and effectively applied.';
        $requirement->description_level = 11;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.1 Architecture, Design and Threat Modelling';
        $requirement->section_level = 1;
        $requirement->description = 'The app should comply wit provacy laws and 
            regulations.';
        $requirement->description_level = 12;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();
    
        /**
         * 
         * V2 - Data Storage and Privacy
         * 
         */
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'System credential storage facilities need 
            to be used to store sensitive data, such as PII, user credentials 
            or cryptographic keys.';
        $requirement->description_level = 1;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#testing-local-storage-for-sensitive-data-mstg-storage-1-and-mstg-storage-2';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data should be stored outside 
            of the app container or system credential storage facilities.';
        $requirement->description_level = 2;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#testing-local-storage-for-sensitive-data-mstg-storage-1-and-mstg-storage-2';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();
        
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data is written to application
             logs.';
        $requirement->description_level = 3;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#testing-logs-for-sensitive-data-mstg-storage-3';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data is shared with third 
            parties unless it is a necessary part of the architecture.';
        $requirement->description_level = 4;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#determining-whether-sensitive-data-is-sent-to-third-parties-mstg-storage-4';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'The keyboard cache is disabled on text 
            inputs that process sensitive data.';
        $requirement->description_level = 5;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#determining-whether-the-keyboard-cache-is-disabled-for-text-input-fields-mstg-storage-5';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data is exposed via IPC 
            mechanisms.';
        $requirement->description_level = 6;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#determining-whether-sensitive-stored-data-has-been-exposed-via-ipc-mechanisms-mstg-storage-6';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data, such as passwords or 
            pins, is exposed through the user interface.';
        $requirement->description_level = 7;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#checking-for-sensitive-data-disclosure-through-the-user-interface-mstg-storage-7';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data is included in backups 
            generated by the mobile opertaing system.';
        $requirement->description_level = 8;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#testing-backups-for-sensitive-data-mstg-storage-8';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'The app removes sensitive data from views 
            when moved to the background.';
        $requirement->description_level = 9;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#finding-sensitive-information-in-auto-generated-screenshots-mstg-storage-9';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'The app does not hold sensitive data in 
            memory longer than necessary, and memory is cleared explicitly after
             use.';
        $requirement->description_level = 10;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#checking-memory-for-sensitive-data-mstg-storage-10';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'The app enforces a minimum 
            device-access-security policy, such as requiring the user to set a 
            device passcode.';
        $requirement->description_level = 11;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05d-Testing-Data-Storage.md#testing-the-device-access-security-policy-mstg-storage-11';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'The app educates the user about the types 
            of personally identifiable information processed, as well as 
            security best practices the user should follow in using the app.';
        $requirement->description_level = 12;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04i-Testing-user-interaction.md#testing-user-education-mstg-storage-12';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'No sensitive data should be stored locally 
            on the mobile device. Instead, data should be retrieved from a 
            remote endpoint when needed and only be kept in memory.';
        $requirement->description_level = 13;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'If sensitive data should be stored locally 
            , it should be encrypted using a key derived from hardware backed 
            storage which requires authentication.';
        $requirement->description_level = 14;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.2 Data Storage and Privacy';
        $requirement->section_level = 2;
        $requirement->description = 'The app\'s local storage should be wiped 
            after an excessive number of failed authentication attempts.';
        $requirement->description_level = 15;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        /**
         * 
         * V3 - Cryptography
         * 
         */
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.3 Cryptography';
        $requirement->section_level = 3;
        $requirement->description = 'The app does not rely on symmetric 
            cryptography with hardcoded keys as a sole method of encryption.';
        $requirement->description_level = 1;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05e-Testing-Cryptography.md#testing-key-management-mstg-storage-1-mstg-crypto-1-and-mstg-crypto-5';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.3 Cryptography';
        $requirement->section_level = 3;
        $requirement->description = 'The app uses proven implementations of 
            cryptographic primitives.';
        $requirement->description_level = 2;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04g-Testing-Cryptography.md#common-configuration-issues-mstg-crypto-1-mstg-crypto-2-and-mstg-crypto-3';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.3 Cryptography';
        $requirement->section_level = 3;
        $requirement->description = 'The app does not use cryptographic protocols 
            or algorithms that are widely considered deprecated for security 
            purposes.';
        $requirement->description_level = 4;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04g-Testing-Cryptography.md#identifying-insecure-andor-deprecated-cryptographic-algorithms-mstg-crypto-4';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.3 Cryptography';
        $requirement->section_level = 3;
        $requirement->description = 'The app does not re-use the same 
            cryptographic key for multiple purposes.';
        $requirement->description_level = 5;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05e-Testing-Cryptography.md#testing-key-management-mstg-storage-1-mstg-crypto-1-and-mstg-crypto-5';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.3 Cryptography';
        $requirement->section_level = 3;
        $requirement->description = 'All random values are generated using a 
            sufficiently secure random number generator.';
        $requirement->description_level = 7;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05e-Testing-Cryptography.md#testing-random-number-generation-mstg-crypto-6';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        /**
         * 
         * V4 - Authentication and Session Management
         * 
         */
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'If the app provides user access to a remote
             service, some form of authentication, such as username/password 
             authentication, is performed at the remote endpoint.';
        $requirement->description_level = 1;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05f-Testing-Local-Authentication.md#testing-confirm-credentials-mstg-auth-1-and-mstg-storage-11';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'If stateful sesion management is used, 
            the remote endpoint uses randomly generated session identifiers to 
            authenticate client requests without sending the user\'s credentials.';
        $requirement->description_level = 2;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-stateful-session-management-mstg-auth-2';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'If stateless token-basesd authentication is
             used, the server provides a token that has been signed using a 
            secure algorithm.';
        $requirement->description_level = 3;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-stateless-token-based-authentication-mstg-auth-3';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'The remote endpoint terminates the 
            existing session when the user log out.';
        $requirement->description_level = 4;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-user-logout-mstg-auth-4';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'A password policy exists and is enforced 
            at the remote endpoint.';
        $requirement->description_level = 5;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-best-practices-for-passwords-mstg-auth-5-and-mstg-auth-6';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'The remote endpoint implements a mechanism 
            to protect against the submission of credentials an excessive 
            amount of times.';
        $requirement->description_level = 6;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-best-practices-for-passwords-mstg-auth-5-and-mstg-auth-6';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'Sessions are invalidated at the remote 
            endpoint after a predefined period of inactivity and access token 
            expire.';
        $requirement->description_level = 7;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-session-timeout-mstg-auth-7';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'Biometric authentication, if any, is not 
            event-bound (i.e. using an API that simply return "true or false"). 
            Instead, it is based on unlocking the keychain/keystore.';
        $requirement->description_level = 8;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x05f-Testing-Local-Authentication.md#testing-biometric-authentication-mstg-auth-8';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();
        
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'A second factor of authentication exists at
             the remote endpoint and the 2DA requirement is consistently enforced.';
        $requirement->description_level = 9;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-two-factor-authentication-and-step-up-authentication-mstg-auth-9-and-mstg-auth-10';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();
        
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'Sensitive transactions require set-up 
            authentication.';
        $requirement->description_level = 10;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-two-factor-authentication-and-step-up-authentication-mstg-auth-9-and-mstg-auth-10';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'The app informs the user of all sensitive 
            activities with their account. Users are able to view a list of 
            devices, view contextual information (IP address, location, etc.), 
            and block specific devices.';
        $requirement->description_level = 11;
        $requirement->is_security_level_1 = false;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = 'https://github.com/OWASP/owasp-mstg/blob/1.1.3-excel/Document/0x04e-Testing-Authentication-and-Session-Management.md#testing-login-activity-and-device-blocking-mstg-auth-11';
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();
        
        $requirement = new Requirement;
        $requirement->checklist_id = 2;
        $requirement->chapter = 'V1: Security Requirements';
        $requirement->chapter_level = 1;
        $requirement->section = 'V1.4 Authentication and Session Management';
        $requirement->section_level = 4;
        $requirement->description = 'Authorization models should be defined and 
            enforced at the remote endpoint.';
        $requirement->description_level = 12;
        $requirement->is_security_level_1 = true;
        $requirement->is_security_level_2 = true;
        $requirement->is_security_level_3 = false;
        $requirement->testing_procedures = null;
        $requirement->cwe = null;
        $requirement->cwe_link = null;
        $requirement->save();

    }
}

<?php

namespace Teguhpermadi\SiakadPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Teguhpermadi\SiakadPackage\Commands\SiakadPackageCommand;

class SiakadPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('siakad-package')
                ->hasMigration('add_column_users_table')
                ->hasMigration('create_userable_table')
                ->hasMigration('create_school_table')
                ->hasMigration('create_teachers_table')
                ->hasMigration('create_data_teachers_table')
                ->hasMigration('create_students_table')
                ->hasMigration('create_data_students_table')
                ->hasMigration('create_academic_years_table')
                ->hasMigration('create_subjects_table')
                ->hasMigration('create_teacher_subject_table')
                ->hasMigration('create_competencies_table')
                ->hasMigration('create_grades_table')
                ->hasMigration('create_student_grades_table')
                ->hasMigration('create_teacher_grades_table')
                ->hasMigration('create_student_competencies_table')
                ->hasMigration('create_exams_table')
                ->hasMigration('create_attendances_table')
                ->hasMigration('create_extracurriculars_table')
                ->hasMigration('create_teacher_extracurriculars_table')
                ->hasMigration('create_student_extracurriculars_table')
                ->hasMigration('create_dimentions_table')
                ->hasMigration('create_elements_table')
                ->hasMigration('create_sub_elements_table')
                ->hasMigration('create_targets_table')
                ->hasMigration('create_values_table')
                ->hasMigration('create_sub_values_table')
                ->hasMigration('create_projects_table')
                ->hasMigration('create_project_themes_table')
                ->hasMigration('create_project_targets_table')
                ->hasMigration('create_project_students_table')
                ->hasMigration('create_project_notes_table')
                ->hasMigration('create_project_coordinators_table')
                // ->hasMigration('create_incomes_table')
                // ->hasMigration('create_occupations_table')
                // ->hasMigration('create_educations_table')
                // ->hasMigration('create_religions_table')
            // ->hasConfigFile()
            // ->hasViews()
                ->hasCommand(SiakadPackageCommand::class);
    }
}

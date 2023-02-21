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
                ->hasMigration('create_school_table')
                ->hasMigration('create_teachers_table')
                ->hasMigration('create_students_table')
                ->hasMigration('create_academic_years_table')
                ->hasMigration('create_subjects_table')
                ->hasMigration('create_teacher_subject_table')
                ->hasMigration('create_competencies_table')
                ->hasMigration('create_grades_table')
                ->hasMigration('create_classes_table')
                ->hasMigration('create_incomes_table')
                ->hasMigration('create_occupations_table')
                ->hasMigration('create_educations_table')
                ->hasMigration('create_religions_table')
            // ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_siakad-package_table')
                ->hasCommand(SiakadPackageCommand::class);
    }
}

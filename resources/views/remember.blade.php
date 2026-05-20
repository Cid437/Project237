@section('body')

{{--

    Create Laravel file
        composer create-project laravel/laravel projName
    Create a controller
        php artisan make:controller controllerName
        php artisan make:controller controllerName --resource
        php artisan make:controller controllerName --api    
    Create a model
        php artisan make:model modelName
    Create a view
        php artisan make:view viewName
    create a migration
        php artisan make:migration create_tablename_table
    run migration
        php artisan migrate
    run migration with seeding
        php artisan migrate --seed
    run seeding
        php artisan db:seed
    run migration with fresh
        php artisan migrate:fresh
    run migration with fresh and seeding
        php artisan migrate:fresh --seed
    run server
        php artisan serve    

    If not api route
        php artisan install:api

    when cloning this repository
        composer install
        cp .env.example .env
        php artisan key:generate
        php artisan migrate --seed
--}}

@endsection
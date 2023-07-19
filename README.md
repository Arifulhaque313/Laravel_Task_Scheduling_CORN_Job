## About Task Scheduling 

Its Very Useful for web applications. Few requirements are sending Email the clients Monthly then You have to implement this using Task Scheduling or the cron Job

1. app/console/karnel
2. Then you get a function schedule()
3. You have to make Some command using  this ==> php artisan make:command TestCommand
4. after that you get this file in app/console/commands/ TestCommand.php
5. You can modify the command name ==>  protected $signature = 'app:test-command';
6. Now you have to write that you want in the handle function in TestCommand.php
7. After in app/console/karnel ==> Schedule function you have to call the Comman 
8. $schedule->call(function () {
            info('Hello World');
        })->everyMinute()->runInBackground();

        $schedule->command('app:test-command')->everyMinute()->runInBackground();
9. Finally run the Schedule by using this ==> PHP Artisan schedule:work


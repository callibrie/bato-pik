# bato-pik
Fun: Laravel Practice using Rock-Paper-Scissors

### Deployment:
1. After cloning the .env file must be set up
..* create a .env file by copying the .env.example file
..* run `php artisan key:generate`
2. To get the images, the symlink between public and storage must be set up
..* navigate to the public folder, if there is a storage folder it needs to be deleted by `rm storage`
..* run `php artisan storage:link`

### Running:
..* Navigate to the root folder and run `php artisan serve`
..* Access via your browser in `localhost:8000`

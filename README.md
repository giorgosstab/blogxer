
# Blogger CodeIgniter 3

Bootstrap 4 blog with framework CodeIgniter 3 and Admin Panel CMS

### Download - prerequisites - installing

Download Project

```
git clone https://github.com/giorgosstab/blogxer
```

Install composer dependencies : 
```
composer install
composer dump-autoload
```

Run the project :
```
php -S localhost:8000
```

### Migration Commands

Run Commands:
```
php index.php migrate
or
php index.php migrate index
```
> index() : The main migration file creation method.

```
php index.php migrate current
```
> current() : Migrates to the currently set migration version.

```
php index.php migrate latest
```
> latest() : Migrates to the very latest migration version.

```
php index.php migrate rollback
```
> rollback($version = 0) : Migrates to the '$version' version.

```
php index.php migrate reset
```
> reset($rollback = TRUE) : Deletes all migration files, Resets the migrations 

```
php index.php migrate reset
```
> reset($rollback = TRUE) : Deletes all migration files, Resets the migrations table and calls $this::rollback(0) if $rollback is set to TRUE.

```
php index.php migrate last
```
> last() : Rollbacks the migrations one step back.

```
php index.php migrate info
```
> info() : A table showing migrations information.

```
php index.php migrate help
```
> help() : Displays a help section.

### Versioning

We use git for versioning.

<!-- ### Examples -->
<!-- <img src="github/images/review-1.png" width=300;/> 
<img src="github/images/review-2.png" width=300;/> -->

## Authors

 - George Tsachrelias [@giorgosstab](https://twitter.com/giorgosstab) – g.tsaxrelias@hotmail.com
 - *Initial work* - (https://github.com/giorgosstab/)

# semilleros

`cp .env.example .env`

`php artisan key:generate`

`php artisan serve`


## Create the database (MySQL)

**check your .env file**

* DB_DATABASE: semilleros
* DB_USERNAME: root
* DB_PASSWORD: ""

## Create the first controller

`php artisan make:controller <FirstNamesController>`
**plural**

## Create the first model

`php artisan make:model <first_model_name>`
**singular**

## create routes

for index (get all the table rows) in

`routes/web.php`

add new line with the route

for forms -> use POST
for views that retrieves data from database -> use GET

`Route::get('/<model-in-plural>', '<NamesController>@<methodName>');`

**show** -> it's used for display the data of one registry of a model

**index** -> it's used for display all the table's data

**create/new** -> it's used to display the form to create a new registry.

**edit** -> it's used to display a view for edit a registry

## create migration

`php artisan make:migration <my_migration_name_very_specific>`

**ex:**

`php artisan make:migration create_school_students_table --create=school_students`

in `database/<migration-name>` add your columns and features

`$table->data_type('column_name');`

for execute your migrations

`php artisan migrate`

for references between tables

```php
$table->foreign('<foreign_key>')->references('<id_referenced_table>')->on('referenced_table');
```


* member -> Jesús
* academic_program -> Jesús
* faculty -> Lina
* event -> Lucho
* project -> Stiven
* group -> Sebastian
* research_center -> Roberto
* project_audit -> Juan

## Create your entity's views

### Create the "new" view for your entity

Go to `resources/views/<your-entity-folder>`

create a view called `new.blade.php`

and just copy the content of `resources/views/sectionals/new.blade.php` and paste it in `resources/views/<your-entity-folder>/new.blade.php`

In your `new.blade.php` take a look to this code

```html
<div class="input-field">
  {{ csrf_field() }}
  <input type="text" name="name" class="form-control" placeholder="Nombre">
</div>
```

You have to change the following attributes in the <input /> tag:

`name="<theColumnNameOfYourEntityInCamelCaseLikePhpOrJavaVariables>"`

`placeholder="<The name of the column / field in spanish (just write normal, like this)>"`

**Repeat each div with all inside for each field, for example:**

```html
<div class="input-field">
  {{ csrf_field() }}
  <input type="text" name="id" class="form-control" placeholder="Id">
</div>

<div class="input-field">
  {{ csrf_field() }}
  <input type="text" name="name" class="form-control" placeholder="Nombre">
</div>
.
.
.

```

### Create the "new" function/action in your entity controller

Go to your entity controller, `app/Http/Controllers/<YourEntitiesController>` and create a new function called `new<EntityName>`, or just copy and paste the `newSectional` function from `SectionalsController` and change that name by your entity controller name as explained before.

You need to change it like this:

```php
public function new<EntityName>()
{
  return view('<name_of_your_entity_views_folder>.new', []);
}
```

With that, you will be able to display the view that contains your the creation form.

### Add the route for display the form of your entity

Go to `routes/web.php` and add a line like this:

```php
Route::get('/<your_entity_name_in_plural_and_separated_with_underscores>/new', '<YourControllerNames>Controller@new<YourEntityNameInSingularAndUpperCamelCase>');
```

It allows you to be able to navigate in `/<your_entity_names/new` and point it to your **new** function in your controller.

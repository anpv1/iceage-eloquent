# iceage-eloquent
An example of using IceAge together with Laravel Eloquent ORM

### Installation
* make sure composer and node/npm are installed your system.
* clone this repository.
* run: `composer install`.
* go to the public folder and run: `npm install`.
* edit file `app/.env` and set correct parameters for database connection.
* create a test table `test_tbl(id,title,description,created)` and insert some records.
* test with the URL: `http://your-host/hello/:id` where `:id` the the id of the record in test_tbl table.

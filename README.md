## Install

php artisan migrate:fresh --seed
inisiasi data sudah ada pada seeder

## GET

http://127.0.0.1:8000/api/keluarga

## POST

http://127.0.0.1:8000/api/keluarga

{
"nama": "Aditya",
"jenis_kelamin": "L",
"id_orangtua": "2"
}

## PUT

http://127.0.0.1:8000/api/keluarga

{
"id": 15,
"nama": "Pangestu",
"jenis_kelamin": "P",
"id_orangtua": "3"
}

## DELETE

http://127.0.0.1:8000/api/keluarga/id

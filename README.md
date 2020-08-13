<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
# Laravel eCommerce API

This Project is based on Laravel & Laravel Passport,
Practising eCommerce API.

## Installation


```bash
> git clone https://github.com/javedbaloch4/laravel-ecommerce-api.git
> composer install
> cp .env.example .env // This will is make copy of env. 

```
* copy command on windows & cp for Linux 
* Setup .ev file and add DB credt.

```bash
> php artisan migrate --seed
> php artisan passport:install
> php artisan make:auth
> php artisan key:generate // Generate if not exists in .env
> php artisan serve

```

```
Register a user
```

## Postman Instructions

### Config OAuth

```json
POST Req : http://localhost:8000/oauth/token

Headers: 
   Content-type : application/json
   Accept: application/json

Body:
{
    "grant_type" : "password",
    "client_id" : "2",
    "client_secret" : "copy key from table oatuh_client > secret",
    "username" : "Reg email", 
    "password" : "Reg Password"
}

```
* This will return a token add this in `Postman` env var or paste in Authorization value.

### Headers
```json
Headers will be almost common everywhere, manuallay disable auth val.
Headers: 
   Content-type : application/json
   Accept: application/json
   Authorization: {{auth}} from postman env var.
 
```

## APIs
### Products APIs

##### All Products
```bash
GET http://localhost:8000/api/products
```

##### Show Product
```bash
GET http://localhost:8000/api/products/33
```

##### Edit Product
```bash
PUT http://localhost:8000/api/products/31

Body
{
    "name" : "Iphone 9c Update",
    "detail" : "Best new phone for charging ",
    "price" : "900",
    "stock" : "5",
    "discount" : "10"
}
```

##### Delete Product
```bash
DELETE http://localhost:8000/api/products/31
```


### Reviews APIs

##### Show A Review
```bash
GET http://localhost:8000/api/products/32/reviews
```

##### Create A Review
```bash
POST http://localhost:8000/api/products/39/reviews/139
```



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.


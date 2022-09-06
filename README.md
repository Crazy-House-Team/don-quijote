# DON-QUIJOTE
 
Aplicación web para gestionar los eventos de la Asociación Cultural Don Quijote.

 
## Vistas
  
<img width="1198" alt="home" src="https://user-images.githubusercontent.com/63967914/188569421-883f1364-f669-4e5f-ba05-f6627297cedb.png">
<img width="1198" alt="eventos-pasados" src="https://user-images.githubusercontent.com/63967914/188569499-2c101c08-3300-4850-ac04-5ede584e67a3.png">
<img width="1197" alt="mis-eventos" src="https://user-images.githubusercontent.com/63967914/188569619-d4ed763b-6be9-4c7e-834d-ba17d2e37f9c.png">
<img width="1198" alt="admon-panel" src="https://user-images.githubusercontent.com/63967914/188569780-258e369e-428f-4f31-9549-6121b37df6e2.png">
<img width="572" alt="nuevo-evento" src="https://user-images.githubusercontent.com/63967914/188569718-f5609103-561a-4651-aab6-d1c981ee9224.png">
<img width="575" alt="modificar-evento" src="https://user-images.githubusercontent.com/63967914/188569820-eed9bffb-a230-416b-94ce-9bdffe77dafa.png">

## Requisitos funcionales

- En portada la aplicación tendrá un slider con las masterclasses destacadas. éstas serán seleccionables por el administrador.

- En portada habrá una lista paginada con todos los eventos ordenados del más cercano al más lejano en el tiempo.
- Los eventos incluirán como mínimo: título, fecha/hora, número máximo de participantes, descripción y una imagen.
- Los eventos pasados se deben mantener en la lista pero identificables como no disponibles.
- Los usuarios deberán registrarse para apuntarse a un evento. Una vez apuntados no podran volver a hacerlo.
- Al apuntarse a un evento recibirán un email (empresarial - html ) con el link (zoom, meets, etc..) en donde se va a realizar, así como recordando el  título del evento, la hora y el día.
- Los usuarios podrán ver en una página la lista de los eventos a los que están registrados.
- El administrador podrá hacer CRUD de los eventos.
- Cuando un evento esté lleno (máximo número de participantes) nadie podrá registrarse.

## Requisitos no funcionales:

- La web deberá estar en deploy aunque esté en desarrollo.
- Todos los requisitos y casos de usuario deberán estar testeados (tests de
aceptación)
- Se deberá usar Laravel.
- El envío de el email se deberá hacer usando un sistema de colas.
- Para el frontend se deben usar componentes de blade y/o Liveware o Js.


# Tecnologías y herramientas utilizadas 

- **Lenguajes de programación:**
  - PHP 
  - Javascript
  - HTML
  - CSS

- **Frameworks**
    - Laravel 9
  
- **Bibliotecas externas:**
  - Faker-php

- **Testing:**
  - PHPUnit
  
- **Servidor y Base de datos:**
  - Apache HTTP Server
  - MySQL
  
- **Gestor de dependencias:**
  - Composer
  
# Requisitos técnicos

- PHP ^8.0.1
- Composer ^1.10.15
- Laravel ^9.19

# Instalación


Clonar el repositorio: `https://github.com/Crazy-House-Team/don-quijote`


Instalar dependencias: 
    
```
composer install
npm install
```


## Iniciar app

```
php artisan serve
npm run dev
```

## Lanzar Tests

`php artisan test`
  
# Autores
- Taoufik Mensi
- Beatriz Trabanco
- Mario Rubio
- Mario Jiménez
- Sergio Fernández

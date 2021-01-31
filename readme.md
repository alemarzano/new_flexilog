# Flexilog 2021

Rediseño e impletación del nuevo estilo para Flexilog



## Comenzando 🚀


Mira **Deployment** para conocer como desplegar el proyecto.



### Pre-requisitos 📋

Un servidor Apache para correr la aplicación de modo local y Node.js para procesar Tailwindcss y Sass.

```
npm install -y
```


### Instalación 🔧

Para correr en modo local basta con clonar el proyecto y colocarlo en la carpeta referida del servidor (XAMPP o WAMP).

Para ponerlo en producción se debería cambiar [base_url] por la dirección del sitio. Esto se hace desde:

> \repositorio_clonado\application\config\config.php

```
$config['base_url'] = 'http://localhost/flexilog';
```

En caso de necesitar hacer cambios en los estilos dirigirse a assets\css e instalar Node (en la misma ruta) utilizando las depedencias de package.json

>\repositorio_clonado\ assets\css>

```
npm install -y
```


## Ejecutando las pruebas ⚙️

Para buildear tailwindcss:
>\repositorio_clonado\assets\css>

```
 npm run build
```

```
> flexilog@1.0.0 build \repositorio_clonado\assets\css
> npm run tailwind && npm run autoprefixer


> flexilog@1.0.0 tailwind \repositorio_clonado\assets\css
> npx tailwindcss build app.css -o styletw.css


   tailwindcss 2.0.2

   🚀 Building: app.css

   ✅ Finished in 6.97 s
   📦 Size: 3.3MB
   💾 Saved to styletw.css


> flexilog@1.0.0 autoprefixer \repositorio_clonado\assets\css
> postcss styletw.css -u autoprefixer --no-map -o styletw.css
```
Para prepocesar sass:

>\repositorio_clonado\assets>

```
sass --watch sass/styles.scss css/styles.css
```

## Aclaración  :exclamation:

La carpeta docs solo contiene vistas html que fueron usadas para validar el maquetado. 

>\repositorio_clonado\docs>

No es necesaria para la puesta en producción peroa fines prácticos sirve para comparar vistas si es necesario.
A la misma se puede acceder en [esta url](https://alemarzano.github.io/new_flexilog/) 



## Construido con 🛠️

* [Codeigniter](https://www.codeigniter.com/userguide3/index.html) - Framework PHP
* [TailwindCSS](https://tailwindcss.com/docs) - Librería CSS
* [Sass](https://sass-lang.com/guide) - Preprocesador CSS


## Versionado 📌

Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/alemarzano/new_flexilog/commits/master).

## Autores ✒️


* **Alejandro Marzano** - *Maquetado* - [alemarzano](https://www.linkedin.com/in/ajmarzano/)
* **Diego Crescimbeni** - *Diseño* - [ponidiseña](https://www.linkedin.com/in/diego-crescimbeni/)




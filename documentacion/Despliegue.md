# Proceso seguido para delplegar en vesta

1. Subimos le proyecto terminado en local a git

2.- 
   
2. En vesta clonamos el proyecto
2.1 En la carpeta public_html borro todo
2.2 clono el proyecto
   git clone https://github.com/MAlejandroR/feria.git

3. Creo el fichero .env (lo copio ) y actualizo
   <code>
   APP_NAME=Feria
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=http://feria.infenlaces.com
   </code>
   
 modifico el fichero package.json
quitando watch
<pre>
 "dev": "npm run development -- --watch",
</pre>

Por 
<pre>
 "dev": "npm run development",
</pre>

3. Ejecutamos
   <code>
   npm run production
   </code>
   Como este comando me da fallo ejecuto primero
<pre>
npm install laravel-mix@latest
</pre>
Después vuelvo a ejecutar el comando  y no da error

<code>
   composer install 
   
   composer dumpautoload
</code>

5. Ahora movemos todo el contenido de la carpeta public al directorio raiz
   (o sea al document root en mi caso /home/feria/web/feria,infenlaces,com/public_html )

No deja mover storage, ni .htaccess, no lo hago y borro el directorio.
He tenido un problema y he perdido el directorio, lo copio del directorio local
Problea ya que había generado el app.css en producción, lo volveré a hacer


6. Modifico el fichero index.php
   
 $app = require_once __DIR__.'/../bootstrap/app.php';
por
 $app = require_once __DIR__.'/feria/bootstrap/app.php';

Así en todos los casos.
Reviso el directorio storage, veo que no tiene ficheros, 
Copio la carpeta public de app.
Creamos el enlace simbólico de storage a public
<pre>
ln -s ./feria/storage/app/public/ storage
</pre>
7. copio el fichero .htaccess con el siguiente contenido

<pre>
AuthUserFile /home/feriaempleo/accesos/accesos
AuthName "Ingresar"
AuthType Basic
require user feria
<IfModule mod_rewrite.c>
<IfModule mod_negotiation.c>
Options -MultiViews
</IfModule>

RewriteEngine On

# Redirect Trailing Slashes...
RewriteRule ^(.*)/$ /$1 [L,R=301]

# Handle Front Controller...
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
</IfModule>
</pre>

8. Vamos a app/providers
   y añadimos en el método register
   
   $this->app->bind('path.public',function(){
   return'/home/feriaempleo/web/feria.infenlaces.com/public_html';
   });

9. Se empiezan a producir errores. 
   En el primer intento no se visualiza nada
   El servidor da un error 500, pero no veo nada en el fichero de configuración
   
    1. Actualizo la base de datos






   


   

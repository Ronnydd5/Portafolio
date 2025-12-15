# Usamos una imagen base ligera de Nginx para servir archivos estáticos
FROM nginx:alpine

# Eliminamos la página de inicio predeterminada de Nginx
RUN rm -rf /usr/share/nginx/html/*

# Copiamos todo el contenido de nuestra carpeta actual (Web CompuStore)
# al directorio de Nginx.
COPY . /usr/share/nginx/html

# Nginx se expone en el puerto 80 por defecto, lo cual es manejado
# automáticamente por Dokku.

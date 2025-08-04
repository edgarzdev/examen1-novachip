# examen1-novachip
Proyecto Tienda De innovación tecnologia
# Desarrollado por
Edgar Ramirez Lopez

# 📦 API de Productos con Marcas y Autenticación

Este proyecto es una API RESTful desarrollada en **Laravel 12** que permite gestionar productos relacionados con marcas. Incluye autenticación de usuarios mediante tokens, CRUD completo de productos y asociación con una tabla de marcas.

---

## 🚀 Tecnologías utilizadas

- PHP 8.x
- Laravel 12
- MySQL
- Laravel Sanctum (autenticación)
- Postman (para pruebas)

---

## ⚙️ Instalación del proyecto

1. Clona el repositorio:
   ```bash
   git clone https://github.com/edgarzdev/examen1-novachip.git
   cd tu-proyecto
   ```

2. Instala dependencias:
   ```bash
   composer install
   ```

3. Crea archivo de entorno: (de acuerdo al env de ejemplo)

4. Configura tu base de datos en el archivo `.env`:
   ```env
   DB_DATABASE=api_productos
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Ejecuta las migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```

6. Levanta el servidor:
   ```bash
   php artisan serve
   ```

---
## 🔐 Autenticación (Laravel Sanctum)

### Registro
`POST /api/register`

**Body:**
```json
{
  "name": "Juan Pérez",
  "email": "juan@example.com",
  "password": "12345678"
}
```

### Login
`POST /api/login`

**Body:**
```json
{
  "email": "juan@example.com",
  "password": "12345678"
}
```

**Respuesta:**
```json
{
  "user": {
    "id": 1,
    "name": "Juan Pérez"
  },
  "token": "eyJ0eXAiOiJKV1QiLC..."
}
```

Agrega el token en tus peticiones:
```
Authorization: Bearer TU_TOKEN
```

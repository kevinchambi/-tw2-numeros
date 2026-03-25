# Proyecto: Sistema basado en OpenCode

## 📌 Descripción
Este proyecto será generado utilizando OpenCode siguiendo buenas prácticas de desarrollo, aplicando Programación Orientada a Objetos (POO) y una estructura modular basada en archivos separados.

---

## 🧱 Arquitectura del Proyecto

El sistema estará organizado en múltiples archivos, donde cada clase tendrá una única responsabilidad.

### Estructura sugerida:

/src
│── /models
│   └── Usuario.php
│
│── /controllers
│   └── UsuarioController.php
│
│── /services
│   └── UsuarioService.php
│
│── /config
│   └── Database.php
│
│── index.php

---

## ⚙️ Reglas de Desarrollo

### 1. Programación Orientada a Objetos (POO)
- Cada entidad debe representarse como una clase.
- Uso de encapsulamiento (atributos privados y métodos públicos).
- Separación clara entre lógica de negocio, controladores y acceso a datos.

### 2. Archivos Separados
- Cada clase debe estar en su propio archivo.
- No mezclar lógica en un solo archivo.
- Uso de namespaces (opcional pero recomendado).

### 3. Restricciones de Código
- ❌ No utilizar `switch`
- ❌ No utilizar `break`
- ❌ No usar bucles infinitos (`while(true)`, `for(;;)`)

- ✅ Usar estructuras como:
  - `if / else`
  - `foreach`
  - `for` con límites definidos

---

## 🔄 Flujo del Sistema

1. El usuario interactúa con `index.php`
2. Se llama al controlador correspondiente
3. El controlador usa servicios
4. Los servicios interactúan con los modelos
5. Los modelos gestionan los datos

---

## 🧪 Buenas Prácticas

- Validar datos de entrada
- Manejo de errores con `try-catch`
- Código limpio y legible
- Reutilización de clases

---

## 🚀 Objetivo

Generar un sistema escalable, mantenible y claro, respetando las restricciones dadas y utilizando buenas prácticas de desarrollo moderno.
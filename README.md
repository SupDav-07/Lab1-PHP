# Laboratorio # 1

📅 Fecha: [11/08/2026]

## 📄 Contenido del Repositorio

Este repositorio es un laboratorio compuesto por un conjunto de varios códigos desarrollados en PHP y HTML, correspondientes a la unidad "Introducción al Lenguaje de Programación PHP". Incluye ejercicios de impresión de cadenas, manejo de variables, formularios, operaciones matemáticas, y una calculadora básica.

## 🛠️ Tecnologías Utilizadas

- **Lenguaje:** PHP 8.3.28
- **Marcado:** HTML5, CSS3
- **Servidor local:** WampServer 3.4.0 (Apache 2.4.65)
- **Base de datos:** MySQL / MariaDB (incluidas en WampServer)
- **Editor:** Visual Studio Code
- **Control de versiones:** Git / GitHub

## 🖥️ Capturas de Pantalla y Problemas

### Interfaz Principal



- **Práctica 1 - Iniciación (`practica1.php`):** imprime una cadena de texto simple ("Hello World!") usando `echo`.
- <img width="790" height="300" alt="image" src="https://github.com/user-attachments/assets/c605d606-e883-4035-bd7f-c524795751b1" />


- **Práctica 3 - Variables (`practica3.php`):** imprime una cadena combinando texto fijo en HTML con el valor de variables, usando interpolación de variables en PHP.
- <img width="770" height="395" alt="image" src="https://github.com/user-attachments/assets/44a3e187-c092-447b-8c87-19d71418b213" />


- **Verificación de instalación (`info.php`):** ejecuta `phpinfo()` para confirmar que PHP está correctamente instalado y configurado en el servidor.
- <img width="1650" height="1407" alt="image" src="https://github.com/user-attachments/assets/b86b51a3-a0e0-476e-979c-1ad3d5cade5b" />

- **Laboratorio #1 - Conversor de pulgadas a centímetros (`pulgadas.html` / `pulgadas.php`):** formulario que recibe una cantidad de pulgadas y calcula su equivalente en centímetros (1 pulgada = 2.54 cm).
- <img width="795" height="672" alt="image" src="https://github.com/user-attachments/assets/754d5989-8561-40b4-b16d-91aafe6659b6" />

- **Problema #2 - Calculadora (`calculadora.html` / `calculadora.php`):** formulario que realiza operaciones de suma, resta y multiplicación entre dos números, con redondeo configurable de decimales usando `round()`.
- <img width="917" height="762" alt="image" src="https://github.com/user-attachments/assets/6704f42b-b307-46b2-ad0c-2a056b1f64c0" />

- **Formulario de nombre y edad (`formulario.html` / `pagina2.php`):** formulario que recibe un nombre y una edad, y valida si la persona es mayor de edad.
<img width="760" height="737" alt="image" src="https://github.com/user-attachments/assets/deff621b-b0bc-4310-af57-c285a64cfa70" />

- **Área y perímetro de un círculo (`circulo.html` / `circulo.php`):** formulario que recibe el radio de una circunferencia y calcula su área y perímetro.
<img width="805" height="1160" alt="image" src="https://github.com/user-attachments/assets/4f1fbfde-e080-4b02-85b6-2772ec587a3a" />

## 📁 Estructura de Carpetas o Directorios

```
laboratorio1/
├── estilos.css        # Hoja de estilos compartida por todos los formularios
├── practica1.php       # Práctica 1: impresión de cadena simple
├── practica3.php       # Práctica 3: variables y concatenación de cadenas
├── info.php             # Verificación de instalación de PHP
├── pulgadas.html        # Formulario: conversión de pulgadas a centímetros
├── pulgadas.php          # Procesa la conversión de pulgadas a centímetros
├── calculadora.html     # Formulario: calculadora
├── calculadora.php       # Procesa las operaciones de la calculadora
├── formulario.html      # Formulario: nombre y edad
├── pagina2.php            # Procesa nombre y edad, valida mayoría de edad
├── circulo.html          # Formulario: radio de la circunferencia
├── circulo.php             # Calcula área y perímetro de la circunferencia
└── README.md             # Documentación del proyecto
```

## ▶️ Instrucciones de Ejecución / Uso

1. Clonar el repositorio.
2. Copiar la carpeta del proyecto dentro de `C:\wamp64\www\` (o la carpeta `htdocs` de tu servidor local).
3. Iniciar WampServer y verificar que Apache y MySQL estén activos (ícono en verde).
4. Abrir el navegador y acceder a cada archivo, por ejemplo:
   - `http://localhost/laboratorio1/pulgadas.html`
   - `http://localhost/laboratorio1/calculadora.html`
   - `http://localhost/laboratorio1/formulario.html`
   - `http://localhost/laboratorio1/circulo.html`
   - `http://localhost/laboratorio1/practica1.php`
   - `http://localhost/laboratorio1/practica3.php`
   - `http://localhost/laboratorio1/info.php`

## 👤 Autor y Contexto

- **Nombre:** René
- **Institución:** Universidad Tecnologica de Panamá (UTP)
- **Fecha de Realización:** [11/08/2026]

## 🔗 Referencias

- Diapositivas del curso: "Introducción al Lenguaje PHP"
- Documentación oficial de PHP: https://www.php.net/manual/es/

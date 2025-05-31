# Proyecto Transversal - Consultorio médico
<a>https://img.shields.io/badge/lang-en-blue</a>
<a href="https://github.com/cristiansarbu/proyecto-transversal"><img src="https://img.shields.io/badge/lang-en-blue"></a>


Aplicación CRUD MVC hecha en PHP como proyecto transversal para primero de Grado Superior de Desarrollo de Aplicaciones Web. Primer contacto con PHP, MVC y Bootstrap 5.

## Descripción y funcionalidad mínima
Una aplicación que facilita la reserva de citas para pacientes en consultorios médicos.

Los pacientes sin registrar pueden ver y buscar la lista de médicos y su disponibilidad. Los médicos, una vez registrados, pueden crear las citas y asignarlas a los pacientes registrados. También pueden modificar y eliminar las citas creadas por ellos. Los pacientes pueden registrarse y acceder a sus citas y su detalle.

## Funcionalidades
- **Usuarios y roles:** Usuario no registrado, paciente registrado, médico o administrador.
- **Citas:** Crear, actualizar, ver y eliminar citas. (Médico).
- **Formularios de contacto:** Crear (Paciente), ver y eliminar (Médico).
- **Gestión de médicos:** Crear (Administrador). 
- **Disponibilidad de médicos:** Ver (Usuarios no registrados). 
- **Paginación de elementos**
- **Validación CRUD** client-side con JavaScript y server-side con PHP

## Uso

 1. Registrarse como paciente.
 2. Iniciar sesión.
 3. Ir a "Médicos", seleccionar médico, ver disponibilidad y solicitar cita.
 4. Rellenar formulario de contacto y enviar.
 5. El médico lee el formulario de contacto y crea la correspondiente cita.
 6. La cita creada aparece en "Mis Citas".
 7. Para cambios o cancelación de la cita, contactar con el médico.
 8. Tras la cita, el médico la elimina y desaparece de "Mis Citas".

## Mejoras / Bugs

 - Interfaz gráfica sufre cambios inesperados y no muestra la información correctamente en dispositivos móviles y tablets.
 - Permitir al usuario seleccionar la hora deseada directamente desde la vista de horas disponibles y crear el formulario de contacto a partir de esa hora.
 - Permitir al administrador tener un control CRUD total sobre la base de datos (eliminar médicos, actualizar médicos, añadir pacientes, actualizar pacientes, eliminar pacientes, modificar citas y formularios, etc.)
 - Implementar pruebas
 - Diagramas de arquitectura, actividad, casos de uso, clases, etc.

## Despliegue
Para desplegar el proyecto con Docker, utilizar los siguientes comandos:
1. Primero, clonar el repositorio:
	```git
	git clone https://github.com/cristiansarbu/proyecto-transversal.git
	``` 
2. La imagen de Apache con PHP se obtiene automáticamente desde el registro de contenedores de este repositorio mediante el docker-compose. Arrancar los contenedores:
	```docker
	docker compose up
	```
3. La pagina ya está disponible y se puede acceder en: http://localhost/ProyectoTransversal/



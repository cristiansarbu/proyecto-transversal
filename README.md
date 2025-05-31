# Proyecto Transversal - Consultorio médico
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


# ---------------------------------------------------------------


# Cross-Curricular Project - Medical Clinic
Aplicación CRUD MVC hecha en PHP como proyecto transversal para primero de Grado Superior de Desarrollo de Aplicaciones Web. Primer contacto con PHP, MVC y Bootstrap 5.

A CRUD MVC application built in PHP as a cross-curricular project for the first year of the Higher Degree in Web Application Development. Made as a first experience with PHP, MVC development and Bootstrap 5.

## Description and Minimum Functionality
Application that facilitates appointment booking medical clinic patients.

Unregistered patients can view and search the list of doctors as well as their availability. Once registered, the doctors can create appointments and assign them to reigstered patients. They can also modify and delete appointments created by them. Patients can register and access their appointment and their details.

## Features
- **Users and roles:** Unregistered user, registered patient, doctor, or administrator. 
- **Appointments:** Create, update, view, and delete appointments (Doctor). 
- **Contact forms:** Create (Patient), view and delete (Doctor). 
- **Doctor management:** Create (Administrator). 
- **Doctor availability:** View (Unregistered users). 
- **Element pagination** 
- **CRUD validation:** client-side with JavaScript and server-side with PHP.

## Uso
1. Register as a patient. 
2. Log in. 
3. Go to "Doctors," select a doctor, view availability, and request an appointment. 
4. Fill out the contact form and submit. 
5. The doctor reads the contact form and creates the corresponding appointment. 
6. The created appointment appears in "Mis Citas" 
7. For changes or cancellation of the appointment, contact the doctor. 
8. After the appointment, the doctor deletes it and it disappears from "Mis Citas"

## Mejoras / Bugs

 - Graphical interface suffers unexpected changes and does not display information correctly on mobile devices and tablets.
 - Allow the user to select the desired time directly from the available hours view and create the contact form with that selected time.
 - Allow the adminsitrator to have full CRUD control over the database (delete doctors, update doctors, add patients, update patients, delete patients, update appointments and contact forms, etc.)
 - Implement tests
 - Architectural representation, UML diagram, use cases, class diagrams, etc.


## Deployment
To deploy the project with Docker, use the following commands:
1. First, clone the repository:
	```git
	git clone https://github.com/cristiansarbu/proyecto-transversal.git
	``` 
2. The Apache and PHP image is automatically obtained from this repository's container registry with docker-compose. Start the containers:
	```docker
	docker compose up
	```
3. The page is now available and can be accessed at: http://localhost/ProyectoTransversal/



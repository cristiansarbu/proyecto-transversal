# Cross-Curricular Project - Medical Clinic
<a href="https://github.com/cristiansarbu/proyecto-transversal/blob/master/README.es.md"><img src="https://img.shields.io/badge/lang-es-yellow"></a>
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



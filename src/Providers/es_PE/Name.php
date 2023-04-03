<?php

namespace LilPecky\RandomPersonGenerator\Providers\es_PE;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aarón", "Adrián", "Adán", "Agustín", "Alan", "Alberto", "Alejandro", "Alex", "Alexander", "Alonso", "Andrés", "Anthony", "Antonio", "Armando", "Arturo", "Aurelio", "Axel", "Bautista", "Benjamín", "Bernardo",
        "Bruno", "Camilo", "Carlos", "Christian", "Christopher", "Claudio", "Cristian", "Cristóbal", "César", "Damián", "Daniel", "Dante", "David", "Diego", "Diego Alejandro", "Dylan", "Eduardo", "Elías", "Emiliano", "Emilio",
        "Emmanuel", "Enrique", "Ernesto", "Esteban", "Ezequiel", "Facundo", "Federico", "Felipe", "Fernando", "Francisco", "Franco", "Gabriel", "Gael", "Gastón", "Gerardo", "Giancarlo", "Gianfranco", "Giovanni", "Gonzalo", "Guillermo",
        "Gustavo", "Hidalgo", "Hipólito", "Horacio", "Hugo", "Héctor", "Ian", "Ignacio", "Isaac", "Ivan", "Jacobo", "Jaime", "Javier", "Jerónimo", "Jesús", "Joaquín", "Jorge", "Jorge Luis", "Joshua", "Josué",
        "José", "Juan", "Juan David", "Juan Diego", "Juan Esteban", "Juan José", "Juan Manuel", "Juan Martín", "Juan Pablo", "Juan Sebastián", "Julio", "Julián", "Kevin", "Lautaro", "Leonardo", "Lorenzo", "Lucas", "Luciano", "Luis", "Manuel",
        "Marco", "Marcos", "Mario", "Martín", "Mateo", "Matthew", "Matías", "Mauricio", "Max", "Maximiliano", "Miguel", "Miguel Ángel", "Máximo", "Nahuel", "Nicolás", "Omar", "Pablo", "Paolo", "Patricio", "Pedro",
        "Percy", "Rafael", "Ramón", "Raúl", "Renato", "Ricardo", "Roberto", "Rodrigo", "Rolando", "Román", "Rubén", "Salvador", "Samuel", "Santiago", "Santino", "Sebastián", "Sergio", "Simón", "Teodoro", "Thiago",
        "Tomas", "Tomás", "Valentino", "Valentín", "Vicente", "Víctor", "Walter", "Wilfredo", "William", "Xavier", "Yordy", "Yovani", "Yuri", "Zoilo", "Óscar"
    ];

    public static array $givenNamesFemale = [
        "Abigail", "Abril", "Adriana", "Agustina", "Aitana", "Alejandra", "Alessandra", "Alexa", "Alexandra", "Allison", "Alma", "Amanda", "Amelia", "Ana", "Ana Paula", "Ana Sofía", "Andrea", "Angela", "Anita", "Antonella",
        "Antonia", "Ariadna", "Ariana", "Ashley", "Aurora", "Beatriz", "Belen", "Bianca", "Brenda", "Camila", "Carla", "Carmen", "Carolina", "Catalina", "Cecilia", "Celeste", "Clara", "Claudia", "Constanza", "Cristina",
        "Daniela", "Debora", "Delfina", "Diana", "Elena", "Elena ", "Eliana", "Elizabeth", "Elsa", "Emilia", "Emily", "Emma", "Estefani", "Estela", "Esther", "Fabiana", "Fabiola", "Fanny", "Fatima", "Fernanda",
        "Flor", "Florencia", "Francesca", "Fátima ", "Gabriela", "Gisela", "Gloria", "Grace", "Guadalupe", "Ines", "Ingrid", "Irene", "Isabel", "Isabella", "Isidora", "Ivana", "Ivanna", "Jacqueline", "Janet", "Jazmin",
        "Jazmín", "Jennifer", "Jessica", "Jimena", "Johanna", "Josefa", "Josefina", "Juana", "Julia", "Juliana", "Julieta", "Karen", "Karina", "Karla", "Katherine", "Katia", "Kiara", "Laura", "Leticia", "Lidia",
        "Liliana", "Lola", "Lorena", "Lourdes", "Luana", "Lucia", "Luciana", "Lucía", "Luna", "Luz", "Magaly", "Magdalena", "Maite", "Malena", "Manuela", "Margarita", "Maria", "Maria Elena", "Maria Fernanda", "Maria Jose",
        "Maria Julia", "Maria Luisa", "Maria Teresa", "Mariana", "Mariangel", "Maribel", "Marisol", "Marta", "Martha", "Martina", "María", "María Alejandra", "María Camila", "María Fernanda", "María José", "María Paula", "Mayra", "Melissa", "Mercedes", "Micaela",
        "Michelle", "Milagros", "Miranda", "Mirtha", "Monica", "Montserrat", "Mía", "Nadia", "Nancy", "Natalia", "Nayeli", "Nelly", "Nicole", "Nora", "Olga", "Oliva", "Olivia", "Ornela", "Pamela", "Paola",
        "Patricia", "Paula", "Paulina", "Perla", "Pilar", "Rafaela", "Rebeca", "Regina", "Renata", "Rocio", "Romina", "Rosa", "Rosario", "Ruth", "Sabrina", "Salomé", "Samantha", "Sandra", "Sara", "Sara Sofía",
        "Silvana", "Silvana ", "Silvia", "Sofia", "Sofía", "Sonia", "Sophie", "Susana", "Tania", "Tatiana", "Valentina", "Valeria", "Valery ", "Vanessa", "Veronica", "Victoria", "Vilma", "Violeta", "Virginia", "Wendy",
        "Ximena", "Yanina", "Yolanda", "Zoe"
    ];

    public static array $familyNames = [
        "Acevedo", "Acosta", "Acuña", "Aguayo", "Aguilar", "Aguilera", "Aguirre", "Alanis", "Alaniz", "Alarcón", "Alba", "Alcala", "Alcaraz", "Alcántar", "Alejandro", "Alemán", "Alfaro", "Alicea", "Almanza", "Almaraz",
        "Almonte", "Alonso", "Alonzo", "Altamirano", "Alva", "Alvarado", "Alvarez", "Amador", "Amaya", "Anaya", "Anguiano", "Angulo", "Aparicio", "Apodaca", "Aponte", "Aragón", "Arana", "Aranda", "Araña", "Arce",
        "Archuleta", "Arellano", "Arenas", "Arevalo", "Arguello", "Arias", "Armas", "Armendáriz", "Armenta", "Armijo", "Arredondo", "Arreola", "Arriaga", "Arroyo", "Arteaga", "Atencio", "Avalos", "Avilés", "Ayala", "Baca",
        "Ballesteros", "Banda", "Barela", "Barragán", "Barraza", "Barrera", "Barreto", "Barrientos", "Barrios", "Batista", "Becerra", "Beltrán", "Benavides", "Benavídez", "Benites", "Benítez", "Bermúdez", "Bernal", "Berríos", "Blanco",
        "Bonilla", "Borrego", "Botello", "Bravo", "Briones", "Briseño", "Brito", "Bueno", "Burgos", "Bustamante", "Bustos", "Bétancourt", "Caballero", "Cabrera", "Cabán", "Cadena", "Caldera", "Calderón", "Camacho", "Campos",
        "Canales", "Candelaria", "Cano", "Cantú", "Caraballo", "Carbajal", "Cardenas", "Cardona", "Carmona", "Carranza", "Carrasco", "Carrasquillo", "Carrera", "Carrero", "Carrillo", "Carrion", "Carvajal", "Casanova", "Casares", "Casas",
        "Casillas", "Castañeda", "Castellanos", "Castillo", "Castro", "Casárez", "Cavazos", "Cavero", "Cazares", "Ceballos", "Cedillo", "Ceja", "Centeno", "Cepeda", "Cerda", "Cerna", "Cervantes", "Cervántez", "Chacón", "Chapa",
        "Chavarría", "Chávez", "Cisneros", "Collado", "Collazo", "Colón", "Concepción", "Contreras", "Cordero", "Cornejo", "Corona", "Coronado", "Corral", "Corrales", "Correa", "Cortez", "Cortés", "Crespo", "Cruz", "Cuellar",
        "Córdova", "De La Crúz", "De La Fuente", "De La Rosa", "De La Torre", "De León", "Del Río", "Del Valle", "Delgadillo", "Delgado", "Dominguez", "Domínguez", "Domínquez", "Duarte", "Dueñas", "Duran", "Dávila", "Díaz", "Echevarría", "Enríquez",
        "Escalante", "Escobar", "Escobedo", "Espinal", "Espino", "Espinosa", "Espinoza", "Esquibel", "Esquivel", "Estrada", "Estévez", "Fajardo", "Farías", "Feliciano", "Fernández", "Ferrer", "Fierro", "Figueroa", "Flores", "Flórez",
        "Fonseca", "Franco", "Frías", "Fuentes", "Gaitán", "Galarza", "Galindo", "Gallardo", "Gallegos", "Galván", "Gamboa", "Gamez", "Gaona", "Garay", "García", "Garrido", "Garza", "Gaytán", "Gil", "Girón",
        "Godoy", "Godínez", "Gonzales", "González", "Gracia", "Granado", "Granados", "Griego", "Grijalva", "Guajardo", "Guardado", "Guerra", "Guerrero", "Guevara", "Guillen", "Gutiérrez", "Guzmán", "Gálvez", "Gómez", "Henríquez",
        "Heredia", "Hernandes", "Hernádez", "Hernández", "Herrera", "Hidalgo", "Hinojosa", "Holguín", "Huaman", "Huamán", "Huerta", "Huertas", "Hurtado", "Ibarra", "Iglesias", "Jara", "Jaramillo", "Jiménez", "Jurado", "Juárez",
        "Lara", "Laureano", "Leal", "Ledesma", "Leiva", "Leyva", "León", "Lima", "Limón", "Linares", "Lira", "Llamas", "Lovato", "Lozada", "Lozano", "Lucero", "Lugo", "Luján", "Luna", "López",
        "Macías", "Madera", "Madrid", "Madrigal", "Maldonado", "Manzanares", "Marroquín", "Martín", "Martínez", "Marín", "Mata", "Mateo", "Matos", "Matías", "Maya", "Mayorga", "Medina", "Medrano", "Mejía", "Melgar",
        "Meléndez", "Mena", "Mendoza", "Menéndez", "Mercado", "Merino", "Mesa", "Meza", "Miranda", "Molina", "Mondragón", "Montalvo", "Montañez", "Montaño", "Montenegro", "Montero", "Montes", "Montez", "Montoya", "Mora",
        "Morales", "Moreno", "Mota", "Moya", "Murillo", "Muro", "Muñiz", "Muñoz", "Márquez", "Méndez", "Naranjo", "Narváez", "Nava", "Navarrete", "Navarro", "Nazario", "Negrete", "Negrón", "Nieto", "Nieves",
        "Niño", "Noriega", "Nájera", "Núñez", "Ocampo", "Ocasio", "Ochoa", "Ojeda", "Olivares", "Olivas", "Olivera", "Olivo", "Olivárez", "Olmos", "Olvera", "Ontiveros", "Oquendo", "Ordoñez", "Ordóñez", "Orellana",
        "Ornelas", "Orosco", "Orozco", "Ortega", "Ortiz", "Osorio", "Otero", "Ozuna", "Pacheco", "Padilla", "Palacios", "Palomino", "Palomo", "Pantoja", "Paredes", "Parra", "Partida", "Patiño", "Paz", "Pedraza",
        "Pedroza", "Pelayo", "Perales", "Peralta", "Perea", "Peres", "Peña", "Pichardo", "Pineda", "Pizarro", "Piña", "Polanco", "Ponce", "Porras", "Portillo", "Posada", "Prado", "Preciado", "Prieto", "Puente",
        "Puga", "Pulido", "Páez", "Pérez", "Quesada", "Quezada", "Quintana", "Quintanilla", "Quintero", "Quiroz", "Quiñones", "Quiñónez", "Rael", "Ramos", "Ramírez", "Ramón", "Rangel", "Raya", "Razo", "Regalado",
        "Rendón", "Rentería", "Reséndez", "Reyes", "Reyna", "Reynoso", "Rico", "Rincón", "Riojas", "Rivas", "Rivera", "Rivero", "Robledo", "Robles", "Rocha", "Rodarte", "Rodrígez", "Rodríguez", "Rodríquez", "Rojas",
        "Rojo", "Roldán", "Rolón", "Romero", "Romo", "Román", "Roque", "Rosado", "Rosales", "Rosario", "Rosas", "Roybal", "Rubio", "Ruelas", "Ruiz", "Ruvalcaba", "Ríos", "Saavedra", "Salas", "Salazar",
        "Salcedo", "Salcido", "Saldaña", "Saldivar", "Salgado", "Salinas", "Samaniego", "Sanabria", "Sanches", "Sandoval", "Santacruz", "Santana", "Santiago", "Santillán", "Santos", "Sarabia", "Sauceda", "Saucedo", "Sedillo", "Segovia",
        "Segura", "Sepúlveda", "Serna", "Serrano", "Serrato", "Sevilla", "Sierra", "Sisneros", "Solano", "Soliz", "Solorio", "Solorzano", "Solís", "Soria", "Sosa", "Sotelo", "Soto", "Suárez", "Sáenz", "Sánchez",
        "Tafoya", "Tamayo", "Tamez", "Tapia", "Tejada", "Tejeda", "Tello", "Terrazas", "Terán", "Tijerina", "Tirado", "Toledo", "Toro", "Torres", "Tovar", "Trejo", "Treviño", "Trujillo", "Téllez", "Tórrez",
        "Ulibarri", "Ulloa", "Urbina", "Ureña", "Uribe", "Urrutia", "Urías", "Vaca", "Valadez", "Valdez", "Valdivia", "Valdés", "Valencia", "Valentín", "Valenzuela", "Valladares", "Valle", "Vallejo", "Valles", "Valverde",
        "Vanegas", "Varela", "Vargas", "Vega", "Vela", "Velasco", "Velásquez", "Velázquez", "Venegas", "Vera", "Verdugo", "Verduzco", "Vergara", "Vidal", "Viera", "Vigil", "Villa", "Villagómez", "Villalobos", "Villalpando",
        "Villanueva", "Villar", "Villareal", "Villarreal", "Villaseñor", "Villegas", "Vásquez", "Vázquez", "Vélez", "Véliz", "Ybarra", "Yáñez", "Zambrano", "Zamora", "Zamudio", "Zapata", "Zaragoza", "Zarate", "Zavala", "Zayas",
        "Zelaya", "Zepeda", "Zúñiga", "de Jesús", "Águilar", "Álvarez", "Ávalos", "Ávila"
    ];
}

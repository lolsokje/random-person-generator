<?php

namespace LilPecky\RandomPersonGenerator\Providers\es_AR;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aarón", "Adrián", "Agustín", "Alan", "Alejandro", "Alex", "Alexander", "Alfonso", "Alfredo", "Alonso", "Amado", "Andrés", "Anthony", "Antonio", "Ariel", "Augusto", "Axel", "Bautista", "Benjamín", "Bruno",
        "Camilo", "Carlos", "Christian", "Christopher", "Claudio", "Cristian", "Cristóbal", "César", "Damián", "Daniel", "Dante", "David", "Diego", "Diego Alejandro", "Dylan", "Edgardo", "Eduardo", "Elías", "Emiliano", "Emilio",
        "Emmanuel", "Enrique", "Ernesto", "Esteban", "Ezequiel", "Fabián", "Facundo", "Federico", "Felipe", "Fernando", "Francisco", "Franco", "Gabriel", "Gael", "Gastón", "Gonzalo", "Guillermo", "Gustavo", "Hernán", "Hidalgo",
        "Hipólito", "Horacio", "Hugo", "Héctor", "Ian", "Ignacio", "Isaac", "Ivan", "Jacobo", "Javier", "Jerónimo", "Jesús", "Joaquín", "Jorge", "Joshua", "Josué", "José", "Juan", "Juan David", "Juan Diego",
        "Juan Esteban", "Juan José", "Juan Manuel", "Juan Martín", "Juan Pablo", "Juan Sebastián", "Julio", "Julián", "Kevin", "Lautaro", "Leandro", "Leonardo", "Lorenzo", "Lucas", "Luciano", "Luis", "Manuel", "Marcelo", "Mariano", "Mario",
        "Martín", "Mateo", "Matthew", "Matías", "Mauricio", "Maximiliano", "Miguel", "Miguel Ángel", "Máximo", "Nahuel", "Nicolás", "Omar", "Pablo", "Patricio", "Pedro", "Rafael", "Ramiro", "Ramón", "Raúl", "Renato",
        "Ricardo", "Roberto", "Rodrigo", "Rubén", "Samuel", "Santiago", "Santino", "Sebastián", "Sergio", "Simón", "Thiago", "Tomas", "Valentino", "Valentín", "Vicente", "Víctor", "Walter", "Xavier", "Yago", "Yamil",
        "Zacarías", "Zoilo", "Ángel"
    ];

    public static array $givenNamesFemale = [
        "Abigail", "Abril", "Adela", "Adriana", "Agustina", "Aitana", "Aixa", "Alejandra", "Alessandra", "Alexa", "Alina", "Allison", "Alma", "Amalia", "Amanda", "Amelia", "Ana", "Ana Paula", "Ana Sofía", "Anahí",
        "Andrea", "Angélica", "Antonella", "Antonia", "Ariadna", "Ariana", "Ashley", "Azul", "Belen", "Bianca", "Brenda", "Bárbara", "Camila", "Candela", "Carina", "Carla", "Carolina", "Catalina", "Cecilia", "Celeste",
        "Clara", "Clarisa", "Constanza", "Cristina", "Dafne", "Daniela", "Delfina", "Diana", "Dolores", "Débora", "Elena", "Eliana", "Elisa", "Elizabeth", "Eloisa", "Emilia", "Emiliana", "Emily", "Emma", "Erica",
        "Estefanía", "Estela", "Eugenia", "Fabiana", "Florencia", "Francesca", "Fátima", "Gabriela", "Gisela", "Gloria", "Guadalupe", "Ingrid", "Inés", "Irene", "Isabel", "Isabella", "Isidora", "Ivanna", "Jazmín", "Jimena",
        "Jorgelina", "Josefa", "Josefina", "Juana", "Julia", "Juliana", "Julieta", "Laura", "Leticia", "Lila", "Liliana", "Lola", "Lorena", "Luana", "Lucia", "Luciana", "Lucía", "Ludmila", "Luisa", "Luna",
        "Macarena", "Magdalena", "Maira", "Maite", "Malena", "Manuela", "Mara", "Marcela", "Margarita", "Maria", "Mariana", "Mariangel", "Mariela", "Marina", "Marisa", "Marta", "Martina", "María", "María Alejandra", "María Camila",
        "María Fernanda", "María José", "María Paula", "Micaela", "Michelle", "Milagros", "Miranda", "Montserrat", "Mía", "Mónica", "Nadia", "Natalia", "Nayla", "Nicole", "Nora", "Norma", "Olga", "Oliva", "Olivia", "Ornela",
        "Paloma", "Paola", "Patricia", "Paula", "Paulina", "Pilar", "Rafaela", "Rebeca", "Regina", "Renata", "Rita", "Romina", "Rosa", "Rosario", "Roxana", "Sabrina", "Salma", "Salomé", "Samantha", "Sandra",
        "Sara", "Sara Sofía", "Silvana", "Silvia", "Sofía", "Sol", "Soledad", "Sonia", "Sophie", "Stefania", "Susana", "Tania", "Valentina", "Valeria", "Valery", "Vanina", "Verónica", "Victoria", "Violeta", "Virginia",
        "Ximena", "Yanina", "Yolanda", "Zoe"
    ];

    public static array $familyNames = [
        "Abeyta", "Abrego", "Abreu", "Acevedo", "Acosta", "Acuña", "Adame", "Adorno", "Agosto", "Aguayo", "Aguilar", "Aguilera", "Aguirre", "Alanis", "Alaniz", "Alarcón", "Alba", "Alcala", "Alcaraz", "Alcántar",
        "Alejandro", "Alemán", "Alfaro", "Alicea", "Almanza", "Almaraz", "Almonte", "Alonso", "Alonzo", "Altamirano", "Alva", "Alvarado", "Alvarez", "Amador", "Amaya", "Anaya", "Anguiano", "Angulo", "Aparicio", "Apodaca",
        "Aponte", "Aragón", "Aranda", "Araña", "Arce", "Archuleta", "Arellano", "Arenas", "Arevalo", "Arguello", "Arias", "Armas", "Armendáriz", "Armenta", "Armijo", "Arredondo", "Arreola", "Arriaga", "Arroyo", "Arteaga",
        "Atencio", "Avilés", "Ayala", "Baca", "Badillo", "Baeza", "Bahena", "Balderas", "Ballesteros", "Banda", "Barajas", "Barela", "Barragán", "Barraza", "Barrera", "Barreto", "Barrientos", "Barrios", "Batista", "Bañuelos",
        "Becerra", "Beltrán", "Benavides", "Benavídez", "Benitez", "Benítez", "Bermúdez", "Bernal", "Berríos", "Blanco", "Bonilla", "Borrego", "Botello", "Bravo", "Briones", "Briseño", "Brito", "Bueno", "Burgos", "Bustamante",
        "Bustos", "Báez", "Bétancourt", "Caballero", "Cabrera", "Cabán", "Cadena", "Caldera", "Calderon", "Calderón", "Calle", "Calvillo", "Camacho", "Camarillo", "Campos", "Canales", "Candelaria", "Cano", "Cantú", "Caraballo",
        "Carbajal", "Cardenas", "Cardona", "Cardozo", "Carmona", "Carranza", "Carrasco", "Carrasquillo", "Carrera", "Carrero", "Carreón", "Carrillo", "Carrion", "Carrizo", "Carvajal", "Casanova", "Casares", "Casas", "Casillas", "Castañeda",
        "Castellanos", "Castillo", "Castro", "Casárez", "Cavazos", "Cazares", "Ceballos", "Cedillo", "Ceja", "Centeno", "Cepeda", "Cerda", "Cervantes", "Cervántez", "Chacón", "Chapa", "Chavarría", "Chavez", "Chávez", "Cintrón",
        "Cisneros", "Collado", "Collazo", "Colunga", "Colón", "Concepción", "Contreras", "Cordero", "Cornejo", "Corona", "Coronado", "Corral", "Corrales", "Correa", "Cortez", "Cortés", "Cotto", "Covarrubias", "Crespo", "Cruz",
        "Cuellar", "Cuenca", "Curiel", "Córdova", "Delacrúz", "Delafuente", "Delagarza", "Delao", "Delapaz", "Delarosa", "Delatorre", "Deleón", "Delgadillo", "Delgado", "Delrío", "Delvalle", "Diaz", "Domínguez", "Domínquez", "Duarte",
        "Dueñas", "Duran", "Dávila", "Díaz", "Echevarría", "Elizondo", "Enríquez", "Escalante", "Escamilla", "Escobar", "Escobedo", "Esparza", "Espinal", "Espino", "Espinosa", "Espinoza", "Esquibel", "Esquivel", "Estrada", "Estévez",
        "Fajardo", "Farias", "Farías", "Feliciano", "Fernandez", "Fernández", "Ferrer", "Ferreyra", "Fierro", "Figueroa", "Flores", "Flórez", "Fonseca", "Franco", "Frías", "Fuentes", "Funes", "Gaitan", "Gaitán", "Galarza",
        "Galindo", "Gallardo", "Gallegos", "Galván", "Gamboa", "Gamez", "Gaona", "Garay", "Garcia", "García", "Garibay", "Garica", "Garrido", "Garza", "Gastélum", "Gaytán", "Gil", "Gimenez", "Girón", "Godoy",
        "Godínez", "Gomez", "Gonzales", "Gonzalez", "González", "Gracia", "Granado", "Granados", "Griego", "Grijalva", "Guajardo", "Guardado", "Guerra", "Guerrero", "Guevara", "Guillen", "Gurule", "Gutierrez", "Gutiérrez", "Guzmán",
        "Gálvez", "Gómez", "Haro", "Henríquez", "Heredia", "Hernandes", "Hernádez", "Hernández", "Herrera", "Herrero", "Hidalgo", "Hinojosa", "Holguín", "Huerta", "Hurtado", "Ibarra", "Ibañez", "Iglesias", "Irizarry", "Jaime",
        "Jaimes", "Jaramillo", "Jasso", "Jiménez", "Jimínez", "Jurado", "Juárez", "Jáquez", "Laboy", "Laguna", "Lara", "Laureano", "Leal", "Lebrón", "Ledesma", "Leiva", "Lemus", "Lerma", "Leyva", "León",
        "Lima", "Limón", "Linares", "Lira", "Llamas", "Lobos", "Loera", "Lomeli", "Longoria", "Lopez", "Lovato", "Loya", "Lozada", "Lozano", "Lucero", "Lucio", "Luevano", "Lugo", "Luján", "Luna",
        "López", "Macías", "Madera", "Madrid", "Madrigal", "Maestas", "Magaña", "Malave", "Maldonado", "Mansilla", "Manzanares", "Mares", "Marrero", "Marroquín", "Martinez", "Martínez", "Marín", "Mascareñas", "Mata", "Mateo",
        "Matos", "Matías", "Maya", "Mayorga", "Medina", "Medrano", "Mejía", "Melgar", "Meléndez", "Mena", "Menchaca", "Mendez", "Mendoza", "Menéndez", "Meraz", "Mercado", "Merino", "Mesa", "Meza", "Miramontes",
        "Miranda", "Mireles", "Mojica", "Molina", "Mondragón", "Monroy", "Montalvo", "Montañez", "Montaño", "Montemayor", "Montenegro", "Montero", "Montes", "Montez", "Montoya", "Mora", "Morales", "Moreno", "Mota", "Moya",
        "Moyano", "Munguía", "Murillo", "Muro", "Muñiz", "Muñoz", "Márquez", "Méndez", "Naranjo", "Narváez", "Nava", "Navarrete", "Navarro", "Nazario", "Negrete", "Negrón", "Nevárez", "Nieto", "Nieves", "Niño",
        "Noriega", "Nájera", "Núñez", "Ocampo", "Ocasio", "Ochoa", "Ojeda", "Olivares", "Olivas", "Olivera", "Olivo", "Olivárez", "Olmos", "Olvera", "Ontiveros", "Oquendo", "Ordóñez", "Orellana", "Ornelas", "Orosco",
        "Orozco", "Orta", "Ortega", "Ortiz", "Osorio", "Otero", "Ozuna", "Pabón", "Pacheco", "Padilla", "Padrón", "Pagan", "Palacios", "Palomino", "Palomo", "Pantoja", "Paredes", "Parra", "Partida", "Patiño",
        "Paz", "Pedraza", "Pedroza", "Pelayo", "Perales", "Peralta", "Perea", "Peres", "Pereyra", "Perez", "Peña", "Pichardo", "Pineda", "Pizarro", "Piña", "Polanco", "Ponce", "Porras", "Portillo", "Posada",
        "Prado", "Preciado", "Prieto", "Puente", "Puga", "Pulido", "Páez", "Pérez", "Quesada", "Quezada", "Quintana", "Quintanilla", "Quintero", "Quinteros", "Quiroga", "Quiroz", "Quiñones", "Quiñónez", "Rael", "Ramirez",
        "Ramos", "Ramírez", "Ramón", "Rangel", "Rascón", "Raya", "Razo", "Regalado", "Rendón", "Rentería", "Reséndez", "Reyes", "Reyna", "Reynoso", "Rico", "Rincón", "Riojas", "Rivas", "Rivera", "Rivero",
        "Robledo", "Robles", "Rocha", "Rodarte", "Rodriguez", "Rodrígez", "Rodríguez", "Rodríquez", "Rojas", "Rojo", "Roldan", "Roldán", "Rolón", "Romero", "Romo", "Roque", "Rosado", "Rosales", "Rosario", "Rosas",
        "Roybal", "Rubio", "Ruelas", "Ruiz", "Ruvalcaba", "Ríos", "Saavedra", "Saiz", "Salas", "Salazar", "Salcedo", "Salcido", "Saldaña", "Saldivar", "Salgado", "Salinas", "Samaniego", "Sanabria", "Sanches", "Sanchez",
        "Sandoval", "Santacruz", "Santana", "Santiago", "Santillán", "Sarabia", "Sauceda", "Saucedo", "Sedillo", "Segovia", "Segura", "Sepúlveda", "Serna", "Serrano", "Serrato", "Sevilla", "Sierra", "Silva", "Sisneros", "Solano",
        "Soliz", "Solorio", "Solorzano", "Solís", "Soria", "Sosa", "Sotelo", "Soto", "Suárez", "Sáenz", "Sánchez", "Tafoya", "Tamayo", "Tamez", "Tapia", "Tejada", "Tejeda", "Tello", "Terrazas", "Terán",
        "Tijerina", "Tirado", "Tissera", "Toledo", "Toro", "Torres", "Tovar", "Trejo", "Treviño", "Trujillo", "Téllez", "Tórrez", "Ulibarri", "Ulloa", "Urbina", "Ureña", "Uribe", "Urrutia", "Urías", "Vaca",
        "Valadez", "Valdez", "Valdivia", "Valdés", "Valencia", "Valentín", "Valenzuela", "Valladares", "Valle", "Vallejo", "Valles", "Valverde", "Vanegas", "Varela", "Vargas", "Vega", "Vela", "Velasco", "Velásquez", "Velázquez",
        "Venegas", "Vera", "Verdugo", "Verduzco", "Vergara", "Viera", "Vigil", "Villa", "Villagómez", "Villalobos", "Villalpando", "Villanueva", "Villareal", "Villarreal", "Villaseñor", "Villegas", "Vásquez", "Vázquez", "Vélez", "Véliz",
        "Ybarra", "Yáñez", "Zambrano", "Zamora", "Zamudio", "Zapata", "Zaragoza", "Zarate", "Zavala", "Zayas", "Zelaya", "Zepeda", "Zúñiga", "de Anda", "de Jesús", "Águilar", "Álvarez", "Ávalos", "Ávila"
    ];
}

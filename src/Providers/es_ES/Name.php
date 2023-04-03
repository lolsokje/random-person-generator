<?php

namespace LilPecky\RandomPersonGenerator\Providers\es_ES;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aaron", "Adam", "Adrián", "Agustín", "Aitor", "Alberto", "Aleix", "Alejandro", "Alex", "Alfonso", "Alfredo", "Alonso", "Ander", "Andrés", "Antonio", "Armando", "Arnau", "Arturo", "Asier", "Benjamín",
        "Bernardo", "Biel", "Bruno", "Carlos", "Christian", "Claudio", "Cristian", "Cristóbal", "César", "Daniel", "Dario", "David", "Diego", "Edgar", "Eduardo", "Elías", "Emilio", "Enrique", "Eric", "Erik",
        "Ernesto", "Esteban", "Fabián", "Felipe", "Fernando", "Francisco", "Francisco Javier", "Gabriel", "Gael", "Gerard", "Germán", "Gonzalo", "Guillem", "Guillermo", "Gustavo", "Hugo", "Héctor", "Ian", "Ignacio", "Iker",
        "Isaac", "Ismael", "Iván", "Izan", "Jacobo", "Jaime", "Jan", "Javier", "Jesús", "Joaquín", "Joel", "Jon", "Jordi", "Jorge", "José", "José Antonio", "José Manuel", "Juan", "Juan José", "Julio",
        "Leo", "Leonardo", "Lorenzo", "Lucas", "Luis", "Manuel", "Marc", "Marco", "Marcos", "Mario", "Martín", "Mateo", "Mauricio", "Miguel", "Miguel Ángel", "Moisés", "Nicolás", "Octavio", "Oliver", "Omar",
        "Oriol", "Pablo", "Patricio", "Pedro", "Pol", "Rafael", "Rayan", "Raúl", "Ricardo", "Roberto", "Rodrigo", "Rubén", "Salvador", "Samuel", "Santiago", "Saúl", "Sebastián", "Sergio", "Tomás", "Unai",
        "Vicente", "Víctor", "Xavier", "Yago", "Yahir", "Yandel", "Yaroslav", "Yeray", "Yonathan", "Yorley", "Yosimar", "Yulian", "Yulmer", "Yurian", "Yurley", "Zacarías", "Zadkiel", "Zaith", "Zarco", "Zebulón",
        "Zenón", "Zerah", "Zerón", "Zidane", "Zihuatanejo", "Zinedine", "Zinio", "Zion", "Zoltán", "Álvaro", "Ángel", "Óscar"
    ];

    public static array $givenNamesFemale = [
        "Abril", "Adela", "Adriana", "Agustina", "Aida", "Aina", "Ainara", "Ainhoa", "Aitana", "Alba", "Alejandra", "Alexandra", "Alexia", "Alicia", "Alma", "Amparo", "Ana", "Ana Isabel", "Ana María", "Andrea",
        "Anita", "Antonia", "Araceli", "Ariadna", "Aurora", "Beatriz", "Belen", "Berta", "Blanca", "Camila", "Candela", "Carina", "Carla", "Carlota", "Carmen", "Carolina", "Catalina", "Cecilia", "Celia", "Clara",
        "Claudia", "Cristina", "Daniela", "Diana", "Dolores", "Elena", "Elisa", "Elsa", "Elvira", "Emilia", "Encarnación", "Esperanza", "Estela", "Esther", "Eva", "Florencia", "Francesca", "Francisca", "Fátima", "Gabriela",
        "Gloria", "Graciela", "Guadalupe", "Helena", "Ines", "Inmaculada", "Inés", "Irene", "Isabel", "Isabela", "Isidora", "Jacqueline", "Jessica", "Jimena", "Josefa", "Josefina", "Juana", "Julia", "Juliana", "Karina",
        "Laia", "Lara", "Laura", "Leire", "Leticia", "Lidia", "Lila", "Liliana", "Lola", "Lorena", "Lourdes", "Lucia", "Lucía", "Luisa", "Luna", "Luz", "Magdalena", "Malak", "Manuela", "Mar",
        "Mara", "Margarita", "Maria", "Mariana", "Maribel", "Marina", "Marisol", "Marta", "Martina", "María", "María Carmen", "María Dolores", "María Pilar", "María Ángeles", "Matilde", "Mayte", "Mercedes", "Milagros", "Mireia", "Miriam",
        "Monica", "Montserrat", "Nadia", "Nahia", "Naia", "Naiara", "Natalia", "Nayara", "Nayeli", "Nelly", "Nerea", "Nieves", "Nil", "Noa", "Noelia", "Nora", "Nuria", "Olga", "Olivia", "Ona",
        "Paloma", "Paola", "Patricia", "Pau", "Paula", "Perla", "Pilar", "Priscila", "Raquel", "Rebeca", "Regina", "Renata", "Rocio", "Rocío", "Romina", "Rosa", "Rosa María", "Rosalia", "Rosario", "Ruth",
        "Salma", "Salome", "Sandra", "Sara", "Silvia", "Simona", "Sofía", "Soledad", "Sonia", "Soraya", "Susana", "Teresa", "Valentina", "Valeria", "Vega", "Vera", "Veronica", "Verónica", "Victoria", "Violeta",
        "Virginia", "Ximena", "Yaiza", "Yolanda", "Zoe", "África", "Ángela", "Ángeles", "Úrsula"
    ];

    public static array $familyNames = [
        "Abad", "Abeyta", "Abrego", "Abreu", "Acevedo", "Acosta", "Acuña", "Adame", "Adorno", "Agosto", "Aguado", "Aguayo", "Aguiar", "Aguilar", "Aguilera", "Aguirre", "Alanis", "Alaniz", "Alarcón", "Alba",
        "Alcala", "Alcaráz", "Alcántar", "Alejandro", "Alemán", "Alfaro", "Alfonso", "Alicea", "Almanza", "Almaráz", "Almonte", "Alonso", "Alonzo", "Altamirano", "Alva", "Alvarado", "Alvarez", "Amador", "Amaya", "Anaya",
        "Andreu", "Andrés", "Anguiano", "Angulo", "Antón", "Aparicio", "Apodaca", "Aponte", "Aragón", "Aranda", "Araña", "Arce", "Archuleta", "Arellano", "Arenas", "Arevalo", "Arguello", "Arias", "Armas", "Armendáriz",
        "Armenta", "Armijo", "Arredondo", "Arreola", "Arriaga", "Arribas", "Arroyo", "Arteaga", "Asensio", "Atencio", "Avilés", "Ayala", "Baca", "Badillo", "Baez", "Baeza", "Bahena", "Balderas", "Ballesteros", "Banda",
        "Barajas", "Barela", "Barragán", "Barraza", "Barrera", "Barreto", "Barrientos", "Barrios", "Barroso", "Batista", "Bautista", "Bañuelos", "Becerra", "Beltran", "Beltrán", "Benavides", "Benavídez", "Benitez", "Benito", "Benítez",
        "Bermejo", "Bermúdez", "Bernal", "Berríos", "Betancourt", "Blanco", "Blasco", "Blázquez", "Bonilla", "Borrego", "Botello", "Bravo", "Briones", "Briseño", "Brito", "Bueno", "Burgos", "Bustamante", "Bustos", "Báez",
        "Caballero", "Cabello", "Cabrera", "Cabán", "Cadena", "Caldera", "Calderon", "Calderón", "Calero", "Calvillo", "Calvo", "Camacho", "Camarillo", "Campos", "Canales", "Candelaria", "Cano", "Cantú", "Caraballo", "Carbajal",
        "Carballo", "Carbonell", "Cardenas", "Cardona", "Carmona", "Caro", "Carranza", "Carrasco", "Carrasquillo", "Carrera", "Carrero", "Carretero", "Carreón", "Carrillo", "Carrión", "Carvajal", "Casado", "Casanova", "Casares", "Casas",
        "Casillas", "Castañeda", "Castaño", "Castellano", "Castellanos", "Castillo", "Castro", "Casárez", "Cavazos", "Cazares", "Ceballos", "Cedillo", "Ceja", "Centeno", "Cepeda", "Cerda", "Cervantes", "Cervántez", "Chacón", "Chapa",
        "Chavarría", "Chavez", "Chávez", "Cintrón", "Cisneros", "Clemente", "Cobo", "Collado", "Collazo", "Colunga", "Colón", "Concepción", "Conde", "Contreras", "Cordero", "Cordova", "Cornejo", "Corona", "Coronado", "Corral",
        "Corrales", "Correa", "Cortes", "Cortez", "Cortés", "Costa", "Cotto", "Covarrubias", "Crespo", "Cruz", "Cuellar", "Cuenca", "Cuesta", "Cuevas", "Curiel", "Cárdenas", "Córdoba", "Córdova", "De Anda", "De Jesús",
        "De la Cruz", "De la Fuente", "De la Torre", "Del Río", "Delacrúz", "Delafuente", "Delagarza", "Delao", "Delapaz", "Delarosa", "Delatorre", "Deleón", "Delgadillo", "Delgado", "Delrío", "Delvalle", "Diaz", "Domenech", "Domingo", "Domínguez",
        "Domínquez", "Duarte", "Dueñas", "Duran", "Dávila", "Díaz", "Díez", "Echevarría", "Elizondo", "Enríquez", "Escalante", "Escamilla", "Escobar", "Escobedo", "Escribano", "Escudero", "Esparza", "Espinal", "Espino", "Espinosa",
        "Espinoza", "Esquibel", "Esquivel", "Esteban", "Esteve", "Estrada", "Estévez", "Expósito", "Fajardo", "Farías", "Feliciano", "Fernandez", "Fernández", "Ferrer", "Fierro", "Figueroa", "Flores", "Flórez", "Fonseca", "Font",
        "Fraga", "Franco", "Frías", "Fuentes", "Gaitán", "Galarza", "Galindo", "Gallardo", "Gallego", "Gallegos", "Galvan", "Galván", "Galán", "Gamboa", "Gaona", "Garay", "Garcia", "García", "Garibay", "Garica",
        "Garrido", "Garza", "Gastélum", "Gaytán", "Gil", "Gimeno", "Giménez", "Girón", "Godoy", "Godínez", "Gomez", "Gonzalez", "Gonzáles", "González", "Gracia", "Granado", "Granados", "Griego", "Grijalva", "Guajardo",
        "Guardado", "Guerra", "Guerrero", "Guevara", "Guillen", "Gurule", "Gutierrez", "Gutiérrez", "Guzman", "Guzmán", "Gálvez", "Gámez", "Gómez", "Haro", "Henríquez", "Heredia", "Hernandez", "Hernando", "Hernádez", "Hernándes",
        "Hernández", "Herrera", "Herrero", "Hidalgo", "Hinojosa", "Holguín", "Huerta", "Hurtado", "Ibarra", "Ibáñez", "Iglesias", "Irizarry", "Izquierdo", "Jaime", "Jaimes", "Jaramillo", "Jasso", "Jimenez", "Jiménez", "Jimínez",
        "Juan", "Juarez", "Jurado", "Juárez", "Jáquez", "Laboy", "Lara", "Laureano", "Leal", "Lebrón", "Ledesma", "Leiva", "Lemus", "Leon", "Lerma", "Leyva", "León", "Limón", "Linares", "Lira",
        "Llamas", "Llorente", "Loera", "Lomeli", "Longoria", "Lopez", "Lorente", "Lorenzo", "Lovato", "Loya", "Lozada", "Lozano", "Lucas", "Lucero", "Lucio", "Luevano", "Lugo", "Luis", "Luján", "Luna",
        "Luque", "Lázaro", "López", "Macias", "Macías", "Madera", "Madrid", "Madrigal", "Maestas", "Magaña", "Malave", "Maldonado", "Manzanares", "Manzano", "Marco", "Marcos", "Mares", "Marrero", "Marroquín", "Martinez",
        "Martos", "Martí", "Martín", "Martínez", "Marín", "Mascareñas", "Mata", "Mateo", "Mateos", "Matos", "Matías", "Maya", "Mayorga", "Medina", "Medrano", "Mejia", "Mejía", "Melgar", "Meléndez", "Mena",
        "Menchaca", "Mendez", "Mendoza", "Menéndez", "Meraz", "Mercado", "Merino", "Mesa", "Meza", "Miguel", "Millán", "Miramontes", "Miranda", "Mireles", "Mojica", "Molina", "Mondragón", "Monroy", "Montalvo", "Montañez",
        "Montaño", "Montemayor", "Montenegro", "Montero", "Montes", "Montez", "Montoya", "Mora", "Moral", "Morales", "Moreno", "Morán", "Mota", "Moya", "Munguia", "Munguía", "Munoz", "Murillo", "Muro", "Muñiz",
        "Muñoz", "Márquez", "Más", "Méndez", "Naranjo", "Narváez", "Nava", "Navarrete", "Navarro", "Navas", "Nazario", "Negrete", "Negrón", "Nevárez", "Nieto", "Nieves", "Niño", "Noriega", "Nunez", "Nájera",
        "Núñez", "Ocampo", "Ocasio", "Ochoa", "Ojeda", "Oliva", "Olivares", "Olivas", "Oliver", "Olivera", "Olivo", "Olivárez", "Olmos", "Olvera", "Ontiveros", "Oquendo", "Ordoñez", "Ordóñez", "Orellana", "Ornelas",
        "Orosco", "Orozco", "Orta", "Ortega", "Ortiz", "Ortíz", "Osorio", "Otero", "Ozuna", "Pabón", "Pacheco", "Padilla", "Padrón", "Pagan", "Palacios", "Palomino", "Palomo", "Pantoja", "Pardo", "Paredes",
        "Parra", "Partida", "Pascual", "Pastor", "Patiño", "Paz", "Pedraza", "Pedroza", "Pelayo", "Peláez", "Perales", "Peralta", "Perea", "Pereira", "Peres", "Perez", "Peña", "Pichardo", "Pineda", "Pinto",
        "Pizarro", "Piña", "Piñeiro", "Plaza", "Polanco", "Polo", "Ponce", "Pons", "Porras", "Portillo", "Posada", "Pozo", "Prado", "Preciado", "Prieto", "Puente", "Puga", "Puig", "Pulido", "Páez",
        "Pérez", "Quesada", "Quezada", "Quintana", "Quintanilla", "Quintero", "Quiroz", "Quiñones", "Quiñónez", "Rael", "Ramirez", "Ramos", "Ramírez", "Ramón", "Rangel", "Rascón", "Raya", "Razo", "Redondo", "Regalado",
        "Reina", "Rendón", "Rentería", "Requena", "Reséndez", "Rey", "Reyes", "Reyna", "Reynoso", "Rico", "Riera", "Rincón", "Riojas", "Rivas", "Rivera", "Rivero", "Robledo", "Robles", "Roca", "Rocha",
        "Rodarte", "Rodrigo", "Rodriguez", "Rodríguez", "Rodríquez", "Roig", "Rojas", "Rojo", "Roldán", "Rolón", "Romero", "Romo", "Román", "Roque", "Ros", "Rosa", "Rosado", "Rosales", "Rosario", "Rosas",
        "Roybal", "Rubio", "Rueda", "Ruelas", "Ruiz", "Ruvalcaba", "Ruíz", "Ríos", "Saavedra", "Saiz", "Salas", "Salazar", "Salcedo", "Salcido", "Saldaña", "Saldivar", "Salgado", "Salinas", "Salvador", "Samaniego",
        "Sanabria", "Sanchez", "Sancho", "Sandoval", "Santacruz", "Santamaría", "Santana", "Santiago", "Santillán", "Santos", "Sanz", "Sarabia", "Sauceda", "Saucedo", "Sedillo", "Segovia", "Segura", "Sepúlveda", "Serna", "Serra",
        "Serrano", "Serrato", "Sevilla", "Sierra", "Silva", "Simón", "Sisneros", "Sola", "Solano", "Soler", "Soliz", "Solorio", "Solorzano", "Solís", "Soria", "Soriano", "Sosa", "Sotelo", "Soto", "Suárez",
        "Sáenz", "Sáez", "Sánchez", "Tafoya", "Tamayo", "Tamez", "Tapia", "Tejada", "Tejeda", "Tello", "Terrazas", "Terán", "Tijerina", "Tirado", "Toledo", "Toro", "Torres", "Tovar", "Trejo", "Treviño",
        "Trujillo", "Téllez", "Tórrez", "Ulibarri", "Ulloa", "Urbina", "Ureña", "Uribe", "Urrutia", "Urías", "Vaca", "Valadez", "Valdez", "Valdivia", "Valdés", "Valencia", "Valentín", "Valenzuela", "Valero", "Valladares",
        "Valle", "Vallejo", "Valles", "Valverde", "Vanegas", "Varela", "Vargas", "Vega", "Vela", "Velasco", "Velásquez", "Velázquez", "Venegas", "Vera", "Verdugo", "Verduzco", "Vergara", "Vicente", "Vidal", "Viera",
        "Vigil", "Vila", "Villa", "Villagómez", "Villalba", "Villalobos", "Villalpando", "Villanueva", "Villar", "Villareal", "Villarreal", "Villaseñor", "Villegas", "Vásquez", "Vázquez", "Vélez", "Véliz", "Ybarra", "Yáñez", "Zambrano",
        "Zamora", "Zamudio", "Zapata", "Zaragoza", "Zarate", "Zavala", "Zayas", "Zelaya", "Zepeda", "Zúñiga", "Álvarez", "Ávalos", "Ávila"
    ];
}

<?php

namespace LilPecky\DriverGenerator\Providers\es_VE;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aaron", "Adam", "Adria", "Adrian", "Adrián", "Adán", "Agustín", "Alberto", "Aleix", "Alejandro", "Alex", "Alfonso", "Alfredo", "Alonso", "Alvaro", "Ander", "Andres", "Andrés", "Angel", "Antonio",
        "Armando", "Arturo", "Augusto", "Benito", "Benjamín", "Bernardo", "Bruno", "Carlos", "Cesar", "Christian", "Christopher", "Claudio", "Cristian", "César", "Daniel", "Dario", "David", "Diego", "Domingo", "Edgar",
        "Eduardo", "Efraín", "Elías", "Emilio", "Enrique", "Eric", "Erik", "Ernesto", "Esteban", "Ezequiel", "Fabián", "Federico", "Felipe", "Fernando", "Francisco", "Francisco Javier", "Gabriel", "Germán", "Gilberto", "Gonzalo",
        "Gregorio", "Guillem", "Guillermo", "Gustavo", "Hector", "Hugo", "Héctor", "Ian", "Ignacio", "Isaac", "Ismael", "Ivan", "Iván", "Izan", "Jacobo", "Jaime", "Jairo", "Jan", "Javier", "Jesus",
        "Jesús", "Joaquín", "Joel", "Jon", "Jordi", "Jorge", "Jose", "Josué", "José", "Juan", "Julio", "Leandro", "Leo", "Leonardo", "Lorenzo", "Lucas", "Luis", "Manuel", "Marc", "Marco",
        "Marcos", "Mario", "Martin", "Martín", "Mateo", "Mauricio", "Miguel", "Mohamed", "Nicolas", "Nicolás", "Octavio", "Oliver", "Omar", "Oscar", "Oswaldo", "Pablo", "Pedro", "Pol", "Rafael", "Ramón",
        "Raul", "Rayan", "Raúl", "Ricardo", "Roberto", "Rodolfo", "Rodrigo", "Ruben", "Rubén", "Salvador", "Samuel", "Santiago", "Saul", "Sebastian", "Sergio", "Simón", "Tomás", "Ulises", "Victor", "Vladimir",
        "Víctor", "Wilfredo", "William", "Xavier", "Yonatan", "Yorman", "Yovanny", "Yuri", "Zacarías", "Ángel", "Óscar"
    ];

    public static array $givenNamesFemale = [
        "Abril", "Adriana", "Africa", "Agustina", "Ainara", "Alba", "Alejandra", "Alexandra", "Alexia", "Alicia", "Alma", "Alondra", "Ana", "Andrea", "Ane", "Angela", "Anita", "Anna", "Antonia", "Aracely",
        "Ariadna", "Ariana", "Aroa", "Astrid", "Aurelia", "Aurora", "Beatriz", "Belen", "Bella", "Berta", "Bianca", "Blanca", "Camila", "Candela", "Carla", "Carlota", "Carmen", "Carolina", "Casandra", "Catalina",
        "Celia", "Clara", "Claudia", "Constanza", "Cristina", "Dalia", "Daniela", "Dayana", "Deborah", "Diana", "Edith", "Elena", "Elizabeth", "Elsa", "Emilia", "Emma", "Erika", "Esperanza", "Estefania", "Estela",
        "Eva", "Evelyn", "Fabiana", "Fabiola", "Fatima", "Florencia", "Gabriela", "Gloria", "Graciela", "Guadalupe", "Helena", "Ines", "Ingrid", "Irene", "Iria", "Isabel", "Isabella", "Isidora", "Ivana", "Jacqueline",
        "Jana", "Jazmin", "Jessica", "Jimena", "Joan", "Joana", "Johana", "Josefina", "Juana", "Julia", "Juliana", "Karina", "Katia", "Laia", "Lara", "Laura", "Leire", "Leyre", "Lidia", "Liliana",
        "Liz", "Lola", "Lorena", "Lourdes", "Lucia", "Luciana", "Luisa", "Luna", "Luz", "Magaly", "Manuela", "Mar", "Mara", "Margarita", "Maria", "Mariana", "Maribel", "Marina", "Marisol", "Maritza",
        "Marta", "Marti", "Martina", "Mayra", "Melissa", "Micaela", "Michelle", "Milagros", "Mireia", "Mireya", "Miriam", "Monica", "Nadia", "Nahia", "Naia", "Naiara", "Natalia", "Nayara", "Nayeli", "Nelly",
        "Nerea", "Nereida", "Nicole", "Nil", "Nilda", "Ninoska", "Noa", "Noelia", "Nora", "Nuria", "Olga", "Olivia", "Ona", "Paola", "Patricia", "Pau", "Paula", "Paulina", "Petra", "Pilar",
        "Raquel", "Rebeca", "Regina", "Renata", "Rocio", "Rosa", "Rosalia", "Rosario", "Salma", "Samantha", "Sandra", "Sara", "Selena", "Silvia", "Sofia", "Sol", "Soledad", "Sonia", "Stephanie", "Susana",
        "Tamara", "Tania", "Tatiana", "Teresa", "Valentina", "Valeria", "Vega", "Vera", "Veronica", "Victoria", "Violeta", "Virginia", "Ximena", "Yadira", "Yaiza", "Zulay"
    ];

    public static array $familyNames = [
        "Abad", "Abeyta", "Abrego", "Abreu", "Acevedo", "Acosta", "Acuña", "Adame", "Adorno", "Agosto", "Aguado", "Aguayo", "Aguilar", "Aguilera", "Aguirre", "Alanis", "Alaniz", "Alarcón", "Alba", "Alcala",
        "Alcaraz", "Alcántar", "Alejandro", "Alemán", "Alfaro", "Alfonso", "Alicea", "Almanza", "Almaraz", "Almonte", "Alonso", "Alonzo", "Altamirano", "Alva", "Alvarado", "Alvarez", "Amador", "Amaya", "Anaya", "Andrade",
        "Andreu", "Andrés", "Anguiano", "Angulo", "Antón", "Aparicio", "Apodaca", "Aponte", "Aragón", "Arana", "Aranda", "Araña", "Arce", "Archuleta", "Arellano", "Arenas", "Arevalo", "Arguello", "Arias", "Armas",
        "Armendáriz", "Armenta", "Armijo", "Arredondo", "Arreola", "Arriaga", "Arribas", "Arroyo", "Arteaga", "Asensio", "Atencio", "Avilés", "Ayala", "Baca", "Badillo", "Baeza", "Bahena", "Balderas", "Ballesteros", "Banda",
        "Barajas", "Barela", "Barragán", "Barraza", "Barrera", "Barreto", "Barrientos", "Barrios", "Barroso", "Batista", "Bautista", "Bañuelos", "Becerra", "Beltrán", "Benavides", "Benavídez", "Benitez", "Benito", "Benítez", "Bermejo",
        "Bermúdez", "Bernal", "Berríos", "Blanco", "Blasco", "Blázquez", "Bolivar", "Bonilla", "Borges", "Borrego", "Botello", "Bravo", "Briceño", "Briones", "Briseño", "Brito", "Bueno", "Burgos", "Bustamante", "Bustos",
        "Báez", "Bétancourt", "Caballero", "Cabello", "Cabrera", "Cabán", "Cadena", "Caldera", "Calderón", "Calero", "Calvillo", "Calvo", "Camacho", "Camarillo", "Campos", "Canales", "Candelaria", "Cano", "Cantú", "Caraballo",
        "Carbajal", "Carballo", "Carbonell", "Cardenas", "Cardona", "Carmona", "Caro", "Carranza", "Carrasco", "Carrasquillo", "Carrera", "Carrero", "Carretero", "Carreón", "Carrillo", "Carrion", "Carrión", "Carvajal", "Casado", "Casanova",
        "Casares", "Casas", "Casillas", "Castañeda", "Castaño", "Castellano", "Castellanos", "Castillo", "Castro", "Casárez", "Cavazos", "Cazares", "Ceballos", "Cedillo", "Ceja", "Centeno", "Cepeda", "Cerda", "Cervantes", "Cervántez",
        "Chacón", "Chapa", "Chavarría", "Chávez", "Cintrón", "Cisneros", "Clemente", "Cobo", "Collado", "Collazo", "Colunga", "Colón", "Concepción", "Conde", "Contreras", "Cordero", "Cornejo", "Corona", "Coronado", "Corral",
        "Corrales", "Correa", "Cortes", "Cortez", "Cortés", "Costa", "Cotto", "Covarrubias", "Crespo", "Cruz", "Cuellar", "Cuenca", "Cuesta", "Cuevas", "Curiel", "Córdoba", "Córdova", "De la cruz", "De la fuente", "De la torre",
        "Del río", "Delacrúz", "Delafuente", "Delagarza", "Delao", "Delapaz", "Delarosa", "Delatorre", "Deleón", "Delgadillo", "Delgado", "Delrío", "Delvalle", "Diez", "Domenech", "Domingo", "Domínguez", "Domínquez", "Duarte", "Dueñas",
        "Duran", "Dávila", "Díaz", "Echevarría", "Elizondo", "Enríquez", "Escalante", "Escamilla", "Escobar", "Escobedo", "Escribano", "Escudero", "Esparza", "Espinal", "Espino", "Espinosa", "Espinoza", "Esquibel", "Esquivel", "Esteban",
        "Esteve", "Estrada", "Estévez", "Expósito", "Fajardo", "Farías", "Feliciano", "Fernández", "Ferrer", "Fierro", "Figueroa", "Flores", "Flórez", "Fonseca", "Font", "Franco", "Frías", "Fuentes", "Gaitán", "Galarza",
        "Galindez", "Galindo", "Gallardo", "Gallego", "Gallegos", "Galván", "Galán", "Gamboa", "Gamez", "Gaona", "Garay", "García", "Garibay", "Garica", "Garrido", "Garza", "Gastélum", "Gaytán", "Gil", "Gimeno",
        "Giménez", "Girón", "Godoy", "Godínez", "Gonzales", "González", "Gracia", "Granado", "Granados", "Griego", "Grijalva", "Guajardo", "Guardado", "Guerra", "Guerrero", "Guevara", "Guillen", "Gurule", "Gutierrez", "Gutiérrez",
        "Guzmán", "Gálvez", "Gómez", "Haro", "Henríquez", "Heredia", "Hernandes", "Hernando", "Hernádez", "Hernández", "Herrera", "Herrero", "Hidalgo", "Hinojosa", "Holguín", "Huerta", "Hurtado", "Ibarra", "Ibáñez", "Iglesias",
        "Irizarry", "Izquierdo", "Jaime", "Jaimes", "Jaramillo", "Jasso", "Jiménez", "Jimínez", "Juan", "Jurado", "Juárez", "Jáquez", "Laboy", "Lara", "Laureano", "Leal", "Lebrón", "Ledesma", "Leiva", "Lemus",
        "Lerma", "Leyva", "León", "Limón", "Linares", "Lira", "Llamas", "Llorente", "Loera", "Lomeli", "Longoria", "Lorente", "Lorenzo", "Lovato", "Loya", "Lozada", "Lozano", "Lucas", "Lucero", "Lucio",
        "Luevano", "Lugo", "Luis", "Luján", "Luna", "Luque", "Lázaro", "López", "Macias", "Macías", "Madera", "Madrid", "Madrigal", "Maestas", "Magaña", "Malave", "Maldonado", "Manzanares", "Manzano", "Marco",
        "Marcos", "Mares", "Marrero", "Marroquín", "Martos", "Martí", "Martín", "Martínez", "Marín", "Mas", "Mascareñas", "Mata", "Mateo", "Mateos", "Matos", "Matías", "Maya", "Mayorga", "Medina", "Medrano",
        "Mejía", "Mejías", "Melgar", "Meléndez", "Mena", "Menchaca", "Mendoza", "Menéndez", "Meraz", "Mercado", "Merino", "Mesa", "Meza", "Miguel", "Millán", "Miramontes", "Miranda", "Mireles", "Mojica", "Molina",
        "Mondragón", "Monroy", "Monsalve", "Montalvo", "Montañez", "Montaño", "Montemayor", "Montenegro", "Montero", "Montes", "Montez", "Montoya", "Mora", "Moral", "Morales", "Moran", "Moreno", "Mota", "Moya", "Munguía",
        "Murillo", "Muro", "Muñiz", "Muñoz", "Muñóz", "Márquez", "Méndez", "Naranjo", "Narváez", "Nava", "Navarrete", "Navarro", "Navas", "Nazario", "Negrete", "Negrón", "Nevárez", "Nieto", "Nieves", "Niño",
        "Noriega", "Nájera", "Núñez", "Ocampo", "Ocasio", "Ochoa", "Ojeda", "Oliva", "Olivares", "Olivas", "Oliver", "Olivera", "Olivo", "Olivárez", "Olmos", "Olvera", "Ontiveros", "Oquendo", "Ordoñez", "Ordóñez",
        "Orellana", "Ornelas", "Oropeza", "Orosco", "Orozco", "Orta", "Ortega", "Ortiz", "Ortíz", "Osorio", "Otero", "Ozuna", "Pabón", "Pacheco", "Padilla", "Padrón", "Pagan", "Palacios", "Palomino", "Palomo",
        "Pantoja", "Pardo", "Paredes", "Parra", "Partida", "Pascual", "Pastor", "Patiño", "Paz", "Pedraza", "Pedroza", "Pelayo", "Peláez", "Perales", "Peralta", "Perea", "Pereira", "Peres", "Peña", "Pichardo",
        "Pineda", "Pizarro", "Piña", "Piñeiro", "Piñero", "Plaza", "Polanco", "Polo", "Ponce", "Pons", "Porras", "Portillo", "Posada", "Pozo", "Prado", "Preciado", "Prieto", "Puente", "Puga", "Puig",
        "Pulido", "Páez", "Pérez", "Quesada", "Quezada", "Quintana", "Quintanilla", "Quintero", "Quiroz", "Quiñones", "Quiñónez", "Rael", "Ramos", "Ramírez", "Ramón", "Rangel", "Rascón", "Raya", "Razo", "Redondo",
        "Regalado", "Reina", "Rendón", "Rentería", "Requena", "Reséndez", "Rey", "Reyes", "Reyna", "Reynoso", "Rico", "Riera", "Rincón", "Riojas", "Rivas", "Rivera", "Rivero", "Robledo", "Robles", "Roca",
        "Rocha", "Rodarte", "Rodrigo", "Rodrígez", "Rodríguez", "Rodríquez", "Roig", "Rojas", "Rojo", "Roldan", "Roldán", "Rolón", "Romero", "Romo", "Román", "Roque", "Ros", "Rosa", "Rosado", "Rosales",
        "Rosario", "Rosas", "Roybal", "Rubio", "Rueda", "Ruelas", "Ruiz", "Ruvalcaba", "Ruíz", "Ríos", "Saavedra", "Saiz", "Salas", "Salazar", "Salcedo", "Salcido", "Saldaña", "Saldivar", "Salgado", "Salinas",
        "Salvador", "Samaniego", "Sanabria", "Sanches", "Sanchez", "Sancho", "Sandoval", "Santacruz", "Santamaría", "Santana", "Santiago", "Santillán", "Santos", "Sanz", "Sarabia", "Sauceda", "Saucedo", "Sedillo", "Segovia", "Segura",
        "Sepúlveda", "Serna", "Serra", "Serrano", "Serrato", "Sevilla", "Sierra", "Silva", "Simón", "Sisneros", "Sola", "Solano", "Soler", "Soliz", "Solorio", "Solorzano", "Solís", "Soria", "Soriano", "Sosa",
        "Sotelo", "Soto", "Suarez", "Suárez", "Sáenz", "Sáez", "Sánchez", "Tafoya", "Tamayo", "Tamez", "Tapia", "Tejada", "Tejeda", "Tello", "Terrazas", "Terán", "Tijerina", "Tirado", "Toledo", "Tomas",
        "Toro", "Torres", "Tovar", "Trejo", "Treviño", "Trujillo", "Téllez", "Tórrez", "Ulibarri", "Ulloa", "Urbina", "Ureña", "Uribe", "Urrutia", "Urías", "Vaca", "Valadez", "Valdez", "Valdivia", "Valdés",
        "Valencia", "Valentín", "Valenzuela", "Valera", "Valero", "Valladares", "Valle", "Vallejo", "Valles", "Valverde", "Vanegas", "Varela", "Vargas", "Vega", "Vela", "Velasco", "Velásquez", "Velázquez", "Venegas", "Vera",
        "Verdugo", "Verduzco", "Vergara", "Vicente", "Vidal", "Viera", "Vigil", "Vila", "Villa", "Villagómez", "Villalba", "Villalobos", "Villalpando", "Villanueva", "Villar", "Villareal", "Villarreal", "Villaseñor", "Villegas", "Vivas",
        "Vásquez", "Vázquez", "Vélez", "Véliz", "Ybarra", "Yáñez", "Zambrano", "Zamora", "Zamudio", "Zapata", "Zaragoza", "Zarate", "Zavala", "Zayas", "Zelaya", "Zepeda", "Zúñiga", "de Anda", "de Jesús", "Águilar",
        "Álvarez", "Ávalos", "Ávila"
    ];
}

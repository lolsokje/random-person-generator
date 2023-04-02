<?php

namespace LilPecky\DriverGenerator\Providers\ro_RO;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Ada", "Adela", "Adelaida", "Adelin", "Adelina", "Adina", "Adrian", "Adriana", "Agata", "Aglaia", "Agripina", "Aida", "Albert", "Alberta", "Albertina", "Alexandra", "Alexandrina", "Alexandru", "Alfons", "Alice",
        "Alida", "Alin", "Alina", "Alis", "Alistar", "Alma", "Amalia", "Amanda", "Amelia", "Ana", "Anabela", "Anaida", "Anamaria", "Anastasia", "Anca", "Ancuța", "Anda", "Andra", "Andrada", "Andreea",
        "Anemona", "Aneta", "Angela", "Anghelina", "Anica", "Anișoara", "Antoaneta", "Antonela", "Antonia", "Anuța", "Ariadna", "Ariana", "Arina", "Aristița", "Armin", "Artemisa", "Astrid", "Atena", "Augustina", "Aura",
        "Aurel", "Aurelia", "Aureliana", "Aurica", "Aurora", "Beatrice", "Betina", "Bianca", "Blanduzia", "Bogdan", "Bogdana", "Boris", "Brândușa", "Camelia", "Carina", "Carla", "Carmen", "Carmina", "Carolina", "Casandra",
        "Casiana", "Catalin", "Caterina", "Catinca", "Catrina", "Catrinel", "Cecilia", "Celia", "Cerasela", "Cezar", "Cezara", "Cipriana", "Clara", "Clarisa", "Claudia", "Claudiu", "Clementina", "Cleopatra", "Codrina", "Codruța",
        "Constantin", "Constantina", "Constanța", "Consuela", "Coralia", "Corina", "Cornel", "Cornelia", "Cosmin", "Cosmina", "Crenguța", "Crina", "Cristian", "Cristina", "Cristinel", "Cătălina", "Dacian", "Daciana", "Dafina", "Daiana",
        "Dalia", "Dan", "Dana", "Daniel", "Daniela", "Daria", "Dariana", "Darius", "Delia", "Demetra", "Denisa", "Despina", "Diana", "Dida", "Didina", "Dimitrie", "Dimitrina", "Dina", "Dinu", "Dochia",
        "Doina", "Domnica", "Dora", "Dorel", "Doriana", "Dorin", "Dorina", "Dorli", "Draga", "Dumitra", "Dumitrana", "Dumitru", "Ecaterina", "Edgar", "Eduard", "Eftimia", "Eftimie", "Elena", "Eleonora", "Eliana",
        "Elisabeta", "Elisaveta", "Eliza", "Elodia", "Elvira", "Emanuela", "Emil", "Emilia", "Erica", "Ernest", "Estera", "Eufrosina", "Eugen", "Eugenia", "Eusebia", "Eva", "Evanghelina", "Evelina", "Fabia", "Fabian",
        "Fabiana", "Felicia", "Felix", "Filofteia", "Fiona", "Flavia", "Flaviu", "Floare", "Floarea", "Flora", "Florentin", "Florentina", "Florența", "Floriana", "Florica", "Florin", "Florina", "Francesca", "Frusina", "Gabriela",
        "Gavril", "Geanina", "Gelu", "Gențiana", "George", "Georgeta", "Georgia", "Georgiana", "Geta", "Gheorghe", "Gheorghita", "Gheorghiță", "Gherghina", "Gianina", "Gina", "Giorgiana", "Grațiana", "Grațiela", "Grigore", "Henrieta",
        "Heracleea", "Horea", "Horia", "Hortensia", "Iancu", "Iasmina", "Ica", "Ileana", "Ilie", "Ilieș", "Ilinca", "Ilona", "Ina", "Ioan", "Ioana", "Ioanina", "Iolanda", "Ion", "Ionela", "Ionelia",
        "Iosefina", "Iosif", "Iridenta", "Irina", "Iris", "Isabela", "Iulia", "Iulian", "Iuliana", "Iuliu", "Iustin", "Iustina", "Iustinian", "Ivan", "Ivona", "Izabela", "Jana", "Janeta", "Janina", "Jasmina",
        "Jeana", "Julia", "Julieta", "Larisa", "Laur", "Laura", "Laurentiu", "Laurenția", "Lavinia", "Lazar", "Leana", "Lelia", "Leonard", "Leontin", "Leontina", "Leopoldina", "Letiția", "Lia", "Liana", "Lidia",
        "Ligia", "Lili", "Liliana", "Lioara", "Livia", "Liviu", "Loredana", "Lorelei", "Lorena", "Lorin", "Luana", "Lucia", "Lucian", "Luciana", "Lucreția", "Ludmila", "Ludovica", "Luiza", "Luminița", "Lăcrămioara",
        "Magdalena", "Maia", "Malvina", "Manuela", "Mara", "Marcel", "Marcela", "Marcheta", "Marga", "Margareta", "Maria", "Marian", "Mariana", "Mariano", "Maricica", "Marilena", "Marina", "Marinela", "Mario", "Marioara",
        "Marta", "Matei", "Matilda", "Maximilian", "Melania", "Melina", "Mihaela", "Mihai", "Mihail", "Mihailo", "Milena", "Mina", "Minodora", "Mioara", "Mirabela", "Mircea", "Mirela", "Mirona", "Miruna", "Mona",
        "Monalisa", "Monica", "Mădălina", "Mălina", "Mărioara", "Măriuca", "Nadia", "Narcisa", "Natalia", "Natașa", "Nicolae", "Nicolai", "Nicolao", "Nicolau", "Nicoleta", "Niculina", "Nidia", "Noemi", "Nora", "Norica",
        "Oana", "Octavia", "Octavian", "Octaviana", "Ofelia", "Olga", "Olimpia", "Olimpiu", "Olivia", "Ortansa", "Oscar", "Otilia", "Ovidie", "Ovidiu", "Ozana", "Pamela", "Paraschiva", "Patricia", "Paula", "Paulica",
        "Paulina", "Pavel", "Petre", "Petronela", "Petru", "Petruța", "Pompilia", "Profira", "Rada", "Radu", "Rafael", "Rafail", "Rafila", "Raluca", "Ramona", "Raul", "Razvan", "Rebeca", "Renata", "Rica",
        "Robert", "Roberta", "Robertina", "Rodica", "Romanița", "Romeo", "Romina", "Roxana", "Roxelana", "Roza", "Rozalia", "Ruxanda", "Ruxandra", "Sabin", "Sabina", "Sabrina", "Safta", "Salomea", "Sanda", "Saveta",
        "Savina", "Sebastian", "Semenica", "Sergiu", "Sever", "Severina", "Sidonia", "Silvana", "Silvia", "Silviana", "Silviu", "Simina", "Simona", "Smaranda", "Sofia", "Sonia", "Sorana", "Sorin", "Sorina", "Sorinel",
        "Speranța", "Stana", "Stanca", "Stefan", "Stela", "Steliana", "Steluța", "Suzana", "Svetlana", "Sânziana", "Tamara", "Tania", "Tatiana", "Teea", "Teodor", "Teodora", "Teodosia", "Teona", "Tiberia", "Tiberiu",
        "Timea", "Tinca", "Tincuța", "Toma", "Tudor", "Tudora", "Tudorița", "Tudosia", "Valentin", "Valentina", "Valeria", "Valeriu", "Vanesa", "Varvara", "Vasile", "Vasileios", "Vasilica", "Venera", "Vera", "Veronica",
        "Veta", "Vicenția", "Victor", "Victoria", "Violeta", "Viorel", "Viorela", "Viorica", "Virgil", "Virginia", "Vitalie", "Viviana", "Vlad", "Vladimir", "Voichița", "Voicu", "Xenia", "Zaharia", "Zamfira", "Zaraza",
        "Zenobia", "Zenovia", "Zina", "Zoe", "Zoltan", "Ștefana", "Ștefania"
    ];

    public static array $givenNamesFemale = [
        "Achim", "Adam", "Adela", "Adelaida", "Adelin", "Adi", "Adina", "Adonis", "Adrian", "Adriana", "Agatha", "Agnos", "Aida", "Albert", "Aldea", "Aleodor", "Alex", "Alexandru", "Alexe", "Alin",
        "Alina", "Alisa", "Alistar", "Amalia", "Amedeu", "Amira", "Amza", "Ana", "Anamaria", "Anatolie", "Anca", "Anda", "Andreea", "Andrei", "Angel", "Angela", "Anghel", "Anghelina", "Anica", "Aniela",
        "Anisoara", "Antim", "Anton", "Antonia", "Antonie", "Antoniu", "Arian", "Ariana", "Ariela", "Aristide", "Arsenie", "Augustin", "Aurel", "Aurelia", "Aurelian", "Aurică", "Aurora", "Avram", "Axinte", "Aziza",
        "Barbu", "Bartolomeu", "Basarab", "Beatrice", "Bebe", "Beniamin", "Benone", "Bernard", "Berta", "Bianca", "Bogdan", "Brăduț", "Bucur", "Bănel", "Caius", "Camelia", "Camil", "Cantemir", "Carla", "Carmen",
        "Carol", "Casian", "Caterina", "Catrinel", "Cazimir", "Cecilia", "Cedrin", "Cerasela", "Cezar", "Cintia", "Ciprian", "Clara", "Claudia", "Claudiu", "Codin", "Codrin", "Codruț", "Constantin", "Cornel", "Corneliu",
        "Corvin", "Cosmin", "Cosmina", "Costache", "Costel", "Costin", "Crin", "Cristea", "Cristian", "Cristina", "Cristobal", "Cristofor", "Călin", "Cătălin", "Cătălina", "Dacian", "Daciana", "Dalia", "Damian", "Dan",
        "Dana", "Daniel", "Daniela", "Daria", "Darius", "David", "Decebal", "Denis", "Denisa", "Diana", "Dinu", "Doina", "Dominic", "Dorel", "Dorian", "Doriana", "Dorin", "Dorina", "Dorinel", "Dorotea",
        "Doru", "Draga", "Dragoș", "Ducu", "Dumitru", "Edgar", "Edmond", "Eduard", "Eftimie", "Elena", "Elisabeta", "Emanoil", "Emanuel", "Emanuela", "Emanuil", "Emil", "Emilia", "Emilian", "Eremia", "Eric",
        "Erika", "Ernest", "Estera", "Eufrosina", "Eugen", "Eusebiu", "Eustațiu", "Fabian", "Felicia", "Felix", "Filip", "Fiodor", "Flaviu", "Florea", "Florentin", "Florian", "Florica", "Florin", "Florina", "Florinda",
        "Francisc", "Frederic", "Gabi", "Gabriel", "Gabriela", "Gelu", "George", "Georgel", "Georgian", "Georgiana", "Ghenadie", "Gheorghe", "Gheorghiță", "Ghiță", "Gianina", "Gicu", "Gică", "Gina", "Giorgian", "Grațian",
        "Gregorian", "Grigore", "Haralamb", "Haralambie", "Horațiu", "Horea", "Horia", "Iacob", "Iancu", "Ianis", "Ieremia", "Ilarie", "Ilarion", "Ilie", "Ina", "Inocențiu", "Ioan", "Ioana", "Ion", "Ionel",
        "Ionela", "Ionică", "Ionuț", "Iosif", "Irina", "Irinel", "Isabela", "Iulia", "Iulian", "Iuliana", "Iulica", "Iuliu", "Iurie", "Iustin", "Iustina", "Iustinian", "Ivan", "Izabela", "Jacinta", "Jan",
        "Janina", "Jean", "Jenel", "Ladislau", "Larisa", "Lascăr", "Laura", "Laurențiu", "Laurian", "Lavinia", "Lazăr", "Leana", "Lenuța", "Leonard", "Leontin", "Lică", "Lidia", "Liliana", "Liuba", "Livia",
        "Liviu", "Loredana", "Lorin", "Luca", "Lucențiu", "Lucia", "Lucian", "Luciana", "Lucretia", "Lucrețiu", "Ludovic", "Luminita", "Madelaine", "Magda", "Manole", "Manuela", "Mara", "Marcel", "Marcela", "Marcu",
        "Marian", "Mariana", "Marin", "Marina", "Marius", "Marlena", "Marta", "Martin", "Matei", "Maxim", "Maximilian", "Melania", "Mihaela", "Mihai", "Mihail", "Mihnea", "Milena", "Mircea", "Mirela", "Miron",
        "Mitică", "Mitruț", "Monica", "Mugur", "Mugurel", "Mădălin", "Nadia", "Nae", "Narcis", "Narcisa", "Natalia", "Nechifor", "Nelu", "Nichifor", "Nicoară", "Nicodim", "Nicolae", "Nicolaie", "Nicoleta", "Nicu",
        "Niculina", "Niculiță", "Nicușor", "Nicuță", "Norbert", "Norman", "Oana", "Octav", "Octavia", "Octavian", "Octaviu", "Olga", "Olimpia", "Olimpian", "Olimpiu", "Oliviu", "Otilia", "Ovidiu", "Pamfil", "Panagachie",
        "Panait", "Paul", "Paula", "Pavel", "Petre", "Petrică", "Petrișor", "Petronela", "Petru", "Petruț", "Pompiliu", "Pătru", "Rada", "Radu", "Rafael", "Ramona", "Rareș", "Raul", "Raula", "Rebeca",
        "Relu", "Remus", "Renata", "Robert", "Rodica", "Romeo", "Romulus", "Roxana", "Răducu", "Răzvan", "Sabin", "Sabina", "Sanda", "Sandra", "Sandu", "Sara", "Sava", "Sebastian", "Sergiu", "Sever",
        "Severin", "Silvia", "Silvian", "Silviu", "Simi", "Simion", "Simona", "Sinică", "Smaranda", "Sonia", "Sorin", "Sorina", "Stan", "Stancu", "Stefana", "Stela", "Stelian", "Suzana", "Tatiana", "Teodor",
        "Teodora", "Teofil", "Teohari", "Tereza", "Theodor", "Tiberiu", "Timea", "Timotei", "Tina", "Titus", "Todor", "Toma", "Traian", "Tudor", "Tudora", "Valentin", "Valentina", "Valeria", "Valeriu", "Valter",
        "Vanesa", "Vasile", "Vasilica", "Vasilică", "Venera", "Veniamin", "Veronica", "Vicențiu", "Victor", "Vincențiu", "Violeta", "Viorel", "Viorica", "Virginia", "Visarion", "Vlad", "Vladimir", "Vladimira", "Vlaicu", "Voicu",
        "Xenia", "Zamfir", "Zeno", "Zoe", "Șerban", "Ștefan"
    ];

    public static array $familyNames = [
        "Achim", "Adam", "Albu", "Aldea", "Alexa", "Alexandrescu", "Alexandru", "Alexe", "Andrei", "Anghel", "Antal", "Anton", "Apostol", "Ardelean", "Ardeleanu", "Avram", "Baciu", "Badea", "Balan", "Balint",
        "Banica", "Banu", "Barbu", "Barbulescu", "Bejan", "Belciu", "Biro", "Blaga", "Boboc", "Bodea", "Bogdan", "Bota", "Botezatu", "Bratu", "Bucur", "Buda", "Bunea", "Burlacu", "Buzatu", "Caba",
        "Calin", "Candea", "Capra", "Caragea", "Catana", "Catanescu", "Cazacu", "Chiriac", "Chirila", "Chirita", "Chis", "Chivu", "Cimpeanu", "Cioaba", "Cioara", "Ciobanu", "Ciocan", "Ciolacu", "Cioran", "Ciorba",
        "Cojocaru", "Coman", "Constantin", "Constantinescu", "Cornea", "Cosma", "Costache", "Costea", "Costin", "Covaci", "Cozma", "Craciun", "Craioveanu", "Cretu", "Crisan", "Cristea", "Cristescu", "Croitoru", "Cruceru", "Cucu",
        "Culea", "Damian", "Dan", "Danciu", "Danila", "Dascalu", "David", "Diaconescu", "Diaconu", "Dima", "Dinca", "Dinescu", "Dinu", "Dobre", "Dobrescu", "Dogaru", "Dorobantu", "Dragan", "Draghici", "Dragoi",
        "Dragomir", "Dumitrache", "Dumitrascu", "Dumitrescu", "Dumitriu", "Dumitru", "Duta", "Enache", "Ene", "Farcas", "Filimon", "Filip", "Florea", "Florescu", "Fodor", "Fratila", "Frunza", "Gabor", "Gal", "Ganea",
        "Gavril", "Gavrila", "Georgescu", "Gheorghe", "Gheorghita", "Gheorghiu", "Gherman", "Ghita", "Giurgiu", "Grecu", "Grigoras", "Grigore", "Grigorescu", "Grosu", "Groza", "Gruia", "Guran", "Hancu", "Harabagiu", "Hodor",
        "Horvat", "Horvath", "Iacob", "Iancu", "Ichim", "Ignat", "Ilie", "Iliescu", "Ion", "Ionescu", "Ionica", "Ionita", "Iordache", "Iorga", "Iosif", "Irimia", "Ispas", "Istrate", "Ivan", "Ivascu",
        "Kiss", "Kovacs", "Lazar", "Luca", "Lungu", "Lupu", "Macovei", "Maftei", "Man", "Manea", "Manolache", "Manole", "Marcu", "Marginean", "Marian", "Marin", "Marinescu", "Martin", "Mateescu", "Matei",
        "Maxim", "Mazilu", "Micu", "Mihai", "Mihaila", "Mihailescu", "Mihalache", "Mihalcea", "Milea", "Militaru", "Mircea", "Mirea", "Miron", "Miu", "Mocanu", "Moga", "Moise", "Moldovan", "Moldoveanu", "Molnar",
        "Morar", "Moraru", "Muntean", "Munteanu", "Muresan", "Musat", "Nagy", "Nastase", "Neacsu", "Neagoe", "Neagu", "Neamtu", "Nechita", "Necula", "Nedelcu", "Negoita", "Negrea", "Negru", "Nemes", "Nica",
        "Nicoara", "Nicolae", "Nicolescu", "Niculae", "Niculescu", "Nistor", "Nita", "Nitu", "Oancea", "Olariu", "Olaru", "Oltean", "Olteanu", "Oprea", "Opris", "Paduraru", "Pana", "Panait", "Paraschiv", "Parvu",
        "Pasca", "Pascu", "Patrascu", "Paun", "Pavel", "Petcu", "Peter", "Petre", "Petrea", "Petrescu", "Pintea", "Pintilie", "Pirvu", "Pop", "Popa", "Popescu", "Popovici", "Preda", "Prodan", "Puiu",
        "Radoi", "Radu", "Radulescu", "Roman", "Rosca", "Rosu", "Rotaru", "Rus", "Rusu", "Sabau", "Sandor", "Sandu", "Sarbu", "Sava", "Savu", "Serban", "Sima", "Simion", "Simionescu", "Simon",
        "Sirbu", "Soare", "Solomon", "Staicu", "Stan", "Stanciu", "Stancu", "Stanescu", "Stefan", "Stefanescu", "Stoian", "Stoica", "Stroe", "Suciu", "Szabo", "Szasz", "Szekely", "Tamas", "Tanase", "Tataru",
        "Teodorescu", "Toader", "Toma", "Tomescu", "Toth", "Trandafir", "Trif", "Trifan", "Tudor", "Tudorache", "Tudose", "Turcu", "Ungureanu", "Ursu", "Vaduva", "Varga", "Vasile", "Vasilescu", "Vasiliu", "Veres",
        "Vintila", "Visan", "Vlad", "Voicu", "Voinea", "Zaharia", "Zamfir"
    ];
}

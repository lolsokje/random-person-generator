<?php

namespace LilPecky\DriverGenerator\Providers\ro_MD;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Achim", "Adam", "Adelin", "Adi", "Adonis", "Adrian", "Agnos", "Albert", "Aleodor", "Alex", "Alexandru", "Alexe", "Alin", "Alistar", "Amedeu", "Amza", "Anatolie", "Andrei", "Angel", "Anghel",
        "Antim", "Anton", "Antonie", "Antoniu", "Arian", "Aristide", "Arsenie", "Artur", "Augustin", "Aurel", "Aurelian", "Aurică", "Avram", "Axinte", "Barbu", "Bartolomeu", "Basarab", "Bebe", "Beniamin", "Benone",
        "Bernard", "Bogdan", "Boris", "Brăduț", "Bucur", "Bănel", "Caius", "Calin", "Camil", "Cantemir", "Carol", "Casian", "Cazimir", "Cedrin", "Cezar", "Ciprian", "Claudiu", "Codin", "Codrin", "Codruț",
        "Constantin", "Cornel", "Corneliu", "Corvin", "Cosmin", "Costache", "Costel", "Costin", "Crin", "Cristea", "Cristian", "Cristobal", "Cristofor", "Călin", "Cătălin", "Dacian", "Damian", "Dan", "Daniel", "Darius",
        "David", "Decebal", "Denis", "Dinu", "Dominic", "Dorel", "Dorian", "Dorin", "Dorinel", "Doru", "Dragos", "Dragoș", "Ducu", "Dumitru", "Edgar", "Edmond", "Eduard", "Eftimie", "Emanoil", "Emanuel",
        "Emanuil", "Emil", "Emilian", "Eremia", "Eric", "Ernest", "Eugen", "Eusebiu", "Eustațiu", "Fabian", "Felix", "Filip", "Fiodor", "Flaviu", "Florea", "Florentin", "Florian", "Florin", "Francisc", "Frederic",
        "Gabi", "Gabriel", "Gelu", "George", "Georgel", "Georghe", "Georgian", "Ghenadie", "Gheorghe", "Gheorghiță", "Ghiță", "Gicu", "Gică", "Giorgian", "Grațian", "Gregorian", "Grigore", "Haralamb", "Haralambie", "Horațiu",
        "Horea", "Horia", "Iacob", "Iancu", "Ianis", "Ieremia", "Igor", "Ilarie", "Ilarion", "Ilie", "Inocențiu", "Ioan", "Ion", "Ionel", "Ionică", "Ionuț", "Iosif", "Irinel", "Iulian", "Iuliu",
        "Iurie", "Iustin", "Iustinian", "Ivan", "Jan", "Jean", "Jenel", "Ladislau", "Lascăr", "Laurențiu", "Laurian", "Lazăr", "Leonard", "Leontin", "Lică", "Liviu", "Lorin", "Luca", "Lucențiu", "Lucian",
        "Lucrețiu", "Ludovic", "Manole", "Marcel", "Marcu", "Marian", "Marin", "Marius", "Martin", "Matei", "Maxim", "Maximilian", "Mihai", "Mihail", "Mihnea", "Mircea", "Miron", "Mitică", "Mitruț", "Mugur",
        "Mugurel", "Mădălin", "Nae", "Narcis", "Nechifor", "Nelu", "Nichifor", "Nicoară", "Nicodim", "Nicolae", "Nicolai", "Nicolaie", "Nicu", "Niculiță", "Nicușor", "Nicuță", "Norbert", "Norman", "Octav", "Octavian",
        "Octaviu", "Oleg", "Olesea", "Olimpian", "Olimpiu", "Oliviu", "Ovidiu", "Pamfil", "Panagachie", "Panait", "Paul", "Pavel", "Petre", "Petrică", "Petrișor", "Petru", "Petruț", "Pompiliu", "Pătru", "Radu",
        "Rafael", "Rareș", "Raul", "Razvan", "Relu", "Remus", "Robert", "Romeo", "Romulus", "Răducu", "Răzvan", "Sabin", "Sandu", "Sava", "Sebastian", "Sergiu", "Sever", "Severin", "Silvian", "Silviu",
        "Simi", "Simion", "Sinică", "Sorin", "Stan", "Stancu", "Stefan", "Stelian", "Teodor", "Teofil", "Teohari", "Theodor", "Tiberiu", "Timotei", "Titus", "Todor", "Toma", "Traian", "Tudor", "Valentin",
        "Valeriu", "Valter", "Vasile", "Vasili", "Vasilică", "Veniamin", "Viaceslav", "Vicențiu", "Victor", "Vincențiu", "Viorel", "Visarion", "Vitalie", "Vlad", "Vladimir", "Vlaicu", "Voicu", "Zaharia", "Zamfir", "Zeno",
        "Zinovii", "Șerban", "Ștefan"
    ];

    public static array $givenNamesFemale = [
        "Ada", "Adela", "Adelaida", "Adelina", "Adina", "Adriana", "Agata", "Aglaia", "Agripina", "Aida", "Ala", "Alberta", "Albertina", "Alexandra", "Alexandrina", "Alice", "Alida", "Alina", "Alis", "Alma",
        "Amalia", "Amanda", "Amelia", "Ana", "Anabela", "Anaida", "Anamaria", "Anastasia", "Anca", "Ancuța", "Anda", "Andra", "Andrada", "Andreea", "Anemona", "Aneta", "Angela", "Anghelina", "Ani", "Anica",
        "Anișoara", "Antoaneta", "Antonela", "Antonia", "Antonina", "Anuța", "Ariadna", "Ariana", "Arina", "Aristița", "Artemisa", "Astrid", "Atena", "Augustina", "Aura", "Aurelia", "Aureliana", "Aurica", "Aurora", "Beatrice",
        "Betina", "Bianca", "Blanduzia", "Bogdana", "Brândușa", "Camelia", "Carina", "Carla", "Carmen", "Carmina", "Carolina", "Casandra", "Casiana", "Catalina", "Caterina", "Catinca", "Catrina", "Catrinel", "Cecilia", "Celia",
        "Cerasela", "Cezara", "Cipriana", "Clara", "Clarisa", "Claudia", "Clementina", "Cleopatra", "Codrina", "Codruța", "Constantina", "Constanța", "Consuela", "Coralia", "Corina", "Cornelia", "Cosmina", "Crenguța", "Crina", "Cristina",
        "Cătălina", "Daciana", "Dafina", "Daiana", "Dalia", "Dana", "Daniela", "Daria", "Dariana", "Delia", "Demetra", "Denisa", "Despina", "Diana", "Dida", "Didina", "Dimitrina", "Dina", "Dochia", "Doina",
        "Domnica", "Dora", "Doriana", "Dorina", "Dorli", "Draga", "Dumitra", "Dumitrana", "Ecaterina", "Eftimia", "Elena", "Eleonora", "Eliana", "Elisabeta", "Elisaveta", "Eliza", "Elodia", "Elvira", "Emanuela", "Emilia",
        "Erica", "Estera", "Eufrosina", "Eugenia", "Eusebia", "Eva", "Evanghelina", "Evelina", "Fabia", "Fabiana", "Felicia", "Filofteia", "Fiona", "Flavia", "Floare", "Floarea", "Flora", "Florentina", "Florența", "Floriana",
        "Florica", "Florina", "Francesca", "Frusina", "Gabriela", "Geanina", "Genoveva", "Gențiana", "Georgeta", "Georgia", "Georgiana", "Geta", "Gherghina", "Gianina", "Gina", "Giorgiana", "Grațiana", "Grațiela", "Henrieta", "Heracleea",
        "Hortensia", "Iana", "Iasmina", "Ica", "Ileana", "Ilinca", "Ilona", "Ina", "Ioana", "Ioanina", "Iolanda", "Ionela", "Ionelia", "Iosefina", "Iridenta", "Irina", "Iris", "Isabela", "Iulia", "Iuliana",
        "Iustina", "Ivona", "Izabela", "Jana", "Janeta", "Janina", "Jasmina", "Jeana", "Julia", "Julieta", "Larisa", "Laura", "Laurenția", "Lavinia", "Leana", "Lelia", "Leontina", "Leopoldina", "Letiția", "Lia",
        "Liana", "Lidia", "Ligia", "Lili", "Liliana", "Lioara", "Livia", "Loredana", "Lorelei", "Lorena", "Luana", "Lucia", "Luciana", "Lucretia", "Lucreția", "Ludmila", "Ludovica", "Luiza", "Luminița", "Lăcrămioara",
        "Magdalena", "Maia", "Malvina", "Manuela", "Mara", "Marcela", "Marcheta", "Marga", "Margareta", "Maria", "Mariana", "Maricica", "Marilena", "Marina", "Marinela", "Marioara", "Marisa", "Marita", "Marta", "Matilda",
        "Melania", "Melina", "Mihaela", "Milena", "Mina", "Minodora", "Mioara", "Mirabela", "Mirela", "Mirona", "Miruna", "Mona", "Monalisa", "Monica", "Mădălina", "Mălina", "Mărioara", "Măriuca", "Nadia", "Narcisa",
        "Natalia", "Natașa", "Nicoleta", "Niculina", "Nidia", "Nina", "Noemi", "Nora", "Norica", "Oana", "Octavia", "Octaviana", "Ofelia", "Olga", "Olimpia", "Olivia", "Ortansa", "Otilia", "Ozana", "Pamela",
        "Paraschiva", "Parascovia", "Patricia", "Paula", "Paulica", "Paulina", "Petronela", "Petruța", "Pompilia", "Profira", "Rada", "Rafila", "Raisa", "Raluca", "Ramona", "Rebeca", "Renata", "Rica", "Roberta", "Robertina",
        "Rodica", "Romanița", "Romina", "Roxana", "Roxelana", "Roza", "Rozalia", "Ruxanda", "Ruxandra", "Sabina", "Sabrina", "Safta", "Salomea", "Sanda", "Saveta", "Savina", "Semenica", "Severina", "Sidonia", "Silvana",
        "Silvia", "Silviana", "Simina", "Simona", "Smaranda", "Sofia", "Sonia", "Sorana", "Sorina", "Speranța", "Stana", "Stanca", "Stela", "Steliana", "Steluța", "Suzana", "Svetlana", "Sânziana", "Taisia", "Tamara",
        "Tania", "Tatiana", "Teea", "Teodora", "Teodosia", "Teona", "Tiberia", "Timea", "Tinca", "Tincuța", "Tudora", "Tudorița", "Tudosia", "Valentina", "Valeria", "Vanesa", "Varvara", "Vasilica", "Venera", "Vera",
        "Veronica", "Veta", "Vicenția", "Victoria", "Violeta", "Viorela", "Viorica", "Virginia", "Viviana", "Voichița", "Xenia", "Zaharia", "Zamfira", "Zaraza", "Zenobia", "Zenovia", "Zina", "Zinaida", "Zoe", "Ștefana",
        "Ștefania"
    ];

    public static array $familyNames = [
        "Achim", "Adam", "Albu", "Aldea", "Alexa", "Alexandrescu", "Alexandru", "Alexe", "Andrei", "Anghel", "Antal", "Antoci", "Anton", "Apostol", "Ardelean", "Ardeleanu", "Arhip", "Avram", "Baciu", "Badea",
        "Balan", "Balint", "Banica", "Banu", "Barbu", "Barbulescu", "Bardasan", "Bejan", "Biro", "Bivol", "Blaga", "Boboc", "Bodea", "Bogdan", "Bostan", "Bota", "Botezatu", "Bratu", "Bucur", "Buda",
        "Bunea", "Burlacu", "Calin", "Caragia", "Caraus", "Casian", "Catana", "Cazacu", "Chiriac", "Chirila", "Chirita", "Chis", "Chistol", "Chivu", "Cimpoes", "Ciobanu", "Ciocan", "Cojocaru", "Coman", "Comendant",
        "Condrat", "Constantin", "Constantinescu", "Corcimari", "Cornea", "Cosma", "Costache", "Costea", "Costin", "Covaci", "Cozma", "Craciun", "Crasmari", "Creanga", "Cretu", "Crisan", "Cristea", "Cristescu", "Croitoru", "Cuciuc",
        "Cucu", "Damian", "Dan", "Danciu", "Danila", "Dascal", "Dascalu", "David", "Diaconescu", "Diaconu", "Dima", "Dinca", "Dinu", "Dobre", "Dobrescu", "Dogaru", "Dragan", "Draghici", "Dragoi", "Dragomir",
        "Dumbrava", "Dumitrache", "Dumitrascu", "Dumitrescu", "Dumitriu", "Dumitru", "Duta", "Eftodi", "Elian", "Enache", "Ene", "Farcas", "Fedeles", "Filimon", "Filip", "Florea", "Florescu", "Foca", "Fodor", "Fratii",
        "Fratila", "Frunza", "Gabor", "Gal", "Ganea", "Gavrila", "Georgescu", "Gheorghe", "Gheorghita", "Gheorghiu", "Gherman", "Ghilezan", "Ghita", "Giurgiu", "Grecu", "Gribincea", "Grigoras", "Grigore", "Grigorescu", "Grosu",
        "Groza", "Guluta", "Hanganu", "Hincu", "Horvath", "Iacob", "Iancu", "Ichim", "Iftodi", "Ignat", "Ilie", "Iliescu", "Ion", "Ionescu", "Ionita", "Ioniuc", "Iordache", "Iorga", "Iosif", "Irimia",
        "Ispas", "Istrate", "Istrati", "Ivan", "Ivascu", "Jeleapov", "Kiss", "Kovacs", "Lazar", "Luca", "Lungu", "Lupu", "Macari", "Macovei", "Maftei", "Malai", "Man", "Manea", "Manolache", "Manole",
        "Marcoci", "Marcu", "Marginean", "Marian", "Marin", "Marinescu", "Martin", "Mateescu", "Matei", "Maxim", "Mazilu", "Melnic", "Mereacre", "Mereuta", "Micu", "Mihai", "Mihaila", "Mihailescu", "Mihalache", "Mihalachi",
        "Mihalcea", "Milea", "Militaru", "Mircea", "Mirea", "Miron", "Miu", "Mocanu", "Moga", "Moise", "Moldovan", "Moldoveanu", "Molnar", "Morar", "Moraru", "Muntean", "Munteanu", "Murariu", "Muresan", "Musat",
        "Nagy", "Nastase", "Neacsu", "Neagoe", "Neagu", "Neamtu", "Nechita", "Necula", "Nedelcu", "Negara", "Negoita", "Negrea", "Negru", "Nemes", "Nica", "Nicoara", "Nicolae", "Nicolescu", "Niculae", "Niculescu",
        "Nistor", "Nita", "Nitu", "Oancea", "Obreja", "Olari", "Olariu", "Olaru", "Oltean", "Olteanu", "Oprea", "Opris", "Paduraru", "Pana", "Panait", "Paraschiv", "Parvu", "Pasca", "Pascari", "Pascu",
        "Patrascu", "Paun", "Pavel", "Petcu", "Peter", "Petre", "Petrea", "Petrescu", "Petric", "Petruhin", "Pintea", "Pintilie", "Pirvu", "Plugaru", "Poenaru", "Pop", "Popa", "Popescu", "Popovici", "Preda",
        "Prodan", "Protopopescu", "Puiu", "Radoi", "Radu", "Radulescu", "Roman", "Rosca", "Rosu", "Rotaru", "Rus", "Rusnac", "Rusu", "Sabau", "Sandor", "Sandu", "Sarbu", "Sava", "Savu", "Serban",
        "Sima", "Simion", "Simionescu", "Simon", "Sirbu", "Soare", "Solomon", "Staicu", "Stan", "Stanciu", "Stancu", "Stanescu", "Stefan", "Stefanescu", "Stoian", "Stoica", "Stroe", "Suciu", "Szabo", "Szasz",
        "Szekely", "Tamas", "Tanase", "Tataru", "Teodorescu", "Toader", "Toma", "Tomescu", "Toth", "Trandafir", "Trif", "Trifan", "Tudor", "Tudorache", "Tudose", "Turcu", "Ungureanu", "Ursu", "Vaduva", "Varga",
        "Vasile", "Vasilescu", "Vasiliu", "Veres", "Vintila", "Visan", "Vlad", "Voicu", "Voinea", "Zaharia", "Zamfir"
    ];
}

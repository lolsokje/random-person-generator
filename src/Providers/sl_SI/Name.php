<?php

namespace LilPecky\DriverGenerator\Providers\sl_SI;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Adam", "Albert", "Albin", "Aleks", "Aleksandar", "Aleksander", "Aleksej", "Alen", "Alex", "Aleš", "Aljaž", "Aljoša", "Alojz", "Alojzij", "Andraž", "Andrej", "Anej", "Anton", "Anže", "Arian",
        "Atila", "Avgust", "Ažbe", "Benjamin", "Bernard", "Bine", "Blaž", "Bogdan", "Bogomir", "Bojan", "Bor", "Boris", "Borut", "Bostjan", "Boštjan", "Božidar", "Branko", "Brin", "Bruno", "Ciril",
        "Cvetko", "Damijan", "Damir", "Damjan", "Dane", "Daniel", "Danijel", "Danilo", "Dare", "Darko", "David", "Davor", "Davorin", "Dejan", "Denis", "Domen", "Dominik", "Dorian", "Dorijan", "Dragan",
        "Drago", "Dražen", "Dušan", "Edin", "Edvard", "Egon", "Elvis", "Emil", "Enej", "Erazem", "Erik", "Ernest", "Ervin", "Ferdinand", "Filip", "Franc", "Franci", "Franjo", "Frančišek", "Gaber",
        "Gabriel", "Gabrijel", "Gal", "Gašper", "Goran", "Gorazd", "Grega", "Gregor", "Hasan", "Hinko", "Ian", "Ignac", "Igor", "Ilian", "Ilija", "Ivan", "Ivo", "Izak", "Izidor", "Iztok",
        "Jaka", "Jakob", "Jan", "Janez", "Jani", "Janko", "Jasmin", "Jaša", "Jernej", "Jon", "Josip", "Joško", "Jošt", "Jože", "Jožef", "Jure", "Jurij", "Karel", "Karl", "Karol",
        "Kevin", "Klemen", "Kristijan", "Kristjan", "Ladislav", "Lado", "Lan", "Laur", "Lazar", "Lenart", "Leon", "Leopold", "Liam", "Loris", "Lovro", "Ludvik", "Luka", "Lukas", "Mai", "Maj",
        "Maks", "Maksim", "Maksimilijan", "Maksimiljan", "Marcel", "Marijan", "Mario", "Marjan", "Mark", "Marko", "Martin", "Matej", "Matevž", "Matic", "Matija", "Matjaž", "Max", "Metod", "Miha", "Mihael",
        "Miklavž", "Milan", "Miloj", "Miloš", "Miran", "Mirko", "Miro", "Miroslav", "Mirsad", "Mitja", "Mladen", "Nace", "Nal", "Natan", "Nejc", "Nenad", "Nik", "Niko", "Nikola", "Nikolaj",
        "Nino", "Oskar", "Oto", "Ožbej", "Patrik", "Pavel", "Petar", "Peter", "Primož", "Rado", "Radovan", "Rafael", "Rajko", "Renato", "Rene", "Robert", "Rok", "Roman", "Rudi", "Rudolf",
        "Samir", "Samo", "Samuel", "Sandi", "Saša", "Sašo", "Sebastijan", "Sebastjan", "Senad", "Sergej", "Silvester", "Silvo", "Simon", "Slavko", "Slobodan", "Srečko", "Stanislav", "Stanko", "Staš", "Stjepan",
        "Stojan", "Svit", "Tadej", "Tai", "Taj", "Tarik", "Teo", "Tevž", "Tian", "Tilen", "Tim", "Timotej", "Tine", "Tjaš", "Tomaž", "Tomislav", "Tone", "Toni", "Tristan", "Urban",
        "Uroš", "Val", "Valentin", "Valter", "Vid", "Viktor", "Viljem", "Vincenc", "Vinko", "Vito", "Vladimir", "Vlado", "Vojko", "Zdenko", "Zdravko", "Zlatko", "Zoran", "Zvonko", "Štefan", "Žak",
        "Žan", "Željko", "Žiga"
    ];

    protected static array $givenNamesFemale = [
        "Adrijana", "Ajda", "Ajla", "Albina", "Aleksandra", "Alenka", "Alina", "Alja", "Alojzija", "Amalija", "Ana", "Ana Marija", "Anamarija", "Anastazija", "Andreja", "Andrejka", "Aneja", "Anela", "Angela", "Anica",
        "Anika", "Anita", "Anja", "Anka", "Antonija", "Barbara", "Bernarda", "Blanka", "Bojana", "Borutka", "Branka", "Breda", "Brigita", "Brina", "Cecilija", "Cvetka", "Damjana", "Danaja", "Danica", "Daniela",
        "Danijela", "Darija", "Darinka", "Darja", "Daša", "Diana", "Dolores", "Doroteja", "Dragana", "Dragica", "Dušanka", "Ela", "Elena", "Eli", "Elizabeta", "Ella", "Ema", "Emilija", "Ena", "Erika",
        "Erna", "Estera", "Eva", "Frančiška", "Gabriela", "Gabrijela", "Gaja", "Gea", "Gloria", "Gordana", "Hana", "Hedvika", "Helena", "Hermina", "Ida", "Ines", "Inja", "Irena", "Iris", "Irma",
        "Iskra", "Iva", "Ivana", "Ivanka", "Ivica", "Iza", "Izabela", "Jana", "Janja", "Jasmina", "Jasna", "Jelena", "Jelka", "Jerca", "Jerneja", "Jolanda", "Jovana", "Jožefa", "Jožica", "Julia",
        "Julija", "Julijana", "Justina", "Kaja", "Karin", "Karla", "Karmen", "Karolina", "Katarina", "Katja", "Kiara", "Kim", "Klara", "Klavdija", "Kristina", "Ksenija", "Lana", "Lara", "Larisa", "Laura",
        "Lea", "Leja", "Lejla", "Lia", "Lidija", "Lija", "Lili", "Lilijana", "Liljana", "Lina", "Liza", "Ljiljana", "Ljubica", "Ljudmila", "Loti", "Lucija", "Luna", "Magda", "Magdalena", "Maja",
        "Majda", "Makrena", "Manca", "Mara", "Marela", "Marica", "Marija", "Marijana", "Marina", "Marinka", "Marjana", "Marjanca", "Marjeta", "Marjetka", "Marta", "Martina", "Maruša", "Mateja", "Maticka", "Matilda",
        "Maša", "Melita", "Meta", "Metka", "Mia", "Mihaela", "Mija", "Mila", "Milena", "Milica", "Milka", "Mina", "Mira", "Mirjam", "Mirjana", "Mirna", "Miroslava", "Mirta", "Mojca", "Monika",
        "Nada", "Nadija", "Nadja", "Naja", "Nastja", "Natalija", "Nataša", "Neja", "Neli", "Nena", "Nevenka", "Neža", "Nika", "Nikolina", "Nina", "Nives", "Nuša", "Olga", "Patricija", "Pavla",
        "Petra", "Pia", "Pika", "Polona", "Polonca", "Rebeka", "Renata", "Romana", "Rozalija", "Sabina", "Sandra", "Sanja", "Sara", "Savina", "Saša", "Sebastijana", "Silva", "Simona", "Slavica", "Slavka",
        "Slađana", "Sofia", "Sofija", "Sonja", "Stanislava", "Stanka", "Stela", "Suzana", "Tadeja", "Taja", "Tajda", "Tamara", "Tanja", "Tara", "Tatjana", "Tea", "Teja", "Terezija", "Tia", "Tiana",
        "Tihana", "Tija", "Tina", "Tinkara", "Tisa", "Tjaša", "Ula", "Urša", "Urška", "Valentina", "Valerija", "Vanessa", "Vanja", "Vera", "Veronika", "Vesna", "Vida", "Viktorija", "Vita", "Vlasta",
        "Zala", "Zara", "Zarja", "Zdenka", "Zinka", "Zlata", "Zlatka", "Zofija", "Zoja", "Zora", "Zvonka", "Špela", "Štefanija", "Štefka", "Žana", "Živa"
    ];

    protected static array $familyNames = [
        "Ambrožič", "Babič", "Bajc", "Bartol", "Bergant", "Bevc", "Bezjak", "Bizjak", "Blatnik", "Blažič", "Bogataj", "Božič", "Bregar", "Breznik", "Bukovec", "Cerar", "Cestnik", "Cvetko", "Debeljak", "Demšar",
        "Dolenc", "Dolinar", "Dolinšek", "Erjavec", "Eržen", "Ferjančič", "Filipič", "Fras", "Furlan", "Gajšek", "Godec", "Golob", "Gomboc", "Gorenc", "Gorenjak", "Gorjup", "Gregorič", "Gregorčič", "Hafner", "Hodžić",
        "Horvat", "Hozjan", "Hočevar", "Hren", "Hribar", "Hribernik", "Hrovat", "Humar", "Ilić", "Ivančič", "Jamnik", "Janežič", "Jarc", "Javornik", "Jazbec", "Jelen", "Jenko", "Jereb", "Jerič", "Jerman",
        "Jovanović", "Jug", "Kalan", "Kastelic", "Kaučič", "Kavčič", "Klemenčič", "Knez", "Kobal", "Kocjančič", "Kodrič", "Kokalj", "Kokol", "Kolar", "Kolarič", "Kolenc", "Koren", "Korošec", "Kos", "Kosi",
        "Kotnik", "Kovač", "Kovačević", "Kovačič", "Kozinc", "Kočevar", "Košir", "Koželj", "Krajnc", "Kralj", "Kramar", "Kramberger", "Kranjc", "Kranjec", "Kregar", "Kristan", "Krivec", "Križaj", "Kuhar", "Kumer",
        "Lah", "Lavrič", "Lazar", "Leban", "Lebar", "Lenarčič", "Lesjak", "Leskovar", "Lešnik", "Likar", "Logar", "Majcen", "Marković", "Markovič", "Marolt", "Mavrič", "Maček", "Medved", "Meglič", "Mekinda",
        "Mihelič", "Miklavčič", "Mlakar", "Mlinar", "Mlinarič", "Mohorič", "Močnik", "Mrak", "Nemec", "Nikolić", "Novak", "Oblak", "Ocvirk", "Oman", "Orel", "Pavlin", "Pavlič", "Perko", "Petek", "Petrič",
        "Petrović", "Petrovič", "Pečnik", "Pintar", "Pintarič", "Pirc", "Pirnat", "Podgoršek", "Pogačar", "Pogačnik", "Popović", "Potočnik", "Povše", "Primožič", "Pušnik", "Rajh", "Rak", "Ramšak", "Rejc", "Resnik",
        "Ribič", "Rozman", "Rožič", "Rožman", "Rupnik", "Rus", "Rutar", "Savić", "Sever", "Simonič", "Simčič", "Sitar", "Skok", "Skrbinšek", "Smrekar", "Stopar", "Sušnik", "Svetičič", "Tavčar", "Tomažič",
        "Tomšič", "Toplak", "Tratnik", "Trček", "Turk", "Uršič", "Vidic", "Vidmar", "Vidovič", "Vizjak", "Vodopivec", "Volk", "Vovk", "Zadravec", "Zajc", "Zakrajšek", "Zalar", "Zalokar", "Založnik", "Zavrl",
        "Zemljič", "Zidar", "Zorko", "Zorman", "Zupan", "Zupanc", "Zupančič", "Zver", "Čeh", "Černe", "Čuk", "Šinkovec", "Škof", "Škrinjar", "Šmid", "Štajdohar", "Štampar", "Štefančič", "Štrukelj", "Šuštar",
        "Žagar", "Železnik", "Žibert", "Žižek", "Žnidaršič"
    ];
}

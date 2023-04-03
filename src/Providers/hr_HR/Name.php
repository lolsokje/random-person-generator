<?php

namespace LilPecky\RandomPersonGenerator\Providers\hr_HR;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Adam", "Adrian", "Alan", "Aleksandar", "Alen", "Andrej", "Andrija", "Ante", "Anton", "Antonio", "Antun", "Augustin", "Bartol", "Benedikt", "Benjamin", "Blaž", "Bogdan", "Boris", "Borna", "Božidar",
        "Branislav", "Bruno", "Damjan", "Daniel", "Danijel", "Danko", "Dario", "David", "Denis", "Dinko", "Dino", "Domagoj", "Dominik", "Dorian", "Dorijan", "Dragan", "Dražen", "Duje", "Dušan", "Edi",
        "Emanuel", "Emil", "Filip", "Fran", "Frane", "Franjo", "Franko", "Gabriel", "Gabrijel", "Goran", "Grgur", "Hrvoje", "Igor", "Ilija", "Ivan", "Ivano", "Ivica", "Ivor", "Jakov", "Jakša",
        "Josip", "Juraj", "Jure", "Jurica", "Karlo", "Krešimir", "Kristijan", "Lazar", "Leo", "Leon", "Leonardo", "Ljubomir", "Lovre", "Lovro", "Lucijan", "Luka", "Lukas", "Marijan", "Marin", "Marino",
        "Mario", "Marko", "Martin", "Mate", "Matej", "Mateo", "Matija", "Matko", "Mihael", "Mijo", "Milan", "Mile", "Miro", "Mislav", "Mladen", "Nenad", "Niko", "Nikola", "Nino", "Noa",
        "Patrik", "Pavao", "Petar", "Rafael", "Renato", "Robert", "Roko", "Romano", "Sebastijan", "Stipe", "Stjepan", "Sven", "Teo", "Tihomir", "Tin", "Toma", "Tomislav", "Toni", "Tonči", "Tvrtko",
        "Valentino", "Vanja", "Vedran", "Velebit", "Vice", "Vid", "Viktor", "Vinko", "Vito", "Vjekoslav", "Zdenko", "Zlatko", "Zoran", "Zvonimir", "Šime", "Šimo", "Šimun", "Žarko", "Želimir", "Željko",
        "Živko"
    ];

    public static array $givenNamesFemale = [
        "Adela", "Adriana", "Agata", "Ana", "Anamarija", "Anastazija", "Andrea", "Anita", "Anja", "Antonela", "Antonija", "Anđela", "Barbara", "Bernarda", "Božica", "Branka", "Danica", "Darija", "Diana", "Dora",
        "Dorotea", "Doroteja", "Dubravka", "Dunja", "Džana", "Edita", "Ela", "Elena", "Ella", "Ema", "Ena", "Eva", "Franka", "Gabrijela", "Gordana", "Hana", "Helena", "Ines", "Irena", "Iris",
        "Iva", "Ivana", "Ivona", "Jadranka", "Jana", "Janja", "Jasenka", "Jasminka", "Jelena", "Jerka", "Josipa", "Kaja", "Karla", "Karmen", "Katarina", "Katja", "Klara", "Klaudija", "Korina", "Kornelija",
        "Kristina", "Ksenija", "Lana", "Lara", "Larisa", "Laura", "Lea", "Lena", "Leona", "Lidija", "Ljiljana", "Lora", "Lorena", "Lucija", "Magdalena", "Maja", "Manuela", "Mara", "Marija", "Marina",
        "Marinka", "Marta", "Martina", "Matea", "Matilda", "Maša", "Melani", "Melanie", "Mia", "Mihaela", "Mila", "Milena", "Mirela", "Mirjana", "Mirna", "Monika", "Nada", "Nataša", "Neda", "Nela",
        "Nevena", "Nika", "Nikolina", "Nina", "Nora", "Olivera", "Paola", "Patricia", "Paula", "Petra", "Rafaela", "Renata", "Romana", "Sanja", "Sara", "Silvija", "Simona", "Slađana", "Sofija", "Sonja",
        "Stela", "Stella", "Suzana", "Tajana", "Tamara", "Tara", "Tea", "Tena", "Tia", "Tihana", "Tina", "Valentina", "Vanesa", "Vanessa", "Vanja", "Vedrana", "Veronika", "Vesna", "Vida", "Viktorija",
        "Vlatka", "Zdravka", "Zlata", "Zrinka", "Žana", "Željana", "Željka"
    ];

    public static array $familyNames = [
        "Abramović", "Adamić", "Antić", "Antunović", "Babić", "Blažević", "Bogdanić", "Bogdanović", "Bošnjak", "Božić", "Brezovec", "Brkić", "Brož", "Delić", "Domitrović", "Dragić", "Dragović", "Filipović", "Franić", "Franjić",
        "Galić", "Grgić", "Horvat", "Horvatinčić", "Ivanković", "Ivanović", "Janković", "Jelić", "Jerčić", "Jurić", "Juriša", "Kaić", "Kasun", "Knežević", "Kovač", "Kovačević", "Kovačić", "Košar", "Kralj", "Kranjčar",
        "Kranjčević", "Križanac", "Krupić", "Kušec", "Leš", "Lovren", "Lovrić", "Lučić", "Mandić", "Mandžukić", "Maras", "Marić", "Marković", "Martinović", "Marušić", "Matijašević", "Matić", "Mikulić", "Milić", "Miličević",
        "Milošević", "Mišković", "Mlakar", "Modrić", "Neretljak", "Nikolić", "Novak", "Novaković", "Novosel", "Pavić", "Pavletić", "Perić", "Perković", "Petrović", "Plavčić", "Plečko", "Puljić", "Radić", "Radoš", "Raić-Sudar",
        "Rakitić", "Ratković", "Rukavina", "Runjić", "Rustja", "Savić", "Simić", "Srna", "Stanković", "Tomić", "Tomišić", "Tomčić", "Topić", "Tudor", "Tuđman", "Varga", "Vasilj", "Vidović", "Vincetić", "Vinković",
        "Vlahović", "Vlašić", "Vojnović", "Vuka", "Vuković", "Zorić", "Zubčić", "Zvonarić", "Ćorluka", "Čarapina", "Čolak", "Čupić", "Đurić", "Šarić", "Šimić", "Šimičić", "Škoro", "Škrlec", "Špoljarić", "Šušak",
        "Šušnjara", "Župan"
    ];
}

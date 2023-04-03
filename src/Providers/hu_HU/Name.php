<?php

namespace LilPecky\RandomPersonGenerator\Providers\hu_HU;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Albert", "Andor", "András", "Antal", "Attila", "Balázs", "Barna", "Barnabás", "Bence", "Bendegúz", "Benedek", "Benjámin", "Botond", "Béla", "Csaba", "Domonkos", "Dorián", "Dániel", "Dávid", "Dénes",
        "Dömötör", "Eduárd", "Edvin", "Endre", "Ernő", "Ferenc", "Feró", "Fülöp", "Gedeon", "Gergely", "Gusztáv", "Gyula", "Gyuri", "Gábor", "Géza", "Hunor", "Ignác", "Imre", "István", "Jenő",
        "Jácint", "János", "József", "Kasimir", "Kazimír", "Kelemen", "Kevin", "Kornél", "Kristóf", "Kálmán", "Károly", "Levente", "Leó", "László", "Lóránd", "Lőrinc", "Mihály", "Miklós", "Milán", "Márió",
        "Mátyás", "Mózes", "Nikolasz", "Noel", "Nándor", "Olivér", "Ottó", "Patrik", "Pongrác", "Pál", "Péter", "Rajmund", "Richárd", "Rudolf", "Róbert", "Sebestyén", "Soma", "Szentgyörgy", "Szervác", "Sámuel",
        "Sándor", "Tamás", "Tibor", "Tivadar", "Tódor", "Tóni", "Töhötöm", "Tünde", "Vencel", "Viktor", "Vilmos", "Vince", "Zalán", "Zoltán", "Zsigmond", "Zsolt", "Zsoltán", "Zsombor", "Zénó", "Zétény",
        "Ábel", "Ádám", "Ákos", "Ármin", "Áron", "Árpád", "Ödön"
    ];

    public static array $givenNamesFemale = [
        "Ada", "Adrienn", "Adél", "Alexa", "Alida", "Amália", "Anasztázia", "Andrea", "Anett", "Angéla", "Anikó", "Anna", "Antónia", "Apolónia", "Aranka", "Aurélia", "Barbara", "Beatrix", "Bettina", "Beáta",
        "Bianka", "Boglárka", "Boróka", "Brigitta", "Béla", "Cecília", "Csenge", "Dalma", "Dorina", "Dorottya", "Dóra", "Edina", "Edit", "Ela", "Elena", "Eleonóra", "Eliza", "Emőke", "Erzsébet", "Evelin",
        "Fanni", "Fatime", "Felicitász", "Flóra", "Friderika", "Gabriella", "Georgina", "Gitta", "Gizella", "Gréta", "Gyöngyi", "Hajnalka", "Hanga", "Hanna", "Hedvig", "Heléna", "Henriett", "Henrietta", "Hilda", "Ilona",
        "Irén", "Izabella", "Johanna", "Jolán", "Judit", "Julianna", "Jázmin", "Júlia", "Kamilla", "Karina", "Kata", "Katalin", "Katinka", "Kincső", "Kitti", "Klaudia", "Klára", "Kornélia", "Krisztina", "Kíra",
        "Lara", "Laura", "Lea", "Lenke", "Leonor", "Lili", "Liliána", "Lilla", "Linda", "Liza", "Loretta", "Luca", "Lujza", "Léna", "Lívia", "Magdolna", "Magyar", "Maja", "Manci", "Manó",
        "Margit", "Mari", "Mariann", "Marianna", "Marietta", "Martina", "Matild", "Mazsi", "Melinda", "Mia", "Milla", "Mirella", "Mária", "Márta", "Márton", "Míra", "Mónika", "Nadia", "Nikoletta", "Nóra",
        "Olívia", "Orsolya", "Otília", "Panna", "Patrícia", "Paulina", "Petra", "Piroska", "Ramóna", "Rebeka", "Rita", "Réka", "Róza", "Sarolta", "Sas", "Sebestyén", "Selly", "Sofia", "Soma", "Szabina",
        "Szandra", "Szilvia", "Szonja", "Szvetlana", "Sára", "Tamara", "Teodóra", "Teréz", "Tímea", "Tünde", "Valéria", "Vanessza", "Vera", "Veronika", "Viktória", "Vilma", "Viorica", "Virág", "Vivien", "Zara",
        "Zita", "Zsanett", "Zsuzsa", "Zsófia", "Zsóka", "Ágnes", "Éva"
    ];

    public static array $familyNames = [
        "Ada", "Adrienn", "Adél", "Alida", "Amália", "Anasztázia", "Anett", "Angéla", "Anikó", "Anna", "Antal", "Antónia", "Apolónia", "Aurélia", "Bakos", "Balla", "Balog", "Balogh", "Balázs", "Barbara",
        "Barna", "Barta", "Beáta", "Bianka", "Biró", "Bodnár", "Bogdán", "Boglárka", "Bognár", "Borbély", "Boros", "Brigitta", "Budai", "Bálint", "Béla", "Cecília", "Csenge", "Csonka", "Deák", "Dobos",
        "Dorina", "Dorottya", "Dudás", "Dóra", "Edina", "Edit", "Ela", "Elena", "Eleonóra", "Eliza", "Fanni", "Faragó", "Farkas", "Fatime", "Fazekas", "Fehér", "Fekete", "Felicitász", "Flóra", "Fodor",
        "Friderika", "Fábián", "Fülöp", "Gabriella", "Gitta", "Gizella", "Gulyás", "Gyöngyi", "Gál", "Gáspár", "Hajdu", "Hajnalka", "Halász", "Hanna", "Hedvig", "Hegedüs", "Hegedűs", "Heléna", "Henrietta", "Hilda",
        "Horváth", "Illés", "Ilona", "Irén", "Izabella", "Jakab", "Johanna", "Jolán", "Judit", "Juhász", "Jázmin", "Jónás", "Júlia", "Kamilla", "Karina", "Katalin", "Katona", "Kelemen", "Kerekes", "Király",
        "Kis", "Kiss", "Kitti", "Klára", "Kocsis", "Kornélia", "Kovács", "Kozma", "Krisztina", "Lakatos", "Lara", "Laura", "Lea", "Lengyel", "Lenke", "Leonor", "Lili", "Lilla", "Loretta", "Luca",
        "Lujza", "Lukács", "László", "Léna", "Lívia", "Magdolna", "Magyar", "Maja", "Major", "Manci", "Manó", "Margit", "Mari", "Mariann", "Matild", "Mazsi", "Melinda", "Milla", "Molnár", "Mária",
        "Márta", "Máté", "Mészáros", "Mónika", "Nadia", "Nagy", "Nemes", "Novák", "Németh", "Nóra", "Oláh", "Orbán", "Orosz", "Orsolya", "Orsós", "Otília", "Panna", "Pap", "Papp", "Pataki",
        "Paulina", "Petra", "Pintér", "Piroska", "Pál", "Pásztor", "Péter", "Rita", "Rácz", "Réka", "Róza", "Sarolta", "Sas", "Sebestyén", "Selly", "Simon", "Sipos", "Sofia", "Somogyi", "Soós",
        "Szabina", "Szabó", "Szalai", "Szekeres", "Szilvia", "Szilágyi", "Szvetlana", "Székely", "Szücs", "Szőke", "Szűcs", "Sándor", "Sára", "Takács", "Tamara", "Tamás", "Teodóra", "Teréz", "Tímea", "Tóth",
        "Török", "Tünde", "Valéria", "Vanessza", "Varga", "Vass", "Vera", "Veres", "Veronika", "Viktória", "Vilma", "Vincze", "Viorica", "Virág", "Vivien", "Váradi", "Végh", "Vörös", "Zara", "Zita",
        "Zsanett", "Zsuzsa", "Zsófia", "Ágnes", "Éva"
    ];
}

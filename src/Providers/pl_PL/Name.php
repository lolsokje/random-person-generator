<?php

namespace LilPecky\DriverGenerator\Providers\pl_PL;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Adam", "Adrian", "Alan", "Albert", "Aleks", "Aleksander", "Aleksy", "Alex", "Alfred", "Andrzej", "Antoni", "Arkadiusz", "Artur", "Bartek", "Bartłomiej", "Bogdan", "Bogumił", "Bogusław", "Bohdan", "Bolesław",
        "Borys", "Bronisław", "Bruno", "Błażej", "Cezary", "Cyprian", "Damian", "Daniel", "Darek", "Dariusz", "Dawid", "Dominik", "Edward", "Emil", "Ernest", "Eryk", "Fabian", "Feliks", "Filip", "Franciszek",
        "Fryderyk", "Gabriel", "Grzegorz", "Gustaw", "Henryk", "Hubert", "Ignacy", "Igor", "Iwo", "Jacek", "Jakub", "Jan", "Janusz", "Jarosław", "Jeremi", "Jerzy", "Julian", "Juliusz", "Józef", "Jędrzej",
        "Kacper", "Kajetan", "Kamil", "Karol", "Kazimierz", "Klemens", "Konrad", "Konstanty", "Kornel", "Krystian", "Krzysztof", "Ksawery", "Lars", "Leon", "Leonard", "Leszek", "Maciej", "Maks", "Maksymilian", "Marcel",
        "Marcin", "Marek", "Mariusz", "Mateusz", "Maurycy", "Michał", "Mieczysław", "Mieszko", "Mikołaj", "Mirosław", "Miłosz", "Natan", "Nataniel", "Nikodem", "Norbert", "Olaf", "Olgierd", "Oliwier", "Oskar", "Patryk",
        "Paweł", "Piotr", "Przemysław", "Radosław", "Rafał", "Robert", "Roman", "Ryszard", "Sebastian", "Stanisław", "Stefan", "Sylwester", "Szymon", "Sławomir", "Tadeusz", "Tomasz", "Tymon", "Tymoteusz", "Wacław", "Waldemar",
        "Wiktor", "Witold", "Wojciech", "Włodzimierz", "Zbigniew", "Zenon", "Zygmunt", "Łukasz"
    ];

    protected static array $givenNamesFemale = [
        "Ada", "Adriana", "Adrianna", "Agata", "Agnieszka", "Aleksandra", "Alicja", "Alina", "Amelia", "Anastazja", "Angelika", "Aniela", "Anita", "Anna", "Antonina", "Apolonia", "Aurelia", "Barbara", "Beata", "Bianka",
        "Blanka", "Bogumiła", "Bożena", "Celina", "Dagmara", "Danuta", "Daria", "Dominika", "Dorota", "Edyta", "Eliza", "Elwira", "Elżbieta", "Emilia", "Ewa", "Ewelina", "Gabriela", "Genowefa", "Grażyna", "Halina",
        "Hanna", "Helena", "Ida", "Iga", "Inga", "Irena", "Irma", "Iwona", "Izabela", "Jadwiga", "Jagoda", "Janina", "Joanna", "Jolanta", "Judyta", "Julia", "Julianna", "Julita", "Justyna", "Kaja",
        "Kalina", "Kamila", "Karina", "Karolina", "Katarzyna", "Kinga", "Klara", "Klaudia", "Kornelia", "Krystyna", "Laura", "Lena", "Lidia", "Liliana", "Lilla", "Liwia", "Lucja", "Ludwika", "Magdalena", "Maja",
        "Malwina", "Marcelina", "Maria", "Marianna", "Marika", "Marta", "Martyna", "Marzena", "Matylda", "Małgorzata", "Melania", "Michalina", "Milena", "Mirella", "Monika", "Nadia", "Natalia", "Natasza", "Nela", "Nicole",
        "Nikola", "Nina", "Olga", "Oliwia", "Patrycja", "Paulina", "Pola", "Renata", "Roksana", "Rozalia", "Róża", "Sabina", "Sandra", "Sara", "Sonia", "Stanisława", "Stefania", "Sylwia", "Sławomira", "Tatiana",
        "Teresa", "Tola", "Urszula", "Wanda", "Weronika", "Wiesława", "Wiktoria", "Wilhelmina", "Wioletta", "Zofia", "Zuzanna", "Łucja", "Żaklina", "Żaneta", "Żanetta", "Żanna", "Żelisława"
    ];

    protected static array $familyNames = [
        "Adamczyk", "Andrzejewski", "Antczak", "Augustyn", "Bagiński", "Bak", "Baran", "Baranowski", "Bartkowiak", "Bartosz", "Bednarczyk", "Bednarek", "Białas", "Białkowski", "Bielawski", "Bieniek", "Bober", "Bogucki", "Bojarski", "Borowiec",
        "Borowski", "Bożek", "Brzozowski", "Buczek", "Buczyński", "Bukowski", "Burzyński", "Buzek", "Błaszczyk", "Chmielewski", "Chmura", "Chojnacki", "Chojnowski", "Chrzanowski", "Cichocki", "Cieślak", "Cieślik", "Cybulski", "Cygan", "Czaja",
        "Czajka", "Czajkowski", "Czarnecki", "Czech", "Czekaj", "Czerwiński", "Dobosz", "Domański", "Drewniak", "Duda", "Dudek", "Dziedzic", "Dąbrowski", "Falkowski", "Fijałkowski", "Filipiak", "Filipowicz", "Flak", "Flis", "Frankowski",
        "Frąckowiak", "Frączek", "Gajda", "Gawlik", "Grabowski", "Graczyk", "Gruszka", "Grzegorczyk", "Grzelak", "Grzybowski", "Guzik", "Gwóźdź", "Góral", "Górka", "Głogowski", "Głowacki", "Hajduk", "Hałas", "Herman", "Iwański",
        "Jabłoński", "Jackowski", "Jagielski", "Jakubczyk", "Janas", "Janicki", "Janik", "Jankowski", "Janowski", "Jaśkiewicz", "Jurek", "Jurkowski", "Juszczak", "Jóźwiak", "Kacprzak", "Kaczmarczyk", "Kaczmarek", "Kaczmarski", "Kajetanowicz", "Kalicki",
        "Kalinowski", "Kamiński", "Kania", "Kapusta", "Karpiński", "Kasprowicz", "Kasprzak", "Kaszuba", "Kawa", "Kiciński", "Kiełbasa", "Kiełkowski", "Klimczak", "Klimek", "Kmiecik", "Knapik", "Kobus", "Kogut", "Kolasa", "Kolczyński",
        "Komorowski", "Konieczka", "Konieczny", "Kopczyk", "Koper", "Koperski", "Korczyński", "Kędzierski", "Kędziora", "Kępczyński"
    ];

    protected static array $familyNamesMale = [
        "Adamczyk", "Adamski", "Andrzejewski", "Baran", "Baranowski", "Borkowski", "Borowski", "Brzeziński", "Bąk", "Błaszczyk", "Chmielewski", "Cieślak", "Czarnecki", "Czerwiński", "Duda", "Dudek", "Dąbrowski", "Gajewski", "Grabowski", "Górski",
        "Głowacki", "Jabłoński", "Jakubowski", "Jankowski", "Jasiński", "Jaworski", "Kaczmarczyk", "Kaczmarek", "Kalinowski", "Kamiński", "Kaźmierczak", "Konieczny", "Kowalczyk", "Kowalski", "Kozłowski", "Kołodziej", "Krajewski", "Krawczyk", "Krupa", "Król",
        "Kubiak", "Kucharski", "Kwiatkowski", "Laskowski", "Lewandowski", "Lis", "Maciejewski", "Majewski", "Makowski", "Malinowski", "Marciniak", "Mazur", "Mazurek", "Michalak", "Michalski", "Mróz", "Nowak", "Nowakowski", "Nowicki", "Olszewski",
        "Ostrowski", "Pawlak", "Pawłowski", "Pietrzak", "Piotrowski", "Przybylski", "Rutkowski", "Sadowski", "Sawicki", "Sikora", "Sikorski", "Sobczak", "Sokołowski", "Stępień", "Szczepański", "Szewczyk", "Szulc", "Szymański", "Szymczak", "Tomaszewski",
        "Urbański", "Walczak", "Wasilewski", "Wieczorek", "Wilk", "Witkowski", "Wiśniewski", "Wojciechowski", "Woźniak", "Wróbel", "Wróblewski", "Wysocki", "Wójcik", "Włodarczyk", "Zając", "Zakrzewski", "Zalewski", "Zawadzki", "Zieliński", "Ziółkowski"
    ];

    protected static array $familyNamesFemale = [
        "Adamczyk", "Adamska", "Andrzejewska", "Baran", "Baranowska", "Borkowska", "Borowska", "Brzezińska", "Bąk", "Błaszczyk", "Chmielewska", "Cieślak", "Czarnecka", "Czerwińska", "Duda", "Dudek", "Dąbrowska", "Gajewska", "Grabowska", "Górecka",
        "Górska", "Głowacka", "Jabłońska", "Jakubowska", "Jankowska", "Jasińska", "Jaworska", "Kaczmarczyk", "Kaczmarek", "Kalinowska", "Kamińska", "Kaźmierczak", "Kowalczyk", "Kowalska", "Kozłowska", "Kołodziej", "Krajewska", "Krawczyk", "Krupa", "Król",
        "Kubiak", "Kucharska", "Kwiatkowska", "Laskowska", "Lewandowska", "Lis", "Maciejewska", "Majewska", "Makowska", "Malinowska", "Marciniak", "Mazur", "Mazurek", "Michalak", "Michalska", "Mróz", "Nowak", "Nowakowska", "Nowicka", "Olszewska",
        "Ostrowska", "Pawlak", "Pawłowska", "Pietrzak", "Piotrowska", "Przybylska", "Rutkowska", "Sadowska", "Sawicka", "Sikora", "Sikorska", "Sobczak", "Sokołowska", "Stępień", "Szczepańska", "Szewczyk", "Szulc", "Szymańska", "Szymczak", "Tomaszewska",
        "Urbańska", "Walczak", "Wasilewska", "Wieczorek", "Wilk", "Witkowska", "Wiśniewska", "Wojciechowska", "Woźniak", "Wróbel", "Wróblewska", "Wysocka", "Wójcik", "Włodarczyk", "Zając", "Zakrzewska", "Zalewska", "Zawadzka", "Zielińska", "Ziółkowska"
    ];
}

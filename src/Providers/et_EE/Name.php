<?php

namespace LilPecky\RandomPersonGenerator\Providers\et_EE;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aare", "Aarne", "Aavo", "Ago", "Ahti", "Aimar", "Ain", "Aivar", "Aivo", "Alar", "Alari", "Aleksander", "Aleksandr", "Aleksei", "Alexander", "Alfred", "Allan", "Anatoli", "Anders", "Ando",
        "Andrei", "Andres", "Andrus", "Anton", "Ants", "Ardo", "Ari", "Arne", "Arnold", "Artjom", "Artur", "Arvo", "Boris", "Daniel", "Daniil", "Dmitri", "Eduard", "Eero", "Einar", "Eino",
        "Elmar", "Endel", "Enn", "Enno", "Enrique", "Erik", "Erki", "Ervin", "Evald", "Fjodorov", "Gennadi", "Georg", "Gunnar", "Hanno", "Harald", "Heigo", "Heiki", "Heino", "Heinz", "Helmut",
        "Hendrik", "Henri", "Henrik", "Herbert", "Herman", "Hillar", "Hugo", "Igor", "Ilja", "Ilmar", "Indrek", "Ivan", "Jaak", "Jaan", "Jaanus", "Janek", "Jevgeni", "Joosep", "Juhan", "Juri",
        "Jüri", "Kaarel", "Kaido", "Kalev", "Kalju", "Kalle", "Karl", "Karl-Johan", "Kaspar", "Kaupo", "Kaur", "Kauri", "Ken", "Kevin", "Kirill", "Konstantin", "Kristjan", "Kristo", "Kristofer", "Laur",
        "Lauri", "Leho", "Lembit", "Leo", "Leonard", "Linda", "Madis", "Mait", "Maksim", "Marek", "Margus", "Marius", "Mark", "Marko", "Markus", "Mart", "Marten", "Martin", "Mati", "Matthias",
        "Meelis", "Meigo", "Mihhail", "Mihkel", "Mikk", "Mikko", "Märt", "Nikita", "Nikolai", "Nikolay", "Olavi", "Oleg", "Olev", "Oliver", "Oskar", "Ott", "Paavo", "Pavel", "Peep", "Peeter",
        "Priit", "Raido", "Raimond", "Rain", "Raivo", "Rasmus", "Raul", "Rein", "Reinhold", "Rene", "Richard", "Riho", "Robert", "Robin", "Roland", "Roman", "Romet", "Ruslan", "Sander", "Sebastian",
        "Sergei", "Sergey", "Siim", "Silver", "Sulev", "Taavi", "Tanel", "Tarmo", "Tarvo", "Teet", "Tiit", "Toivo", "Toomas", "Triin", "Tõnis", "Tõnu", "Uku", "Urmas", "Vadim", "Vaino",
        "Valdek", "Valdo", "Valdur", "Valentin", "Valeri", "Vello", "Victor", "Viktor", "Viljar", "Viljo", "Villem", "Villu", "Vilmar", "Vitali", "Vjatšeslav", "Vladimir", "Vladislav", "Voldemar", "Väino", "Ülo"
    ];

    public static array $givenNamesFemale = [
        "Adele", "Aigi", "Aili", "Aime", "Aino", "Airike", "Aive", "Aleksandra", "Alina", "Alisa", "Alla", "Anastasia", "Anastassia", "Anna", "Anne", "Anneli", "Annika", "Antonina", "Anu", "Arabella",
        "Arina", "Astrid", "Ave", "Birgit", "Darja", "Diana", "Eda", "Edith", "Eha", "Eira", "Eivi", "Ela", "Elena", "Eliisa", "Eliise", "Elina", "Elis", "Elisabeth", "Elle", "Ellen",
        "Elve", "Emma", "Ene", "Epp", "Erna", "Ester", "Eva", "Eve", "Evi", "Galina", "Greete", "Grete", "Hanna", "Hedvig", "Heidi", "Heili", "Hele", "Helen", "Helena", "Helene",
        "Heleri", "Helgi", "Heli", "Helin", "Helina", "Helle", "Helve", "Ingrid", "Inna", "Irina", "Irma", "Ita", "Jana", "Janne", "Jekaterina", "Jelena", "Johanna", "Julia", "Juta", "Juuli",
        "Kadi", "Kadri", "Kai", "Kaja", "Karin", "Karoliina", "Katariina", "Katre", "Katrin", "Kerli", "Kersti", "Kerttu", "Krista", "Kristel", "Kristi", "Kristiina", "Kristina", "Kätlin", "Kätrin", "Külli",
        "Laine", "Larissa", "Laura", "Lea", "Lenna", "Liina", "Liis", "Liisa", "Liisi", "Liliana", "Lilli", "Linda", "Lisandra", "Lisette", "Liudmila", "Ljubov", "Ljudmila", "Ljudmilla", "Loore", "Lotte",
        "Luule", "Maarja", "Mai", "Maie", "Maila", "Maimu", "Maire", "Maive", "Malle", "Mare", "Margaret", "Margarita", "Marget", "Margit", "Mari", "Maria", "Mariana", "Mariann", "Marianna", "Marie",
        "Marika", "Marina", "Maris", "Marju", "Marleen", "Marlene", "Marta", "Martina", "Mary", "Merike", "Merle", "Mervi", "Mia", "Miina", "Milana", "Milvi", "Mirjam", "Mirtel", "Moonika", "Nadežda",
        "Natalia", "Natalja", "Niina", "Nina", "Nora", "Oksana", "Olga", "Piia", "Pille", "Piret", "Polina", "Päivi", "Reeda", "Reelika", "Reet", "Regina", "Reili", "Riina", "Rita", "Rutt",
        "Sandra", "Silja", "Silvi", "Silvia", "Sirje", "Sofia", "Stella", "Svetlana", "Tamara", "Tatiana", "Tatjana", "Tiia", "Tiina", "Tiiu", "Triin", "Triinu", "Tuuli", "Urve", "Vaike", "Valentina",
        "Veera", "Veronika", "Viive", "Viktoria", "Vilja", "Vilve", "Zinaida", "Ülle"
    ];

    public static array $familyNames = [
        "Aare", "Aarma", "Aas", "Aasmäe", "Aav", "Aavik", "Aleksandrov", "Aleksandrova", "Aleksejev", "Aleksejeva", "Allik", "Alver", "Andrejev", "Andrejeva", "Arukask", "Bogdanov", "Bogdanova", "Eenpalu", "Eensaar", "Eiche",
        "Eisen", "Erm", "Ervik", "Eskola", "Fjodorov", "Fjodorova", "Grigorjev", "Grigorjeva", "Haav", "Haavel", "Hagi", "Haller", "Hein", "Hunt", "Härma", "Ilves", "Ivanov", "Ivanova", "Jakobson", "Jakovlev",
        "Jakovleva", "Jegorov", "Jegorova", "Johanson", "Jänes", "Järv", "Järve", "Järvis", "Jõgi", "Jürgenson", "Kaaleste", "Kaasik", "Kadak", "Kalda", "Kaljulaid", "Kaljurand", "Kallas", "Kallaste", "Kangro", "Kangur",
        "Kapp", "Karu", "Kask", "Kass", "Kelder", "Keres", "Keskküla", "Kesküla", "Kiivikas", "Kikkas", "Kingsepp", "Kirs", "Kirsipuu", "Kivi", "Klaas", "Klavan", "Kokk", "Kontaveit", "Koppel", "Korjus",
        "Kotkas", "Kozlov", "Kozlova", "Kreek", "Kross", "Kruus", "Kukk", "Kull", "Kuusik", "Kuusk", "Kuzmin", "Kuzmina", "Kuznetsov", "Kuznetsova", "Käbin", "Kärgenberg", "Kärner", "Käsper", "Kõiv", "Künnap",
        "Kütt", "Laan", "Laane", "Laar", "Laas", "Laht", "Lass", "Laur", "Laurits", "Lebedev", "Lebedeva", "Lemsalu", "Lepik", "Lepmets", "Lepp", "Leppik", "Levandi", "Liiv", "Lill", "Lind",
        "Lindmaa", "Linna", "Lipp", "Lippmaa", "Loo", "Luht", "Luik", "Luts", "Lõhmus", "Lõoke", "Makarov", "Makarova", "Margiste", "Mark", "Masing", "Meier", "Mets", "Mihhailov", "Mihhailova", "Mitt",
        "Morozov", "Morozova", "Must", "Mägi", "Mälk", "Mänd", "Männik", "Mõttus", "Mölder", "Niit", "Nikitin", "Nikitina", "Nikolajev", "Nikolajeva", "Novikov", "Nurk", "Nurme", "Nurmsalu", "Nõmm", "Nõmmik",
        "Oja", "Ojala", "Ojaste", "Olesk", "Orav", "Orlov", "Orlova", "Ots", "Paas", "Paavel", "Padar", "Paju", "Palm", "Parts", "Pavlov", "Pavlova", "Peebo", "Peetre", "Peterson", "Petrov",
        "Petrova", "Pihl", "Pihlak", "Piho", "Piip", "Piirsalu", "Pill", "Pind", "Pirn", "Popov", "Popova", "Poska", "Puhvel", "Pukk", "Puusepp", "Pärn", "Pääsuke", "Põder", "Põld", "Põldma",
        "Põllu", "Pütsep", "Raag", "Rand", "Raud", "Raudsepp", "Rebane", "Reek", "Reimann", "Reinsalu", "Roht", "Romanova", "Rooba", "Roolaid", "Roos", "Rootare", "Rummo", "Ruus", "Rätsep", "Rüütel",
        "Rüütli", "Saar", "Saare", "Saks", "Salumets", "Salumäe", "Sarapuu", "Semjonov", "Semjonova", "Sepp", "Sibul", "Siimar", "Sild", "Simm", "Sirel", "Sisask", "Smirnov", "Smirnova", "Sokk", "Sokolov",
        "Sokolova", "Soo", "Soosaar", "Stepanov", "Stepanova", "Susi", "Talts", "Tamm", "Tamme", "Tammik", "Tarvas", "Teder", "Tiisler", "Tomson", "Toom", "Toome", "Toots", "Tänavsuu", "Uibo", "Uusküla",
        "Vaher", "Vahter", "Vahtra", "Vain", "Vaino", "Vainola", "Valdma", "Valk", "Vardja", "Vasar", "Vassiljev", "Vassiljeva", "Vesik", "Veski", "Viiding", "Viik", "Vilms", "Vitsut", "Volkov", "Volkova",
        "Välbe", "Väli", "Väljas", "Võigemast", "Võsu", "Õun", "Öpik", "Üprus"
    ];
}

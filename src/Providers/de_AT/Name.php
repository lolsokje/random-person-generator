<?php

namespace LilPecky\DriverGenerator\Providers\de_AT;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Adalbert", "Adolf", "Adrian", "Albert", "Albin", "Albrecht", "Alexander", "Alfred", "Alois", "Alwin", "Andreas", "Anton", "Armin", "Arnold", "Arthur", "August", "Axel", "Balthasar", "Bartholomäus", "Ben",
        "Benedikt", "Benjamin", "Bernd", "Bernhard", "Bert", "Berthold", "Bruno", "Carl", "Christian", "Christoph", "Christopher", "Clemens", "Conrad", "Constantin", "Daniel", "David", "Dominik", "Eberhard", "Edgar", "Edmund",
        "Eduard", "Elias", "Emil", "Engelbert", "Erhard", "Erik", "Ernst", "Eugen", "Fabian", "Fabio", "Felix", "Ferdinand", "Finn", "Florian", "Franz", "Friedrich", "Gabriel", "Georg", "Gerald", "Gerhard",
        "Gernot", "Gottfried", "Gregor", "Gustav", "Günther", "Hannes", "Hans", "Harald", "Heinrich", "Helmut", "Herbert", "Hermann", "Hubert", "Hugo", "Ignaz", "Ingmar", "Jakob", "Jan", "Johann", "Johannes",
        "Jonas", "Jonathan", "Josef", "Joseph", "Julian", "Julius", "Justin", "Jürgen", "Karl", "Kaspar", "Kevin", "Kilian", "Klaus", "Konrad", "Konstantin", "Kurt", "Lars", "Leo", "Leon", "Leopold",
        "Lorenz", "Luca", "Ludwig", "Luis", "Lukas", "Magnus", "Manfred", "Manuel", "Marc", "Marcel", "Marco", "Marcus", "Mario", "Mark", "Markus", "Martin", "Marvin", "Matteo", "Matthias", "Max",
        "Maximilian", "Michael", "Moritz", "Nico", "Nicolas", "Niklas", "Nikolaus", "Noah", "Oliver", "Oskar", "Otto", "Pascal", "Patrick", "Patrik", "Paul", "Peter", "Philipp", "Rainer", "Ralph", "Raphael",
        "Reinhard", "Reinhold", "René", "Richard", "Robert", "Roland", "Roman", "Rudolf", "Rupert", "Samuel", "Sandro", "Sascha", "Sebastian", "Simon", "Stefan", "Stephan", "Sven", "Theo", "Theodor", "Thomas",
        "Tim", "Tobias", "Udo", "Ulrich", "Uwe", "Valentin", "Viktor", "Vincent", "Walter", "Werner", "Wilhelm", "Wolfgang", "Xaver", "Yannick", "Yves", "Zacharias"
    ];

    public static array $givenNamesFemale = [
        "Adelheid", "Agnes", "Alexandra", "Alexandrea", "Algelika", "Alina", "Alma", "Amalia", "Amelie", "Andrea", "Angelina", "Anita", "Anja", "Anna", "Anna-Lena", "Annika", "Astrid", "Barbara", "Beatrix", "Bettina",
        "Bianca", "Birgit", "Brigitte", "Carina", "Caroline", "Catharina", "Celina", "Chiara", "Christa", "Christiane", "Christina", "Christine", "Clara", "Claudia", "Constance", "Cornelia", "Dagmar", "Daniela", "Denise", "Doris",
        "Edith", "Elena", "Elisa", "Elisabeth", "Ella", "Elsa", "Emely", "Emilia", "Emily", "Emma", "Erika", "Erna", "Esther", "Eva", "Eva-Maria", "Felicitas", "Franziska", "Frieda", "Gabriela", "Gerda",
        "Gertrude", "Gisela", "Gudrun", "Hanna", "Hannah", "Hannelore", "Heidi", "Helena", "Helene", "Helga", "Ida", "Ines", "Inge", "Ingrid", "Irene", "Iris", "Isabel", "Isabella", "Jacqueline", "Jacquline",
        "Jana", "Janine", "Jasmin", "Jennifer", "Jessica", "Johanna", "Julia", "Karin", "Karina", "Katharina", "Kathrin", "Katja", "Katrin", "Kerstin", "Klara", "Lara", "Larissa", "Laura", "Lea", "Lena",
        "Leona", "Leonie", "Leopoldine", "Lieselotte", "Lilly", "Lina", "Lisa", "Livia", "Lotte", "Luisa", "Luise", "Magdalena", "Maja", "Manuela", "Margareta", "Margit", "Maria", "Marianne", "Marie", "Marion",
        "Marlene", "Marta", "Martina", "Mathilde", "Melanie", "Melina", "Mia", "Michaela", "Michelle", "Miriam", "Mona", "Monika", "Nadine", "Natalie", "Nicole", "Nina", "Nora", "Olga", "Patricia", "Paula",
        "Petra", "Pia", "Rebecca", "Renate", "Rosa", "Rosemarie", "Sabine", "Sabrina", "Sandra", "Sara", "Sarah", "Selina", "Silvia", "Simone", "Sonja", "Sophia", "Sophie", "Stefanie", "Susanne", "Tamara",
        "Tanja", "Theresa", "Theresia", "Ulrike", "Ursula", "Valentina", "Valerie", "Vanessa", "Verena", "Veronica", "Victoria", "Viktoria", "Waltraud", "Yvonne"
    ];

    public static array $familyNames = [
        "Abraham", "Achleitner", "Adam", "Aichinger", "Aigner", "Aigner-Foresti", "Albrecht", "Altmann", "Amann", "Amon", "Angerer", "Arnold", "Artner", "Aschauer", "Auer", "Augustin", "Auinger", "Bacher", "Bachler", "Bachmann",
        "Bader", "Baier", "Barth", "Bartl", "Bauer", "Bauer-Mitterlehner", "Baumann", "Baumgartner", "Bayer", "Beck", "Beer", "Berger", "Bergmann", "Berndt", "Bernhard", "Bichler", "Binder", "Bischof", "Bock", "Bogner",
        "Brandl", "Brandner", "Brandstetter", "Brandstätter", "Braun", "Brenner", "Bruckner", "Brugger", "Brunner", "Buchberger", "Buchegger", "Bucher", "Buchinger", "Buchner", "Burger", "Burgstaller", "Burtscher", "Böck", "Böhm", "Bösch",
        "Bösendorfer", "Danner", "Denk", "Deutsch", "Dietrich", "Dobler", "Doppler", "Dorner", "Draxler", "Eberharter", "Eberl", "Ebner", "Ecker", "Eder", "Edlinger", "Egger", "Eibl", "Eichberger", "Eichinger", "Eigner",
        "Eisl", "Erhart", "Ernst", "Ertl", "Falkner", "Fasching", "Feichtinger", "Fellner", "Fiala", "Fichtinger", "Fiedler", "Fink", "Fischer", "Fleischhacker", "Forster", "Forstner", "Frank", "Franz", "Friedl", "Friedrich",
        "Fritsch", "Fritz", "Fröhlich", "Frühwirth", "Fuchs", "Führer", "Fürst", "Gabriel", "Gaisbauer", "Gangl", "Gartner", "Gasser", "Gassner", "Geiger", "Geisler", "Geyer", "Glaser", "Glatz", "Gmeiner", "Grabner",
        "Graf", "Gratzer", "Grausenburger", "Greiner", "Grill", "Gritsch", "Gross", "Groß", "Gruber", "Grünwald", "Gschwandtner", "Gutmann", "Haas", "Haberl", "Hackl", "Hafner", "Hagen", "Hager", "Hahn", "Haider",
        "Haidinger", "Haller", "Hammer", "Hammerl", "Handl", "Handler", "Harrer", "Hartl", "Hartmann", "Haslinger", "Hauer", "Hauser", "Heindl", "Heinrich", "Heinz", "Hemetsberger", "Herbst", "Hermann", "Herzog", "Hinterberger",
        "Hinteregger", "Hinterleitner", "Hirsch", "Hochreiter", "Hofbauer", "Hofer", "Hoffmann", "Hofmann", "Hofstätter", "Holzer", "Holzinger", "Holzmann", "Horvath", "Huber", "Huemer", "Hufnagl", "Humer", "Hummel", "Hummer", "Hutter",
        "Hämmerle", "Hödl", "Höfler", "Höller", "Hölzl", "Hörmann", "Hütter", "Jahn", "Jandl", "Janisch", "Johann", "Jovanovic", "Jung", "Jungwirth", "Jäger", "Kainz", "Kaiser", "Kaltenbrunner", "Kapeller", "Kargl",
        "Karl", "Karner", "Kastner", "Kaufmann", "Kaufmann-Freund", "Kellner", "Kern", "Kerschbaum", "Kerschbaumer", "Kirchmair", "Kirchner", "Klammer", "Klein", "Klinger", "Klug", "Knapp", "Knoll", "Koch", "Kofler", "Kogler",
        "Kohl", "Koller", "Kollmann", "Konrad", "Kopp", "Kovacs", "Kraft", "Krainer", "Kramer", "Krammer", "Kraus", "Kremser", "Krenn", "Kreuzer", "Kronberger", "Kröll", "Kugler", "Kummer", "Kurz", "Köberl",
        "Köck", "Köhler", "König", "Lackner", "Lamprecht", "Lang", "Langer", "Lechner", "Lederer", "Leeb", "Lehner", "Leitgeb", "Leitner", "Lengauer", "Lenz", "Lettner", "Leuthner", "Lindner", "List", "Loidl",
        "Lorenz", "Ludwig", "Luger", "Lukas", "Lutz", "Löffler", "Mader", "Maier", "Maierhofer", "Mair", "Mairhofer", "Mandl", "Markovic", "Martin", "Maurer", "Mayer", "Mayerhofer", "Mayr", "Mayrhofer", "Meier",
        "Meixner", "Messner", "Meyer", "Mitterer", "Moosbrugger", "Moser", "Muhr", "Mühlbacher", "Müller", "Müllner", "Nagl", "Nemeth", "Neubauer", "Neuhauser", "Neuhold", "Neumann", "Neumayer", "Neuner", "Neuwirth", "Nikolic",
        "Novak", "Nowak", "Nussbaumer", "Nußbaumer", "Ofner", "Ortner", "Oswald", "Ott", "Paar", "Pacher", "Pammer", "Paul", "Payer", "Peer", "Penz", "Peter", "Petrovic", "Petz", "Pfeffer", "Pfeifer",
        "Pfeiffer", "Pfister", "Pfleger", "Pichler", "Pichler-Jessenko", "Pichlmann", "Pilz", "Pinter", "Pirker", "Plank", "Plattner", "Platzer", "Platzgummer", "Platzl", "Pointner", "Pokorny", "Pollak", "Posch", "Prem", "Prinz",
        "Probst", "Pucher", "Putz", "Pöll", "Pölzl", "Pöschl", "Pühringer", "Raab", "Rabl", "Rainer", "Rath", "Rauch", "Rausch", "Rauscher", "Rauter", "Rechberger", "Redl", "Reich", "Reichl", "Reindl",
        "Reiner", "Reinisch", "Reischl", "Reisinger", "Reiter", "Reiterer", "Renner", "Resch", "Richter", "Rieder", "Riedl", "Riedler", "Rieger", "Riegler", "Rieser", "Ritter", "Rosenberger", "Roth", "Rupp", "Sailer",
        "Sattler", "Sauer", "Schachinger", "Schachner", "Schaffer", "Schaller", "Scharf", "Schatz", "Schauer", "Scheiber", "Schenk", "Schernberger", "Scheucher", "Schiefer", "Schiller", "Schindler", "Schlager", "Schlögl", "Schmid", "Schmidinger",
        "Schmidt", "Schmied", "Schnabl", "Schneeberger", "Schneider", "Schober", "Scholz", "Schranz", "Schreiber", "Schreiner", "Schröcker", "Schubert", "Schuh", "Schuller", "Schulz", "Schuster", "Schwab", "Schwaiger", "Schwaighofer", "Schwarz",
        "Schweiger", "Schweighofer", "Schön", "Schönauer", "Schöpf", "Schütz", "Seebacher", "Seidl", "Siegl", "Simon", "Singer", "Sommer", "Sonnleitner", "Spitzer", "Springer", "Stadler", "Stangl", "Stark", "Staudinger", "Steger",
        "Steinbauer", "Steinberger", "Steindl", "Steiner", "Steininger", "Steinkellner", "Steinlechner", "Steinwender", "Stelzer", "Stern", "Steurer", "Stocker", "Stockinger", "Strasser", "Strauss", "Strauß", "Strobl", "Stummer", "Sturm", "Stöckl",
        "Stöger", "Suppan", "Swoboda", "Szabo", "Thaler", "Thaller", "Thurner", "Tiefenbacher", "Tischler", "Toth", "Traxler", "Trimmel", "Trummer", "Ulrich", "Unger", "Unterberger", "Unterweger", "Urban", "Varga", "Vogel",
        "Vogl", "Wachter", "Wagner", "Walch", "Walcher", "Waldner", "Wallner", "Walter", "Weber", "Wechselberger", "Wegscheider", "Weidinger", "Weigl", "Weinberger", "Weiss", "Weiß", "Weninger", "Werner", "Wieland", "Wieser",
        "Wiesinger", "Wild", "Wilhelm", "Wimmer", "Windisch", "Winkler", "Winter", "Wirth", "Wittmann", "Wolf", "Wurm", "Wurzer", "Zach", "Zangerl", "Zauner", "Zechner", "Zehetner", "Zeilinger", "Zeller", "Zenz",
        "Ziegler", "Zimmermann", "Zöhrer"
    ];
}

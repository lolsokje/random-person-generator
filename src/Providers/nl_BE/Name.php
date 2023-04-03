<?php

namespace LilPecky\RandomPersonGenerator\Providers\nl_BE;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Aaron", "Adam", "Adrien", "Aiden", "Alessio", "Alex", "Alexander", "Alexandre", "Alexis", "Andreas", "Antoine", "Arne", "Arthur", "Axel", "Ayoub", "Baptiste", "Bart", "Ben", "Benjamin", "Bjorn",
        "Bram", "Brecht", "Brent", "Brian", "Casper", "Cedric", "Charles", "Christophe", "Clément", "Colin", "Daan", "Daniel", "David", "Dennis", "Diego", "Dieter", "Dirk", "Dries", "Dylan", "Edward",
        "Elias", "Emiel", "Emile", "Enzo", "Erik", "Ethan", "Evert", "Fabian", "Felix", "Ferre", "Finn", "Florian", "Floris", "Frans", "Frederik", "Gabriel", "Gaston", "Geert", "Gert", "Gilles",
        "Glenn", "Guido", "Guillaume", "Hamza", "Hannes", "Hans", "Harry", "Hein", "Hendrik", "Henk", "Herman", "Hugo", "Igor", "Ilias", "Isaac", "Ivan", "Ivo", "Jack", "Jacob", "Jakob",
        "James", "Jan", "Janne", "Jarne", "Jasper", "Jeffrey", "Jelle", "Jens", "Jeroen", "Jesse", "Joachim", "Jochem", "Joeri", "Johan", "Jonas", "Joost", "Joppe", "Joris", "Jos", "Joshua",
        "Jozef", "Juan", "Jules", "Julian", "Julien", "Julius", "Justin", "Karel", "Kasper", "Kato", "Keith", "Ken", "Kenzo", "Kevin", "Kilian", "Kim", "Kobe", "Koen", "Kris", "Kurt",
        "Lander", "Lars", "Laurens", "Leander", "Lennard", "Lennert", "Leon", "Leonard", "Leopold", "Liam", "Linde", "Lionel", "Lode", "Lorenzo", "Louis", "Lowie", "Loïc", "Luca", "Lucas", "Ludo",
        "Lukas", "Luke", "Maarten", "Manu", "Martijn", "Martin", "Mathias", "Mathis", "Mathys", "Mathéo", "Mats", "Matteo", "Matthias", "Mauro", "Maxim", "Maxime", "Mehdi", "Michiel", "Miel", "Milan",
        "Mohamed", "Mohammed", "Nathan", "Nico", "Nicolas", "Niels", "Nils", "Noah", "Nolan", "Nore", "Noé", "Olivier", "Patrick", "Paul", "Pepijn", "Pieter", "Quinten", "Raf", "Raphaël", "Rayan",
        "Rik", "Robbe", "Robin", "Romain", "Ruben", "Rune", "Sacha", "Sam", "Samuel", "Sander", "Seppe", "Sergio", "Simon", "Stan", "Sven", "Thomas", "Théo", "Tibo", "Tim", "Tom",
        "Tristan", "Tuur", "Valentijn", "Vic", "Victor", "Vince", "Vincent", "Ward", "Warre", "Wim", "Xander", "Yanis", "Yannick", "Yves", "Zeger", "Zeno", "Zjef"
    ];

    public static array $givenNamesFemale = [
        "Aagje", "Aaltje", "Adriana", "Agatha", "Aimée", "Aletta", "Alexia", "Alice", "Alicia", "Alida", "Alyssa", "Amber", "Amelie", "Amy", "Amélie", "Anaïs", "Anita", "Anke", "Anna", "Annabel",
        "Anneke", "Annelies", "Annette", "Anouk", "Arlette", "Astrid", "Augustine", "Axelle", "Aya", "Barbara", "Beatrijs", "Bente", "Berenice", "Bernadette", "Betje", "Bianca", "Bieke", "Birgit", "Bo", "Brigitte",
        "Camille", "Carine", "Carla", "Carmen", "Caroline", "Catharina", "Cato", "Celeste", "Chantal", "Charlotte", "Charlène", "Chiara", "Chloé", "Christel", "Christiane", "Christien", "Christina", "Christine", "Cindy", "Claire",
        "Clara", "Clarisse", "Clementine", "Clémence", "Colette", "Constance", "Corina", "Cornelia", "Célia", "Dagmar", "Daisy", "Daniella", "Danielle", "Daphne", "Debby", "Delphine", "Denise", "Diana", "Dina", "Dominique",
        "Dora", "Dorien", "Dorine", "Dorothea", "Dorothy", "Edith", "Eefje", "Eileen", "Elena", "Elias", "Eline", "Elisa", "Elisabeth", "Elise", "Eliza", "Elke", "Ella", "Ellen", "Eloïse", "Els",
        "Else", "Elvira", "Emilie", "Emma", "Estelle", "Esther", "Eva", "Evelien", "Evelyne", "Febe", "Femke", "Fien", "Fiona", "Fleur", "Florine", "Francesca", "Françoise", "Frederique", "Gabrielle", "Gaby",
        "Gerda", "Gertrude", "Gisèle", "Gitta", "Giulia", "Gloria", "Godelieve", "Géraldine", "Hajar", "Hanna", "Hanne", "Hannelore", "Hedwig", "Heidi", "Helena", "Helene", "Hilda", "Hilde", "Hélène", "Ilse",
        "Ineke", "Ines", "Inge", "Ingeborg", "Ingrid", "Inès", "Irene", "Irma", "Isabelle", "Jacky", "Jacqueline", "Jade", "Jana", "Janet", "Janna", "Jasmijn", "Jeanne", "Jeannette", "Jennifer", "Jessica",
        "Johanna", "Joke", "Jolanda", "Jolien", "Jolijn", "Jona", "Joni", "Julia", "Julie", "Juliette", "Kaat", "Lana", "Lara", "Laura", "Laure", "Lena", "Lien", "Lilou", "Lily", "Lina",
        "Lisa", "Lise", "Lola", "Lore", "Lotte", "Louise", "Luna", "Léa", "Malak", "Manon", "Margaux", "Margot", "Marie", "Marion", "Maya", "Maëlle", "Merel", "Mila", "Nina", "Noa",
        "Noor", "Nora", "Noémie", "Océane", "Olivia", "Pauline", "Rania", "Robin", "Romane", "Roos", "Salma", "Sara", "Sarah", "Senne", "Siebe", "Sofia", "Tess", "Victoria", "Wout", "Yana",
        "Yasmine", "Zoé", "Zoë"
    ];

    public static array $familyNames = [
        "Adam", "Aerts", "Amrani", "André", "Antoine", "Baert", "Bah", "Barry", "Bastin", "Bauwens", "Beckers", "Benali", "Berghmans", "Bernard", "Bertrand", "Bervoets", "Bex", "Bodart", "Bogaert", "Bogaerts",
        "Borremans", "Bosmans", "Boulanger", "Bourgeois", "Brasseur", "Brouwers", "Carlier", "Celik", "Ceulemans", "Charlier", "Christiaens", "Claes", "Claessens", "Claeys", "Coenen", "Collard", "Collignon", "Collin", "Cools", "Coppens",
        "Cornelis", "Cornet", "Cuvelier", "Cuyvers", "Daems", "Dams", "De Backer", "De Clerck", "De Clercq", "De Cock", "De Coninck", "De Coster", "De Greef", "De Groote", "De Meyer", "De Pauw", "De Ridder", "De Smedt", "De Smet", "De Vos",
        "De Wilde", "De Winter", "Debruyne", "Deckers", "Declercq", "Delfosse", "Delhaye", "Delvaux", "Demir", "Denis", "Deprez", "Descamps", "Desmedt", "Desmet", "Dethier", "Devos", "Diallo", "Dierckx", "Dogan", "Dubois",
        "Dumont", "Dupont", "El Amrani", "Elsen", "Engelen", "Etienne", "Evers", "Evrard", "Eykens", "Eysermans", "Fierens", "Fontaine", "Foubert", "Franssen", "François", "Frederix", "Frijns", "Geerts", "Georges", "Geys",
        "Gielen", "Gilles", "Gillet", "Gilson", "Goethals", "Goffin", "Goossens", "Goris", "Goyens", "Grootjans", "Grégoire", "Guillaume", "Gérard", "Hajji", "Hardy", "Hendrickx", "Hendriks", "Henry", "Herman", "Hermans",
        "Heylen", "Heymans", "Hubert", "Huybrechts", "Huygens", "Jacob", "Jacobs", "Jacques", "Jacquet", "Jansen", "Janssen", "Janssens", "Jonckers", "Joosten", "Joris", "Kaya", "Kayaert", "Kempen", "Kusters", "Kuypers",
        "Lacroix", "Lambert", "Lambrechts", "Laurent", "Laureys", "Lauwers", "Lebrun", "Leclercq", "Lecocq", "Lecomte", "Lefebvre", "Lefèvre", "Legrand", "Lejeune", "Lemaire", "Lemmens", "Lenaerts", "Leroy", "Leysen", "Libert",
        "Lievens", "Louis", "Luyten", "Léonard", "Maes", "Mahieu", "Marchal", "Martens", "Martin", "Maréchal", "Massart", "Masson", "Mathieu", "Meert", "Meeus", "Meijers", "Mertens", "Messaoudi", "Meunier", "Michaux",
        "Michel", "Michiels", "Moens", "Moreau", "Neven", "Nguyen", "Nicolas", "Nijs", "Noël", "Nuyts", "Nys", "Nysen", "Nysten", "Ooms", "Op de Beeck", "Oyen", "Parmentier", "Pauwels", "Peeters", "Peetersmans",
        "Pepermans", "Petit", "Pierre", "Pieters", "Piette", "Piron", "Pirotte", "Poncelet", "Raes", "Remy", "Renard", "Reynders", "Robert", "Roelands", "Roels", "Roland", "Rombouts", "Rousseau", "Rousselle", "Rutten",
        "Sahin", "Saidi", "Schellekens", "Schepers", "Schmitz", "Schoeters", "Segers", "Servais", "Simon", "Simons", "Smeets", "Smet", "Smets", "Somers", "Stevens", "Thijs", "Thiry", "Thomas", "Thys", "Timmermans",
        "Toelen", "Tollet", "Toussaint", "Tran", "Urbain", "Van Acker", "Van Damme", "Van Dyck", "Van Hecke", "Van Hoof", "Van de Velde", "Van den Berghe", "Van den Bosch", "Van den Bossche", "Van den Broeck", "Van den Heuvel", "Vandamme", "Vandenberghe", "Verbeeck", "Verbeke",
        "Verbruggen", "Vercammen", "Verhaegen", "Verhaeghe", "Verhelst", "Verheyen", "Verhoeven", "Verlinden", "Vermeersch", "Vermeiren", "Vermeulen", "Verschueren", "Verstraete", "Verstraeten", "Vervoort", "Wauters", "Willems", "Wouters", "Wuyts", "Wyns",
        "Wyseur", "Yildirim", "Yilmaz", "Ysebaert"
    ];
}

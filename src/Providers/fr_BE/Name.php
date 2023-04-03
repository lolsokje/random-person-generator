<?php

namespace LilPecky\DriverGenerator\Providers\fr_BE;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Aaron", "Adam", "Adelin", "Adolphe", "Adrien", "Alain", "Albert", "Alessio", "Alexander", "Alexandre", "Alfred", "Aloïs", "André", "Antoine", "Armand", "Arne", "Arthur", "Auguste", "Aurélien", "Axel",
        "Ayoub", "Baptiste", "Basile", "Benjamin", "Bernard", "Bertrand", "Bo", "Charles", "Christian", "Claude", "Clément", "Constantin", "Corentin", "Cyrille", "Célestin", "César", "Daan", "Damien", "Daniel", "David",
        "Denis", "Didier", "Diego", "Dieudonné", "Dominique", "Dylan", "Edgard", "Edmond", "Edouard", "Elias", "Eliot", "Emiel", "Emile", "Emmanuel", "Enzo", "Ethan", "Etienne", "Eugène", "Eustache", "Fabien",
        "Fabrice", "Fernand", "Finn", "Florent", "Florian", "Franck", "François", "Frédéric", "Félicien", "Félix", "Gabriel", "Gaston", "Georges", "Gilbert", "Gilles", "Grégory", "Guillaume", "Gustave", "Guy", "Gérard",
        "Hamza", "Henri", "Hervé", "Hugo", "Hugues", "Ilias", "Isidore", "Jacques", "Janne", "Jarne", "Jasper", "Jean", "Jelle", "Joachim", "Jonas", "Joël", "Jules", "Julien", "Justin", "Jérôme",
        "Kato", "Lars", "Laurent", "Leon", "Liam", "Lionel", "Louis", "Lowie", "Loïc", "Luc", "Luca", "Lucas", "Lucien", "Lukas", "Léon", "Marcel", "Marcin", "Martin", "Mathias", "Mathieu",
        "Mathis", "Mathys", "Mathéo", "Mats", "Matteo", "Maurice", "Mauro", "Maxim", "Maxime", "Mehdi", "Michel", "Milan", "Modeste", "Mohamed", "Mohammed", "Nathan", "Nicolas", "Niels", "Noah", "Nolan",
        "Noël", "Olivier", "Pascal", "Patrice", "Paul", "Philippe", "Pierre", "Quinten", "Raoul", "Raphaël", "Rayan", "Raymond", "René", "Richard", "Robbe", "Robert", "Roger", "Roland", "Romain", "Ruben",
        "Rune", "Sacha", "Sam", "Samuel", "Sander", "Senne", "Seppe", "Serge", "Siebe", "Simon", "Stan", "Stanislas", "Sylvain", "Sébastien", "Thibault", "Thierry", "Thomas", "Théo", "Théodore", "Tibo",
        "Timothée", "Tom", "Tristan", "Tuur", "Vic", "Victor", "Vince", "Vincent", "Warre", "Wout", "Xander", "Xavier", "Yanis", "Yves", "Zacharie"
    ];

    protected static array $givenNamesFemale = [
        "Adeline", "Adrienne", "Adèle", "Agnès", "Aimée", "Alexia", "Alexis", "Alice", "Alicia", "Aline", "Alyssa", "Amber", "Amy", "Amélie", "Anastasia", "Anaïs", "Andrée", "Angèle", "Anna", "Anne",
        "Anouk", "Antoinette", "Apolline", "Ariane", "Aurélie", "Axelle", "Aya", "Barbara", "Bernadette", "Berthe", "Brigitte", "Béatrice", "Camille", "Carine", "Caroline", "Catherine", "Chantal", "Charlotte", "Chiara", "Chloé",
        "Christelle", "Christiane", "Christine", "Claire", "Clara", "Clémence", "Colette", "Corinne", "Cécile", "Célia", "Céline", "Danielle", "Delphine", "Denise", "Dominique", "Edith", "Elena", "Eline", "Elisa", "Elisabeth",
        "Elise", "Ella", "Eloïse", "Emilie", "Emma", "Estelle", "Eugénie", "Eulalie", "Eva", "Fabienne", "Fanny", "Febe", "Femke", "Ferre", "Fien", "Flavie", "Fleur", "Florence", "Françoise", "Frédérique",
        "Gabrielle", "Geneviève", "Germaine", "Gisèle", "Giulia", "Guillemette", "Géraldine", "Hajar", "Hanne", "Helena", "Henriette", "Huguette", "Hélène", "Ines", "Inès", "Isabelle", "Jacqueline", "Jade", "Jana", "Janine",
        "Jeanne", "Josette", "Josiane", "Joëlle", "Judith", "Julia", "Julie", "Juliette", "Justine", "Kaat", "Kobe", "Laetitia", "Lana", "Lander", "Lara", "Laura", "Laure", "Laurence", "Lena", "Lien",
        "Liliane", "Lilou", "Lily", "Lina", "Linde", "Lisa", "Lise", "Lola", "Lore", "Lotte", "Louise", "Lucie", "Luna", "Léa", "Léonie", "Madeleine", "Magali", "Malak", "Manon", "Margaux",
        "Margot", "Marguerite", "Marie", "Marielle", "Marion", "Marta", "Martine", "Mathilde", "Maud", "Maya", "Maëlle", "Merel", "Mila", "Mireille", "Monique", "Nadine", "Nathalie", "Nelly", "Nicole", "Nina",
        "Noa", "Noor", "Nora", "Nore", "Noé", "Noémie", "Océane", "Odette", "Olivia", "Pascale", "Patricia", "Paulette", "Pauline", "Rania", "Renée", "Robin", "Romane", "Roos", "Rose", "Sabine",
        "Salma", "Sandrine", "Sara", "Sarah", "Simone", "Sofia", "Solange", "Sophie", "Stéphanie", "Suzanne", "Sylvie", "Tess", "Thérèse", "Valérie", "Vanessa", "Victoire", "Victoria", "Violette", "Véronique", "Yana",
        "Yasmine", "Yvette", "Yvonne", "Zoé", "Zoë"
    ];

    protected static array $familyNames = [
        "Adam", "Aerts", "Amrani", "André", "Antoine", "Baert", "Bah", "Barry", "Bastin", "Bauwens", "Beaufort", "Benali", "Bernard", "Bertrand", "Bodart", "Bodson", "Bogaert", "Bogaerts", "Borremans", "Bosmans",
        "Bouchat", "Boulanger", "Bourgeois", "Brahy", "Brasseur", "Brixhe", "Carlier", "Celik", "Ceulemans", "Charlier", "Christiaens", "Claes", "Claessens", "Claeys", "Coffin", "Collard", "Collignon", "Collin", "Colpaert", "Cools",
        "Coppens", "Cornelis", "Cornet", "Counet", "Crols", "Cuvelier", "Daems", "Dardenne", "Dauvin", "De Backer", "De Clercq", "De Cock", "De Coninck", "De Coster", "De Greef", "De Groote", "De Meyer", "De Pauw", "De Ridder", "De Smedt",
        "De Smet", "De Vos", "De Wilde", "De Winter", "Declercq", "Deghorain", "Delahaut", "Delfosse", "Delhaye", "Delvaux", "Demir", "Denis", "Deprez", "Descamps", "Desmedt", "Desmet", "Dessy", "Dethier", "Detry", "Devos",
        "Diallo", "Dierckx", "Dogan", "Dubois", "Dumont", "Dupont", "Dusart", "El Amrani", "Etienne", "Evrard", "Fauconnier", "Ferir", "Flamand", "Fontaine", "François", "Geerts", "Georges", "Gielen", "Gilles", "Gillet",
        "Gilson", "Goethals", "Goffin", "Goossens", "Grégoire", "Guillaume", "Gustin", "Gérard", "Hajji", "Hanquet", "Hardy", "Hendrickx", "Henrotte", "Henry", "Herman", "Hermans", "Heylen", "Heymans", "Huart", "Hubert",
        "Jacob", "Jacobs", "Jacques", "Jacquet", "Jadin", "Jansen", "Janssen", "Janssens", "Jeunehomme", "Jonckers", "Kaya", "Lacroix", "Lambert", "Lambrechts", "Laurent", "Lauwers", "Lebrun", "Leclercq", "Lecocq", "Lecomte",
        "Leduc", "Lefebvre", "Lefèvre", "Legrand", "Lejeune", "Lemaire", "Lemmens", "Lenaerts", "Leroy", "Leruitte", "Lesuisse", "Libert", "Lievens", "Lombard", "Louis", "Luyten", "Léonard", "Maes", "Mahieu", "Mairesse",
        "Maldague", "Marchal", "Martens", "Martin", "Maréchal", "Massart", "Masset", "Masson", "Mathieu", "Meert", "Mertens", "Messaoudi", "Meunier", "Michaux", "Michel", "Michiels", "Moens", "Moreau", "Moureau", "Nguyen",
        "Nicolas", "Nihant", "Nijs", "Noel", "Noël", "Parmentier", "Pauwels", "Peeters", "Petit", "Philippe", "Picard", "Pierre", "Pieters", "Piette", "Piron", "Pirotte", "Pirson", "Poisquet", "Polain", "Poncelet",
        "Pêtre", "Raes", "Remy", "Renard", "Renson", "Rensonnet", "Robert", "Roels", "Roland", "Roosen", "Rossi", "Rousseau", "Ruelens", "Ruyffelaere", "Sahin", "Saidi", "Schmitz", "Segers", "Servais", "Simon",
        "Simons", "Smeets", "Smet", "Smets", "Snyers", "Somers", "Sougné", "Soupart", "Stassen", "Stevens", "Thibaut", "Thijs", "Thiry", "Thomas", "Thys", "Timmermans", "Toussaint", "Tran", "Trussart", "Urbain",
        "Van Acker", "Van Damme", "Van Dyck", "Van Hecke", "Van Hoof", "Van de Velde", "Van den Bossche", "Van den Broeck", "Vandamme", "Vandenberghe", "Vanderlinden", "Vandervelde", "Vandyck", "Vaneyck", "Vanhees", "Vanheule", "Vanmechelen", "Vanoverschelde", "Vantomme", "Verbeeck",
        "Verbeke", "Verbruggen", "Vercammen", "Verhaegen", "Verhaeghe", "Verhelst", "Verheyen", "Verhoeven", "Verlaine", "Verlinden", "Vermeersch", "Vermeiren", "Vermeulen", "Vermote", "Verschueren", "Verstraete", "Verstraeten", "Vervoort", "Wauters", "Wery",
        "Willems", "Wouters", "Wuyts", "Wéry", "Yildirim", "Yilmaz"
    ];
}

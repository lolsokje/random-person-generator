<?php

namespace LilPecky\DriverGenerator\Providers\fr_FR;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Adrien", "Aimé", "Alain", "Alexandre", "Alexis", "Alfred", "Alphonse", "André", "Antoine", "Arthur", "Auguste", "Augustin", "Aurélien", "Baptiste", "Benjamin", "Benoît", "Bernard", "Bertrand", "Bruno", "Camille",
        "Charles", "Christophe", "Claude", "Constant", "Damien", "Daniel", "David", "Denis", "Didier", "Diego", "Dominique", "Dorian", "Edgar", "Edouard", "Emile", "Emmanuel", "Etienne", "Eugène", "Fabien", "Fabrice",
        "Fernand", "Florian", "Franck", "François", "Frédéric", "Félix", "Gabriel", "Gaston", "Georges", "Gilbert", "Gilles", "Grégoire", "Guillaume", "Guy", "Gérard", "Henri", "Honoré", "Hugues", "Isaac", "Jacques",
        "Jean", "Jonathan", "Jordan", "Joseph", "Joël", "Jules", "Julien", "Jérémie", "Jérôme", "Laurent", "Lionel", "Louis", "Loïc", "Luc", "Lucas", "Ludovic", "Léandre", "Léo", "Léon", "Marc",
        "Marcel", "Martin", "Mathieu", "Matthieu", "Maurice", "Maxime", "Michel", "Mickaël", "Nathan", "Nicolas", "Noël", "Olivier", "Pascal", "Patrice", "Patrick", "Paul", "Philippe", "Pierre", "Quentin", "Raphaël",
        "Raymond", "René", "Richard", "Robert", "Roger", "Roland", "Romain", "Rémy", "Simon", "Stéphane", "Sébastien", "Thibault", "Thibaut", "Thierry", "Thomas", "Théodore", "Théophile", "Timothée", "Tristan", "Valentin",
        "Victor", "Vincent", "William", "Xavier", "Yann", "Yves", "Zacharie", "Édouard", "Émile", "Éric", "Étienne"
    ];

    protected static array $givenNamesFemale = [
        "Adrienne", "Adèle", "Adélaïde", "Agathe", "Agnès", "Aimée", "Alex", "Alexandria", "Alexandrie", "Alice", "Alix", "Amélie", "Anastasie", "Anaïs", "Andrée", "Anne", "Anouk", "Antoinette", "Arnaude", "Astrid",
        "Audrey", "Aurore", "Aurélie", "Bernadette", "Brigitte", "Béatrice", "Camille", "Capucine", "Caroline", "Catherine", "Chantal", "Charlotte", "Christelle", "Christiane", "Christine", "Claire", "Claudine", "Clémence", "Colette", "Constance",
        "Corinne", "Cécile", "Célina", "Céline", "Danielle", "Delphine", "Denise", "Diane", "Dominique", "Dorothée", "Emmanuelle", "Estelle", "Eugénie", "Fabienne", "Florence", "Françoise", "Frédérique", "Gabrielle", "Geneviève", "Géraldine",
        "Henriette", "Hortense", "Hélène", "Inès", "Isabelle", "Jacqueline", "Jeanne", "Jeannine", "Jocelyne", "Josette", "Joséphine", "Julie", "Juliette", "Laetitia", "Laure", "Laurence", "Liliane", "Lorraine", "Louise", "Luce",
        "Lucie", "Lucy", "Madeleine", "Magali", "Maggie", "Manon", "Marcelle", "Margaret", "Margaud", "Margaux", "Margot", "Marguerite", "Marianne", "Marie", "Marine", "Marion", "Marthe", "Martine", "Maryse", "Mathilde",
        "Michelle", "Michèle", "Monique", "Nadège", "Nath", "Nathalie", "Nicole", "Nina", "Noémi", "Noémie", "Océane", "Odette", "Olivia", "Olivie", "Pascale", "Patricia", "Paulette", "Pauline", "Philippine", "Pénélope",
        "Renée", "Sabine", "Sandrine", "Simone", "Sophie", "Stéphanie", "Susan", "Susanne", "Suzanne", "Sylvie", "Thérèse", "Valentine", "Valérie", "Victoire", "Violette", "Virginie", "Véronique", "Yvette", "Yvonne", "Zoé",
        "Édith", "Élisabeth", "Élise", "Élodie", "Éléonore", "Émilie"
    ];

    protected static array $familyNames = [
        "Adam", "Albert", "Alexandre", "Allain", "Allard", "Alves", "Andre", "Antoine", "Arnaud", "Aubert", "Aubry", "Auger", "Bailly", "Barbe", "Barbeau", "Barbier", "Baron", "Barre", "Barthelemy", "Baudry",
        "Bazin", "Becker", "Begue", "Benard", "Benoit", "Berger", "Bergeron", "Bernard", "Bernier", "Berthelot", "Bertin", "Bertrand", "Besnard", "Besson", "Bigot", "Blais", "Blanc", "Blanchard", "Blanchet", "Blanchette",
        "Blin", "Blondel", "Blot", "Bodin", "Boivin", "Bonneau", "Bonnet", "Bonnin", "Bouchard", "Boucher", "Bouchet", "Boulanger", "Boulay", "Bourdon", "Bourgeois", "Bousquet", "Boutin", "Bouvet", "Bouvier", "Boyer",
        "Breton", "Briand", "Brière", "Brun", "Bruneau", "Brunel", "Brunet", "Buisson", "Bélanger", "Camus", "Carlier", "Caron", "Carpentier", "Carre", "Champagne", "Charbonneau", "Charles", "Charpentier", "Charrier", "Chartier",
        "Chartrand", "Chauveau", "Chauvet", "Chauvin", "Chevalier", "Chevallier", "Chretien", "Clement", "Clerc", "Cloutier", "Cohen", "Colas", "Colin", "Collet", "Collin", "Cordier", "Costa", "Coste", "Coulon", "Courtois",
        "Cousin", "Couture", "Couturier", "Cyr", "Côté", "Da Costa", "Da Silva", "Dagenais", "Daniel", "David", "De Oliveira", "De Sousa", "Delahaye", "Delannoy", "Delattre", "Delaunay", "Delmas", "Delorme", "Denis", "Descamps",
        "Deschamps", "Devaux", "Diallo", "Dias", "Diaz", "Didier", "Dijoux", "Dion", "Dos Santos", "Drouin", "Dubois", "Dufour", "Duhamel", "Dumas", "Dumont", "Dumoulin", "Dupont", "Dupre", "Dupuis", "Dupuy",
        "Durand", "Duval", "Etienne", "Evrard", "Fabre", "Faivre", "Faure", "Ferland", "Fernandes", "Fernandez", "Ferrand", "Ferreira", "Fischer", "Fleury", "Fontaine", "Fortin", "Foucher", "Fouquet", "Fournier", "Francois",
        "Gagnon", "Gagné", "Gaillard", "Gallet", "Garcia", "Garnier", "Gaudin", "Gauthier", "Gautier", "Gay", "Georges", "Gerard", "Germain", "Gilbert", "Gilles", "Gillet", "Gimenez", "Girard", "Giraud", "Giroux",
        "Godard", "Gomes", "Gomez", "Goncalves", "Gonzalez", "Gosselin", "Goulet", "Gravel", "Gregoire", "Grenier", "Grondin", "Gros", "Guay", "Guerin", "Guibert", "Guichard", "Guilbert", "Guillaume", "Guillet", "Guillon",
        "Guillot", "Guillou", "Guyon", "Guyot", "Hamel", "Hamon", "Hardy", "Hebert", "Henry", "Hernandez", "Herve", "Hoarau", "Hoareau", "Hubert", "Huet", "Humbert", "Imbert", "Jacob", "Jacques", "Jacquet",
        "Jacquot", "Jean", "Jolicoeur", "Joly", "Joseph", "Joubert", "Jourdan", "Julien", "Klein", "Labbe", "Lacombe", "Lacroix", "Lagarde", "Laine", "Lalonde", "Lambert", "Lamy", "Landry", "Langlois", "Lapierre",
        "Laplante", "Laporte", "Laroche", "Launay", "Laurent", "Lavigne", "Le Gall", "Le Goff", "Le Roux", "Leblanc", "Lebon", "Lebreton", "Lebrun", "Leclerc", "Leclercq", "Lecomte", "Leconte", "Lecoq", "Ledoux", "Leduc",
        "Lefebvre", "Lefevre", "Lefort", "Legault", "Legendre", "Leger", "Legrand", "Legros", "Lejeune", "Leleu", "Lelievre", "Lemaire", "Lemaitre", "Lemay", "Lemieux", "Lemoine", "Lemonnier", "Lenoir", "Lepage", "Leroux",
        "Leroy", "Lesage", "Letellier", "Leveque", "Levy", "Loiseau", "Lombard", "Long", "Lopes", "Lopez", "Lortie", "Louis", "Lucas", "Lévesque", "Lévy", "Mace", "Mahe", "Maillard", "Maillet", "Maillot",
        "Mallet", "Marchal", "Marchand", "Marechal", "Marie", "Marin", "Marion", "Marques", "Martel", "Martin", "Martineau", "Martinez", "Martins", "Marty", "Mary", "Masse", "Masson", "Mathieu", "Maurice", "Maury",
        "Menard", "Mendes", "Mercier", "Merle", "Meunier", "Meyer", "Michaud", "Michel", "Millet", "Monnier", "Moreau", "Morel", "Moreno", "Morin", "Morvan", "Moulin", "Muller", "Munoz", "Ménard", "Nadeau",
        "Nault", "Navarro", "Neveu", "Nguyen", "Nicolas", "Noel", "Normand", "Noël", "Olivier", "Ollivier", "Ouellet", "Pages", "Pagé", "Paquette", "Parent", "Paris", "Pascal", "Pasquier", "Paul", "Payet",
        "Pellerin", "Pelletier", "Peltier", "Pereira", "Perez", "Peron", "Perrault", "Perreault", "Perret", "Perrier", "Perrin", "Perron", "Perrot", "Petit", "Petitjean", "Philippe", "Picard", "Pichon", "Piché", "Pierre",
        "Pineau", "Pinto", "Pires", "Plante", "Poirier", "Pons", "Potier", "Pottier", "Poulain", "Poulin", "Prevost", "Pruvost", "Racine", "Ramos", "Raymond", "Raynaud", "Regnier", "Remy", "Renard", "Renaud",
        "Renault", "Rey", "Reynaud", "Ribeiro", "Richard", "Riou", "Rivard", "Riviere", "Robert", "Robillard", "Robin", "Roche", "Rocher", "Rodrigues", "Rodriguez", "Roger", "Rolland", "Rossi", "Rousseau", "Roussel",
        "Rousset", "Roux", "Roy", "Royer", "Ruiz", "Salmon", "Samson", "Sanchez", "Sauvage", "Schmitt", "Schneider", "Seguin", "Simard", "Simon", "Sirois", "St-Amour", "St-Denis", "St-Germain", "St-Jean", "St-Laurent",
        "St-Pierre", "Séguin", "Tanguy", "Tardif", "Techer", "Teixeira", "Tessier", "Texier", "Thibault", "Thierry", "Thomas", "Thériault", "Torres", "Toussaint", "Traore", "Tremblay", "Turcotte", "Turpin", "Vachon", "Vaillancourt",
        "Vaillant", "Valentin", "Valette", "Vallee", "Vallet", "Vasseur", "Verdier", "Vidal", "Vincent", "Voisin", "Vézina", "Wagner", "Weber", "Weiss"
    ];
}

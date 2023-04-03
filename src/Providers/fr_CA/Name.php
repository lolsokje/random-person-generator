<?php

namespace LilPecky\RandomPersonGenerator\Providers\fr_CA;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Adam", "Adrien", "Aimé", "Alain", "Albert", "Alexandre", "Alfred", "Alphonse", "Alysson", "André", "Anthony", "Antoine", "Armand", "Arthur", "Aubert", "Auguste", "Augustin", "Augustine", "Baptiste", "Benjamin",
        "Benoit", "Benoît", "Bernard", "Bertrand", "Bruno", "Camille", "Charles", "Christian", "Christophe", "Claude", "Clément", "Daniel", "David", "Denis", "Didier", "Dominic", "Edmond", "Emmanuel", "Eugène", "Fabien",
        "Fernand", "Françis", "François", "Frédéric", "Félix", "Gabriel", "Gaston", "Georges", "Gilbert", "Gilles", "Grégoire", "Grégory", "Guillaume", "Gustave", "Guy", "Gérald", "Gérard", "Henri", "Hervé", "Honoré",
        "Hubert", "Hugues", "Isaac", "Jacques", "Jean", "Jonathan", "Joseph", "Joël", "Jules", "Julien", "Jérôme", "Kevin", "Laurent", "Lionel", "Louis", "Luc", "Lucas", "Lucien", "Léo", "Léon",
        "Marc", "Marcel", "Marius", "Martin", "Mathieu", "Matthieu", "Maurice", "Michaël", "Michel", "Miguel", "Napoléon", "Nicolas", "Noël", "Olivier", "Pascal", "Patrice", "Patrick", "Paul", "Philippe", "Pierre",
        "Raymond", "René", "Richard", "Robert", "Roger", "Roland", "Réjean", "Rémi", "Rémy", "Simon", "Simone", "Stéphane", "Sylvain", "Sébastien", "Thierry", "Thomas", "Théo", "Théodore", "Théophile", "Timothée",
        "Tristan", "Valentin", "Victor", "Vincent", "William", "Xavier", "Yvan", "Yves", "Yvon", "Zacharie", "Édouard", "Émanuelle", "Émile", "Éric", "Étienne"
    ];

    public static array $givenNamesFemale = [
        "Adrienne", "Adèle", "Agathe", "Aimée", "Alexandra", "Alice", "Aline", "Amélie", "Anaïs", "Andrée", "Ann", "Anne", "Annette", "Annie", "Anouk", "Antoinette", "Ariane", "Arianne", "Audrey", "Aurore",
        "Aurélie", "Bernadette", "Brigitte", "Béatrice", "Camille", "Caroline", "Catherine", "Chantal", "Charline", "Charlotte", "Chloé", "Christelle", "Christiane", "Christine", "Claire", "Clarisse", "Claudine", "Colette", "Constance", "Corrine",
        "Cécile", "Céline", "Danielle", "Denise", "Diane", "Dominique", "Dorothée", "Elodie", "Estelle", "Eugénie", "Eva", "Eve", "Fanny", "Florence", "Francine", "Françoise", "Frédérique", "Gabrielle", "Geneviève", "Georgette",
        "Ginette", "Guylaine", "Honorée", "Hélène", "Isabelle", "Jacqueline", "Janine", "Jasmine", "Jean", "Jeanne", "Jeannine", "Joanne", "Jocelyne", "Josette", "Josiane", "Josée", "Joséphine", "Julie", "Justine", "Laurence",
        "Liliane", "Lise", "Louise", "Luce", "Lucie", "Léa", "Madeleine", "Magalie", "Maggie", "Manon", "Margot", "Marguerite", "Marianne", "Marie", "Marilyn", "Marthe", "Martine", "Maryse", "Mathilde", "Michelle",
        "Michèle", "Monique", "Mélanie", "Nancy", "Nathalie", "Nicole", "Noémie", "Odette", "Olivia", "Patrice", "Patricia", "Paule", "Paulette", "Pauline", "Pierrette", "Pénélope", "Rachel", "Renée", "Rita", "Rolande",
        "Rose", "Roxane", "Sabrina", "Sandrine", "Simone", "Sophie", "Stéphanie", "Susanne", "Suzanne", "Sylvie", "Thérèse", "Valérie", "Vanessa", "Virginie", "Véronique", "Yvette", "Yvonne", "Zoé", "Édith", "Élisabeth",
        "Élise", "Élodie", "Émilie", "Érika"
    ];

    public static array $familyNames = [
        "Allard", "Arsenault", "Audet", "Beaudoin", "Beaulieu", "Benoît", "Bergeron", "Bernard", "Bernier", "Bertrand", "Bilodeau", "Blais", "Blanchette", "Boisvert", "Boivin", "Bolduc", "Bouchard", "Boucher", "Boudreau", "Bourgeois",
        "Breton", "Brien", "Bédard", "Bélanger", "Bérubé", "Caron", "Carrier", "Champagne", "Charbonneau", "Charest", "Chartrand", "Chevalier", "Cloutier", "Couture", "Cyr", "Côté", "Dagenais", "Demers", "Deschênes", "Desjardins",
        "Desrosiers", "Dion", "Dionne", "Drouin", "Dubois", "Dubé", "Dufour", "Dumont", "Dupuis", "Fillion", "Fontaine", "Fortier", "Fortin", "Fournier", "Gagnon", "Gagné", "Gaudreault", "Gauthier", "Giguère", "Gilbert",
        "Gingras", "Girard", "Giroux", "Gosselin", "Goulet", "Gravel", "Grenier", "Guay", "Hamel", "Harvey", "Houle", "Hébert", "Jacques", "Jean", "Jolicoeur", "Labelle", "Lachance", "Lacroix", "Lalonde", "Lambert",
        "Landry", "Langlois", "Lapierre", "Lapointe", "Larouche", "Lauzon", "Lavigne", "Lavoie", "Leblanc", "Leclerc", "Leduc", "Lefebvre", "Legault", "Lemay", "Lemieux", "Lepage", "Lessard", "Levesque", "Long", "Lortie",
        "Lévesque", "Martel", "Martin", "Mercier", "Michaud", "Moreau", "Morin", "Ménard", "Nadeau", "Nault", "Nguyen", "Ouellet", "Paquette", "Paradis", "Parent", "Pelletier", "Perreault", "Perron", "Picard", "Plante",
        "Poirier", "Poulin", "Proulx", "Provost", "Raymond", "Renaud", "Richard", "Rioux", "Rivard", "Robert", "Robillard", "Rousseau", "Roy", "Savard", "Savoie", "Simard", "Sirois", "St-Amand", "St-Denis", "St-Jacques",
        "St-Laurent", "St-Onge", "St-Pierre", "Séguin", "Tardif", "Tessier", "Therrien", "Thibault", "Thériault", "Tremblay", "Trudel", "Turcotte", "Vachon", "Vaillancourt", "Villeneuve", "Vincent"
    ];
}

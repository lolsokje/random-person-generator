<?php

namespace LilPecky\DriverGenerator\Providers\pt_PT;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Adriano", "Afonso", "Alberto", "Alexandre", "Alfredo", "André", "António", "Artur", "Augusto", "Aurélio", "Belmiro", "Benjamim", "Bernardo", "Bruno", "Carlos", "Cláudio", "Cristiano", "César", "Daniel", "Davi",
        "David", "Denis", "Diego", "Dinis", "Diogo", "Duarte", "Edgar", "Eduardo", "Elias", "Elísio", "Emanuel", "Emílio", "Enrique", "Enzo", "Eugénio", "Fabrício", "Feliciano", "Felipe", "Fernando", "Filipe",
        "Flávio", "Francisco", "Frederico", "Fábio", "Gabriel", "Gaspar", "Gil", "Gonçalo", "Guilherme", "Gustavo", "Henrique", "Hugo", "Hélder", "Igor", "Inácio", "Isaac", "Ivan", "Ivo", "Jaime", "Joaquim",
        "Joel", "Jorge", "José", "João", "Júlio", "Kevin", "Leandro", "Leonardo", "Leonel", "Leónidas", "Lino", "Lisandro", "Lourenço", "Lucas", "Luís", "Manuel", "Marco", "Marcos", "Martim", "Martinho",
        "Mateus", "Matheus", "Matias", "Mauro", "Micael", "Miguel", "Márcio", "Mário", "Nelson", "Nicolau", "Nuno", "Octávio", "Olavo", "Orlando", "Osvaldo", "Paulo", "Pedro", "Rafael", "Raimundo", "Raul",
        "Raúl", "Renato", "Ricardo", "Roberto", "Rodolfo", "Rodrigo", "Rui", "Rúben", "Salvador", "Samuel", "Sandro", "Santiago", "Sebastião", "Silvério", "Simão", "Sofia", "Sousa", "Sérgio", "Sílvio", "Tadeu",
        "Telmo", "Teodoro", "Tiago", "Tomás", "Tomé", "Valdemar", "Valentim", "Valter", "Vasco", "Vicente", "Victorino", "Víctor", "Vítor", "William", "Wilson", "Xavier", "Zeca", "Zé", "Álvaro", "Ângelo",
        "Óscar"
    ];

    public static array $givenNamesFemale = [
        "Adriana", "Albertina", "Alexandra", "Alice", "Alícia", "Amélia", "Ana", "Andreia", "Anita", "Anna", "Antónia", "Aparecida", "Ariadne", "Ariana", "Aurora", "Beatriz", "Benedita", "Bernardete", "Bianca", "Bruna",
        "Brígida", "Bárbara", "Camila", "Carina", "Carla", "Carlota", "Carmen", "Carolina", "Catarina", "Cecília", "Celina", "Clara", "Cláudia", "Constança", "Cristiana", "Cristina", "Cátia", "Dalila", "Daniela", "Diana",
        "Dina", "Dora", "Doriana", "Débora", "Edite", "Eduarda", "Elena", "Elisa", "Elisabete", "Elsa", "Ema", "Emília", "Erica", "Ermelinda", "Ester", "Estrela", "Eugénia", "Eva", "Fabiana", "Filipa",
        "Flor", "Francisca", "Fátima", "Gabriela", "Georgina", "Gilda", "Gisela", "Gorete", "Graça", "Guida", "Helena", "Heloísa", "Iara", "Inês", "Iolanda", "Irina", "Iris", "Isabel", "Isabela", "Isadora",
        "Jacinta", "Joana", "Joaquina", "Judite", "Juliana", "Juliete", "Jéssica", "Júlia", "Kelly", "Kyara", "Lara", "Laura", "Leonor", "Leticia", "Letícia", "Lia", "Liliana", "Liliane", "Lina", "Lorena",
        "Lourdes", "Luana", "Luciana", "Luciene", "Luna", "Luísa", "Lídia", "Lúcia", "Madalena", "Mafalda", "Magda", "Mara", "Margarida", "Maria", "Mariana", "Marina", "Marta", "Matilde", "Melissa", "Mia",
        "Micaela", "Miriam", "Márcia", "Mélanie", "Mónica", "Nara", "Natalina", "Natália", "Neide", "Neli", "Neuza", "Nicole", "Nina", "Norberta", "Noémia", "Nádia", "Nídia", "Núria", "Ofélia", "Olívia",
        "Patrícia", "Paula", "Paulina", "Petra", "Priscila", "Rafaela", "Raquel", "Rebeca", "Regina", "Renata", "Rita", "Rosa", "Rosalina", "Rute", "Salomé", "Sandra", "Sara", "Severina", "Sofia", "Solange",
        "Soraia", "Susana", "Sílvia", "Sónia", "Tatiana", "Teresa", "Teresinha", "Tânia", "Ulrica", "Vanda", "Vanessa", "Vera", "Verónica", "Victória", "Violeta", "Vitória", "Viviana", "Viviane", "Xénia", "Yara",
        "Yasmin", "Yolanda", "Zélia", "Ângela", "Érica", "Érika", "Íris"
    ];

    public static array $familyNames = [
        "Abreu", "Albuquerque", "Almeida", "Alves", "Amaral", "Amorim", "Andrade", "Anjos", "Antunes", "Araújo", "Assunção", "Azevedo", "Baptista", "Barbosa", "Barros", "Bastos", "Batista", "Bento", "Bernardo", "Borges",
        "Braga", "Branco", "Brandão", "Brito", "Cabral", "Camacho", "Campos", "Cardoso", "Carneiro", "Carvalho", "Castanheira", "Castro", "Cavalcante", "Cerdeira", "Chaves", "Coelho", "Conceição", "Cordeiro", "Correia", "Costa",
        "Coutinho", "Cruz", "Cunha", "Curado", "Dias", "Domingos", "Domingues", "Duarte", "Esteves", "Faria", "Fernandes", "Ferreira", "Fidalgo", "Figueiredo", "Fonseca", "Fontes", "Franco", "Freitas", "Garcia", "Gaspar",
        "Gil", "Gomes", "Gonçalves", "Grilo", "Guerra", "Guerreiro", "Henriques", "Jesus", "Leal", "Leite", "Lemos", "Lima", "Lopes", "Loureiro", "Lourenço", "Macedo", "Machado", "Madeira", "Magalhães", "Maia",
        "Mamede", "Marques", "Martins", "Matias", "Matos", "Medeiros", "Melo", "Mendes", "Mira", "Miranda", "Monteiro", "Morais", "Moreira", "Mota", "Moura", "Nascimento", "Neto", "Neves", "Nobre", "Nogueira",
        "Novais", "Nunes", "Oliveira", "Pacheco", "Paiva", "Pereira", "Pinheiro", "Pinho", "Pinto", "Pires", "Portela", "Quaresma", "Ramos", "Raposo", "Rebelo", "Reis", "Ribeiro", "Rocha", "Rodrigues", "Santana",
        "Santos", "Saraiva", "Seixas", "Silva", "Simões", "Soares", "Sousa", "Sá", "Tavares", "Teixeira", "Terra", "Torres", "Trindade", "Vale", "Valente", "Vasconcelos", "Vaz", "Veiga", "Vicente", "Vidal",
        "Vieira", "Vilaça", "Xavier", "Zamith"
    ];
}

<?php

namespace LilPecky\RandomPersonGenerator\Providers\ru_RU;

class Name extends \LilPecky\RandomPersonGenerator\Providers\Name
{
    public static array $givenNamesMale = [
        "Afanasy", "Agafon", "Aleksei", "Alexander", "Anatoly", "Andrei", "Anisim", "Anton", "Aristarkh", "Arkhip", "Arseny", "Artem", "Artur", "Averky", "Bogdan", "Boris", "Daniil", "David", "Denis", "Dmitri",
        "Eduard", "Efim", "Egor", "Emil", "Eremey", "Ernest", "Evgeny", "Fedor", "Foma", "Gabriel", "Gavriil", "Gennady", "Georgy", "German", "Gleb", "Gordei", "Grigoriy", "Grigory", "Ignat", "Igor",
        "Ilarion", "Ilya", "Innokenty", "Isidor", "Ivan", "Khariton", "Kiprian", "Kirill", "Konstantin", "Kuzma", "Lazar", "Leonid", "Luka", "Makar", "Maksim", "Matvei", "Maximilian", "Mefody", "Mikhail", "Miron",
        "Mitrofan", "Nestor", "Nifont", "Nikita", "Nikolai", "Oleg", "Olimpiy", "Onisim", "Osip", "Pafnuty", "Pankrat", "Parfen", "Pavel", "Prokhor", "Prokopiy", "Pyotr", "Rodion", "Roman", "Rostislav", "Ruben",
        "Rufim", "Savely", "Semyon", "Serafim", "Sergei", "Sergey", "Sidor", "Silvestr", "Spiridon", "Stanislav", "Stepan", "Taras", "Tikhon", "Timofey", "Timur", "Trofim", "Ustin", "Vadim", "Valentin", "Varfolomey",
        "Vasily", "Venedikt", "Veniamin", "Vikentiy", "Viktor", "Vissarion", "Vladilen", "Vladimir", "Vladislav", "Volodya", "Vyacheslav", "Yakov", "Yaropolk", "Yaroslav", "Yefim", "Yegor", "Yermolai", "Yevdokim", "Yevgeniy", "Yevgeny",
        "Yevsey", "Yuri", "Zahar", "Zinovy", "Zosima"
    ];

    public static array $givenNamesFemale = [
        "Adelaida", "Adriana", "Agafiya", "Agnessa", "Agrippina", "Akilina", "Albina", "Aleksandra", "Alena", "Alevtina", "Alfiya", "Alina", "Alisa", "Alla", "Anastasia", "Anastasiya", "Angelina", "Anna", "Antonina", "Anzhela",
        "Ariadna", "Ariana", "Astra", "Avdotya", "Azalea", "Barbara", "Belinda", "Bogdana", "Borislavka", "Borisoglebskaya", "Briana", "Bronislava", "Daria", "Darina", "Diana", "Dina", "Ekaterina", "Elena", "Elizaveta", "Evgeniya",
        "Galina", "Inna", "Irina", "Kapitolina", "Karina", "Kira", "Klara", "Ksenia", "Lada", "Larisa", "Lidiya", "Liliya", "Liza", "Lyubov", "Margarita", "Maria", "Marina", "Marta", "Milana", "Nadezhda",
        "Natalia", "Nina", "Oksana", "Olga", "Polina", "Raisa", "Regina", "Roza", "Sofia", "Svetlana", "Taisiya", "Tamara", "Tatyana", "Vadimovna", "Valentina", "Valeria", "Varda", "Varvara", "Vasilisa", "Velislava",
        "Venera", "Vera", "Veronica", "Veronika", "Veta", "Victoria", "Viktoria", "Viktoriya", "Violetta", "Vira", "Vitalina", "Vlada", "Vlasta", "Vlora", "Yadviga", "Yana", "Yanina", "Yarina", "Yaroslava", "Yasmin",
        "Yekaterina", "Yelena", "Yevdokiya", "Yevgeniya", "Yevpraksiya", "Yevstoliya", "Yevstratiya", "Yevsyukova", "Ylona", "Yudita", "Yulia", "Yuliya", "Yulya", "Yuna", "Yustina", "Zabelina", "Zarina", "Zinaida", "Zlata", "Zoya"
    ];

    public static array $familyNames = [
        "Abramov", "Abramova", "Afanasiev", "Afonina", "Aksenova", "Alekseev", "Alexandrova", "Andreev", "Anisimova", "Antonov", "Baranov", "Baranova", "Belova", "Bogdanov", "Bogdanova", "Borisov", "Borisova", "Borodin", "Borodina", "Chernov",
        "Chernova", "Danilov", "Danilova", "Davydov", "Davydova", "Dmitriev", "Dmitrieva", "Dubrov", "Dubrovsky", "Efimov", "Egorov", "Fedorov", "Filippov", "Gavrilov", "Golubev", "Gordeev", "Gubanov", "Ivanov", "Kalinin", "Kapustin",
        "Karpov", "Kazakov", "Kiselev", "Klimov", "Kochetkov", "Kolesnikov", "Kolpakov", "Kondratiev", "Konovalov", "Korolev", "Koshelev", "Kostin", "Kovalev", "Kozlov", "Krasnov", "Krylov", "Kuznetsov", "Lebedev", "Leontiev", "Lobanov",
        "Loginov", "Makarov", "Maksimov", "Melnikov", "Mironov", "Mishin", "Morozov", "Nekrasov", "Nikonov", "Novikov", "Orlov", "Osipov", "Pavlov", "Petrov", "Popov", "Prokhorov", "Pugachev", "Romanov", "Rostovtsev", "Ryabov",
        "Ryzhkov", "Saveliev", "Savin", "Sergeev", "Sidorov", "Smirnov", "Sokolov", "Solovyev", "Sorokin", "Spiridonov", "Stepanov", "Suvorov", "Tarasov", "Tikhonov", "Timofeev", "Titov", "Tolstoy", "Trubnikov", "Tsvetkov", "Uvarov",
        "Vasilev", "Vasiliev", "Volkov", "Vorobyov", "Voronin", "Vorontsov", "Yakovlev", "Yefimov", "Yeremin", "Yudin", "Yushkov", "Zakharov", "Zaytsev", "Zhdanov", "Zhukov", "Zotov", "Zverev", "Zvyagintsev"
    ];
}

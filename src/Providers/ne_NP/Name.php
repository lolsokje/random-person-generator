<?php

namespace LilPecky\DriverGenerator\Providers\ne_NP;

class Name extends \LilPecky\DriverGenerator\Providers\Name
{
    protected static array $givenNamesMale = [
        "Aadarsh", "Aadesh", "Aaditya", "Aakash", "Aanand", "Aarav", "Abud", "Achyut", "Ajay", "Ajit", "Akhil", "Akshar", "Akshay", "Alok", "Amar", "Amir", "Amit", "Amod", "Amrit", "Amulya",
        "Ananta", "Angel", "Angikar", "Anil", "Ankit", "Ankur", "Anmol", "Anshu", "Anuj", "Arjun", "Arun", "Ashish", "Ashok", "Ashutosh", "Atal", "Avinash", "Ayush", "Babish", "Badal", "Badri",
        "Baibhav", "Bhagwam", "Bhakti", "Bhanu", "Bibek", "Bicky", "Bidur", "Bidwan", "Bikal", "Bikash", "Bikesh", "Bikram", "Bimal", "Binamra", "Binay", "Bipin", "Biplav", "Bipul", "Biraj", "Birendra",
        "Bishal", "Bisu", "Biswas", "Brijesh", "Buddha", "Chaitanya", "Chandan", "Chandra", "Chirag", "Darpan", "Deep", "Deepak", "Dev", "Dhairya", "Dharma", "Dharmendra", "Dhiren", "Dilip", "Diwakar", "Diwash",
        "Eklavya", "Gajendra", "Ganesh", "Gaurav", "Girish", "Gokul", "Gopal", "Govinda", "Grija", "Gyanraj", "Hans", "Hardik", "Hari", "Harsa", "Hemant", "Himal", "Hitesh", "Hridaya", "Ishwar", "Jagdish",
        "Jitendra", "Jivan", "Kabindra", "Kailash", "Kalyan", "Kamal", "Kamod", "Kapil", "Karan", "Karna", "Khagendra", "Kiran", "Kishor", "Kris", "Krishna", "Krisus", "Kuber", "Lakshman", "Lalit", "Lava",
        "Lochan", "Lokesh", "Madhav", "Madhukar", "Madhur", "Mandeep", "Manish", "Manjul", "Manoj", "Milan", "Mohit", "Mridul", "Nabin", "Nakul", "Narayan", "Narendra", "Naresh", "Nawaraj", "Neil", "Nerain",
        "Nirajan", "Nirmal", "Nirupam", "Nischal", "Nishad", "Nishant", "Nitesh", "Nutan", "Om", "Paras", "Parikshit", "Parimal", "Pawan", "Piyush", "Prabal", "Prabesh", "Prabhat", "Prabin", "Pradeep", "Prajwal",
        "Prakash", "Pramesh", "Pramod", "Pranaya", "Pranil", "Prasanna", "Prashant", "Prasun", "Pratap", "Pratik", "Prayag", "Prem", "Prianshu", "Prithivi", "Purna", "Pushkar", "Raghab", "Rahul", "Raj", "Rajan",
        "Rajendra", "Rajesh", "Rakesh", "Ram", "Ramesh", "Ranjan", "Ranjit", "Ricky", "Rijan", "Rishab", "Rishikesh", "Rohan", "Rohit", "Roshan", "Sabin", "Sachit", "Safal", "Sagar", "Sahaj", "Sahan",
        "Sajal", "Sakar", "Samir", "Sanchit", "Sandeep", "Sandesh", "Sanjay", "Sanjeev", "Sankalpa", "Santosh", "Sarad", "Saral", "Saroj", "Sashi", "Saumya", "Sevak", "Shailesh", "Shakti", "Shamundra", "Shankar",
        "Shantanu", "Shashank", "Shashwat", "Shekar", "Shiva", "Shyam", "Siddhartha", "Sitaram", "Sohan", "Sohil", "Soviet", "Spandan", "Subal", "Subham", "Subodh", "Sudan", "Sudhir", "Sudin", "Sudip", "Sujan",
        "Sujit", "Sukanta", "Suman", "Sumel", "Sunil", "Suraj", "Surendra", "Suresh", "Surya", "Sushant", "Sushil", "Suyash", "Suyog", "Swagat", "Swapnil", "Swarup", "Tej", "Tilak", "Tirtha", "Trailokya",
        "Trilochan", "Uday", "Udit", "Ujjwal", "Umesh", "Uttam", "Yogendra", "Yogesh", "Yuvaraj"
    ];

    protected static array $givenNamesFemale = [
        "Aakansha", "Aanchal", "Aarati", "Aasha", "Aashika", "Aashma", "Aayusha", "Alisha", "Ambika", "Amrita", "Anamika", "Anisha", "Anita", "Anjali", "Anjana", "Anjela", "Anjila", "Anju", "Ankita", "Ansu",
        "Anu", "Anupa", "Anupama", "Anushree", "Anuska", "Apeksha", "Archana", "Arpita", "Aruna", "Asha", "Asmita", "Babita", "Bandita", "Barsa", "Bhawana", "Bimala", "Bina", "Bindu", "Binita", "Bipana",
        "Bishnu", "Chadani", "Chameli", "Champa", "Chandana", "Damini", "Deepa", "Deepti", "Depika", "Devi", "Dibya", "Diksha", "Dilmaya", "Dipa", "Dipshika", "Durga", "Ganga", "Garima", "Gauri", "Geeta",
        "Gita", "Goma", "Grishma", "Harsika", "Hema", "Himani", "Indira", "Isha", "Ishika", "Ishwari", "Jamuna", "Janaki", "Januka", "Jasmin", "Jiya", "Junu", "Jyoti", "Kabita", "Kajal", "Kala",
        "Kamala", "Kanchan", "Karuna", "Kaushika", "Khusbhu", "Kiran", "Komal", "Kopila", "Kripa", "Kriti", "Kritika", "Kshitz", "Kumud", "Kusum", "Lalita", "Lata", "Laxmi", "Lina", "Luna", "Madhavi",
        "Madhu", "Madhuri", "Mamata", "Manila", "Manisha", "Manita", "Manjita", "Manju", "Maya", "Mayabati", "Mayushi", "Meena", "Menka", "Menuka", "Mina", "Mira", "Motiva", "Mukti", "Muna", "Nabina",
        "Namrata", "Nandani", "Nandita", "Nilam", "Nira", "Nirmali", "Nisha", "Nishita", "Pallavi", "Parijat", "Pavitra", "Pinky", "Prabha", "Prabina", "Prabriti", "Prakriti", "Pramila", "Prapti", "Pratiksha", "Pratima",
        "Preeti", "Prekshya", "Prenana", "Priya", "Priyanka", "Puja", "Punam", "Purnima", "Puspa", "Rabina", "Radha", "Radhika", "Rajani", "Raksha", "Rakshya", "Rama", "Ramita", "Rampyari", "Rani", "Ranjana",
        "Ranju", "Rashmi", "Rejina", "Rekha", "Renu", "Renuka", "Reshami", "Riddhi", "Rina", "Rita", "Ritu", "Roshni", "Rupa", "Sabina", "Sabita", "Sacheta", "Sachita", "Sadhana", "Safala", "Sagina",
        "Sahana", "Saileja", "Sajala", "Sakshi", "Sakuntala", "Samjhana", "Sampada", "Samridhi", "Sangita", "Sanjana", "Sanskriti", "Santoshi", "Sarala", "Saraswati", "Sarina", "Sarita", "Sarmila", "Sarupa", "Saubhagya", "Shanti",
        "Sharmila", "Shasikala", "Shova", "Shraddha", "Shreya", "Shrija", "Shristi", "Shriya", "Shusila", "Simran", "Sita", "Smriti", "Sneha", "Soni", "Srijana", "Subheksha", "Sujata", "Sukriti", "Sulochana", "Sumi",
        "Sumnima", "Sunila", "Surakshya", "Susma", "Susmita", "Suyesha", "Swechchha", "Tara", "Tulsi", "Uma", "Urbasi", "Urmila", "Usha", "Vandana", "Yami", "Yasodha", "Yushma"
    ];

    protected static array $familyNames = [
        "Acharya", "Adhikari", "Agarwal", "Amatya", "Aryal", "Baidya", "Bajracharya", "Balami", "Banepali", "Baniya", "Banjade", "Baral", "Basnet", "Bastakoti", "Bastola", "Basyal", "Belbase", "Bhandari", "Bhatta", "Bhattarai",
        "Bhusal", "Bijukchhe", "Bisht", "Bista", "Bohara", "Budathoki", "Byanjankar", "Chalise", "Chamling", "Chapagain", "Chaudhary", "Chaulagain", "Chhetri", "Dahal", "Dangol", "Dawadi", "Devkota", "Dhakal", "Dhamla", "Dhaubhadel",
        "Dhungel", "Dulal", "Gauchan", "Gautam", "Ghale", "Ghimire", "Giri", "Golchha", "Gurung", "Gyalzen", "Gyawali", "Hamal", "Himanshu", "Humagain", "Jha", "Joshi", "KC", "Kafle", "Kandel", "Kansakar",
        "Kaphle", "Karki", "Karmacharya", "Karna", "Katwal", "Kayastha", "Khadgee", "Khadka", "Khan", "Khanal", "Kharel", "Khatiwada", "Khatri", "Khawas", "Koirala", "Kunwar", "Lama", "Lamichhane", "Lamsal", "Lawoti",
        "Ligal", "Limbu", "Lohani", "Magar", "Maharjan", "Mainali", "Malakar", "Maleku", "Malla", "Manandhar", "Marhatta", "Mishra", "Nakarmi", "Napit", "Nemkul", "Nepal", "Neupane", "Niroula", "Ojha", "Pachhai",
        "Pahari", "Pandey", "Pangeni", "Panta", "Parajuli", "Pariyar", "Pathak", "Paudel", "Phuyal", "Pokharel", "Pokhrel", "Poudel", "Pradhan", "Prajapati", "Puri", "Rai", "Raimajhi", "Rana", "Ranabhat", "Rasali",
        "Rauniyar", "Raut", "Rawat", "Regmi", "Rijal", "Rimal", "Rinpoche", "Sapkota", "Sarraf", "Sedai", "Shah", "Shahi", "Shakya", "Sharma", "Sherpa", "Shrestha", "Silwal", "Simkhada", "Singh", "Sitoula",
        "Subedi", "Tamang", "Tamrakar", "Thakur", "Thapa", "Thapa Magar", "Thuladhar", "Thule", "Tuladhar", "Upadhyaya", "Upreti", "Veswakar", "Wagle", "Yadav"
    ];
}

# basic-functionality-e-com-website
This is a website built with raw PHP and bootstrap, there is another basic android app for that as well inside the rep, enjoy!
 
 
 Project title: TatkaShobji.com 

1. S/W installation:
For Website: 
 1. Xampp version 3.2.2
 a) Apache version 2.4.25 (win32)
 b) MySQL version 10.1.21
 c) PHP version 5.6.30
For Android:
• For Virtual Device -
1. Android Studio version 3.0.1
2. Emulator [ AMIDuOS ] version 2.0.8.8511 [ If Needed ]
• For Physical device –
1. Lowest API – 15 version 4.0-4.0.4 [ Ice Cream Sandwich ]
 
 2. Configuration:
For Website:
• To configure with the database connection,you have to give this line
 mysqli_connect(“localhost”, “root”, “ ”, “shobji”);
• You have to move or copy the project folder file in your windows
 C:\Xampp\htdocs folder
• Now go to your browser and type
 http://localhost/project_folder_name
For Android App:
• You have to move or copy the File named “newUserForAndroid.php” to
C:\Xampp\htdocs\project_folder_name
 3. DB import 
 To run this project, you have to import a file. The steps requiring this process are given 
below:
 
• At first you have to download the .sql file (our sql file name is
project_database.sql ).
• Then go to your localhost phpmyadmin page and create a new database 
and name it “ shobji ”. 
• After creating new database, import that downloaded .sql file 
(project_database.sql).
Now everything is ready and you can run the project.

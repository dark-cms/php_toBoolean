php_toBoolean
=============

php sucks if u need a translation from "true" => true and "false"=> false


You know :

"false",false,0,"0",  
all known as values for false

and you know:

"True",true,1,"1",     
all known as values for true

but php handles this on some unhappy ways

Check it out.


But why i dont check for classes or arrays?
Very simple, i created this in case of some databaseproblems working with strings as true/false.
You know the problem, strings are strings , integers are integers boolean does not exists in MYSQL.
MYSQL-Databases dont have arrays as Content.

And why Null <> false / true;

Null is the name for nothing. Nothing could not be false or true.

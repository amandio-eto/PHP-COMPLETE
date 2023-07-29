<?php 

//You can use Global Scope For Access Varibale for Outside for Function 


$name = "Jose Amandio de Almeida";


//if you don't you Global Scope you can't access Variable $name This One ony Access Variable Inside
// function 



// function name()
// {

//     echo $name;

// }


/** if you use Global scope you can access the Variable for Outside 
 * But This One I don't Recomended to you for for make the function Like This 
 * 
*/

//Example 1
function name()
{

    global $name;
    echo $name;

}

name().PHP_EOL;

//Example 2 Recommended , Out Put is Same

function nametest()
{
     global $name;
     return $name;

} 

echo nametest();




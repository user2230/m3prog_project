<?php




function mijnFunction()
{
    return 1;
}

$mijnFunctionResultaat = mijnFunction();
echo $mijnFunctionResultaat;
echo "<br/>";


function returnVariable()
{
    $result = rand();
    return $result;

}
print returnVariable();
echo "<br/>";
print returnVariable();
echo "<br/>";
print returnVariable();
echo "<br/>";


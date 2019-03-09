<?php
//access the global array called $_POST to get the values from the text fields

//Question 1
checkValid();
function grade(){
    $answer1 = $_POST['q1'];
    $answer2 = $_POST['q2'];
    $answer3 = $_POST['q3'];
    $answer4 = $_POST['q4'];
    $answer5 = $_POST['q5'];
    $score=0;
    if( $answer1 == "c1" )
    {
        $score++;
    }
    if( $answer2 == "a2" )
    {
        $score++;
    }
    if( $answer3 == "a3" )
    {
        $score++;
    }
    if( $answer4 == "b4" )
    {
        $score++;
    }
    if( $answer5 == "d5" )
    {
        $score++;
    }
    echo "<h3>";
    echo "you scored " . $score . " out of 5";
    echo "</h3>";
}
function checkValid()
{
    $count = 0;
    if(null == isset($_POST['q1']))
    {
        $count++;
    }
    if(null == isset($_POST['q2']))
    {
        $count++;
    }
    if(null == isset($_POST['q3']))
    {
        $count++;    
    }
    if(null == isset($_POST['q4']))
    {
        $count++;    
    }
    if(null == isset($_POST['q5']))
    {
        $count++;    
    }
    if($count == 0)
    {
        grade();
    }
    else
    {
        echo "<h1>Please answer all questions</h1>";
    }
}

?>
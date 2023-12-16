<?php
function DisplayTime($dateTime)
{
    if((int)$dateTime->format("%Y")!= 0)
    {
        return $dateTime->format("%Y")." "."years";
    }
    else if ((int)$dateTime->format("%M")!= 0)
    {
        return $dateTime->format("%M")." "."months";
    }
    else if ((int)$dateTime->format("%D")!= 0)
    {
        return $dateTime->format("%D")." "."days";
    }
    else if ((int)$dateTime->format("%H")!= 0)
    {
        return $dateTime->format("%H")." "."hours";
    }
    else if ((int)$dateTime->format("%I")!= 0)
    {
        return $dateTime->format("%I")." "."minutes";
    }
    else if ((int)$dateTime->format("%S")!= 0)
    {
        return $dateTime->format("%S")." "."seconds";
    }

}
function CalculateTimeDiff($date, $time)
{
    $currentDateTime = date_create(date("Y-m-d H:i:s"));
    $questionDateTime = date_create(date($date." ".$time));

    $questionDateTime = date_diff($currentDateTime, $questionDateTime);
    
    return $questionDateTime;
}
function PostedTimeCalculate($question)
{
    $questionDate = $question["Question_date"];
    $questionTime = $question["Question_time"];

    $calculatedDateTime = CalculateTimeDiff($questionDate, $questionTime);
    return $displayResult = DisplayTime($calculatedDateTime);
}
?>
<?php 
    $monthCode = ["January" => 1, "February" => 4, "March" =>4,
    "April" => 0, "May" => 2, "June" => 5, "July" => 0, "August" => 3,
    "September" => 6, "October" => 1, "November" => 4, "December" => 6];

    $daysOftheWeek = ["Saturday", "Sunday", "Monday", "Tuesday", 
    "Wednesday", "Thursday", "Friday"];
    
    function getDayOfTheWeek($year, $month, $day){
        global $monthCode;
        global $daysOftheWeek;
        $lastTwo = $year % 100;
        $stepOne = intdiv($lastTwo, 12);
        $stepTwo = $lastTwo % 12;
        $stepThree = intdiv($stepTwo, 4);
        $stepFour = $day;
        $stepFive = $monthCode[$month] + getOffset($year);
        $stepSix = ($stepOne + $stepTwo + $stepThree + $stepFour + $stepFive) % 7;

        return $daysOftheWeek[$stepSix];
    }

    function getOffset($year){
        if($year % 1600 < 100){
            return 6;
        }
        elseif($year % 1700 < 100){
            return 4;
        }
        elseif($year % 1800 < 100){
            return 2;
        }
        elseif($year % 2000 < 100){
            return 6;
        }
        elseif($year % 2100 < 100){
            return 4;
        }
        else{
            return 0;
        }
    }
    function isLeapYear($year){
        return $year % 4 == 0;
    }

    function makeCalendar(){
        $startDate = new DateTime('2019-01-01');
        $endDate = new DateTime('2023-01-01');

        $period = new DatePeriod($startDate,new DateInterval('P1D'), $endDate);

        foreach($period as $day){
            echo $day->format("m-d-Y")." is ".getDayOfTheWeek($day->format("Y"),
                $day->format("F"), $day->format("d"))."\n";
        }
    }

    makeCalendar();
?>
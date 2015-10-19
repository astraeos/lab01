<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <p>
            <?php
                /* Section 1
                echo "Hello, world";
                echo "Hello, " . " " . "world" . "!";
                echo 5 * 7;
                $myname = "Frodo Baggins";
                $myage = 111;
                echo "My name is " . $myname . "and I am " . $myage;
                //IN-LINE COMMENT
                /*  BLOCK
                    LINE
                    COMMENT
                */
                /* Section 2
                $name="Edgar";
                if($name=="Simon"){
                    print "I know you!";
                }
                else{
                    print "Who are you?";
                }
                echo nl2br("Hi\nHi");
                */
                /* Section 3 - IF STATEMENTS
                $myage=15;
                $myname="Jacob";
                echo $myname . " you are allowed to buy ";
                if($myage>21){
                    print "sausage rolls";
                }
                elseif($myage>18){
                    print "mugs";
                }
                elseif($myage>16){
                    print "specs";
                }
                else{
                    print "nothing";
                }
                */
                /* Section 4 - SWITCH STATEMENTS
                $numberOfHobbits=2;
                switch ($numberOfHobbits){
                    case 1:
                        echo "1 sad hobbit";
                        break;
                    case 2:
                        echo "2 happy hobbits";
                        break;
                    case 3:
                        echo "3 hobbits are a crowd";
                        break;
                    default:
                        echo "all hobbits have gone home";
                }
                */
                $wantedgood = 'mugs';
                switch($wantedgood){
                    case "sausage rolls":
                        print "21 or over";
                        break;
                    case "mugs":
                        print "18 or over";
                        break;
                    case "specs":
                        print "16 or over";
                        break;
                    default:
                        echo "you are not old enough for anything";

                }
            ?>
        </p>
    </body>
</html>
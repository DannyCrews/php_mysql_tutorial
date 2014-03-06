<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Switch...Case...Break</title>
</head>
<body>
    <?php
        $grade = 'b';
        
        switch($grade)
        {
            case 'A':
            case 'a':
                print("That's a great grade!");
                break;
        
            case 'B':
            case 'b':
                print("B is above average");
                break;
            
            case 'C':
            case 'c':
                print("C is an average grade");
                break;
            
            case 'D':
            case 'd':
                print("D is a low passing grade.");
                break;
            
            case 'F':
            case 'f':
                print("F is a failing grade.  You must retake the course");
                break;
            
            default:
                print("Letter grade not recognized.");
        }
    
    ?>
</body>
</html>

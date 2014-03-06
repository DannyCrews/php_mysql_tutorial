<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>More Complex</title>
</head>
<body>
    <?php
        $gpa = .2;
        
        if($gpa == 4.0)
        {
            print("You have a perfect GPA");
        } elseif ($gpa > 3.0)
        {
            print("You have a very good GPA");
        } elseif($gpa > 2.0)
        {
            print("Your GPA is about average.");
        } elseif($gpa > 1.0)
        {
            print("Your GPA is poor.  Time to hit the books");
        } else
        {
            print("Why are you even in school?");
        }
        
    ?>
</body>
</html>

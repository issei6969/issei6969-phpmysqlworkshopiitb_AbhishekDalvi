<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>

<body>
    <h4>Your FEEDBACK will be valuable to us.<br>Do help us with it</h4>
    <form action="q2_mail.php" method="POST">
        Name:
        <input type="text" name="name" id="name" required>
        <br>
        Email id:
        <input type="text" name="eid" id="eid" required>
        <br>
        Feedback:
        <br>
        <textarea name="feedback" id="" cols="40" rows="15" required></textarea>
        <br>
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>

</html>

<?php

if (@$_POST['submit']) {
    $name = @$_POST['name'];
    $to = @$_POST['eid'];
    $msg = @$_POST['feedback'];



    $subject = "Feedback response";

    $from = "From:marathehimpr18it@student.mes.ac.in";

    mail($to, $subject, "Thanks for your feedback", $from);


    mail("himanshumarathe1611@gmail.com", "copy of response", $msg, $from);
}
?>
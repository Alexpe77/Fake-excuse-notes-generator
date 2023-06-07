<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <form method="GET" action="apology-generator.php">
        <label for="name">Name of your child :</label>
        <input type="text" name="name" required><br>
        <label for="gender">Gender :</label>
        <input type="radio" name="gender" value="boy" checked>
        <label for="boy">Boy</label>
        <input type="radio" name="gender" value="girl">
        <label for="girl">Girl</label><br>
        <label for="teacher">Teacher's name :</label>
        <input type="text" name="teacher" required><br>
        <label for="reason">Reason for the absence :</label><br>
        <input type="radio" name="reason" value="illness" checked>
        <label for="reason">Illness.</label><br>
        <input type="radio" name="reason" value="death">
        <label for="reason">Death of the pet (or a family member).</label><br>
        <input type="radio" name="reason" value="sea">
        <label for="reason">Significant extra-curricular activity.</label><br>
        <input type="radio" name="reason" value="fortune-teller">
        <label for="reason">The fortune teller told me not to step out of the house
            or i will suffer a brain hemorrhage.</label><br>
        <input type="submit" name="submit"><br>
    </form>

    <?php

    if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['teacher']) && isset($_GET['reason'])){
        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $teacher = $_GET['teacher'];
        $reason = $_GET['reason'];
        $excuseMessage = "";

        switch ($reason) {
            case 'illness':
                $excuseMessage = "Dear $teacher,<br>I am writing to inform you that my $gender, $name, is unable to attend school today due to illness.
                They are not feeling well and need rest and medical attention. We apologize for any inconvenience caused and will provide the necessary documentation upon their return.
                <br>Thank you for your understanding.<br>Sincerely,<br>$name 's Parent.";
                break;

            case 'death':
                $excuseMessage = "Dear $teacher,<br>I regret to inform you that my $gender, $name, will not be able to attend school today.
                We have experienced a loss in our family as our beloved pet has passed away. This has deeply affected my child and they need time to grieve and come to terms with the loss.
                We appreciate your understanding during this difficult time.<br>Sincerely,<br> $name 's Parent.";
                
                break;

            case 'sea':
                $excuseMessage = "Dear $teacher,<br>I am writing to inform you that my $gender, $name, will not be present in school today.
                They have been selected to participate in a significant extra-curricular activity that will greatly contribute to their personal and academic development.
                We believe this opportunity is invaluable and will make up for their absence. We appreciate your support in fostering well-rounded students.<br>Thank you,<br> $name 's Parent.";

                break;

            case 'fortune-teller':
                $excuseMessage = "Dear $teacher,<br>I hope this message finds you well. I am writing to inform you that my $gender, $name, will not be able to attend school today.
                We recently visited a fortune teller who predicted that if my child were to step out of the house, they would be at risk of suffering a brain hemorrhage. As a cautious parent, I must prioritize their well-being and follow this guidance.<br>
                I understand the importance of regular attendance, and I assure you that this absence is due to exceptional circumstances. We will make every effort to catch up on missed lessons and assignments. Thank you for your understanding and support.<br>Sincerely,<br> $name 's Parent.";

                break;
        }
        
        echo $excuseMessage;
    }

    ?>

</body>
</html>
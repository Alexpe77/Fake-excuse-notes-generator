<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <div class="title_container"> 
        <h1>Fake Excuse Notes Generator</h1>
    </div>
    <div class="top_form">
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
    </div>
    <div class="reason_absence">
        <fieldset>
            <legend>Reason for the absence :</legend>
            <input type="radio" name="reason" value="illness" checked>
            <label for="reason">Illness.</label><br>
            <input type="radio" name="reason" value="death">
            <label for="reason">Death of the pet (or a family member).</label><br>
            <input type="radio" name="reason" value="sea">
            <label for="reason">Significant extra-curricular activity.</label><br>
            <input type="radio" name="reason" value="fortune-teller">
            <label for="reason">The fortune teller told me not to step out of the house
                or i will suffer a brain hemorrhage.</label><br>
            <div class="btn_container">
                <input type="submit" class="submit_btn" name="submit" value="Send"><br>   
            </div>
        </fieldset>
    </div>
    
    </form>

    <?php

    if (isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['teacher']) && isset($_GET['reason'])){
        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $teacher = $_GET['teacher'];
        $reason = $_GET['reason'];
        $excuseMessage = "";
        $date = date("d/m/Y");
        $dayOfWeek = strftime("%A");

        $apologies = array(
            "illness" => array(
                "I apologize for the inconvenience caused by this situation. It is important to prioritize my child's well-being.",
                "We understand the significance of attendance but must adhere to the advice given by the doctor for the speedy recovery of my child.",
                "Due to my child's illness, they are not in a condition to attend school and require adequate rest and medical attention.",
                "I regret to inform you that my child will not be able to attend school today due to illness. We will provide the necessary medical documentation upon their return.",
                "I assure you that we will make every effort to help my child catch up on missed lessons and assignments."
            ),
            "death" => array(
                "I regret to inform you that my child will not be able to attend school today due to a recent loss in our family.",
                "We have experienced a bereavement in our family, and my child needs time to grieve and come to terms with the loss.",
                "Due to the unfortunate demise of our beloved pet, my child is emotionally distraught and will not be able to attend school today.",
                "Please excuse my child's absence as we cope with the loss of a family member.",
                "In light of the recent family tragedy, my child requires this day to mourn and find solace. We apologize for any inconvenience caused."
            ),
            "sea" => array(
                "I am writing to inform you that my child has been selected to participate in a significant extra-curricular activity today.",
                "My child has a unique opportunity to engage in an enriching extra-curricular activity that will greatly contribute to their personal and academic growth.",
                "We believe that this extra-curricular activity will provide my child with valuable skills and experiences, thereby justifying their absence from school.",
                "I would like to request permission for my child's absence today as they have been chosen to represent the school in a prestigious event.",
                "Please excuse my child's absence today, as they have an exceptional opportunity to participate in a special event that will enhance their overall development."
            ),
            "fortune-teller" => array(
                "I apologize for the inconvenience caused by this situation. It is important to prioritize my child's well-being.",
                "We understand the significance of attendance but must adhere to the advice given by the fortune teller for the safety of my child.",
                "Due to the guidance provided by the fortune teller, we have decided it's best for my child to stay home and avoid any potential risks.",
                "I realize this may seem unusual, but we genuinely believe that following the fortune teller's advice is in the best interest of my child.",
                "We regret any disruption caused and assure you that we will make every effort to ensure my child's academic progress despite this absence."
            ),
        );

        if (isset($apologies[$reason])) {
            $reasonApologies = $apologies[$reason];
            $selectedApology = $reasonApologies[array_rand($reasonApologies)];

            switch ($reason) {
                case 'illness':
                    $excuseMessage = "Dear $teacher,<br>I am writing to inform you that my $gender, $name, is unable to attend school today ($dayOfWeek $date) due to illness.
                    They are not feeling well and need rest and medical attention. $selectedApology
                    <br>Thank you for your understanding.<br>Sincerely,<br>$name's Parent.";
                    break;

                case 'death':
                    $excuseMessage = "Dear $teacher,<br>I regret to inform you that my $gender, $name, will not be able to attend school today ($dayOfWeek $date).
                    We have experienced a loss in our family as our beloved pet has passed away. This has deeply affected my child and they need time to grieve and come to terms with the loss.
                    $selectedApology We appreciate your understanding during this difficult time.<br>Sincerely,<br>$name's Parent.";
                    
                    break;

                case 'sea':
                    $excuseMessage = "Dear $teacher,<br>I am writing to inform you that my $gender, $name, will not be present in school today ($dayOfWeek $date).
                    They have been selected to participate in a significant extra-curricular activity that will greatly contribute to their personal and academic development.
                    $selectedApology<br>Thank you for your understanding,<br>$name's Parent.";

                    break;

                case 'fortune-teller':
                    $excuseMessage = "Dear $teacher,<br>I hope this message finds you well. I am writing to inform you that my $gender, $name, will not be able to attend school today ($dayOfWeek $date).
                    We recently visited a fortune teller who predicted that if my child were to step out of the house, they would be at risk of suffering a brain hemorrhage. As a cautious parent, I must prioritize their well-being and follow this guidance.
                    $selectedApology I understand the importance of regular attendance, and I assure you that this absence is due to exceptional circumstances. We will make every effort to catch up on missed lessons and assignments. Thank you for your understanding and support.<br>Sincerely,<br>$name's Parent.";

                    break;
            }
        }
        
        echo $excuseMessage;
    }

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
    <form method="GET" action="excuse.php">
        <label for="name">Name of your child :</label>
        <input type="text" name="name"><br>
        <label for="gender">Gender :</label>
        <input type="radio" name="gender" value="boy" checked>
        <label for="boy">Boy</label>
        <input type="radio" name="gender" value="girl">
        <label for="girl">Girl</label><br>
        <label for="teacher">Teacher's name :</label>
        <input type="text" name="teacher"><br>
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
    </form>

</body>
</html>
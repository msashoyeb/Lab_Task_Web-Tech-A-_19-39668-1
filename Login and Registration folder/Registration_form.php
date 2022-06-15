<form action="Registration_show.php" method="post">

    Username:<input type="text" id="uname" name="uname"><br><br>
    Password:<input type="password" id="pass" name="pass"><br><br>
    
    Gender:<input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Others">Others<br><br>

    Type:<input type="checkbox" name="type[]" value="User">User
    <input type="checkbox" name="type[]" value="Stuff">Stuff

    <br><br>
    <br><br>

    <input type="submit" value="Submit" name="btnClick">
</form>

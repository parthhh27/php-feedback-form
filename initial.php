<!-shree->
<!DOCTYPE html>
<html>
    <heading>PHP SUBMIT FORM</heading><br>
    <body><br>
        <form action="action.php" method="POST">
            <label for="fullname">Enter your full name: </label>
            <input type="text" id="fullname" required placeholder="Param Pujja" name="name"><br>
            
            <label for="email">Enter your email: </label>
            <input type="text" id="email" required placeholder="parampujja@gmail.com" name="email"><br>

            Please give your feedback <br>
            <textarea id="feedback" required rows="5" cols="30" name="feed"></textarea>
            
            <input type="reset"><br>
            <input type="submit"><br>
            




        </form>
    </body>
</html>

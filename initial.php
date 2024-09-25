<!DOCTYPE html>
<html>
<head>
    <title>PHP Submit Form</title>
    <style>
        body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin:auto;
            text-align: left;
        }

        h1 {
            text-align: center;
            color: rgb(65, 163, 238);
        }

        label, p {
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 7px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .submitter, .reseter {
            background-color: rgb(65, 163, 238);
            color: white;
            padding: 10px 15px;
            margin: 10px 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submitter:hover, .reseter:hover {
            background-color:darkblue;
        }
    </style>
</head>
<body>

    <h1>PHP Submit Form</h1>

    <form action="action.php" method="POST">
        <label for="fullname">Enter your full name: </label>
        <input type="text" id="fullname" required placeholder="Param Pujja" name="fullname"><br>
        
        <label for="email">Enter your email: </label>
        <input type="text" id="email" required placeholder="parampujja@gmail.com" name="email"><br>

        <p>Please give your feedback</p>
        <textarea id="feedback" required rows="5" cols="30" name="feedback"></textarea><br>
        
        <button type="reset" class="reseter">Reset</button>            
        <button type="submit" class="submitter">Submit</button>
    </form>

</body>
</html>

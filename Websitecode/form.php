<!DOCTYPE html>
<html lang="en">
<head>

    <link href="Indexstylesheet.css" rel="stylesheet">
    <title>Sell Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <nav>
            <ul>
                <li><a href="index.php">Home</a> </li>

                <li><a href="Selling.php">Sell Books</a>

                </li>

                <li><a href="Buyingbooks.php">Buy Books</a> </li>

            </ul>
        </nav>
</head>
<body>



    <main>
        <h2>Sell your books today</h2>


       <form method="post" action="process.php">
              Name : <input type="text" name="user_name" placeholder="Enter Your Name" /><br />
              Email : <input type="email" name="user_email" placeholder="Enter Your Email" /><br />
              Message : <textarea name="user_comments"></textarea><br />
              <input type="submit" value="Submit" />
          </form>

</body>
</html>

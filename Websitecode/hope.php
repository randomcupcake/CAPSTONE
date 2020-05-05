

    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Indexstylesheet.css" rel="stylesheet">

    </head>
    <body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a> </li>

            <li><a href="Selling.php">Sell Books</a>

            </li>

            <li><a href="Buyingbooks.php">Buy Books</a> </li>
            <li><a href="login.php">Login</a> </li>
        </ul>
    </nav>
    <h2> Buy My Books </h2>


    <h3>BuyMyBooks will allow the user to view, sell, buy, and trade textbooks. Users will be able to search for a textbook through the name, IBN code, class textbook is needed for, and professor that taught the class</h3>
    <main>
     var mysql = require('mysql');

     var con = mysql.createConnection({
       host: "127.0.0.1",
       user: "root",
       password: "71729698",
       database: "schema1"
     });

     con.connect(function(err) {
       if (err) throw err;
       con.query("SELECT * FROM Books", function (Title, Author, Class) {
         if (err) throw err;
         console.log(result);
       });
     });
        <img src="Images/background.jpg" alt="A library ">
    </main>

    </body>
    </html>

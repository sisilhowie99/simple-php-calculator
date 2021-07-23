<html>
    <head>
        <meta charset=utf8>
        <title>Simple PHP Calculator</title>
    </head>
    <style>
        html {
            scroll-behavior: smooth;
            font-family: sans-serif;
            text-align: center;
        }

        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            align-content: center;
            margin: 20px 0;
        }

        .container {
            width: auto;
            display: flex;
            margin: 50px auto;
        }

        div {
            width: 60%;
            height: auto;
            margin: 0 10%;
            text-align: left;
        }

        .calculator {
            padding: 20px 30px;
            background-color: lightgrey;
            border: 1px solid #000;
            border-radius: 20px;
        }

        form {
            margin: 50px auto;
        }

        input[type='number'] {
            margin: 10px auto;
        }
        
        input[type='submit'], button, a {
            margin: 15px auto;
            padding: 5px 20px;
            background-color: #000;
            border: 1px solid #000;
            border-radius: 20px;
            color: #fff;
        }

        #disclaimer {
            font-size: 14px;
            font-style: italic;
        }

        a {
            margin: 25px auto;
            background-color: lightgrey;
            text-decoration: none;
            color: #000;
        }
    </style>
    <body>
        <h1>Simple Calculator</h1>
        <a href="index.php">Reset</a>

        <div class='container'>
            <!-- 2 forms model -->
            <div class='calculator'>
                <h2>Using 2 separate forms</h2>
                <!-- Addition form -->
                <form method='GET' action='addition.php'>
                    <h3>Addition</h3>
                    <label for='num1'>First number:</label>
                    <br />
                    <input type='number' name='num1' id='num1'>

                    <br/>
                    <label for='num2'>Second number:</label>
                    <br />
                    <input type='number' name='num2' id='num2'>
                    <br />
                    <input type='submit' value='Calculate'>
                </form>

                <!-- Division form -->
                <form method='GET' action='division.php'>
                    <h3>Division</h3>
                    <label for='num1'>First number:</label>
                    <br />
                    <input type='number' name='num1' id='num1'>

                    <br />
                    <label for='num2'>Second number:</label>
                    <br />
                    <input type='number' name='num2' id='num2'>
                    <br />
                    <input type='submit' value='Calculate'>
                </form>
            </div>

            <!-- 1 form model -->
            <div class='calculator'>
                <h2>Using 1 form</h2>
                <p id='disclaimer'>Utilizing the <strong>formaction</strong> attribute for form to submit data to appropriate script</p>
                <form method='GET' action='addition.php'>
                    <label for='num1'>First number:</label>
                    <br />
                    <input type='number' name='num1' id='num1'>

                    <br/>
                    <label for='num2'>Second number:</label>
                    <br />
                    <input type='number' name='num2' id='num2'>
                    <br />
                    <button type='submit'>Addition</button>
                    <button type='submit' formaction='division.php'>Division</button>
                </form>
            </div>
        </div>

        <a href="index.php">Reset</a>
    </body>
</html>
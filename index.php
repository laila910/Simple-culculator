<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
        body {
            font-size: 20px;
            color: blue;
        }

        input {
            width: 50%;
            padding: 10px;
            margin-right: auto;
            margin-left: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        select {
            padding: 10px;
            font-size: 20px;
        }

        button {
            color: #fff;
            background-color: #000;
            border: none;
            padding: 10px;
            margin-right: 20px;
            font-size: 20px;
            margin-bottom: 20px;
        }

        </style>
    </head>

    <body>


        <form>
            <input type="text" name="number1" placeholder="please enter your first number "><br>
            <input type="text" name="number2" placeholder="please enter your second number "><br><br>
            <select name="operation">
                <option>no select</option>
                <option>Addition</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Division</option>
            </select> <br> <br>
            <button type="submit" name="calculate" value="calculate"> Calculate</button><span>click me if you want to
                get the
                result</span>
        </form>


        <?php 
           if (isset($_GET['calculate']))   {
             $num1 = $_GET['number1'];
             $num2 = $_GET['number2'];
             $oper = $_GET['operation'];
             switch($oper){
                case "no select":
                    echo "please select the arithmatic operation that you want! ";
                break;
                    
                case "Addition":
                    echo $num1 + $num2;
                break;
                    
                case "Subtract":
                    echo $num1 - $num2;
                break;
                case "Multiply":
                    echo $num1 * $num2;
                break;
                    
                case "Division":
                    echo $num1 / $num2;
                    break;
                    
                
             }
             
           }
                    
                    ?>
        <script src="" async defer></script>
    </body>

</html>

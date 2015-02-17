<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magazines.com Interview Questions</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="main.js"></script>
</head>
<body>
    <div class="container">

        <h1>Magazines.com Interview Test</h1>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Reverse a String</div>
                <div class="panel-body">
                    <input type="text" id="reverseInput"/> <input type="button" value="Reverse" onclick="reverseString();">
            </div>

        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Reverse a Sentence</div>
                <div class="panel-body">
                    <input size="40" type="text" id="reverseSentenceInput"/> <input type="button" value="Reverse" onclick="reverseSentence();">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Internal & Multi-word Sort</div>
                <div class="panel-body">
                    <textarea name="" id="internalMultiSortText" cols="40" rows="5"></textarea> <input type="button" value="Sort" onclick="InternalMultiWordSort();">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>PHP:</strong> 1-100 with replaced multiples of 3,5 and both</div>

                <table class="table">
                    <tr>
                        <?php
                        for($i=1;$i<101;$i++){

                            if($i % 15 == 0)  {
                                echo "<td>FizzBuzz</td></tr><tr>";
                            } elseif ($i % 5 == 0) {
                                echo "<td>Buzz</td>";
                            } elseif ($i % 3 == 0) {
                                echo "<td>Fizz</td>";
                            }
                            else{
                                echo "<td>".$i."</td>";
                            }

                        }
                        ?>
                </table>
            </div>
        </div>



        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>PHP</strong>: Minimum value in array(2,4,5);</div>
                <div class="panel-body">
                    <?php echo min(array(2, 4, 5)); ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>PHP</strong>: Maximum value in array(2,4,5);</div>
                <div class="panel-body">
                    <?php echo max(array(2, 4, 5)); ?>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Calculate Remainder</div>
                <div class="panel-body">
                    <input size="9" placeholder="numerator" type="text" id="numerator"/>/<input placeholder="denominator" size="9" type="text" id="denominator"/>
                    <input type="button" value="Remainder" onclick="getRemainder();">
                </div>
            </div>
        </div>




        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>PHP</strong>: Distict values from list 1 3 5 3 7 3 1 1 5</div>
                <div class="panel-body">
                    <?php
                    $list = "1 3 5 3 7 3 1 1 5";
                    $listArray = explode(" ",$list);
                    $uniqueList = array_unique($listArray);
                    echo(implode(",",$uniqueList));
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>PHP</strong>: Distict values from list 1 3 5 3 7 3 1 1 5</div>
                <div class="panel-body">
                    <?php
                    $list = "1 3 5 3 7 3 1 1 5";
                    $listArray = explode(" ",$list);
                    $countList = array_count_values($listArray);
                    print_r($countList);
                    ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Get Factorial</div>
                <div class="panel-body">
                    <input size="3" type="text" id="factor"/>
                    <input type="button" value="Get Factorial" onclick="getFactorial(document.getElementById('factor').value);">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Calculate Expression</div>

                <div class="panel-body">
                    <input type="text" id="expression"/>
                    <input type="button" value="Calculate" onclick="calculateExp(document.getElementById('expression').value);">
                </div>
            </div>
        </div>

    </div>

</body>
</html>

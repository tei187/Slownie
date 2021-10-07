<html>
<head>
  <title>GradientValues - default gradients</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
        html {
            background-color: #333844;
            min-height: 100vh;
            display: flex;
        }
        body {
            margin: auto;
            padding: 2.5vw;
            width: 100%;
            max-width: 500px;
            border: 1px solid rgba(0,0,0,.1);
            background-color: #fff;
            border-radius: 1em;
            box-shadow: 0 0 25px #090a0c;
            height: min-content;
            font-family: system-ui;
        }
        hr.section {
            border-top: 2px dotted #0001;
            margin: 2em auto;
            width: calc(100% - 40px);
        }
        table {
            border-collapse: collapse;
        }
        td {
            padding: .5em;
            vertical-align: top;
        }
        tr > td:first-child {
            text-align: right;
            border-right: 1px solid #0004;
        }

        table > tbody > tr:not(:last-child) {
            border-bottom: 1px solid #0001;
        }
        hr {
            border: none;
            margin-top: 2em;
            border-top: 2px dashed #0004;
        }
        h1, h2, h3, h4 {
            font-family: system-ui;
            border-bottom: 1px dotted rgba(0,0,0,.2);
            padding-bottom: .25em;
        }
        pre {
            line-height: 1em;
            color: #000a;
        }
        code > pre {
            letter-spacing: .05em;
            line-height: 1rem;
            border-width: medium;
            border: solid #bbb;
            border-top: dotted #bbb;
            border-left: dashed #bbb;
            border-radius: 2em;
            background-color: #eee;
            padding: 1em;
            font-weight: 100;
            color: black;
            font-size: 1.2em;
        }
        details {
            padding: 0 20px 20px 20px;
            margin-top: 2em;
        }
        details > summary {
            font-family: system-ui;
        }
        .containment {
            padding: 20px; 
            background-color: #fcfcfc; 
            box-shadow: 0px 3px 25px rgba(0,0,0,.1);
            display: flex;
        }
        .step { 
            display: inline-flex; 
            flex-grow: 1; 
            height: 100px; 
            justify-content: center; 
            align-items: center;
            width: 1px;
        } 
        .step > span { 
            mix-blend-mode: difference;
            color: #fff;
            font-size: x-large;
            font-family: monospace;
            letter-spacing: .05em;
        }
        </style>
</head>
<body>
    <h1>Slownie.class tests</h1>
<?php

    require_once("../Slownie.class.php");

    $pool = [
        [ 1234567.89, 'pln'],
        [ 999999999.99, 'usd'],
        [ 1000.50, 'eur' ],
        [ 5432, 'none' ],
    ];

    $tests = new Slownie();
    
    echo "<table><thead><tr><th>Float</th><th>In words</th></tr></thead><tbody>";
    foreach($pool as $arguments) {
        $currency = $arguments[1] != "none" ? " ".strtoupper($arguments[1]) : "";
        echo "<tr><td>{$arguments[0]}{$currency}</td><td>".$tests->output($arguments[0], $arguments[1])."</td></tr>";
    }
    echo "</tbody></table>"

?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>| rp.intern.twocream |</title>

    <style>
        *, html {
            font-family: Arial, sans-serif;
            color: #2C3E50;
        }

        body {
            background: #F2F1EF;
        }

        a {
            color: #2574A9;
            padding: 0 2px;
        }
        a:hover {
            color: #3498DB;
        }

        #wrapper {
            width: 50%;
            margin: 0 auto;
        }

        #wrapper a {
            display: block;
            padding: 2px 0;
            margin: 2px 0;
            font-size: 18px;
            text-decoration: none;
        }
        #wrapper a::before {
            content: '- ';
        }
    </style>
</head>
<body>

</body>
</html>


<div id="wrapper">
    <h2>Directory Content</h2>

    <?php
    if ($handle = opendir('.')) {

        while (false !== ($entry = readdir($handle))) {
            if ($entry != '.' && $entry != '..' && $entry != 'index.php' && $entry != '.editorconfig') {
                echo '<a href="'.$entry.'">'.$entry.'</a>';
            }
        }

        closedir($handle);
    }
    ?>
</div>

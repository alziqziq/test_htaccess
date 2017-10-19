<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Testing mod_rewrite httaccess</title>
    </head>
    <body>
        <h1>Test file .htaccess dan mod_rewrite</h1>

        <?php
            if (strpos($_SERVER['REQUEST_URI'], 'htaccess_tester.php') === false)
                echo "<p><tt>mod_rewrite</tt> sekarang bekerja dengan semestinya <tt></p>";
            elseif (is_readable(__DIR__.'/.htaccess') )
            {
                echo "<p>.htaccess sudah ada, tapi belum dengan mod_rewrite :( </p>\n<textarea style='width: 700px; height: 200px;'>";
                echo file_get_contents(__DIR__.'/.htaccess');
                echo "</textarea>";
            }
            else
                echo "<p><strong>Error:</strong> .htaccess tidak bekerja</p>";
        ?>
    </body>
</html>

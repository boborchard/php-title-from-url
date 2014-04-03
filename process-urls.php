<?php

    function pageTitle($page_url){
        $read_page=file_get_contents($page_url);
        preg_match("/<title.*?>[\n\r\s]*(.*)[\n\r\s]*<\/title>/", $read_page, $page_title);
        if (isset($page_title[1])) {
            if ($page_title[1] == '')
            {
                  return $page_url;
            }
            $page_title = $page_title[1];
            return trim($page_title);
        } else {
            return $page_url;
        }
    }

    $post_data = $_POST["urls"];
    if ($post_data > '') :
        $urls_array = str_replace(
            "\r",
            "\n",
            str_replace( "\r\n", "\n", $post_data)
        );

        $urls = explode( "\n", $urls_array );

    else :
        header( 'Location: /index.php' ) ;
    endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Results | PHP URL Converter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Converter Results</h2>
        <p>This may take a while based on how many URLs you submitted, so hang tight.</p>
        <?php
            print '<table class="table table-bordered table-striped">';
            print '
                <thead>
                    <tr>
                        <th width="50%">URL</th>
                        <th>Page Title</th>
                    </tr>
                </thead>
            ';
            print '<tbody>';
            foreach($urls as $url) :
                $pagetitle = pageTitle($url);
                print '<tr><td><a href="'.$url.'" target="_blank">'.$url.'</a></td><td>'.$pagetitle.'</td></tr>';
            endforeach;
            print '</tbody>';
            print '</table>';
        ?>
    </div>
</body>
</html>
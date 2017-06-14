<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    // Ищет в заданном тексте $subject совпадения с шаблоном $pattern.
    // https://ru.functions-online.com/preg_match.html
    include_once('lib/simple_html_dom.php');
    include_once('lib/curl_query.php');
    $url = "http://dentist-abelchuk.com";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

    $html = curl_get ('http://kratos.kiev.ua/%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B8/');
    $dom = str_get_html ($html);
    $tag = 'p';
    $parag = $dom->find($tag);
    file_put_contents('config.json', $parag);
    foreach($parag as $p) {
        $a = $p->find('a', 0);
        echo ("<p>".$a->href."</p>");
        
    }
    ?>
</body>
</html>

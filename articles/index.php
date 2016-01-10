<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Articles by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>        

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/nav.php"); echo "\n"; ?>

    <h1>Articles</h1>

    <?php 

        $articles = json_decode(file_get_contents('articles.json'), true);
        $articlesLength = sizeof($articles);
        $ARTICLES_DIRECTORY = '/articles/';
        
        for($i = 0; $i < $articlesLength; $i++){

            // convert tags to array
            $tags = $articles[$i]['tags'];

            //echo print_r($tags);

            // Open entry
            echo "\t" . '<article>'. "\n\t\t";

            // print headline link to slug
            echo '<h1><a href="' . $ARTICLES_DIRECTORY . $articles[$i]['slug'] .'/">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t";  

            // print dek
            echo '<p>' . $articles[$i]['dek'] . '</p>' . "\n\t\t";  

            // print timestamp
            echo '<time datetime="' . $articles[$i]['date'] . '">' . date('M d, Y' , strtotime($articles[$i]['date'])) . '</time>' . "\n\t\t<ul>\n\t\t\t";

            // print tags
            for($j=0; $j < sizeof($tags); $j++){
                echo "<li>" . $tags[$j] . "</li>";
            }

            // close entry
            echo "\n\t\t" . '</ul>' . "\n\t" . '</article>' . "\n\n";
            
        }

    ?>

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    
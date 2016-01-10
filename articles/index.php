<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Articles by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php 
        /*if ( isset($_COOKIE['full-css']) ) { 
            
            // http://iamsteve.me/blog/entry/using-cookies-to-serve-critical-css-for-first-time-visits
            require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); 
            echo "\n";

        } else { */
    ?>
    <style><?php require($_SERVER["DOCUMENT_ROOT"]."/-/c/critical-manual.min.css"); ?></style>
    <script>
        function loadCSS(e,n,o,t){"use strict";var d=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],r=window.document.styleSheets;return d.rel="stylesheet",d.href=e,d.media="only x",t&&(d.onload=t),i.parentNode.insertBefore(d,i),d.onloadcssdefined=function(e){for(var n,o=0;o<r.length;o++)r[o].href&&r[o].href===d.href&&(n=!0);n?e():setTimeout(function(){d.onloadcssdefined(e)})},d.onloadcssdefined(function(){d.media=o||"all"}),d} function cookie(e,i,o){if(void 0===i){var t="; "+window.document.cookie,n=t.split("; "+e+"=");return 2===n.length?n.pop().split(";").shift():null}i===!1&&(o=-1);var r;if(o){var c=new Date;c.setTime(c.getTime()+24*o*60*60*1e3),r="; expires="+c.toGMTString()}else r="";window.document.cookie=e+"="+i+r+"; path=/"} if( ! cookie( 'full-css' ) ) { loadCSS( "/-/c/main.min.css" ); cookie( 'full-css', true, 7 ); }
    </script>
    <noscript><?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?></noscript>

    <?php //} ?>   


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

            // Open entry
            echo "\t" . '<article>'. "\n\t\t";

            // print headline link to slug
            echo '<h1><a href="' . $ARTICLES_DIRECTORY . $articles[$i]['slug'] .'/">' . $articles[$i]['title'] . '</a></h1>'. "\n\t\t";  

            // print dek
            echo '<p>' . $articles[$i]['dek'] . '</p>' . "\n\t\t";  

            // print timestamp
            echo '<time datetime="' . $articles[$i]['date'] . '">' . date('M d, Y' , strtotime($articles[$i]['date'])) . '</time>' . "\n\t\t<ul>";

            // print tags
            for($j=0; $j < sizeof($tags); $j++){
                echo "\n\t\t\t<li>" . $tags[$j] . "</li>";
            }

            // close entry
            echo "\n\t\t" .'</ul>' . "\n\t" . '</article>' . "\n\n";
            
        }

    ?>

    
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>    

<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    
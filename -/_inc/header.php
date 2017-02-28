<style type="text/css">
    body {
        padding-top: 0;
    }
    .updated-message {
        background: #231F20; 
        color: white; 
        text-align: center;
        font-size: 20px;
        padding: 1em 1em 1.5em;
    }
    .updated-message a:hover,
    .updated-message a:focus {
        color: #fff;
    }
    .hamburger {
        top: 13.2em;
    }

    @media screen and (min-width: 690px){
        .hamburger {
            top: 10.2em;
        }
    }
</style>

<div class="updated-message">
    You&rsquo;re on an old version of this site. Please visit <a href="http://danmall.me/">danmall.me</a> for the latest.
</div>

<div id="masthead-wrap" class="masthead-wrap-active">
        
    <section id="masthead" role="banner" class="clearfix">
        <header class="masthead-inner clearfix">
            <?php /* if($_SERVER['REQUEST_URI'] == '/') { ?>            
            <img src="/-/s/dmall-website-logo5.svg" class="logo-new" />\
            <?php } else { ?>
            <h1 class="logo"><a class="phark phark-link logo-link" href="/">Daniel Mall</a></h1>
            <?php } */ ?>

            <?php if($page == 'home') { ?>            
            <img src="/-/s/dmall-website-logo5.svg" class="logo-new" />
            <?php } else { ?>
            <h1 class="logo"><a class="phark phark-link logo-link" href="/">Daniel Mall</a></h1>
            <?php } ?>

        	<nav id="main-nav" class="main-nav">
            	<ul class="no-marker">
            	    <?php if(strstr($_SERVER['REQUEST_URI'], '/work/')) { ?>
            	        <?php if($_SERVER['REQUEST_URI'] == '/work/') { ?>  
            	        <li class="main-nav-item"><mark>Work</mark></li>        	        
            	        <?php } else { ?>
            	        <li class="main-nav-item current"><a href="/work/">Work</a></li>
            	        <?php } ?>
            		<?php } else { ?>
            		<li class="main-nav-item"><a href="/work/">Work</a></li>
            		<?php } ?>
            		
            		<?php if(strstr($_SERVER['REQUEST_URI'], '/articles/')) { ?>
            	        <?php if($_SERVER['REQUEST_URI'] == '/articles/') { ?>
            		    <li class="main-nav-item"><mark>Articles</mark></li>
            		    <?php } else { ?>
            		    <li class="main-nav-item current"><a href="/articles/">Articles</a></li>
            		    <?php } ?>       		
            		<?php } else { ?>
            		<li class="main-nav-item"><a href="/articles/">Articles</a></li>
            		<?php } ?>        		

            		<?php /* ?><li class="main-nav-item"><a href="http://links.danielmall.com/">Links</a></li><?php */?>
            		
            		<?php if($_SERVER['REQUEST_URI'] == '/about/') { ?>
            		<li class="main-nav-item"><mark>About</mark></li>
            		<?php } else { ?>
            		<li class="main-nav-item"><a href="/about/">About</a></li>
            		<?php } ?>
            		
            		<?php if($_SERVER['REQUEST_URI'] == '/contact/') { ?>
            		<li class="main-nav-item"><mark>Contact</mark></li>
            		<?php } else { ?>
            		<li class="main-nav-item"><a href="/contact/">Contact</a></li>
            		<?php } ?>
            	</ul>
            </nav><!-- .main-nav -->

        </header><!-- .masthead-inner -->

        <?php /* ?>
    	<form id="site-search" action="#" method="post">

    		<p>
    			<label for="site-search-box">Search this site</label>
    			<input type="text" class="filled" id="site-search-box" value="Semantic Flash" />
    		</p>
    		<p class="submit"><input type="image" src="/i/widgets/search.gif" alt="Search" /></p>

    	</form><php */ ?>


    </section><!-- #masthead -->
    

</div><!-- #masthead-wrap -->
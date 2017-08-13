<?php 
	add_theme_support( 'post-thumbnails');

	if ( function_exists('register_sidebar') )
    register_sidebars((3),array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
            'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


	
	function SearchFilter($query) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}
	add_filter('pre_get_posts','SearchFilter');

function string_limit_words($string, $word_limit){
	  $words = explode(' ', $string, ($word_limit + 1));
	  if(count($words) > $word_limit)
	  array_pop($words);
	  return implode(' ', $words);
	}	


// Limite de caracteres
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}



function verifica_login()
{
  if( ! is_user_logged_in() )
  wp_redirect( get_bloginfo('siteurl').'/wp-login.php' );
}


function getLastNameComment($objArray){
  
  $lastComment = "Nenhum";
  
  for($c = count($objArray) - 1; $c>-1; $c--)
  {
    if($objArray[$c]->comment_approved == 1)
     $lastComment = $objArray[$c]->comment_author;
  }
  
  return $lastComment;
}

function getLastUserName(){
  $sql = "SELECT user_nicename FROM `noticia_users` where ID = (SELECT max(ID) FROM `noticia_users`)";
  $exeQuery = mysql_query($sql);
  
  if($exeQuery){
    $row = mysql_fetch_row($exeQuery);
    return $row[0];
  }
  else
   return " - ";
}

/* RETORNA IMAGEM */
function retorna_imagem() {
  global $post, $posts;
  $first_img = '';
  $new_img_tag = "";

  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  
  $first_img = $matches [1] [1];
  
  if(empty($first_img)){ //Defines a default image with 0 width
  $first_img = $matches [1] [0];
  $new_img_tag = $first_img;
  }

  else{
	$new_img_tag = $first_img;
	}

  return $new_img_tag;
  }



function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}


/*function get_countries(){
  $query = ("SELECT * FROM `pais` WHERE 1");
   while($prod = mysql_fetch_array($query)) { 
      echo '<option value="'.$prod['paisNome'].'">'.$prod['paisNome'].'</option>';
   }
}*/

?>
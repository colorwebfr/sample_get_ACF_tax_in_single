$terms = get_the_terms( $post->ID , 'product_cat' ); 
$marque_name = $terms[0]->name;
  		foreach($terms as $term)
		{
    		$colorsTheme = get_field('couleurs_theme_de_la_categorie', $term) ? get_field('couleurs_theme_de_la_categorie', $term) : '';
  	}
echo $colorsTheme;


<?php 
    get_header();
?>

<div class="wrapper">
    <p>
        Ansøgere
    </p>
  	<form>
    	<input type="text" name="navn" placeholder="Navn">
    	<input type="text" name="by" placeholder="By">
      	<button type="submit">Søg</button>
  	</form>
    <?php 
  		if ( get_query_var('navn') ) {
          $paramsNavn = get_query_var('navn');
          $users = get_users( array( 
            'search' => $paramsNavn
          ) );
        } else {
          $users = get_users( array( 
            'fields' => array( 'ID' )
          ) );
        }
  		$paramsBy = get_query_var('by');
        foreach($users as $user){?>
  			<?php $value = get_user_meta ( $user->ID ); ?>
  			<?php if($value['by'][0] == $paramsBy || $paramsBy == ""){ ?>
            <div>
                <p>
                    <?php print_r($value['first_name'][0]); ?>
                    <?php print_r($value['last_name'][0]); ?>
                    <?php print_r($value['phone'][0]); ?>
              		
                  	<?php $user_is_subscriber = user_has_role($user->ID, 'Subscriber'); ?>
                  	<p><?php print_r($user_is_subscriber); ?></p>
              
                  	<?php $cv = get_attached_file($value['cv'][0]); ?>
                  	<a href="http://<?php echo explode("/", $cv)[3] . '/' . explode("/", $cv)[5] . '/' . explode("/", $cv)[6] . '/' . explode("/", $cv)[7] . '/' . explode("/", $cv)[8] . '/' . explode("/", $cv)[9]; ?>" target="_blanc">Se CV</a>
                  
                  	<?php $image = wp_get_attachment_image_src($value['profilbilled'][0]); ?>
                    <img src="<?php echo $image[0]; ?>">
                </p>
            </div>
			<br>
			<br>
  		<?php }}
    ?>
</div>

<?php 
    get_footer();
?>
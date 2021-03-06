<?php
/*
Template Name: Feedback
*/
?>
<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  // $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Kindly fill in all the fields correctly";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = "From: " .  $name . "\n" . "URL: " . $_POST['url'] ."\n\n" . $_POST['message_text'];
  $message_self = "Your feedback has been recieved. We will try to look at the issue as soon as possible.";
  // $human = $_POST['message_human'];

  //php mailer variables
  $to = 'feedback.createdisturb@gmail.com';
  $subject = "Issue: ".get_bloginfo('name');
  $subject_self = "Feedback recieved";
  $headers = 'From: '. $email . "\r\n" .'Reply-To: ' . $email . "\r\n";
  $headers_self = 'From: '. $to . "\r\n" .'Reply-To: ' . $to . "\r\n" ;

	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		my_contact_form_generate_response("error", $email_invalid);
	else //email is valid
	{
		//validate presence of name and message
		if(empty($name) || empty($message))
		{
			my_contact_form_generate_response("error", $missing_content);
		}
		else //ready to go!
		{
			$sent = wp_mail($to, $subject, strip_tags($message), $headers);
			$sent2 = wp_mail($email, $subject_self, strip_tags($message_self), $headers_self);
			if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
			else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
		}
	}

?>
<?php get_header(); ?>
	<?php echo $response; ?>
	<form action="<?php the_permalink(); ?>" method="post">
		<div class="form-group"><label class="control-label" for="name">Name</label><input class="form-control" type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></div>
		<div class="form-group"><label class="control-label" for="message_email">Email</label><input class="form-control" type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></div>
		<div class="form-group"><label class="control-label" for="url">Page URL</label><input class="form-control" type="text" name="url" value="<?php echo wp_get_referer(); ?>" /></div>
		<div class="form-group"><label class="control-label" for="message_text">Comment</label><textarea type="text" name="message_text" class="form-control"><?php echo esc_textarea($_POST['message_text']); ?></textarea></div>
		<!-- <div class="form-group"><label class="control-label" for="message_human">Human Verification</label><input class="form-control" type="text" style="width: 60px;" name="message_human"> + 3 = 5</div>
		<input type="hidden" name="submitted" value="1"> -->
		<h4><a href="https://github.com/cassininazir/creativedisturbance/issues">Issue list</a></h4>
		<div class="form-group"><input type="submit"></div>
	</form>
<?php get_footer(); ?>
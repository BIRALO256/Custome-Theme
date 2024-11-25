<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
                            <!-- so  basically here we are checking if we have comments or not then incase we have then we have ..we do some or otherwise -->
								
                            <?php
                            if (!have_comments()) {
                                echo "Leave a comment";
                            } else {
                                // If we have comments, count them and add the word "comments" for the user
                                echo get_comments_number() . " comments";
                            }
                            ?>


                            </h2><!-- .comments-title -->

						</div><!-- .comments-header -->

						<div class="comments-inner">
                            <!-- //here basically we are trying to list all the comments for that particaul post  -->
							<?php
                                wp_list_comments(
									array(
									'avatar_size' => 120,
									'style' => 'div'
									)
									
								);
							?>

						</div><!-- .comments-inner -->

					</div><!-- comments -->

					<hr class="" aria-hidden="true">
					<?php
					if(comments_open()){
						comment_form(
                            array(
                                'class_form' => '',
								'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title" >',
								'title_reply_after'  =>'</h2>',
							)
						);
					}
					?>

				</div>
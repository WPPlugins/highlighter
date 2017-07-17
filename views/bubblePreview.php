					<?php
					echo "<div id='ANNOtype_bubble' class='ANNOtype_bubble' style='border-color: #".get_option('ANNOtype_bubbleTitleBarColor').";'>";
						//echo "<div class='before' style='border-bottom-color: #".get_option('ANNOtype_bubbleTitleBarColor').";'></div>";
						echo "<div class='ANNOtype_bubbleTitle' style='background-color: #".get_option('ANNOtype_bubbleTitleBarColor')."; color: #".get_option('ANNOtype_bubbleLinkColor').";'>";
							echo "<h1>Highlighter</h1>";
							echo "<a href='#' class='closeBubble'><img src='".UBD_URL."/public/images/bubble2/closeButton.png' alt='Close Bubble' /></a>";
						echo "</div>";
						echo "<div class='ANNOtype_bubbleSorting' style='border-color: #".get_option('ANNOtype_bubbleShellColor')."; background-color: #".get_option('ANNOtype_bubbleSortColor')."; color: #".get_option('ANNOtype_bubbleSortFontColor').";'>";
						 	echo "Sort by <a style='color: #".get_option('ANNOtype_bubbleSortFontColor').";' href='#newest'>Newest</a> <a style='color: #".get_option('ANNOtype_bubbleSortFontColor').";' href='#oldest'>Oldest</a> <a style='color: #".get_option('ANNOtype_bubbleSortFontColor').";' href='#rating'>Rating</a>";
						echo "</div>";
						echo "<div class='ANNOtype_bubbleContainer' style='background-color: #".get_option('ANNOtype_bubbleShellColor').";'>";
							echo "<div class='ANNOresponses'>";
								echo "<ul>";
									$style = "border-color: #".get_option('ANNOtype_bubbleCommentSepColor').";";
									echo "<li style='{$style}'>";
										echo "<div class='ANNOresponseTitle'>";
											echo "<div class='ANNOresponseTitleDetails'>";
												echo "<img style='border: 1px silver solid' src='".UBD_URL."/public/images/annotar.jpg' alt='ANNOTar' />";
												echo "<span class='name' style='color: #".get_option('ANNOtype_bubbleFontColor').";'><strong>Matt Blancarte</strong></span>";
											echo "</div>";
											echo "<div class='ANNOresponseTitleAdmin'>";
										
											echo "</div>";
										echo "</div>";
										echo "<div class='ANNOresponseComment' style='color: #".get_option('ANNOtype_bubbleFontColor').";'>";
											echo 'I like this! This was an interesting insight about your blog post. Great job, Nate!';
										echo "</div>";
										echo "<div class='ANNOresponseMeta'>";
											echo "<span class='date' style='color: #".get_option('ANNOtype_bubbleFontColor').";'>Posted <abbr class='timeago' title='".date('c', $comment->timestamp)."'>yesterday</abbr></span>";
											echo "<div class='ANNOresponseAction'>";
												//echo "<a href='#' class='reply'>Reply</a>";
												if(get_option('ANNOtype_ratings') == 'On') {
													echo "<a href='#' class='like' style='color: #".get_option('ANNOtype_bubbleButtonFontColor')."; background-color: #".get_option('ANNOtype_bubbleButtonColor').";'>Like</a>";
												}
											echo "</div>";
										echo "</div>";
									echo "</li>";
									
								echo "</ul>";
							echo "</div>";
						echo "</div>";
						echo "<div style='height: 10px; background-color: #".get_option('ANNOtype_bubbleTitleBarColor')."; color: #".get_option('ANNOtype_bubbleLinkColor').";' class='getANNOtype'></div>";
					echo "</div>";
				?>
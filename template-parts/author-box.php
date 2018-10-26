<div class="postauthor">
	<h4 class="about-the-author">
		Tentang Penulis
	</h4>

	<div class="postauthor-wrap">
		<span itemscope itemprop="image" alt="Photo of <?php the_author_meta( 'display_name' ); ?>">
			<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); } ?>
		</span>

		<h5 class="vcard author" itemprop="url" rel="author">
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="fn" itemprop="name">
				<span itemprop="author" itemscope itemtype="https://schema.org/Person">
					<?php the_author_meta( 'display_name' ); ?>
				</span>
			</a>
			<!-- <span class="author-aka"> a.k.a
				<span class="author-aka-name">
					<?php echo get_the_author_meta('twitter'); ?>
				</span>
			</span> -->
		</h5>

		<p>
			<?php the_author_meta('description') ?>
		</p>

		<br>
		<span class="post-author-links">
			<?php if (get_the_author_meta('url') != ''): ?>
				<a class="author-link website" title="My Website" href="<?php echo get_the_author_meta('url'); ?>" target="_blank">
					<i class="fa fa-link"></i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('facebook') != ''): ?>
				<a class="author-link facebook" title="Follow on Facebook" href="<?php echo get_the_author_meta('facebook'); ?>" target="_blank">
					<i class="fa fa-facebook">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('twitter') != ''): ?>
				<a class="author-link twitter" title="Follow on Twitter" href="https://twitter.com/<?php echo get_the_author_meta('twitter'); ?>" target="_blank">
					<i class="fa fa-twitter">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('instagram') != ''): ?>
				<a class="author-link instagram" title="Follow on Instagram" href="https://instagram.com/<?php echo get_the_author_meta('instagram'); ?>" target="_blank">
					<i class="fa fa-instagram">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('youtube') != ''): ?>
				<a class="author-link youtube" title="Subscribe on YouTube" href="<?php echo get_the_author_meta('youtube'); ?>" target="_blank">
					<i class="fa fa-youtube-play">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('linkedin') != ''): ?>
				<a class="author-link linkedin" title="Connect on LinkedIn" href="https://linkedin.com/in/<?php echo get_the_author_meta('linkedin'); ?>" target="_blank">
					<i class="fa fa-linkedin">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('github') != ''): ?>
				<a class="author-link github" title="Follow on GitHub" href="https://github.com/<?php echo get_the_author_meta('github'); ?>" target="_blank">
					<i class="fa fa-github">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('dribbble') != ''): ?>
				<a class="author-link dribbble" title="Follow on Dribbble" href="https://dribbble.com/<?php echo get_the_author_meta('dribbble'); ?>" target="_blank">
					<i class="fa fa-dribbble">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('behance') != ''): ?>
				<a class="author-link behance" title="Follow on Behance" href="https://behance.net/<?php echo get_the_author_meta('behance'); ?>" target="_blank">
					<i class="fa fa-behance">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('googleplus') != ''): ?>
				<a class="author-link googleplus" title="Follow on Google+" href="https://t.me/<?php echo get_the_author_meta('googleplus'); ?>" target="_blank">
					<i class="fa fa-google-plus">
					</i>
				</a>
			<?php endif; ?>
			<?php if (get_the_author_meta('telegram') != ''): ?>
				<a class="author-link telegram" title="Chat on Telegram" href="<?php echo get_the_author_meta('telegram'); ?>" target="_blank">
					<i class="fa fa-telegram">
					</i>
				</a>
			<?php endif; ?>
		</span>
		<hr>
		<span class="say-thanks">
			<span>Say</span>
			<span class="say-thanks-link">
				<a href="https://twitter.com/intent/tweet?original_referer=<?php echo $url; ?>&amp;text=Hey @<?php echo get_the_author_meta('twitter'); ?>, I ❤ Your post &quot;<?php echo $title; ?>&quot;&amp;url=<?php echo $url; ?>&amp;via=civilportal_id" target="_blank">
					<span><i class="fa fa-twitter"></i> thanks</span>
				</a>
			</span>
			<span>or</span>
			<span class="say-thanks-link">
				<a href="https://twitter.com/intent/tweet?original_referer=<?php echo $url; ?>&amp;text=Hey @<?php echo get_the_author_meta('twitter'); ?>, Sorry...Your post &quot;<?php echo $title; ?>&quot; makes me 😠😢😱😡 &amp;url=<?php echo $url; ?>&amp;via=civilportal_id" target="_blank">
					<span><i class="fa fa-twitter"></i> boo</span>
				</a>
			</span>
			<span>to @<?php echo get_the_author_meta('twitter'); ?></span>
		</span>
	</div>
</div>
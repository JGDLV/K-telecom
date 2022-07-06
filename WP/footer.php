<footer class="footer">
    <div class="container">
      <div class="footer__inner"><a class="logo" href="/"><img class="logo__image" src="<?php the_field('logo', 2); ?>" alt=""></a>
        <p class="copyright">© 2018–2022 ООО «К-Телеком»</p>
        <div class="social">
			<?php if (get_field('instagram', 2)): ?>
				<a class="social__item fab fa-instagram" href="<?php the_field('instagram', 2); ?>"></a>
			<?php endif; ?>
			<?php if (get_field('youtube', 2)): ?>
				<a class="social__item fab fa-youtube" href="<?php the_field('youtube', 2); ?>"></a>
			<?php endif; ?>
			<?php if (get_field('vk', 2)): ?>
				<a class="social__item fab fa-vk" href="<?php the_field('vk', 2); ?>"></a>
			<?php endif; ?>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>

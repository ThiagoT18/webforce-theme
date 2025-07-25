<section class="services" data-aos="fade-up">
  <div class="container">
    <h2 data-aos="fade-down">Nossos Serviços</h2>

    <div class="service-list">

      <!-- Serviço 1 -->
      <div class="service-item" data-aos="fade-up" data-aos-delay="100">
        <img src="<?php echo esc_url(get_field('service_1_icon')); ?>" alt="">
        <h3><?php the_field('service_1_title'); ?></h3>
        <p><?php the_field('service_1_description'); ?></p>
      </div>

      <!-- Serviço 2 -->
      <div class="service-item" data-aos="fade-up" data-aos-delay="200">
        <img src="<?php echo esc_url(get_field('service_2_icon')); ?>" alt="">
        <h3><?php the_field('service_2_title'); ?></h3>
        <p><?php the_field('service_2_description'); ?></p>
      </div>

      <!-- Serviço 3 -->
      <div class="service-item" data-aos="fade-up" data-aos-delay="300">
        <img src="<?php echo esc_url(get_field('service_3_icon')); ?>" alt="">
        <h3><?php the_field('service_3_title'); ?></h3>
        <p><?php the_field('service_3_description'); ?></p>
      </div>

    </div>
  </div>
</section>

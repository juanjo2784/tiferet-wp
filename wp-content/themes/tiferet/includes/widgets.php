<?php
if (!defined('ABSPATH'))
    die();

class tiferet_post_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'tiferet_widget',
            esc_html__('tiferet Post', 'tiferet'),
            array(
                'description' => esc_html__('Agrega los Post como Widget', 'tiferet'),
            )
        );
    }

    public function widget($args, $instance)
    {
        ?>
        <ul class="post-sidebar">
            <?php
            $args = array(
                'posts_per_page' => $instance['cantidad'],
                'order' => 'ASC',
                'orderby' => 'title'
            );
            $post = new WP_Query($args);
            while ($post->have_posts()) {
                $post->the_post(); ?>
                <li>
                    <div class="img-post">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="link-post">
                        <a href="<?php the_permalink(); ?>">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    </div>
                </li>
            <?php }
            wp_reset_postdata(); ?>
        </ul>
        <?php
    }

    public function form($instance)
    {
        $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('¿Cuántas post deseas mostrar?');

        ?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>">
                <?php esc_attr_e('¿Cuántas post deseas mostrar?') ?>
            </label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
                name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>" type="number"
                value="<?php echo esc_attr($cantidad) ?>" />
        </p>

        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']) : '';
        return $instance;
    }
}

function tiferet_post_Widget()
{
    register_widget('tiferet_post_Widget');
}
add_action('widgets_init', 'tiferet_post_Widget');
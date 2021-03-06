<div class="zo-counter-wraper zo-counter-layout-default <?php echo esc_attr($atts['template']); ?>"
     id="<?php echo esc_attr($atts['html_id']); ?>">
    <div class="zo-counter-body">
        <?php
        $title = isset($atts['title']) ? $atts['title'] : '';
        $icon = isset($atts["icon_" . $atts['icon_type']]) ? $atts["icon_" . $atts['icon_type']] : '';
        $type = isset($atts['type']) ? $atts['type'] : '';
        $suffix = isset($atts['suffix']) ? $atts['suffix'] : '';
        $prefix = isset($atts['prefix']) ? $atts['prefix'] : '';
        $digit = isset($atts['digit']) ? $atts['digit'] : '60';
        $grouping = isset($atts['grouping']) ? $atts['grouping'] : 'false';
        $separator = isset($atts['separator']) ? $atts['separator'] : ',';
        $description = isset($atts['description']) ? $atts['description'] : '';
        $zo_counter_color = isset($atts['zo_counter_color']) ? $atts['zo_counter_color'] : '';
        $zo_counter_icon_color = isset($atts['zo_counter_icon_color']) ? $atts['zo_counter_icon_color'] : '';
        $zo_counter_title_color = isset($atts['zo_counter_title_color']) ? $atts['zo_counter_title_color'] : '';
        $zo_counter_content_color = isset($atts['zo_counter_content_color']) ? $atts['zo_counter_content_color'] : '';
        ?>
        <div class="zo-counter-item">
            <div class="zo-counter-inner">
                <?php if ($icon): ?>
                    <div class="zo-icon" style="color: <?php echo esc_attr($zo_counter_icon_color); ?>"><i class="<?php echo esc_attr($icon); ?>"></i></div>
                <?php endif; ?>
                <div class="zo-counter-body">
                    <div id="counter_<?php echo esc_attr($atts['html_id']);?>"
                         class="zo-counter <?php echo esc_attr(strtolower($type));?>"
                         data-suffix="<?php echo esc_attr($suffix);?>" data-prefix="<?php echo esc_attr($prefix); ?>"
                         data-type="<?php echo esc_attr(strtolower($type));?>"
                         data-digit="<?php echo esc_attr($digit);?>"
                         data-grouping="<?php echo esc_attr($grouping);?>"
                         data-separator="<?php echo esc_attr($separator);?>"
                         style="color: <?php echo esc_attr($zo_counter_color); ?>"></div>
                    <?php if ($title): ?>
                        <h2 class="zo-counter-title" style="color: <?php echo esc_attr($zo_counter_title_color); ?>"><?php echo apply_filters('the_title', $title); ?></h2>
                    <?php endif;?>
                    <?php if ($description): ?>
                        <div class="zo-counter-description" style="color: <?php echo esc_attr($zo_counter_content_color); ?>"><?php echo apply_filters('the_content', $description); ?></div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
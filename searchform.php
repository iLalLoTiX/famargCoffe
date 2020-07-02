
<div class="ftco-animate">
    <div class="sidebar-box">
        <form action="#" class="search-form" action="#" action="<?php echo get_home_url( '/' ); ?>" >
            <div class="form-group">
                <div class="icon">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search" value="<?php echo esc_attr_x( 'Buscar', 'submit button' ) ?>"></i></button>
                </div>
                <input style="color: black !important;" type="text" class="form-control"  placeholder="<?php echo esc_attr_x( 'Buscar…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
            </div>
        </form>
    </div>
</div>
<section class="list-section py-5">
<ul class="container">
    <div class="row mb-5">
        <?php if( get_sub_field('sub_header') ): ?>
            <p class="lead">
                <?php the_sub_field( 'sub_header' ); ?>
            </p>
        <?php endif; ?>
        <?php if( get_sub_field('header') ): ?>
            <h2 class="display-4">
                <?php the_sub_field( 'header' ); ?>
            </h2>
        <?php endif; ?>
        <?php if( get_sub_field('content') ): ?>
            <p class="content">
                <?php the_sub_field( 'content' ); ?>
            </p>
        <?php endif; ?>
        <?php if( get_sub_field('list_header') ): ?>
            <h3>
                <?php the_sub_field( 'list_header' ); ?>
            </h3>
        <?php endif; ?>
    </div>
    <?php if ( have_rows( 'list' ) ) : ?>
<div class="row">
        <?php while ( have_rows( 'list' ) ) : the_row(); ?>

            <?php if ( have_rows( 'list_column_' ) ) : ?>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4">
                <ul class="nav flex-column">
                <?php while ( have_rows( 'list_column_' ) ) : the_row(); ?>
                    <li class="nav-item d-flex align-items-center">
                        <i class="fa-solid fa-badge-check"></i>
                        <?php the_sub_field( 'item' ); ?>
                    </li>
                <?php endwhile; ?>
                </ul>
            </div>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        <?php endwhile; ?>
</div>
    <?php else : ?>
        <?php // No rows found ?>
    <?php endif; ?>
</section>
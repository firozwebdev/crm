
<?php if( ENVIRONMENT!='production') : ?>
    <pre>
        <?php if( $row ) print_r( $row ); ?>
        <?php if( $rows ) print_r( $rows ); ?>
    </pre>
<?php endif; ?>
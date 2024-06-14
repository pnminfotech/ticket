<?php defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' ); ?>
<td><?php echo html_escape( $id ); ?></td>
<td>
  <?php echo html_escape( $name ); ?>
  
  <?php if ( $this->zuser->has_permission( 'tickets' ) ) { ?>
    <div>
      <a class="small" href="<?php echo env_url( 'admin/support/departments/' . html_escape( $id ) . '/tickets' ); ?>"><?php echo lang( 'browse_tickets' ); ?></a>
    </div>
  <?php } ?>
  
  <?php if ( $this->zuser->has_permission( 'chats' ) ) { ?>
    <div>
      <a class="small" href="<?php echo env_url( 'admin/support/departments/' . html_escape( $id ) . '/chats' ); ?>"><?php echo lang( 'browse_chats' ); ?></a>
    </div>
  <?php } ?>
  
</td>
<td class="text-right">
  <?php
  if ( $visibility == 1 )
  {
      echo '<span class="badge badge-success">' . lang( 'public' ) . '</span>';
  }
  else
  {
      echo '<span class="badge badge-danger">' . lang( 'hidden' ) . '</span>';
  }
  ?>
</td>
<td class="text-right"><?php echo get_date_time_by_timezone( html_escape( $updated_at ) ); ?></td>
<td class="text-right"><?php echo get_date_time_by_timezone( html_escape( $created_at ) ); ?></td>
<td class="text-right">
  <div class="btn-group">
    <button class="btn btn-sm btn-primary get-data-tool" data-source="<?php admin_action( 'support/edit_department' ); ?>" data-id="<?php echo html_escape( $id ); ?>">
      <span class="fas fa-edit get-data-tool-c"></span>
    </button>
    <button class="btn btn-sm btn-danger tool" data-id="<?php echo html_escape( $id ); ?>" data-toggle="modal" data-target="#delete">
      <i class="fas fa-trash tool-c"></i>
    </button>
  </div>
  <!-- /.btn-group -->
</td>
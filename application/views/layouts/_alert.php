<?php
    $success = $this->session->flashdata('success');
    $warning = $this->session->flashdata('warning');
    $fail = $this->session->flashdata('fail');

    if($success){
        $alert_status = 'alert-success';
        $status = 'Success';
        $message = $success;
    }
    if($warning){
        $alert_status = 'alert-warning';
        $status = 'Warning';
        $message = $warning;
    }
    if($fail){
        $alert_status = 'alert-danger';
        $status = 'Failed';
        $message = $fail;
    }
?>

<?php if($success || $warning || $fail): ?>
<div class="alert <?= $alert_status ?> alert-dismissible fade show" role="alert">
  <strong><?= $status ?>!</strong> <?= $message ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<div class="pull-right hidden-xs">
    
</div>
<strong>Copyright © 2022-{{ date('Y') }} <a href="https://github.com/abbackend">AB Backend</a>.</strong> All rights reserved.

<!-- Change Passwod Model -->
<div class="modal fade" id="change-password-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Change Password</h4>
            </div>
            <form method="POST" id="change-password-form" action="{{ route('auth.changePassword') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="password">{{ __('New Password') }}</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">{{ __('Confirm Password') }}</label>
                        <input type="password" name="confirm_password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
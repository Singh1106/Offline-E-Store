
<div class="modal fade" id="mysettingmodal" style="margin-top:5%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="text-align: center">Settings</h2>
            </div>   
            <div class="modal-body">
                <form method="post" action="Settings_script.php">
                    <div class="form-group">
                        <label for="OldPassword">Old Password</label>
                        <input type="text" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password">                 
                    </div>
                    <div class="form-group">
                        <label for="NewPassword">Password</label>
                        <input type="text" class="form-control" id="NewPassword" name="NewPassword" placeholder="NewPassword">                 
                    </div>
                    <input type="submit" class="btn-success" value="PasswordChange" name="PasswordChange"/>
                </form>     
            </div>
        </div>
    </div>
</div>


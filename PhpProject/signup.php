
<div class="modal fade" id="mysignupmodal" style="margin-top:5%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="text-align: center">Sign Up</h2>
            </div>   
            <div class="modal-body">
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="John@123.com"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Thanos"/>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="number" class="form-control" id="contact" name="contact" placeholder="9999999999"/>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Please Enter Your City"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Shhhhhhh"/>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Please enter your address"/>
                    </div>
                    <div class="form-group">
                        <label for="sex">Sex</label>
                        <select class="form-control" id="sex" name="sex">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <input type="submit" class="btn-danger" value="SUBMIT" name="SUBMIT"/><br/>
                </form>     
            </div>
            
        </div>
    </div>
</div>
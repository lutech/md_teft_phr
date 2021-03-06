<div class="panel panel-default">
    <div class="panel-body">
        <h2 id="myModalLabel" class="primary-color">
            <b>MyLTSS</b> Registration
        </h2>
        <hr>
        <br>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label required"><strong>First Name:</strong></label>
                <div class="col-sm-5">
                    <input class="form-control" required id="firstname">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label required"><strong>Last Name:</strong></label>
                <div class="col-sm-5">
                    <input class="form-control" required id="lastname">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="gender" class="col-sm-3 control-label required with-sub"><strong>Date of Birth:</strong>
                </label>
                <div class="col-sm-4">
                    <input class="form-control" required id="datepicker" type="text"/>
                    <span class="sublabel">MM/DD/YYYY</span>
                </div>
            </div>
            <div class="form-group">
                <label for="race" class="col-sm-3 control-label required"><strong>Gender:</strong></label>
                <div class="col-sm-9" style="padding-left: 21px;">
                    <label class="radio-inline ">
                        <input type="radio" id="gender" name="gender"> Male
                    </label>
                    <label class="radio-inline ">
                        <input type="radio" id="gender" name="gender"> Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="ssn" class="col-sm-3 control-label required with-sub"><strong>SSN:</strong></label>
                <div class="col-sm-4">
                    <input type="text" required class="form-control" id="ssn">
                    <span class="sublabel">123-45-6789</span>
                </div>
            </div>
            <div class="form-group">
                <label for="manum" class="col-sm-3 control-label required"><strong>MA#:</strong></label>
                <div class="col-sm-4">
                    <input required type="text" class="form-control" id="manum">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneType" class="col-sm-3 control-label required"><strong>Phone Type:</strong></label>
                <div class="col-sm-5">
                    <select required class="form-control methodOfCom" id="phoneType">
                        <option></option>
                        <option value="home">Home</option>
                        <option value="cell">Cell</option>
                        <option value="business">Business</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label required with-sub"><strong>Phone Number:</strong></label>
                <div class="col-sm-4">
                    <input required class="form-control" type="phone" id="phone">
                    <span class="sublabel">123-456-7890</span>
                </div>
            </div>
            <div class="form-group" id="cellContainer" style="display: none">
                <label for="phone" class="col-sm-3 control-label required"><strong>Cell Phone:</strong></label>
                <div class="col-sm-4">
                    <input required class="form-control" type="phone" id="phone">
                    <span class="sublabel">123-456-7890</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="username" class="col-sm-3 control-label required"><strong>Username:</strong></label>
                <div class="col-sm-5">
                    <input required class="form-control" id="username">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label required with-sub"><strong>Password:</strong></label>
                <div class="col-sm-4">
                    <input required class="form-control" id="password" type="password">
                    <span class="sublabel">Must be 8 characters long and include at least one number.</span>
                </div>
            </div>
            <div class="form-group">
                <label for="dob" class="col-sm-3 control-label required"><strong>Confirm Password:</strong></label>
                <div class="col-sm-4">
                    <input required class="form-control" id="dob" type="password">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label required"><strong>Email Address:</strong></label>
                <div class="col-sm-4">
                    <input  required class="form-control" id="email" type="email">
                </div>
            </div>
            <div class="form-group">
                <label for="emailConfirm" class="col-sm-3 control-label required"><strong>Confirm Email
                        Address:</strong></label>
                <div class="col-sm-5">
                    <input required class="form-control" id="emailConfirm" type="email">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label required"><strong>Preferred Method of
                        Communication:</strong></label>
                <div class="col-sm-5">
                    <select required id="methodOfContact" class="methodOfCom form-control">
                        <option></option>
                        <option value="all">All</option>
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="mail">US Mail</option>
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="col-xs-12 col-sm-offset-3 col-sm-5">
                <button type="button" class="btn btn-success btn-lg" onclick="window.location='<?php echo base_url() . "index.php/registrationconfirmation" ?>';">
                    <span class="fa fa-check"></span>&nbsp;&nbsp;Register
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){


        var methodOfContact = $("#methodOfContact");
        var phoneType = $("#phoneType");
        var cellContainer = $("#cellContainer");
        var trigger = $(".methodOfCom");

        trigger.change(function(){
            if(methodOfContact.val() == "text" && phoneType.val() != "cell"){
                cellContainer.show();
                console.log('== text != cell')
            }else if(methodOfContact.val == "text" && phoneType.val() == "cell"){
                cellContainer.hide();
                console.log('')
            }
        });

    });
</script>
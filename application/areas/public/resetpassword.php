<div class="col-sm-10 col-sm-offset-1">
    <div class="panel panel-default">
        <div class="panel-body" style="padding-top: 0">
        <h2 class="form-signin-heading" id="myModalLabel" style="border-bottom: 2px solid #ddd; color: #428BCA; margin-bottom: 30px;"><b>MyLTSS</b>&nbsp;Password Reset</h2>
            <form class="form-horizontal" role="form" id="loginform" method="post" name="form" action="<?php echo base_url() . 'index.php/site/attemptLogin' ?>">

                <div class="form-group required">
                    <label for="email" class="col-sm-3 control-label required"><strong>Username:</strong></label>
                    <div class="col-sm-9 col-md-6">
                        <input class="form-control " id="email" required type="text">
                    </div>
                </div>
                <br>
                <div class="form-group required">
                    <label for="email" class="col-sm-3 control-label required"><strong>New Password:</strong></label>
                    <div class="col-sm-9 col-md-6">
                        <input class="form-control" id="email" required type="password">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label required"><strong>Confirm Password:</strong></label>
                    <div class="col-sm-9 col-md-6">
                        <input class="form-control" id="phone" required type="Password">
                    </div>
                </div>

                <div class="row">
                    <hr style="margin: 23px 15px;">
                    <div class="col-xs-6 col-sm-offset-3 col-sm-4 col-md-3">
                        <button type="button" class="btn btn-danger btn-block" onclick="window.location='<?php echo base_url()."index.php"?>';">Cancel</button>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <button type="button" class="btn btn-success btn-block" onclick="window.location='<?php echo base_url()."index.php/"?>';">Reset</button>
                    </div>
                </div>
        </div>
    </div>
</div>
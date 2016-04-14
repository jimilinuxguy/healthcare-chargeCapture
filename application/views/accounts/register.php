<?php

    $this->load->view('templates/header');
?>
    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Account Registration</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                <input class="form-control" placeholder="Account Name" type="text" name="accountName" value="<?php echo set_value('accountName');?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" name="firstName" value="<?php echo set_value('firstName');?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastName" value="<?php echo set_value('lastName');?>" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" required placeholder="Email" name="emailAddress" value="<?php echo set_value('emailAddress');?>" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="passPhrase" class="form-control" placeholder="Password"  value="<?php echo set_value('passPhrase');?>" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confPassword" class="form-control" placeholder="Confirm Password" value="<?php echo set_value('confPassword');?>" />
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Register Account" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    $this->load->view('templates/footer');
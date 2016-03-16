<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Age Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../CommonObjects/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../CommonObjects/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../CommonObjects/jqueryUI/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="css/age-calculator.css" />    
</head>
<body>
    <div class="container">
        <div class="page-header">            
            <h1><img src="../CommonObjects/images/logo.png" /><small>Age Calculator</small></h1>
        </div>
        <div class="container">
            <div id="result" class="row">
                <div class="col-lg-6">
                    <div class="alert alert-success">
                        <strong><span class="glyphicon glyphicon-ok"></span> Result: <span id="result-text">[Result Here]</span></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <form id="age-calculator" role="form" action="calculator.php" method="post">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="mm/dd/yyyy" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="saildate">Saildate</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="saildate" name="saildate" placeholder="mm/dd/yyyy" required>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success btn-large" name="submit">Submit</button>
                            <button type="reset" class="btn">Reset</button>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../CommonObjects/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../CommonObjects/jqueryUI/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../CommonObjects/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/age-calculator.js"></script>
</body>
</html>

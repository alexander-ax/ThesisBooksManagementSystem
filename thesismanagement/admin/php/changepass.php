<!DOCTYPE html>
<html>
    <head>

        <title>Change Password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" type="png" href="../resources/logo2.png"/>
        <link rel="stylesheet" type="text/css" href="design.css"/>
        
    </head>
    <body>
        <!-- main container -->
        <div class="container-fluid row signin">

            <!-- left side -->
            <div style="padding: 50px;" class="col-md-6">
                <img src="../resources/logo1.png" class="img-fluid" style="height: 50px;"/>
                <h3 style="font-weight: 700; margin-top: 20%;">Change Password</h3>
                <div class="form-outline">
                    <form action="doctor.php" method="post">
                        <p style="margin-top:30px; color: #FD8978; font-size: 10pt;">Hello!, email@gmail.com <br> Please provide your new password</p>
                        <label style="margin-top:20px; font-size:9pt;" class="FormLabel form-label"><i class='bx bx-lock-alt'></i> New Password</label>
                        <input style="font-size:8pt; padding:10px;" name="password" type="password" ondrop="return false;" oninvalid="IninvalidMsg(this);" oninput="IninvalidMsg(this);" onpaste="return false;" class="form-control" placeholder="Password" required="Required">                        
                        
                        <label style="margin-top:20px; font-size:9pt;" class="FormLabel form-label"><i class='bx bx-lock-alt'></i> Repeat New Password</label>
                        <input style="font-size:8pt; padding:10px;" name="password" type="password" ondrop="return false;" oninvalid="IninvalidMsg(this);" oninput="IninvalidMsg(this);" onpaste="return false;" class="form-control" placeholder="Password" required="Required">

                        <input style="margin-top:20px; font-size:9pt; padding:10px; width:100%; background-color: #FD8978; border-color: #FD8978;" name="doctor_login" type="submit" value="Change Password" class="btn btn-primary">
                    </form>
                </div>
            </div>

            <!-- right side -->
            <div style="padding:10%; background-color:#DDE2FD;" class="col-md-6">
                <img style="margin-top:20px;" class="img-fluid" src="../resources/adminposter.png"/>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
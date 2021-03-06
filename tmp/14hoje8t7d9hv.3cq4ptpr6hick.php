<!DOCTYPE html>

    <!---
    Author: Brian Saylor
    10/03/2017
    User enters name number age and gender for their profile--->

        <html>
        
            <head>
                
                <title>Camp Sambica Sign up</title>           
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta charset="utf-8">
                <meta name="description" content="">
                <meta name="author" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="dating/styles/stylesheet.css" type="text/css">
                 
                <!-- bootstrap -->
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                      rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                 
                <!--[if lt IE 9]>
                <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
                <link rel="shortcut icon" href="">
                <link href="css/informationForm.css" type="text/css" rel="stylesheet">
                
            </head>
            
            <body>
                
            <nav class="navbar navbar-default" id="nav">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <p>Camp Sambica</p>
                    </div>
                    <ul class="nav navbar-nav">
                        <li ><a href="./">Home</a></li>
                        <li class="active"><a href="./information_form">New Camper</a></li>
                        <li><a href="./activities">Edit Activities</a></li>
                        <li><a href="./displaymembers">View Members</a></li>
                        <li><a href="./logout">Logout</a></li>
                        
                    </ul>
                </div>
            </nav>
                

                
                <div class="container panel panel-default" id="contentSection">
                    <div class="row">
                        
                        <br>
                        <form action="./memberCreation" method="post" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <h1  id="camperHeading">Camper Information</h1>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>

                            <div class="col-md-2">
                                </div>
                            <div class="container-fluid col-md-8">
                            <legend></legend>
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="counselor">Counselor</label>
                                    <input class="form-control" type="text" name="counselor" id="counselor" placeholder="Counselor" required>
                                </div>
                                
                                <span class="input-group-addon" id="camperHeading">Activities</span>
                                <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityOne">1<sup>st</sup> Choice:</label>
                                      <select class="form-control" name="activityOne" id="activityOne" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityTwo">2<sup>nd</sup> Choice:</label>
                                      <select class="form-control" name="activityTwo" id="activityTwo" class = "activityTwo" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityThree">3<sup>rd</sup> Choice:</label>
                                      <select class="form-control" name="activityThree" id="activityThree" class="activityTwo" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFour">4<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activityFour" id="activityFour" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFive">5<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activityFive" id="activityFive" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFive">6<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activitySix" id="activitySix" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFour">7<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activitySeven" id="activitySeven" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFive">8<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activityEight" id="activityEight" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFive">9<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activityNine" id="activityNinth" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                     <label for="activityFive">10<sup>th</sup> Choice:</label>
                                      <select class="form-control" name="activityTen" id="activityTen" onchange="getSlectedValue();">
                                        <option selected="selected">--</option>
                                        <?php foreach (($activities?:[]) as $activity): ?>
                                            <option id="<?= ($activity['activity']) ?>"><?= ($activity['activity']) ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>         
                                </div>
                                
                                <div class="col-md-12">
                                    <br>
                                    <input class="btn btn-info btn-sm pull-right" type="submit" value="Add Camper">
                                    <br>
                                    <br>
                                    <br>
                                </div>
                                

                            </div>   
                        </form>
                    </div>
                </div>
                
               
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                 <script src="js/informationForm.js" type=text/javascript></script>
                
            </body>
        
        </html>
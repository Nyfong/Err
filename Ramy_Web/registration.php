<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>user Account</title>
</head>
<body>
<div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
        <a class="nav-link ms-0" href="./registration.php" >Profile</a>
        <!-- <a class="nav-link active" href="./activity.php" >Activity</a>
        <a class="nav-link" href="./notivication.php"  >Notifications</a> -->
        <a class="nav-link" href="./index.php"  >Shopping</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <form method="POST" enctype="multipart/form-data"  action="Database_Registor_and_Image.php">
                <!-- action="./image.php" -->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile img-thumbnail rounded-circle mb-2 10px" src="computer-icons-user-profile-circle-abstract.jpg" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <input type="file" name="image"><br/>

                    </div>
                </div>
                
            </div>
            
            <div class="col-xl-8">
                <!-- Account details card-->
                <form action="?" method="post">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                   
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="username">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" id="username" name="username" type="text" placeholder="Enter your username" value="">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="firstname">First name</label>
                                    <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Enter your first name" value="">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="lastname">Last name</label>
                                    <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Enter your last name" value="">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                              
                               
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="location">Location</label>
                                    <input class="form-control" id="location" name="location" type="text" placeholder="Enter your location" value="">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email address" value="">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="phone">Phone number</label>
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter your phone number" value="">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="birthday">Birthday</label>
                                    <input class="form-control" id="birthday"   type="text" name="birthday" placeholder="DD/MM/YY" value="" >
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit" value="registor" name="submit">Submit</button>
                            </form>
                    </div>
                </div>
                
    </form>
            </div>
         
        </div>
    </div>
    
    
</body>
</html>
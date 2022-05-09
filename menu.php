<?php include "head.php";?>
<body>
    <?php
    $actm='mainmenu';
    include "sidebar.php";?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><b><?php echo $UserCompanyName;?></b></h3>
                <p class="text-subtitle text-muted">User : <a href="#"><b>Netiya Rahul</b></a></p>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><br>Terminal : <a href="changeterminal.php"><b><?php echo $UserTerminalCode;?></b></a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Menu Utama</li> -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Profile</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">User ID</label>
                                            <input type="text"  id="first-name-column" class="form-control"
                                                placeholder="User ID" name="fname-column" readonly value="<?php echo $UserName;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Full Name</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                placeholder="Full Name" name="lname-column"  readonly value="<?php echo $UserFullName;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Status</label>
                                            <input type="text" id="city-column" class="form-control" placeholder="Status"
                                                name="city-column"  readonly value="<?php if($UserStatusActive=1){echo "ACTIVE";}else{echo "INACTIVE";}?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Default Terminal</label>
                                            <!--<input type="text" id="country-floating" class="form-control"
                                                name="country-floating" placeholder="Default Terminal" readonly value="<?php echo $UserTerminalName;?>">-->
                                                <select class="form-select" id="basicSelect" disabled="disabled">
                                                    <option selected><?php echo $UserTerminalName;?></option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Registered</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="company-column" placeholder="Registered Date" readonly value="<?php echo $UserCreDate;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Last Login</label>
                                            <input type="email" id="email-id-column" class="form-control"
                                                name="email-id-column" placeholder="User Last Login" readonly value="<?php echo $UserLastLogin;?>">
                                        </div>
                                    </div>
                                    
                                    <!--<div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
<?php include "foot.php"; ?>
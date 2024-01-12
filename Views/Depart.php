<?php include('header.php')?>
        
        
        <main>
            
            <div class="page-header">
                <h1>Embarquement des frets a bord du bus</h1>
                <small>Home / Depart</small>
            </div>
            
            <div class="page-content">


                    <div class="analytics">

                            <div class="card">
                                <div class="card-head">
                                    <h2>107,200</h2>
                                    <span class="las la-user-friends"></span>
                                </div>
                                <div class="card-progress">
                                    <small>User activity this month</small>
                                    <div class="card-indicator">
                                        <div class="indicator one" style="width: 60%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-head">
                                    <h2>340,230</h2>
                                    <span class="las la-eye"></span>
                                </div>
                                <div class="card-progress">
                                    <small>Page views</small>
                                    <div class="card-indicator">
                                        <div class="indicator two" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-head">
                                    <h2>$653,200</h2>
                                    <span class="las la-shopping-cart"></span>
                                </div>
                                <div class="card-progress">
                                    <small>Monthly revenue growth</small>
                                    <div class="card-indicator">
                                        <div class="indicator three" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-head">
                                    <h2>47,500</h2>
                                    <span class="las la-envelope"></span>
                                </div>
                                <div class="card-progress">
                                    <small>New E-mails received</small>
                                    <div class="card-indicator">
                                        <div class="indicator four" style="width: 90%"></div>
                                    </div>
                                </div>
                            </div>

                </div>

                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>Add record</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <?php  include('test/index.php'); ?>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
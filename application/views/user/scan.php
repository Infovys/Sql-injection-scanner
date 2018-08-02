
<div id="domainsearch" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="domainsearch">
                    <div class="b-title">Full Deep Sql Scan</div>
                    <div class="domain-search-holder">
                        <form id="website_scan" method="POST"  action="<?php echo base_url();?>scanner.php">
                            <input id="domain-text" type="text" name="site" placeholder="Enter the Website" oninput="get_empty()" />
                            <input id="search-btn" type="submit" name="submit" value="Hunt Sql" />
                            <span class="error" id="message" style="color:red;"></span>
                        </form>
                    <img src="<?php echo base_url();?>assets/images/loader.gif" style="display:none;" id="loader" height="100"  width="100">
                     <div class="b-title" id="domain"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="search_result" class="container-fluid">

</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">What you will get with Scan?</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="images/clouds-light.png" alt="" /></div>
                        <i class="hno hno-locked-padlock"></i>
                    </div>
                    <div class="mfeature-title">Vulnerability Detail.</div>
                    <div class="mfeature-details">Content Remaing</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="mfeature-box active">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="images/clouds-light.png" alt="" /></div>
                        <i class="hno hno-refresh"></i>
                    </div>
                    <div class="mfeature-title">Website Loop Hol
</div>
                    <div class="mfeature-details">Content Remaing.</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <div class="icon-bg"><img src="images/clouds-light.png" alt="" /></div>
                        <i class="hno hno-domain-registration"></i>
                    </div>
                    <div class="mfeature-title">Website Scan Detail</div>
                    <div class="mfeature-details">Content Remaing..</div>
                </div>
            </div>
        </div>    
    </div>
</div>
<div id="greybg-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">Ready to ask your first question?<br>
Need any help?</div>
                <a href="https://infovys.com" class="white-less-shadow-button">Support portal</a>
            </div>
        </div>
    </div>
</div>

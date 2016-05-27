<div class="panel panel-default">
    <div class="panel-heading">
        API method - Create Site
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Description</a>
            </li>
            <li><a href="#profile" data-toggle="tab">Example PHP Code</a>
            </li>
            <li><a href="#messages" data-toggle="tab">Use method</a>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <h4>Create Site</h4>
                Creates based on whether or not Site ID was provided.

Requires ALL or SHARED level on CREATE/UPDATE permission for INVENTORY items. When SHARED level being used, share of type CAN_EDIT or IS_OWNER must be present between requester and entity being requested.</br></br>

                <p><strong>URL:</strong> /rest-api/sites/update.do.</p>

                <p><strong>Method: </strong>POST.</p>

                <p><strong>Response format:</strong> application/json.<p>

                <p><strong>Error codes:</strong></p>
                <ul>
                  <li>401 Unauthorized-authentication error.</li>
                </ul>
                <p><strong>Response sample:</strong>200 OK.</p>

                <p><strong>Parameters:</strong></p>
                <ul>
                  <li>hash - an MD5 digest of a concatenated username's md5 password and a given timestamp;</li>
                  <li>timestamp - UNIX timestamp used for hash generation;</li>
                  <li>username - a given username.</li>
                  <li>createDefaultZone - defines whether to create a default Zone within the Site or not; boolean value (optional).</li>
                  <li>name - Site Name. Mandatory for Create method; Optional for Update method.</li>
                  <li>url - Site URL (mandatory).</li>
                  <li>description - Short Site description.</li>
                  <li>email - contact Email (mandatory).</li>
                  <li>allowPlacementBannersLinkingChange - defines whether user can link Banners and Placements of this Site himself; boolean value (optional).</li>
                  <li>categoryId - IDs of categories for this Site (mandatory).</li>
                  <li>revenueShare - value between 0 and 100 to represent Revenue Share percentage for a given Site (optional).</li>
                  <li>impressionsByMonth - estimated value for Impressions served monthly(optional). Available values: LESS_THAN_100K, _100K_1_MILLION, _1_MILLION_50_MILLION, _50_MILLION_100_MILLION, _100_PLUS_MILLION, NOT_YET_LAUNCHED, DONT_KNOW.</li>
                  <li>visitorsByMonth - estimated value for the number of unique Site visitors monthly (optional). Available values: LESS_THAN_100K, _100K_1_MILLION, _1_MILLION_50_MILLION, _50_MILLION_100_MILLION, _100_PLUS_MILLION, NOT_YET_LAUNCHED, DONT_KNOW.</li>
                  <li>active - true/false.</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="profile">
                <figure class="highlight">
                    <pre>
                        <code class="language-php">
                            $username = "";
                            $password = ""; 
                            $timestamp  = round(microtime(true) * 1000);
                            $hash = md5(md5($password).$timestamp);
                            $url="https://n29.epom.com/rest-api/sites/{site_id}/delete.do"; 

                            $post_data = array(
                                "hash" => $hash,
                                "timestamp" => $timestamp,
                                "username" => $username
                            );
                              /*specifying curl options*/
                              $options = array(
                                CURLOPT_URL => $url,
                                CURLOPT_SSL_VERIFYPEER => false,
                                CURLOPT_POST => true, // POST method is used
                                CURLOPT_POSTFIELDS => http_build_query($post_data), //POST request body parameters
                                CURLOPT_HTTPHEADER => array('Content-type: application/x-www-form-urlencoded'), 
                                CURLOPT_RETURNTRANSFER => true
                              );
                              /*connection initiation*/
                              $curl = curl_init();
                              /*Applying curl options to our curl instance*/
                              curl_setopt_array($curl,$options);
                              /*Executing the call*/
                              $result=curl_exec($curl);

                              echo $result;
                        </code>
                    </pre>
                </figure>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Download Example Code</button>
                </div>
            </div>
            <div class="tab-pane fade" id="messages">
                <div class="col-xs-6 col-sm-3">
                    <div class="position" id="position-block">
                        <form id="demo-form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Username</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="username" placeholder="Username" id="username" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" placeholder="Password" id="password" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" placeholder="Email" id="email" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Network's id</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="network" placeholder="n101.epom.com" id="network" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Site Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="site_name" placeholder="Name Site" id="site_name" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Site URL</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="site_url" placeholder="Site URL" id="url" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-8 control-label">Default Zone within the Site</label>
                                <div class="col-xs-6 col-md-4">
                                    <input id="defaultzone" class="checkbox" type="checkbox">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">ID categories</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="category"  placeholder="IDs of categories" id="categoryid" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-8 control-label">Link Banners and Placements</label>
                                <div class="col-xs-6 col-md-4">
                                    <input id="placementLink" class="checkbox" type="checkbox">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" id="request" value="Send API Request">
                                <button type="button" class="btn btn-info" id="resetBtn">Reset form</button>
                            </div>
                        </form>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="panel panel-default" id="hideblock">
                        <div class="panel-heading">
                            API Response <span class="label label-success">STATUS </span><span id="status"></span> <span class="label label-info">TIME </span><span id="time"></span>
                        </div>
                        <div class="panel-body" id="response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("#demo-form").bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields : {
           email: {
                validators : {
                    emailAddress : {
                        message: 'The input is not a valid email address',
                        validators : {
                            notEmpty : {
                                message: 'The email is required'
                            }  
                        }
                    }
                }
            },
            password : {
                validators: {
                    notEmpty: {
                        message: 'The password cannot be empty'
                    }
                }
            },
            username : {
                validators: {
                    notEmpty: {
                        message: 'The username cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 characters long'
                    }
                }
            },
            network : {
                validators: {
                    notEmpty: {
                        message: 'The field Network cannot be empty'
                    }
                }
            },
            site_name : {
                validators: {
                    notEmpty: {
                        message: 'The field Site Name cannot be empty'
                    }
                }
            },
            site_url : {
                validators: {
                    notEmpty: {
                        message: 'The field Site URL cannot be empty'
                    },
                    uri: {
                        message: 'The input is not a valid URL'
                    }
                }
            },
            category : {
                validators: {
                    notEmpty: {
                        message: 'The field Category ID cannot be empty'
                    },
                    numeric: {
                        message: 'Only numbers are allowed'
                    }
                }
            }
        }
    })
    .on('success.form.bv', function(e) {
        e.preventDefault();
        $("#hideblock").slideToggle();
        var username = $('#username').val();
        var password = $('#password').val();
        var network = $('#network').val();
        var site_name = $('#site_name').val();
        var site_url = $('#url').val();
        var default_zone = document.getElementById("defaultzone").checked;;
        var email_site = $('#email').val();
        var category = $('#categoryid').val();
        var placementLink = document.getElementById("placementLink").checked;

        var dataString = 'name='+ username + '&password='+ password + '&nUrl='+ network + '&site='+ site_name + '&zone='+ default_zone + '&url='+ site_url + '&email='+ email_site + '&category='+ category +'&link='+ placementLink;
     
        $.ajax({ 
            type: 'POST',   
            url: "../script/create_site.php",
            dataType: "json",
            data: dataString,
            success : function(result){
                console.log(result);
                console.log(typeof result);
                $("#response").html(result.responseRequest);
                $("#status").html(result.statusResponse);
                $("#time").html(result.timeResponse);
            }
        });
    });
}); 
    $('#resetBtn').click(function() {
        $('#demo-form').data('bootstrapValidator').resetForm(true);
    });
/* $(document).ready(function() {
    $("#request").click(function() {                
        $.ajax({    //create an ajax request to load_page.php
            type: "GET",
            url: "../script/delete.php",             
            dataType: "html",                   
            success: function(response){                    
                $(".response").html(response); 
            }
        });
    });
});*/
</script>
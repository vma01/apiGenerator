<div class="panel panel-default">
    <div class="panel-heading">
        API method - Get Sites
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
            <li><a href="#profile" data-toggle="tab">Sample PHP Code</a></li>
            <li><a href="#sampleResponse" data-toggle="tab">Sample Response</a></li>
            <li><a href="#messages" data-toggle="tab">Use method</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <h4>Get Sites</h4>
                Get the list of all Sites referring to a given user account.
                Requires ALL or SHARED level on VIEW permission for INVENTORY items. When SHARED level being used, share of any type must be present between requester and entity being requested.</br></br>

                <p><strong>URL:</strong>/rest-api/sites.do.</p>

                <p><strong>Method: </strong>GET.</p>

                <p><strong>Response format:</strong> application/json.</p>

                <strong>Error codes:</strong>
                <ul>
                    <li>401 Unauthorized-authentication error.</li>
                </ul>
                <strong>Response sample:</strong>
                200 OK.

                <strong>Parameters:</strong>
                <ul>
                    <li>hash - an MD5 digest of a concatenated username's md5 password and a given timestamp;</li>
                    <li>timestamp - UNIX timestamp used for hash generation;</li>
                    <li>username - a given username.</li>
                    <li>publishingCategories - IDs of Inventory categories to filter results (optional, comma-separated).</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="profile">
                <pre>
                    <code class="language-php">
                        define("DEBUG",false);

                        /*Initiating username and password variables, generating current timestamp and hash*/
                        $username = "";
                        $password = "";
                        $timestamp  = round(microtime(true) * 1000);
                        $hash = md5(md5($password).$timestamp);

                        $url = "https://nXX.epom.com/rest-api/sites.do";
                        //nXX is the network's id, e.g. n29.epom.com
                        //if you have whitelabel account, please use its domain instead of nXX.epom.com

                        $post_data = array(
                            "hash" => $hash,
                            "timestamp" => $timestamp,
                            "username" => $username
                        );

                        /*specifying curl options*/
                        $options = array(
                            CURLOPT_URL => $url."?".http_build_query($post_data),
                            CURLOPT_SSL_VERIFYPEER => false,
                            CURLOPT_RETURNTRANSFER => true
                        );

                        /*connection initiation*/
                        $curl = curl_init();
                        /*Applying curl options to our curl instance*/
                        curl_setopt_array($curl,$options);
                        /*Executing the call*/
                        $result = curl_exec($curl);
                        echo $result;

                        if(DEBUG){
                            echo "\n\n";
                            echo $url;
                            print_r($post_data);
                        }
                    </code>
                </pre>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Download Example Code</button>
                </div>
            </div>
             <div class="tab-pane fade" id="sampleResponse">
                <pre>
                    <code class="language-json">
                        [{"name":"Area51 (R&D) (SUPPORT, DON'T TOUCH IT)","id":220},{"name":"site test_training","id":357}]
                    </code>
                </pre>
            </div>
            <div class="tab-pane fade" id="messages">
                <div class="col-xs-6 col-sm-5">
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
                                <label class="col-xs-6 col-md-4 control-label">Network's id</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="network" placeholder="n101.epom.com" id="network" required="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-6 col-md-4 control-label">Categories</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Categories" name="category" id="category">
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
    $(document).ready(function () {
        $("#demo-form").bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password cannot be empty'
                        }
                    }
                },
                username: {
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
                network: {
                    validators: {
                        notEmpty: {
                            message: 'The field Network cannot be empty'
                        }
                    }
                },
                category: {
                    validators: {
                        numeric: {
                            message: 'Only numbers are allowed'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            e.preventDefault();
            $("#hideblock").slideToggle();
            var username = $('#username').val();
            var password = $('#password').val();
            var network = $('#network').val();
            var categories = $('#category').val();

            var dataString = 'name=' + username + '&password=' + password + '&network=' + network + '&category=' + categories;

            $.ajax({
                type: 'POST',
                url: "../script/get_sites.php",
                dataType: "json",
                data: dataString,
                success: function (result) {
                    $("#response").html(result.responseRequest);
                    $("#status").html(result.statusResponse);
                    $("#time").html(result.timeResponse);
                }
            });
        });
    });
    $('#resetBtn').click(function () {
        $('#demo-form').data('bootstrapValidator').resetForm(true);
    });
</script>
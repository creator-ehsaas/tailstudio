<?php  session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="">
    <title>Tailstudio</title>
    <link href="css/editor.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #673AB7;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #673AB7;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #673AB7;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #673AB7;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #673AB7;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #673AB7
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #673AB7
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #673AB7
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

        .col-11.col-sm-10.col-md-10.col-lg-6.col-xl-5.text-center.p-0.mt-3.mb-2 {
            margin-top: -7rem !important;
        }
    </style>
</head>

<body>

    <div id="vvveb-builder">
        <div id="top-panel">
            <div class="btn-group me-3 float-end" role="group">
                <button class="btn btn-primary btn-icon" title="Export (Ctrl + E)" id="save-btn" data-vvveb-action="saveAjax" data-vvveb-url="save.php" data-v-vvveb-shortcut="ctrl+e">

                    <span class="loading d-none">
                        <i class="la la-save"></i>
                        <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true">
                        </span>
                        <span>Saving </span> ... </span>

                    <span class="button-text">
                        <i class="la la-save"></i> <span>Save</span>
                    </span>

                </button>
                <button class="btn btn-primary btn-icon" onclick="window.location.href='./index.php';">

                    <span class="loading d-none">
                        <i class="la la-save"></i>
                        <span class="spinner-border spinner-border-sm align-middle" role="status" aria-hidden="true">
                        </span>
                        <span>Refresh </span> ... </span>

                    <span class="button-text">
                        <span>Refresh</span>
                    </span>

                </button>
            </div>




        </div>


        <div id="left-panel" style="margin-left: 1rem;padding-right: 1rem;padding-top:1rem;">
            <!-- create a form to get user input of select form id (contact, login, registration, newsletter) -->
            <form action="backend.php" method="GET">
                <label for="folder-name" class=" form-label">Enter Folder Name:</label>
                <input type="text" class="form-control" id="folder-name" name="folder-name" placeholder="Enter folder name here...">
                <br>
                <label for="file-name" class=" form-label">Enter File Name:</label>
                <input type="text" class="form-control" id="file-name" name="file-name" placeholder="Enter file name here...">
                <br>
                <label for="form-select" class=" form-label">Select form id:</label>
                <select name="form-select" id="form-select" class="form-select">
                    <option value="contact">Contact</option>
                    <option value="login">Login</option>
                    <option value="registration">Registration</option>
                    <option value="newsletter">Newsletter</option>
                </select>
                <br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-icon">
                <input type="submit" name="drop" value="DROP" class="btn btn-primary btn-icon">

                <br>
            </form>
        </div>

        <div id="canvas" style="overflow: scroll;margin-left: 25rem;width: 75%;padding-top: 3rem;height: 100%;">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";

            // Create connection
            $conn = new mysqli($servername, $username, $password);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if(isset($_GET['drop'])){
                $sql = "DROP DATABASE contact_details";
                if ($conn->query($sql) === TRUE) {
                    echo "";
                } else {
                    echo "";
                }
            }
            // declare tuple to store key value pair of input field and its id
            $input_id = array();
            include_once 'parser.php';
            if (isset($_GET['submit'])) {
                $form = $_GET['form-select'];
                $_SESSION["folder"] = $_GET['folder-name'];
                $_SESSION["file"] = $_GET['file-name'];
                if ($form == "contact" && $_SESSION["folder"] != "" && $_SESSION["file"] != "") {
                    // get contact form with id from $_SESSION["file"] and get all input fields
                    if (strpos($_SESSION["file"], '.html') !== false){
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"]);
                    }
                    else{
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"] . '.html');
                    }

                    // find form with $form id
                    foreach ($html->find('form[id=contact]') as $element) {
                        foreach ($element->find('input') as $input) {
                            echo $input . '<br>';
                            if ($input->id == "") {
                                echo "<script>alert('Please enter id for all input fields');</script>";
                                echo "<script>window.location.href='./index.php';</script>";
                                break;
                            }else{
                                // store input field id in list
                                array_push($input_id, $input->id);
                            }
                        }
                    }



                         //Create database
                         $sql = "CREATE DATABASE contact_details";
                         if ($conn->query($sql) === TRUE) {
                           echo "Database created successfully";
                         } else {
                           echo "Error creating database: " . $conn->error;
                         }

                        
                        // sql to create table
                        $sql = "
                            CREATE TABLE contact_details.contact (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            name VARCHAR(30) NOT NULL,
                            email VARCHAR(50),
                            phone VARCHAR(50),
                            message VARCHAR(50),
                            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                            )";
                        if ($conn->query($sql) === TRUE) {
                          echo "\n\nTable contact created successfully";
                        } else {
                          echo "Error creating table: " . $conn->error;
                        }
                        
                        $conn->close();
                    
                } else if ($form == "login" && $_SESSION["folder"] != "" && $_SESSION["file"] != "") {
                    // get contact form with id from $_SESSION["file"] and get all input fields
                    if (strpos($_SESSION["file"], '.html') !== false)
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"]);
                    else
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"] . '.html');

                    // find form with $form id
                    // find form with $form id
                    foreach ($html->find('form[id=login]') as $element) {
                        foreach ($element->find('input') as $input) {
                            // if input doesn't have id ask user to enter id
                            echo $input . '<br>';
                            if ($input->id == "") {
                                echo "<script>alert('Please enter id for all input fields');</script>";
                                echo "<script>window.location.href='./index.php';</script>";
                                break;
                            }else{
                                // store input field id in list
                                array_push($input_id, $input->id);
                            }
                        }
                    }
                } else if ($form == "registration" && $_SESSION["folder"] != "" && $_SESSION["file"] != "") {
                    // get contact form with id from $_SESSION["file"] and get all input fields
                    if (strpos($_SESSION["file"], '.html') !== false)
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"]);
                    else
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"] . '.html');

                    // find form with $form id
                    // find form with $form id
                    foreach ($html->find('form[id=registration]') as $element) {
                        foreach ($element->find('input') as $input) {
                            // if input doesn't have id ask user to enter id
                            echo $input . '<br>';
                            if ($input->id == "") {
                                echo "<script>alert('Please enter id for all input fields');</script>";
                                echo "<script>window.location.href='./index.php';</script>";
                                break;
                            }else{
                                // store input field id in list
                                array_push($input_id, $input->id);
                            }
                        }
                    }
                } else if ($form == "newsletter" && $_SESSION["folder"] != "" && $_SESSION["file"] != "") {
                    // get contact form with id from $_SESSION["file"] and get all input fields
                    if (strpos($_SESSION["file"], '.html') !== false)
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"]);
                    else
                        $html = file_get_html($_SESSION["folder"] . '-template/' . $_SESSION["folder"] . '/' . $_SESSION["file"] . '.html');

                    // find form with $form id
                    // find form with $form id
                    foreach ($html->find('form[id=newsletter]') as $element) {
                        foreach ($element->find('input') as $input) {
                            // if input doesn't have id ask user to enter id
                            echo $input . '<br>';
                            if ($input->id == "") {
                                echo "<script>alert('Please enter id for all input fields');</script>";
                                echo "<script>window.location.href='./index.php';</script>";
                                break;
                            }else{
                                // store input field id in list
                                array_push($input_id, $input->id);
                            }
                        }
                    }
                } else {
                    echo "<script>console.log('form: not set');</script>";
                }
            } else {
                echo "<script>console.log('form: not set');</script>";
            }
            ?>
            <!--  -->


        </div>


        <!-- templates -->

        <script id="vvveb-input-textinput" type="text/html">
            <div>
                <input name="{%=key%}" type="text" class="form-control" />
            </div>
        </script>

        <script id="vvveb-input-textareainput" type="text/html">
            <div>
                <textarea name="{%=key%}" {% if (typeof rows !== 'undefined') { %} rows="{%=rows%}" {% } else { %} rows="3" {% } %} class="form-control" />
            </div>
        </script>

        <script id="vvveb-input-checkboxinput" type="text/html">
            <div class="form-check{% if (typeof className !== 'undefined') { %} {%=className%}{% } %}">
                <input name="{%=key%}" class="form-check-input" type="checkbox" id="{%=key%}_check">
                <label class="form-check-label" for="{%=key%}_check">{% if (typeof text !== 'undefined') { %} {%=text%} {% } %}</label>
            </div>
        </script>

        <script id="vvveb-input-radioinput" type="text/html">
            <div>

                {% for ( var i = 0; i < options.length; i++ ) { %}

                <label class="form-check-input  {% if (typeof inline !== 'undefined' && inline == true) { %}custom-control-inline{% } %}" title="{%=options[i].title%}">
                    <input name="{%=key%}" class="form-check-input" type="radio" value="{%=options[i].value%}" id="{%=key%}{%=i%}" {%if (options[i].checked) { %}checked="{%=options[i].checked%}" {% } %}>
                    <label class="form-check-label" for="{%=key%}{%=i%}">{%=options[i].text%}</label>
                </label>

                {% } %}

            </div>
        </script>

        <script id="vvveb-input-radiobuttoninput" type="text/html">
            <div class="btn-group {%if (extraclass) { %}{%=extraclass%}{% } %} clearfix" role="group">
                {% var namespace = 'rb-' + Math.floor(Math.random() * 100); %}

                {% for ( var i = 0; i < options.length; i++ ) { %}

                <input name="{%=key%}" class="btn-check" type="radio" value="{%=options[i].value%}" id="{%=namespace%}{%=key%}{%=i%}" {%if (options[i].checked) { %}checked="{%=options[i].checked%}" {% } %} autocomplete="off">
                <label class="btn btn-outline-primary {%if (options[i].extraclass) { %}{%=options[i].extraclass%}{% } %}" for="{%=namespace%}{%=key%}{%=i%}" title="{%=options[i].title%}">
                    {%if (options[i].icon) { %}<i class="{%=options[i].icon%}"></i>{% } %}
                    {%=options[i].text%}
                </label>

                {% } %}

            </div>
        </script>


        <script id="vvveb-input-toggle" type="text/html">
            <div class="form-check form-switch">
                <input type="checkbox" name="{%=key%}" value="{%=on%}" {%if (off) { %} data-value-off="{%=off%}" {% } %} {%if (on) { %} data-value-on="{%=on%}" {% } %} class="form-check-input" type="checkbox" role="switch" id="{%=key%}">
                <label class="form-check-label" for="{%=key%}">
                </label>
            </div>
        </script>

        <script id="vvveb-input-header" type="text/html">
            <h6 class="header">{%=header%}</h6>
        </script>


        <script id="vvveb-input-select" type="text/html">
            <div>

                <select class="form-select" name="{%=key%}">
                    {% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
                    {% if (options[i].optgroup) {  %}
                    {% if (optgroup) {  %}
                    </optgroup>
                    {% } %}
                    <optgroup label="{%=options[i].optgroup%}">
                        {% optgroup = true; } else { %}
                        <option value="{%=options[i].value%}" {% 
					for (attr in options[i]) {
							if (attr != "value" && attr != "text") {
						 %} {%=attr%}={%=options[i][attr]%} {% } 
					} %}>
                            {%=options[i].text%}</option>
                        {% } } %}
                </select>

            </div>
        </script>

        <script id="vvveb-input-icon-select" type="text/html">
            <div class="input-list-select">

                <div class="elements">
                    <div class="row">
                        {% for ( var i = 0; i < options.length; i++ ) { %}
                        <div class="col">
                            <div class="element">
                                {%=options[i].value%}
                                <label>{%=options[i].text%}</label>
                            </div>
                        </div>
                        {% } %}
                    </div>
                </div>
            </div>
        </script>

        <script id="vvveb-input-html-list-select" type="text/html">
            <div class="input-html-list-select">

                <div class="current-element">

                </div>

                <div class="popup">
                    <select class="form-select">
                        {% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
                        {% if (options[i].optgroup) {  %}
                        {% if (optgroup) {  %}
                        </optgroup>
                        {% } %}
                        <optgroup label="{%=options[i].optgroup%}">
                            {% optgroup = true; } else { %}
                            <option value="{%=options[i].value%}">{%=options[i].text%}</option>
                            {% } } %}
                    </select>

                    <div class="search">
                        <input class="form-control search" placeholder="Search elements" type="text">
                        <button class="clear-backspace">
                            <i class="la la-times"></i>
                        </button>
                    </div>

                    <div class="elements">
                        {%=elements%}
                    </div>
                </div>
            </div>
            </div>
        </script>

        <script id="vvveb-input-html-list-dropdown" type="text/html">
            <div class="input-html-list-select" {% if (typeof id !== "undefined") { %} id={%=id%} {% } %}>

                <div class="current-element">

                </div>

                <div class="popup">
                    <select class="form-select">
                        {% var optgroup = false; for ( var i = 0; i < options.length; i++ ) { %}
                        {% if (options[i].optgroup) {  %}
                        {% if (optgroup) {  %}
                        </optgroup>
                        {% } %}
                        <optgroup label="{%=options[i].optgroup%}">
                            {% optgroup = true; } else { %}
                            <option value="{%=options[i].value%}">{%=options[i].text%}</option>
                            {% } } %}
                    </select>

                    <div class="search">
                        <input class="form-control search" placeholder="Search elements" type="text">
                        <button class="clear-backspace">
                            <i class="la la-times"></i>
                        </button>
                    </div>

                    <div class="elements">
                        {%=elements%}
                    </div>
                </div>
            </div>
            </div>
        </script>

        <script id="vvveb-input-dateinput" type="text/html">
            <div>
                <input name="{%=key%}" type="date" class="form-control" {% if (typeof min_date === 'undefined') { %} min="{%=min_date%}" {% } %} {% if (typeof max_date === 'undefined') { %} max="{%=max_date%}" {% } %} />
            </div>
        </script>

        <script id="vvveb-input-listinput" type="text/html">
            <div class="row">

                {% for ( var i = 0; i < options.length; i++ ) { %}
                <div class="col-6">
                    <div class="input-group">
                        <input name="{%=key%}_{%=i%}" type="text" class="form-control" value="{%=options[i].text%}" />
                        <div class="input-group-append">
                            <button class="input-group-text btn btn-sm btn-danger">
                                <i class="la la-trash la-lg"></i>
                            </button>
                        </div>
                    </div>
                    <br />
                </div>
                {% } %}


                {% if (typeof hide_remove === 'undefined') { %}
                <div class="col-12">

                    <button class="btn btn-sm btn-outline-primary">
                        <i class="la la-trash la-lg"></i> Add new
                    </button>

                </div>
                {% } %}

            </div>
        </script>

        <script id="vvveb-input-grid" type="text/html">
            <div class="row">
                <div class="col-6">

                    <label>Extra small</label>
                    <select class="form-select" name="col">

                        <option value="">None</option>
                        {% for ( var i = 1; i <= 12; i++ ) { %}
                        <option value="{%=i%}" {% if ((typeof col !== 'undefined') && col == i) { %} selected {% } %}>{%=i%}</option>
                        {% } %}

                    </select>
                </div>


                <div class="col-6">
                    <label>Small</label>
                    <select class="form-select" name="col-sm">

                        <option value="">None</option>
                        {% for ( var i = 1; i <= 12; i++ ) { %}
                        <option value="{%=i%}" {% if ((typeof col_sm !== 'undefined') && col_sm == i) { %} selected {% } %}>{%=i%}</option>
                        {% } %}

                    </select>
                </div>

                <div class="col-6">
                    <label>Medium</label>
                    <select class="form-select" name="col-md">

                        <option value="">None</option>
                        {% for ( var i = 1; i <= 12; i++ ) { %}
                        <option value="{%=i%}" {% if ((typeof col_md !== 'undefined') && col_md == i) { %} selected {% } %}>{%=i%}</option>
                        {% } %}

                    </select>
                </div>

                <div class="col-6">
                    <label>Large</label>
                    <select class="form-select" name="col-lg">

                        <option value="">None</option>
                        {% for ( var i = 1; i <= 12; i++ ) { %}
                        <option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
                        {% } %}

                    </select>
                </div>


                <div class="col-6">
                    <label>Extra large </label>
                    <select class="form-select" name="col-xl">

                        <option value="">None</option>
                        {% for ( var i = 1; i <= 12; i++ ) { %}
                        <option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
                        {% } %}

                    </select>
                </div>

                <div class="col-6">
                    <label>Extra extra large</label>
                    <select class="form-select" name="col-xxl">

                        <option value="">None</option>
                        {% for ( var i = 1; i <= 12; i++ ) { %}
                        <option value="{%=i%}" {% if ((typeof col_lg !== 'undefined') && col_lg == i) { %} selected {% } %}>{%=i%}</option>
                        {% } %}

                    </select>
                </div>

                {% if (typeof hide_remove === 'undefined') { %}
                <div class="col-12">

                    <button class="btn btn-sm btn-outline-light text-danger">
                        <i class="la la-trash la-lg"></i> Remove
                    </button>

                </div>
                {% } %}

            </div>
        </script>

        <script id="vvveb-input-textvalue" type="text/html">
            <div class="row">
                <div class="col-6 mb-1">
                    <label>Value</label>
                    <input name="value" type="text" value="{%=value%}" class="form-control" autocomplete="off" />
                </div>

                <div class="col-6 mb-1">
                    <label>Text</label>
                    <input name="text" type="text" value="{%=text%}" class="form-control" autocomplete="off" />
                </div>

                {% if (typeof hide_remove === 'undefined') { %}
                <div class="col-12">

                    <button class="btn btn-sm btn-outline-light text-danger">
                        <i class="la la-trash la-lg"></i> Remove
                    </button>

                </div>
                {% } %}

            </div>
        </script>

        <script id="vvveb-input-rangeinput" type="text/html">
            <div class="input-range">

                <input name="{%=key%}" type="range" min="{%=min%}" max="{%=max%}" step="{%=step%}" class="form-range" data-input-value />
                <input name="{%=key%}" type="number" min="{%=min%}" max="{%=max%}" step="{%=step%}" class="form-control" data-input-value />
            </div>
        </script>

        <script id="vvveb-input-imageinput" type="text/html">
            <div>
                <input name="{%=key%}" type="text" class="form-control" />
                <input name="file" type="file" class="form-control" />
            </div>
        </script>

        <script id="vvveb-input-imageinput-gallery" type="text/html">
            <div>
                <img id="thumb-{%=key%}" class="img-thumbnail p-0" data-target-input="#input-{%=key%}" data-target-thumb="#thumb-{%=key%}" style="cursor:pointer" src="" width="225" height="225">
                <input name="{%=key%}" type="text" class="form-control mt-1" id="input-{%=key%}" />
                <button name="button" class="btn btn-primary btn-sm btn-icon mt-2" data-target-input="#input-{%=key%}" data-target-thumb="#thumb-{%=key%}"><i class="la la-image la-lg"></i>&ensp;Set image</button>
            </div>
        </script>

        <script id="vvveb-input-colorinput" type="text/html">
            <div>
                <input name="{%=key%}" type="color" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %} pattern="#[a-f0-9]{6}" class="form-control form-control-color" />
            </div>
        </script>

        <script id="vvveb-input-bootstrap-color-picker-input" type="text/html">
            <div>
                <div id="cp2" class="input-group" title="Using input value">
                    <input name="{%=key%}" type="text" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %} class="form-control" />
                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                    </span>
                </div>
            </div>
        </script>

        <script id="vvveb-input-numberinput" type="text/html">
            <div>
                <input name="{%=key%}" type="number" value="{%=value%}" {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}" {% } %} {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}" {% } %} {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}" {% } %} class="form-control" />
            </div>
        </script>

        <script id="vvveb-input-button" type="text/html">
            <div>
                <button class="btn btn-sm btn-primary">
                    <i class="la  {% if (typeof icon !== 'undefined') { %} {%=icon%} {% } else { %} la-plus {% } %} la-lg"></i> {%=text%}
                </button>
            </div>
        </script>

        <script id="vvveb-input-cssunitinput" type="text/html">
            <div class="input-group css-unit" id="cssunit-{%=key%}">
                <input name="number" type="number" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {% } %} {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}" {% } %} {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}" {% } %} {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}" {% } %} class="form-control" />
                <div class="input-group-append">
                    <select class="form-select small-arrow" name="unit">
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                        <option value="px">px</option>
                        <option value="%">%</option>
                        <option value="vw">vw</option>
                        <option value="vh">vh</option>
                        <option value="ex">ex</option>
                        <option value="ch">ch</option>
                        <option value="cm">cm</option>
                        <option value="mm">mm</option>
                        <option value="in">in</option>
                        <option value="pt">pt</option>
                        <option value="auto">auto</option>
                    </select>
                </div>
            </div>
        </script>


        <script id="vvveb-filemanager-folder" type="text/html">
            <li data-folder="{%=folder%}" class="folder">
                <label for="{%=folder%}"><span>{%=folderTitle%}</span></label> <input type="checkbox" id="{%=folder%}" />
                <ol></ol>
            </li>
        </script>

        <script id="vvveb-filemanager-page" type="text/html">
            <li data-url="{%=url%}" data-file="{%=file%}" data-page="{%=name%}" class="file{% if (typeof className !== 'undefined') { %} {%=className%}{% } %}">
                <label for="{%=name%}" {% if (typeof description !== 'undefined') { %} title="{%=description%}" {% } %}>
                    <span>{%=title%}</span>
                    <div class="file-actions">
                        <button href="#" class="delete btn btn-outline-danger" title="Delete"><i class="la la-trash"></i></button>
                        <button href="#" class="rename btn btn-outline-primary" title="Rename"><i class="la la-pen"></i></button>
                        <button href="#" class="duplicate btn btn-outline-primary" title="Clone"><i class="la la-copy"></i></button>
                    </div>
                </label> <input type="checkbox" id="{%=name%}" />
                <!-- <ol></ol> -->
            </li>
        </script>

        <script id="vvveb-filemanager-component" type="text/html">
            <li data-url="{%=url%}" data-component="{%=name%}" class="component">
                <a href="{%=url%}"><span>{%=title%}</span></a>
            </li>
        </script>

        <script id="vvveb-breadcrumb-navigaton-item" type="text/html">
            <li class="breadcrumb-item"><a href="#">{%=name%}</a></li>
        </script>

        <script id="vvveb-input-sectioninput" type="text/html">
            <label class="header" data-header="{%=key%}" for="header_{%=key%}"><span>{%=header%}</span>
                <div class="header-arrow"></div>
            </label>
            <input class="header_check" type="checkbox" {% if (typeof expanded !== 'undefined' && expanded == false) { %} {% } else { %}checked="true" {% } %} id="header_{%=key%}">
            <div class="section row" data-section="{%=key%}"></div>
        </script>


        <script id="vvveb-property" type="text/html">
            <div class="mb-3 {% if (typeof col !== 'undefined' && col != false) { %} col-sm-{%=col%} {% } else { %}row{% } %} {% if (typeof inline !== 'undefined' && inline == true) { %}inline{% } %} " data-key="{%=key%}" {% if (typeof group !== 'undefined' && group != null) { %}data-group="{%=group%}" {% } %}>

                {% if (typeof name !== 'undefined' && name != false) { %}<label class="{% if (typeof inline === 'undefined' ) { %}col-sm-4{% } %} form-label" for="input-model">{%=name%}</label>{% } %}

                <div class="{% if (typeof inline === 'undefined') { %}col-sm-{% if (typeof name !== 'undefined' && name != false) { %}8{% } else { %}12{% } } %} input"></div>

            </div>
        </script>

        <script id="vvveb-input-autocompletelist" type="text/html">
            <div>
                <input name="{%=key%}" type="text" class="form-control" />

                <div class="form-control autocomplete-list" style="min-height: 150px; overflow: auto;">
                </div>
            </div>
        </script>

        <script id="vvveb-input-tagsinput" type="text/html">
            <div>
                <div class="form-control tags-input" style="height:auto;">


                    <input name="{%=key%}" type="text" class="form-control" style="border:none;min-width:60px;" />
                </div>
            </div>
        </script>

        <script id="vvveb-input-noticeinput" type="text/html">
            <div>
                <div class="alert alert-dismissible fade show alert-{%=type%}" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <h6><b>{%=title%}</b></h6>

                    {%=text%}
                </div>
            </div>
        </script>

        <script id="vvveb-section" type="text/html">
            {% var suffix = Math.floor(Math.random() * 10000); %}

            <div class="section-item" draggable="true">
                <div class="controls">
                    <div class="handle"></div>
                    <div class="info">
                        <div class="name">{%=name%}
                            <div class="type">{%=type%}</div>
                        </div>
                    </div>
                    <div class="buttons">
                        <a class="delete-btn" href="" title="Remove section"><i class="la la-trash text-danger"></i></a>
                        <!-- 
				<a class="up-btn" href="" title="Move element up"><i class="la la-arrow-up"></i></a>
				<a class="down-btn" href="" title="Move element down"><i class="la la-arrow-down"></i></a>
				-->
                        <a class="properties-btn" href="" title="Properties"><i class="la la-cog"></i></a>
                    </div>
                </div>


                <input class="header_check" type="checkbox" id="section-components-{%=suffix%}">

                <label for="section-components-{%=suffix%}">
                    <div class="header-arrow"></div>
                </label>
            </div>
        </script>


        <!--// end templates -->


        <!-- export html modal-->
        <div class="modal fade" id="textarea-modal" tabindex="-1" role="dialog" aria-labelledby="textarea-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title text-primary"><i class="la la-lg la-save"></i> Export html</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                        </button>
                    </div>
                    <div class="modal-body">

                        <textarea rows="25" cols="150" class="form-control"></textarea>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- message modal-->
        <div class="modal fade" id="message-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title text-primary"><i class="la la-lg la-comment"></i> Tailstudio</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- span aria-hidden="true"><small><i class="la la-times"></i></small></span -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Page was successfully saved!.</p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-primary">Ok</button> -->
                        <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal"><i class="la la-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- new page modal-->
        <div class="modal fade" id="new-page-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form action="index.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title text-primary fw-normal"><i class="la la-lg la-file"></i> New Project</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" span aria-hidden="true"><small><i class="la la-times"></i></small></span>
                            </button>
                        </div>

                        <div class="modal-body text">
                            <div class="mb-3 row" data-key="type">
                                <label class="col-sm-3 col-form-label">
                                    Template
                                    <abbr title="The contents of this template will be used as a start for the new template">
                                        <i class="la la-lg la-question-circle text-primary"></i>
                                    </abbr>

                                </label>
                                <div class="col-sm-9 input">
                                    <div>
                                        <select class="form-select" name="startTemplateUrl">
                                            <option value="new-page-blank-template.html">Blank Template</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Project Title *</label>
                                <div class="col-sm-9 input">
                                    <div>
                                        <input name="project_title" id="project_title" type="text" class="form-control" placeholder="Project Title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row" data-key="href">
                                <label class="col-sm-3 col-form-label">Save to folder *</label>
                                <div class="col-sm-9 input">
                                    <div>
                                        <input name="project_folder" type="text" class="form-control" placeholder="Project Folder Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary btn-lg" type="reset" data-bs-dismiss="modal"><i class="la la-times"></i> Cancel</button>
                            <button class="btn btn-primary btn-lg" type="submit"><i class="la la-check"></i> Create Project</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

        <!-- save toast -->
        <div class="toast-container position-fixed end-0 bottom-0 me-3 mb-3" id="top-toast">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header text-white">
                    <strong class="me-auto">Page save</strong>
                    <!-- <small class="badge bg-success">status</small> -->
                    <button type="button" class="btn-close text-white px-2" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body ">
                    <div class="flex-grow-1">
                        <div class="message">Elements saved!
                            <div>Template backup was saved!</div>
                            <div>Template was saved!</div>
                        </div>
                        <div><a class="btn btn-success  btn-icon btn-sm w-100 mt-2" href="">View page</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jquery-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.hotkeys.js"></script>

        <!-- bootstrap-->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {

                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;
                var current = 1;
                var steps = $("fieldset").length;

                setProgressBar(current);

                $(".next").click(function() {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                });

                $(".previous").click(function() {

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                    //show the previous fieldset
                    previous_fs.show();

                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function(now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(--current);
                });

                function setProgressBar(curStep) {
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".progress-bar")
                        .css("width", percent + "%")
                }

                $(".submit").click(function() {
                    return false;
                })

            });
        </script>

</body>

</html>
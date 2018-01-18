<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Stackoverflow</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/styles.css") }}">
</head>
<body>
<example-component></example-component>
@include('partials.nav')
@include('partials.header-upper')
<main class="container">
    <div class="row-fluid">
        <div class="col-md-5">
            <h4>Top Questions</h4>
        </div>
        <div class="col-md-5">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#">interesting</a></li>
                <li role="presentation"><a href="#">featured</a></li>
                <li role="presentation"><a href="#">hot</a></li>
                <li role="presentation"><a href="#">week</a></li>
                <li role="presentation"><a href="#">month</a></li>
            </ul>
        </div> <!-- End tabs -->
        <div class="col-md-3">
        </div>
    </div> <!-- End Top Questions row -->
    <div class="row"> <!-- begin top questions table -->
        <div class="col-md-10">
            <div class="panel-body">
                <table class="table">
                    <tr class="warning">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">0</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">1</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">13</p>
                            </div>
                            <div class="col-md-9">
                                <a href="http://stackoverflow.com/questions/33545349/clipping-the-required-portion-of-the-image-using-css"
                                   target="blank"><h4>Clipping the required portion of the image using CSS</h4></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="warning borderless">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">votes</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">answer</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">views</p>
                            </div>
                            <div class="col-md-2">
                                <p>tags</p>
                            </div>
                            <div class="col-md-7">
                                <p class="asked">asked 29 secs ago Darryl Mendonez</p>
                            </div>
                        </td>
                    </tr> <!-- end row 1 -->
                    <tr class="warning">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">0</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">2</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">13</p>
                            </div>
                            <div class="col-md-9">
                                <a href="http://stackoverflow.com/questions/33602203/reorder-dynamic-text-field-id"
                                   target="blank"><h4>Reorder dynamic text field ID</h4></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="warning borderless">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">votes</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">answer</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">views</p>
                            </div>
                            <div class="col-md-2">
                                <p>tags</p>
                            </div>
                            <div class="col-md-7">
                                <p class="asked">asked 29 secs ago Ethan</p>
                            </div>
                        </td>
                    </tr> <!-- end row 2 -->
                    <tr class="warning">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">-1</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">1</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">43</p>
                            </div>
                            <div class="col-md-9">
                                <a href="http://stackoverflow.com/questions/33482730/if-i-am-a-collaborator-on-someones-repository-on-github-how-do-i-get-their-rep"
                                   target="blank"><h4>If I am a collaborator on someone's repository on Github, how do I
                                        get their repo onto my terminal?</h4></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="warning borderless">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">votes</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">answer</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">views</p>
                            </div>
                            <div class="col-md-2">
                                <p>tags</p>
                            </div>
                            <div class="col-md-7">
                                <p class="asked">asked 6 days ago Darryl Mendonez</p>
                            </div>
                        </td>
                    </tr> <!-- end row 3 -->
                    <tr>
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">0</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">0</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">7</p>
                            </div>
                            <div class="col-md-9">
                                <a href="http://stackoverflow.com/questions/33602123/django-cant-pass-dictdata-into-javascript-variable"
                                   target="blank"><h4>django can't pass dictdata into javascript variable</h4></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="borderless">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">votes</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">answer</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">views</p>
                            </div>
                            <div class="col-md-2">
                                <p>tags</p>
                            </div>
                            <div class="col-md-7">
                                <p class="asked">asked 1 min ago Jan zHepHirotHz</p>
                            </div>
                        </td>
                    </tr> <!-- end row 4 -->
                    <tr>
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">3</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">1</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">60</p>
                            </div>
                            <div class="col-md-9">
                                <a href="http://stackoverflow.com/questions/33590177/multiple-image-file-upload-with-captions"
                                   target="blank"><h4>Multiple Image File Upload with Captions</h4></a>
                            </div>
                        </td>
                    </tr>
                    <tr class="borderless">
                        <td>
                            <div class="col-md-1">
                                <p class="top-questions-stats">votes</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">answer</p>
                            </div>
                            <div class="col-md-1">
                                <p class="top-questions-stats">views</p>
                            </div>
                            <div class="col-md-2">
                                <p>tags</p>
                            </div>
                            <div class="col-md-7">
                                <p class="asked">modified 25 min ago Nevi</p>
                            </div>
                        </td>
                    </tr> <!-- end row 5 -->
                </table>
            </div> <!-- End panel -->
        </div> <!-- End 9 columns for Top Questions table -->
        @include('partials.right-sidebar')
    </div>
</main> <!-- End main area -->
<!-- JQuery Script (Required for JavaScript Below)-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- JavaScript-->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

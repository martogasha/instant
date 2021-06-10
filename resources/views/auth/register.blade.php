<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:28 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#3a57c4">
    <title>Doccure - HTML Mobile Template</title>

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/plugins/swiper/css/swiper.min.css">

    <!-- Circle CSS -->
    <link rel="stylesheet" href="assets/css/circle.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<div class="main-wrapper">

    <div class="page-content change-password-col register-col">
        <div class="list no-hairlines custom-form">
            <div class="back-btn"><a href="index.html" class="back link">
                    <img src="assets/img/left-arrow-big-black.svg" alt=""></a>
            </div>
            <div class="register-icon">
                <img src="assets/img/register-top-img.png" alt="">
            </div>
            <div class="logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="doccure"></a>
            </div>
            <div class="register-inner-col" id="user_register">
                <div class="top-title">
                    <div>
                        <h3>User Register</h3>
                    </div>
                    <div>
                        <a href="#" id="carrier_button">Are you a carrier?</a>
                    </div>
                </div>
                <ul class="change-list">
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="First Name">
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Last Name">
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Id Number">
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="tel" placeholder="Mobile Number">
                                <div class="item-input-icon"><img src="assets/img/smartphone.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" id="pass" placeholder="Create Password">
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" id="confirmPassword" placeholder="Confirm Password">
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <div id="CheckPasswordMatch">
                    </div>
                    <li class="item-content item-input">
                        <div class="item-input-wrap submit-btn-col">
                            <button type="button" class="btn btn-submit">Register</button>
                        </div>
                    </li>
                </ul>
                <span class="login-back">Already have an account ? <a href="{{url('login')}}">Login Now!</a></span>

            </div>
            <div class="register-inner-col" id="carrier_register">
                <div class="top-title">
                    <div>
                        <h3>Carrier Register</h3>
                    </div>
                    <div>
                        <a href="#" id="user_button">Register as User</a>
                    </div>
                </div>
                <ul class="change-list">
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="First Name">
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="text" placeholder="Last Name">
                                <div class="item-input-icon"><img src="assets/img/user-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <h5 class="mb-3"><b>Upload Carrier's Photo</b></h5>
                        <div class="row">
                            <form action="multiupload.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Multiple Image"/>
                                </div>
                            </form>
                        </div>
                        <div class="row" id="image_preview"></div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="tel" placeholder="Mobile Number">
                                <div class="item-input-icon"><img src="assets/img/smartphone.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <h5 class="mb-3"><b>Upload Carrier's Photo</b></h5>
                        <div class="row">
                            <form action="multiupload.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Multiple Image"/>
                                </div>
                            </form>
                        </div>
                        <div class="row" id="image_preview"></div>
                    </li>
                    <li class="item-content item-input">

                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" id="pass" placeholder="Create Password">
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-col">
                            <div class="item-input-wrap">
                                <input type="password" id="confirmPassword" placeholder="Confirm Password">
                                <div class="item-input-icon"><img src="assets/img/lock-icon.svg" alt=""></div>
                            </div>
                        </div>
                    </li>
                    <div id="CheckPasswordMatch">
                    </div>
                    <li class="item-content item-input">
                        <div class="item-input-wrap submit-btn-col">
                            <button type="button" class="btn btn-submit">Register</button>
                        </div>
                    </li>
                </ul>
                <span class="login-back">Already have an account ? <a href="{{url('login')}}">Login Now!</a></span>

            </div>
        </div>
    </div>

</div>
<style>
    #formdiv {
        text-align: center;
    }
    #file {
        color: green;
        padding: 5px;
        border: 1px dashed #123456;
        background-color: #f9ffe5;
    }
    #img {
        width: 17px;
        border: none;
        height: 17px;
        margin-left: -20px;
        margin-bottom: 191px;
    }
    .upload {
        width: 100%;
        height: 30px;
    }
    .previewBox {
        text-align: center;
        position: relative;
        width: 150px;
        height: 150px;
        margin-right: 10px;
        margin-bottom: 20px;
        float: left;
    }
    .previewBox img {
        height: 150px;
        width: 150px;
        padding: 5px;
        border: 1px solid rgb(232, 222, 189);
    }
    .delete {
        color: red;
        font-weight: bold;
        position: absolute;
        top: 0;
        cursor: pointer;
        width: 20px;
        height:  20px;
        border-radius: 50%;
        background: #ccc;
    }
</style>
<!-- /Main wrapper -->

<script src="assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Swiper JS -->
<script src="assets/plugins/swiper/js/swiper.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>

</body>
<script>
    $(document).ready(function () {
       $('#carrier_register').hide();
    });
    $('#carrier_button').click(function () {
        $('#user_register').hide();
        $('#carrier_register').show();
    });
    $('#user_button').click(function () {
        $('#carrier_register').hide();
        $('#user_register').show();
    });
    $('#confirmPassword').keyup(function () {
        var password = $('#pass').val();
        var confirmPassword = $('#confirmPassword').val();
        if (password != confirmPassword)
            $('#CheckPasswordMatch').html('Password Dont Match')
        else
            $('#CheckPasswordMatch').html('Password Match')

    });
    $(function(){
        $("#fileupload").change(function(event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#upload-img").attr("src",x);
            console.log(event);
        });
    });
        function preview_images()
        {
            var total_file=document.getElementById("images").files.length;
            for(var i=0;i<total_file;i++)
        {
            $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
        }
        }
    $('#add_more').click(function() {
        "use strict";
        $(this).before($("<div/>", {
            id: 'filediv'
        }).fadeIn('slow').append(
            $("<input/>", {
                name: 'file[]',
                type: 'file',
                id: 'file',
                multiple: 'multiple',
                accept: 'image/*'
            })
        ));
    });

    $('#upload').click(function(e) {
        "use strict";
        e.preventDefault();

        if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
            alert("No files are selected.");
            return false;
        }

        // Now, upload the files below...
        // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
    });

    deletePreview = function (ele, i) {
        "use strict";
        try {
            $(ele).parent().remove();
            window.filesToUpload.splice(i, 1);
        } catch (e) {
            console.log(e.message);
        }
    }

    $("#file").on('change', function() {
        "use strict";

        // create an empty array for the files to reside.
        window.filesToUpload = [];

        if (this.files.length >= 1) {
            $("[id^=previewImg]").remove();
            $.each(this.files, function(i, img) {
                var reader = new FileReader(),
                    newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                    deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                    preview = newElement.find("img");

                reader.onloadend = function() {
                    preview.attr("src", reader.result);
                    preview.attr("alt", img.name);
                };

                try {
                    window.filesToUpload.push(document.getElementById("file").files[i]);
                } catch (e) {
                    console.log(e.message);
                }

                if (img) {
                    reader.readAsDataURL(img);
                } else {
                    preview.src = "";
                }

                newElement.appendTo("#filediv");
            });
        }
    });
</script>

<!-- Mirrored from doccureframework7.dreamguystech.com/bootstrap4/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 20:34:30 GMT -->
</html>

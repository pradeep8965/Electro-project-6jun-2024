<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <!-- Title -->
        <title>{{$appData['app_description']}}</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://cdn.usebootstrap.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Favicon -->
        <!-- <link rel="icon" href="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/logo_lite-cbb357.png" type="image/png"> -->
        <link rel="shortcut icon" href="{{$appData['app_shortcut_icon_url']}}" />
        
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
            rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="/assets/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/assets/css/font-electro.css">

        <link rel="stylesheet" href="/assets/vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="/assets/vendor/hs-megamenu/src/hs.megamenu.css">
        <link rel="stylesheet" href="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

        <link rel="stylesheet" href="/assets/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="/assets/css/zoom/jquery.fancybox-thumbs.css" />
        <link rel="stylesheet" href="/assets/css/zoom/zoom.css" />

        <link rel="stylesheet" href="/assets/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="/assets/css/theme.css">
        <style>
            /* CSS Code */
            .a_tbdr{
                border:1px dashed red;
            }
            .a_chat{
                font-size:1.5em;
            }
            .logout-button {
                display: inline-block;
                padding: 10px ;
                font-size: 12px;
                color: #000;
                background-color: #FED700;
                border: none;
                border-radius: 25px;
                text-decoration: none;
                text-align: center;
                cursor: pointer;
            }
            /* Chat Styling */
            .chatCard {
                border: none;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .chat-body {
                background-image: url('https://i.pinimg.com/736x/8c/98/99/8c98994518b575bfd8c949e91d20548b.jpg'); /* Add your image URL */
                background-size: contain; /* Adjust based on image type, can be cover or contain */
                background-position: center;
                background-repeat: repeat;
                padding: 20px;
                overflow-y: auto; /* Enable vertical scrolling */
                height: 0; /* Reset height to allow flex-grow */
                flex-grow: 1; /* Make chat-body fill available space */
            }

            .chat-bubble {
                max-width: 75%;
                padding: 10px 15px;
                border-radius: 20px;
                word-wrap: break-word;
                position: relative;
            }

            .chat-bubble.left {
                background-color: #e9ecef;
                border-top-left-radius: 0;
            }

            .chat-bubble.right {
                background-color: #0d6efd;
                color: #fff;
                border-top-right-radius: 0;
            }

            /* Avatars */
            img.rounded-circle {
                width: 40px;
                height: 40px;
            }

            /* Input Styling */
            .chatInput {
                border-radius: 20px;
                padding-left: 20px;
            }

            /* Chat Form */
            #chatForm {
                position: sticky;
                bottom: 0;
                background-color: #fff;
            }
            /* Adjust button colors to match the theme color #FED700 */
            .btn-attractive-yellow {
                background: linear-gradient(135deg, #FED700, #FFEB3B); /* Use theme color and a lighter shade */
                color: black; /* Dark text for better contrast */
                font-weight: bold;
                font-size: 1.2rem;
                padding: 10px 20px;
                border: none;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
                transition: all 0.3s ease;
            }

            .btn-attractive-yellow:hover {
                background: linear-gradient(135deg, #FFEB3B, #FED700); /* Reversed gradient on hover */
                box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
                transform: translateY(-2px);
            }

            .btn-attractive-yellow i {
                margin-right: 8px;
                font-size: 1.3rem;
            }

            .input-group .form-control {
                padding: 12px 20px;
                border: 2px solid #FED700; /* Theme border color */
                box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            }
            /* Input field design matching the theme color #FED700 */
            .form-control.chatInput {
                padding: 12px 20px; /* Increase padding for better visual appeal */
                border: 2px solid #FED700; /* Border color matching the theme */
                border-radius: 30px; /* Rounded corners */
                background-color: #FFF; /* White background for the input field */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
                font-size: 1rem; /* Adjust font size for readability */
                color: #333; /* Dark text color for contrast */
                transition: all 0.3s ease; /* Smooth transition for focus state */
            }

            .form-control.chatInput::placeholder {
                color: #999; /* Placeholder color for better contrast */
            }

            .form-control.chatInput:focus {
                border-color: #FFEB3B; /* Lighter yellow for focus state */
                box-shadow: 0 0 8px rgba(254, 215, 0, 0.5); /* Glow effect on focus */
                outline: none; /* Remove default outline */
                background-color: #FFF; /* Ensure background stays white */
            }
            /* Style for chat header */
            .card-header {
                border-bottom: 1px solid #eaeaea; /* Add a subtle border for definition */
                background-color: #ffffff; /* Ensure background is white */
                padding: 15px 20px; /* Add padding for better spacing */
            }

            /* Style for avatar image */
            .avatar {
                width: 50px; /* Fixed width for the avatar */
                height: 50px; /* Fixed height for the avatar */
                object-fit: cover; /* Ensure image covers the avatar area without distortion */
            }
            /* Style for the chat title */
            .chat-title {
                font-size: 1.25rem; /* Increase font size for better visibility */
                color: #333; /* Use theme color for text */
                font-weight: bold; /* Ensure the text is bold */
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Add subtle shadow for depth */
                letter-spacing: 0.5px; /* Slightly increase letter spacing */
            }
            /* Optional: Add hover effect */
            .card-header:hover {
                background-color: #f8f9fa; /* Light background on hover */
                cursor: pointer; /* Change cursor to pointer on hover */
            }
            /* Style for timestamps */
            .timestamp {
                display: block; /* Make timestamp appear on its own line */
                font-size: 0.75rem; /* Slightly smaller font size */
                color: #999; /* Lighter color for timestamp */
                text-align: right; /* Align timestamp to the right for bubbles */
                margin-top: 5px; /* Space between message and timestamp */
            }
            /* Chat bubble for received messages */
            .left {
                background-color: #f1f1f1;
                color: #333;
            }

            /* Chat bubble for sent messages */
            .right {
                background-color: #007bff; /* Primary color or your theme color */
                color: white;
                text-align: right;
            }
        </style>
    </head>
    <body>

        <!-- ========== HEADER ========== -->
        @include('layouts.header')
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        @yield('main')
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        @include('layouts.footer')
        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->

        @include('layouts.aside_right')

        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
            data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->

        <!-- JS Global Compulsory -->
        <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="/assets/js/zoom/jquery-ui.min.js"></script>
        <script src="/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
        <script src="/assets/js/zoom/jquery.elevatezoom.js"></script>
        <script src="/assets/js/zoom/panZoom.js"></script>
        <script src="/assets/js/zoom/ui-carousel.js"></script>
        <script src="/assets/js/zoom/zoom.js"></script>

        <script src="/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
        <script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="/assets/vendor/appear.js"></script>
        <script src="/assets/vendor/jquery.countdown.min.js"></script>
        <script src="/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="/assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        <script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        
        <script src="/assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="/assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro -->
        <script src="/assets/js/hs.core.js"></script>
        <script src="/assets/js/components/hs.countdown.js"></script>
        <script src="/assets/js/components/hs.header.js"></script>
        <script src="/assets/js/components/hs.hamburgers.js"></script>
        <script src="/assets/js/components/hs.unfold.js"></script>
        <script src="/assets/js/components/hs.focus-state.js"></script>
        <script src="/assets/js/components/hs.malihu-scrollbar.js"></script>
        <script src="/assets/js/components/hs.validation.js"></script>
        <script src="/assets/js/components/hs.fancybox.js"></script>
        <script src="/assets/js/components/hs.onscroll-animation.js"></script>
        <script src="/assets/js/components/hs.slick-carousel.js"></script>
        <script src="/assets/js/components/hs.show-animation.js"></script>
        <script src="/assets/js/components/hs.svg-injector.js"></script>
        <script src="/assets/js/components/hs.go-to.js"></script>
        <script src="/assets/js/components/hs.selectpicker.js"></script>

        <!-- JS Plugins Init. -->
        <script>
        $(window).on('load', function() {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'horizontal',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });

            // initialization of svg injector module
            $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
        });

        $(document).on('ready', function() {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function() {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function() {
                    $('#hamburgerTrigger').removeClass('is-active');
                },
                afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });

            $('#headerSidebarList [data-toggle="collapse"]').on('click', function(e) {
                e.preventDefault();

                var target = $(this).data('target');

                if ($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });
        </script>
        <script>
            //Everything which i write inside script tag will a JS code
            console.log(document.querySelector('button.a_loginsubmit'));
            document.querySelector('button.a_loginsubmit').addEventListener('click', function(e){
                e.preventDefault();// e=event //dont reload the page

                document.querySelector('i.ec.ec-close-remove').click()
                //Becase we want to implent AJAX
                let email = document.querySelector('input#signinEmail').value
                console.log('email >>> ',email)
                let password = document.querySelector('input#signinPassword').value
                console.log('password >>>',password)
                console.log('Hello')
                //Create xhr object of XMLHttpRequest classs
              //const classObject = new ClassName(); // PascalCase
                const xhro = new XMLHttpRequest();
                 //co.method()
                //object.method()
                xhro.open("POST","http://localhost:8000/customer/login",true);// True = Asyncronous Request
                //object.method()
                xhro.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                // [] JS Array
                // JS Object -> JSON String
                var data = JSON.stringify({ // {key:value,key:value} = JS object
                    'email':email,
                    'password':password,
                });
              //object.method()
                xhro.send(data);

                xhro.onreadystatechange = function(){
                    if(xhro.readyState === 4 && xhro.status === 200){
                                  //object.property
                        console.log('xhro>>>>',xhro);

                        console.log(xhro.responseText);
                                // JSON string -> JS Object
                        console.log(JSON.parse(xhro.responseText));
                        var parsedData = JSON.parse(xhro.responseText);
                        console.log(parsedData.data.firstname);
                        console.log(parsedData.data.lastname);
                        //document.querySelector('a#sidebarNavToggler').closest('li').innerHTML = = 'Welcome '+parsedData.data.firstname+''+parsedData.data.lastname+'<a href="#">Logout</a>';
                        //document.querySelector('a#sidebarNavToggler').innerHTML = 'Welcome '+parsedData.data.firstname+''+parsedData.data.lastname+'<a href="#">Logout</a>';
                    }
                }

            })
            // Javascript Code
            // AJAX JS Code
            // Javascript CLass
            // var classObject = new ClassName()/
            // let classObject = new ClassName()/
            // const classObject = new ClassName()/
            // xhro = xml http request object
            
        </script>
        <script>
            //ChatForm Coading
            console.log(document.querySelector('form#chatForm'))
            document
                .querySelector('form#chatForm')
                .addEventListener('submit',function(e){
                    e.preventDefault();
                    console.log('Hi');
                    console.log(document.querySelector('input.chatInput').value);
                    var x = document.querySelector('input.chatInput').value;
                    document.querySelector('.chatCard .card-body').innerHTML += `<span class="clearfix mb-1 mt-1"> 
                                                                                    <span class="badge text-white float-right a_chat bg-warning">${x}</span>
                                                                                </span>`;
                    
                    document.querySelector('input.chatInput').value='';
                });
            document
                .querySelector('input.chatInput')
                .addEventListener('keydown',function(e){
                    //console.log('e > ',e)
                    //console.log('Hello',e.target.value);
                });
        </script>
        <script>
            document.getElementById('chatForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form from submitting the default way

                const messageInput = document.querySelector('.chatInput');
                const messageText = messageInput.value.trim();

                if (messageText) {
                    const chatBody = document.querySelector('.chat-body');
                    const currentTime = new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}); // Format time as HH:MM AM/PM

                    // Create new message bubble
                    const messageBubble = document.createElement('div');
                    messageBubble.className = 'd-flex justify-content-end mb-3';

                    messageBubble.innerHTML = `
                        <div class="chat-bubble right p-3 bg-primary text-white rounded-3">
                            ${messageText}
                            <span class="timestamp">${currentTime}</span>
                        </div>
                        <img src="https://img.freepik.com/free-vector/illustration-businessman_53876-5856.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1725840000&semt=ais_hybrid" class="rounded-circle ms-2" alt="User Avatar">
                    `;

                    // Append the new message bubble to the chat body
                    chatBody.appendChild(messageBubble);
                    
                    // Clear the input field
                    messageInput.value = '';
                    
                    // Scroll to the bottom of the chat
                    chatBody.scrollTop = chatBody.scrollHeight;
                }
            });
        </script>

    </body>
</html>
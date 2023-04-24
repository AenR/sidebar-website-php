<?php $page = 'contact';
include_once 'main/header.php'; ?>
<head><title>Emre Eren Tan | Contact</title></head>
<?php include_once 'main/sidebar.php'; ?>


    <div class="main_content">
        <div class="header">Emre Eren Tan | Contact <div style="float: right;"><img class="pikachup" src="img/pika.png"></div></div>
        <div class="info">
            <style>
                @import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


                body,
                html {
                    height: 100%;
                    padding: 0;
                    margin: 0;
                    font-family: 'Sniglet', cursive;
                }

                #form {
                    height: 100%;
                    overflow: hidden;
                    position: relative;

                }

                form {
                    margin: 0 auto;
                    width: 500px;
                    padding-top: 40px;
                    color: black;
                    position: relative;


                }

                label,
                input,
                textarea {
                    display: block;
                }

                input,
                textarea {
                    width: 500px;
                    border: none;
                    border-radius: 20px;
                    outline: none;
                    padding: 10px;
                    font-family: 'Sniglet', cursive;
                    font-size: 1em;
                    color: #676767;
                    transition: border 0.5s;
                    -webkit-transition: border 0.5s;
                    -moz-transition: border 0.5s;
                    -o-transition: border 0.5s;
                    border: solid 3px #fc0;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;

                }

                input:focus,
                textarea:focus {
                    border: solid 3px #77bde0;
                }

                textarea {
                    height: 100px;
                    resize: none;
                    overflow: auto;
                }

                input[type="submit"] {
                    background-color: #F90;
                    color: white;
                    height: 50px;
                    cursor: pointer;
                    margin-top: 30px;
                    font-size: 1.29em;
                    font-family: 'Sniglet', cursive;
                    -webkit-transition: background-color 0.5s;
                    -moz-transition: background-color 0.5s;
                    -o-transition: background-color 0.5s;
                    transition: background-color 0.5s;
                }

                input[type="submit"]:hover {
                    background-color: #e58f0e;

                }

                label {
                    font-size: 1.5em;
                    margin-top: 20px;
                    padding-left: 20px;
                }

                .formgroup,
                .formgroup-active,
                .formgroup-error {
                    background-repeat: no-repeat;
                    background-position: right bottom;
                    background-size: 10.5%;
                    transition: background-image 0.7s;
                    -webkit-transition: background-image 0.7s;
                    -moz-transition: background-image 0.7s;
                    -o-transition: background-image 0.7s;
                    width: 566px;
                    padding-top: 2px;
                }
            </style>

            <form method="POST" action="main/form.php" id="contact-form">
                <div id="form">

                    <form id="waterform" method="post">

                        <div class="formgroup" id="name-form">
                            <label for="name">Your name</label>
                            <input type="text" id="name" name="name" />
                        </div>

                        <div class="formgroup" id="email-form">
                            <label for="email">Your e-mail</label>
                            <input type="email" id="email" name="email" />
                        </div>

                        <div class="formgroup" id="message-form">
                            <label for="message">Your message</label>
                            <textarea id="message" name="message"></textarea>
                        </div>

                        <input type="submit" value="Send your message!" />
                    </form>
                </div>

        </div>

        <?php include_once 'main/footer.php'; ?>
<?php
/*
Template Name: コンタクト
*/
?>



<?php get_header(); ?>

<!-------------------------------- お問い合わせ ----------------------------------->

<div class="main_container">
    <div class="contactform_main">
        <div id="perspective">
            <div id="container">
                <div class="face front">
                    <div id="white">
                        <h1>Contact Me!<br><span>--------</span></h1>
                    </div>
                </div>
                <div class="face back">
                    <div id="open"></div>
                    <div id="folds"></div>
                    <div class="button con">contact form</div>
                    <div id="letter">
                        <hgroup>
                            <h1 id="info">TEL:090-3669-4700</h1>
                        </hgroup>


                        <?php echo do_shortcode('[contact-form-7 id="58" title="問い合わせ"]') ?>
                        <form action="" method="post" novalidate="novalidate" id="myform">

                            <span class="Name">
                                <input type="text" name="Name" value="" size="40" class="nameinput" aria-required="true" aria-invalid="false" placeholder="Name">
                            </span>

                            <span class="Email">
                                <input type="email" name="Email" size="40" class="emailinput" aria-required="true" aria-invalid="false" placeholder="Email">
                            </span>

                            <span class="Subject">
                                <select name="Subject" class="indent" aria-required="true" aria-invalid="false">
                                    <option value="None">Subject</option>
                                    <option value="Job">Job Information</option>
                                    <option value="Booking">Booking</option>
                                </select>
                            </span>

                            <span class="Message">
                                <textarea name="Message" cols="40" rows="10" aria-invalid="false" placeholder="Message"></textarea>
                            </span>

                            <input type="submit" value="Send" class="button send">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper"></div>
</div>
</div>


<!-------------------------------- java script----------------------------------->
<script type="text/javascript">
    var C = $('#container'),
        A = $('#open'),
        L = $('#letter'),
        B = $('.button.con'),
        H = $('#letter hgroup h2'),
        F = $('.front'),
        W = $('#wrapper'),
        P = $('#perspective'),
        closed = true;
    $(function() {
        // Handler for .ready() called.
        $("textarea").text("");
    });

    F.click(function() {
        C.css({
            'transition': 'all 1s',
            'transform': 'rotateY(180deg)',
        });
        A.css({
            'transition': 'all 1s .5s',
            'transform': 'rotateX(180deg)',
            'z-index': '0'
        });
        W.css({
            'visibility': 'visible'
        });
    });

    // open/close and spin
    W.click(function() {
        var message = $.trim($('textarea').val());
        if (message.length > 0) { //they wrote something in the message
            var r = confirm("You have not sent your message, would you still like to close the form?");
            if (r == false) //they don't want to close
            {
                return;
            } else //they do want to close. clear message
            {
                document.getElementById("myform").reset();
            }
        }
        if (closed === false) {
            L.css({
                'transition': 'all .7s',
                'top': '3px',
                'height': '200px'
            });
            P.css({
                'transform': 'translateY(0px)'
            });
            F.css({
                'transform': 'rotateZ(0deg)'
            });
            H.css({
                'transition': 'all .5s',
                'transform': 'rotateZ(0deg)'
            });
            C.css({
                'transition': 'all 1.2s .95s'
            });
            A.css({
                'transition': 'all 1.2s .7s'
            });
            H.css({
                'transition': 'all .5s'
            });
            document.getElementById("info").innerHTML = "P:123.456.7890";
            closed = true;
        } else {
            C.css({
                'transition': 'all 1s .5s',
            });
            A.css({
                'transition': 'all .5s',
            });
            closed = false;
        }
        C.css({
            'transform': 'rotateY(0deg) rotate(3deg)'
        });
        A.css({
            'transform': 'rotateX(0deg)',
            'z-index': '10'
        });
        W.css({
            //'transition':'all .5s',
            'visibility': 'hidden'
        });
    });
    // Open letter
    B.click(function() {

        L.css({
            'transition': 'all .5s 1s',
            'top': '-600px',
            'height': '550px'
        });
        P.css({
            'transition': 'all 1s',
            'transform': 'translateY(450px)'
        });
        H.css({
            'transition': 'all 1s',
            'transform': 'rotateZ(180deg)'
        });
        document.getElementById("info").innerHTML = "Contact Me!";
    });
</script>

<!-------------------------------- jquery ----------------------------------->

<script>
    $(function() {
        $('.hamburger').click(function() {
            $(this).toggleClass('active');

            if ($(this).hasClass('active')) {
                $('.globalMenuSp').addClass('active');
            } else {
                $('.globalMenuSp').removeClass('active');
            }
        });
    });
</script>


<?php get_footer(); ?>
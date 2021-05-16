<?php get_header(); ?>

    <!-------------------------------- お問い合わせ ----------------------------------->

    <button type="button" class="btn" id="c-btn">Open Contact Form</button>

    <div id="contact">
        <form action="#">
            <ul>
                <h1>Contact</h1>
                <li>
                    <input type="text" name="name" id="name" placeholder="&#xf2c0; Full name">
                    <input type="email" name="email" id="email" placeholder="&#xf003; Email">
                </li>
                <li>
                    <textarea name="message" id="message" placeholder="&#xf040; Your message"></textarea>
                </li>
                <li>
                    <input type="submit" value="Send message" class="btn" id="submit">
                </li>
            </ul>
        </form>
    </div>


    <!-------------------------------- java script----------------------------------->
    <script type="text/javascript">
        (function() {
            $('html').addClass('js');

            var contactForm = {
                container: $('#contact'),
                config: {
                    effect: 'slideToggle',
                    speed: 200
                },

                init: function(config) {
                    $.extend(this.config, config);

                    $('#c-btn').on('click', this.show);
                },

                show: function() {
                    var cf = contactForm,
                        container = cf.container,
                        config = cf.config;


                    if (container.is(':hidden')) {
                        cf.close.call(container);
                        container[config.effect]
                            (config.speed);
                    }
                },

                close: function() {
                    var $this = $('#contact');

                    if ($this.find('span.close').length) return;

                    $('<span class=close>-</span>')
                        .prependTo(this)
                        .on('click', function() {
                            $this[contactForm.config.effect](contactForm.config.speed);
                        })
                }
            };

            contactForm.init({
                effect: 'fadeToggle',
                speed: 200
            });
        })();
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
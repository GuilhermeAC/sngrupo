</div>

<footer id="footer">
    <div class="top-to-page">
        <a href="#top" class="scroll"> </a>
    </div>
    <div class="container1">
        <div class="row1">
           <div class="col-12-xs col-12-sm col-5-md col-5-lg slogan">
            <div class="conteudoFooter">
                <div class="contatoFooter">
                    <a href="https://www.linkedin.com/company/grupo-sn" title="Linkedin Grupo SN" target="_blank"><img src="<?=bloginfo('template_url')?>/imagens/linkedin.png" alt="Linkedin Grupo SN"></a>
                    <a href="https://www.facebook.com/gruposnoficial" title="Facebook Grupo SN" target="_blank"><img src="<?=bloginfo('template_url')?>/imagens/facebook.png" alt="Facebook Grupo SN" widht="22px" height="22px"></a>
                    <a href="https://www.youtube.com/channel/UCAFLUbxTbQuT0xv29EE7FtQ" title="You Tube Grupo SN" target="_blank"><img src="<?=bloginfo('template_url')?>/imagens/youtube.png" alt="You Tube Grupo SN" widht="22px" height="22px"></a>
                    <p>Concreto e Brita SN: (35)3821-7111</p>
                    <p>SAC (Sugestões ou Reclamações): (35)3826-2806</p>
                    <a href="https://hw106.webservidor.net:2096/" title="WebMail Grupo SN" target="_blank"><img src="<?=bloginfo('template_url')?>/imagens/webmailsn.png"></a>
                </div>
            </div>
        </div>
        <div class="col-12-xs col-12-sm col-5-md col-5-lg slogan">
            <div class="conteudoFooter" id="seg_col">
                <p><span id="tel">(35)3821-6080</p></span>
                <p><span id="site">www.gruposn.com.br</p></span>
                <p>Copyright &copy; 2016 &bull; Grupo SN </p>
            </div>
        </div>
        <div class="<col-2-xs col-2-sm col-2-md col-2-lg">
            <div class="conteudoFooter">
                <div class="logoInout">
                    <a href="http://www.inoutonline.com.br/" target="_blank" title="Desenvolvimento: InOut Comunicação">
                        <img src="<?=bloginfo('template_url')?>/imagens/inout-logo-white.png" alt="InOut Comunicações">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/move-top.js"></script>        
    <script type='text/javascript' src='<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?php echo esc_url(get_template_directory_uri()); ?>/js/camera.js'></script> 

    <script type="text/javascript">
        jQuery(function () {
            jQuery('#camera_wrap_1').camera({
                height: '350px',
                pagination: false,
                fx: 'simpleFade',
                time: 2500,
                transPeriod: 2200,
            });
        });

        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
        });

        function sticky_footer() {
            var mFoo = $("#footer");
            if ((($(document.body).height() + mFoo.outerHeight()) < $(window).height() && mFoo.css("position") == "fixed") || ($(document.body).height() < $(window).height() && mFoo.css("position") != "fixed")) {
                mFoo.css({position: "fixed", bottom: "0px"});
            } else {
                mFoo.css({position: "static"});
            }
        }

        jQuery(document).ready(function ($) {
            sticky_footer();
            $(window).scroll(sticky_footer);
            $(window).resize(sticky_footer);
            $(window).load(sticky_footer);
        });
    </script>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('.bxslider').bxSlider({
                mode: 'fade',
                hideControlOnEnd: true,
                adaptiveHeight: true,
                pager: false,
            });
        });
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-54726515-1', 'auto');
        ga('send', 'pageview');

    </script>

</footer>
</body>
</html>
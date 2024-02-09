<footer id="footer" class="footer">
    <div class="footer__copy flex vcenter hcenter">
        Copyright(c) DUSKIN CO., LTD. All Rights Reserved.
    </div>
</footer>

<script src="//polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="<?php echo $home; ?>js/lib.min.js"></script>
<script src="<?php echo $home; ?>js/main.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script type="text/javascript">
    var verifyCallback = function(response) {
        document.getElementById("send").disabled = false;
    };
    var verifyCallback2 = function(response) {
        document.getElementById("send2").disabled = false;
    };
    $(function() {
        let arrData = [];
        $('input[type=checkbox]').on('change', function(e) {
            let requesetName = $(this).val();
            let target = $(this).closest('.topContactForm__form').next().find('#request_content');

            if ($(this).is(':checked')) {
                arrData.push($(this).val());
            } else {
                arrData.splice($.inArray($(this).val(), arrData), 1);
            }
            if (jQuery.inArray("その他", arrData) !== -1) {
                target.addClass('validate[required]');
            } else {
                target.removeClass('validate[required]');
                target.closest('.topContactForm__ans').find('.formError').remove();
            }
        });
    })
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
<script src="<?php echo $home ?>js/form.min.js"></script>
<script src="<?php echo $home; ?>js/ajaxzip3.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>
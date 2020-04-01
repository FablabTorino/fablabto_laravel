<!-- ================== BEGIN BASE JS ================== -->
<script src="/js/app.js"></script>
<script src="/js/frontend.js"></script>
@stack('end_scripts')
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        Frontend.init();

    });

</script>
<!--
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#eaf7f7",
                "text": "#5c7291"
            },
            "button": {
                "background": "#56cbdb",
                "text": "#ffffff"
            }
        },
        "theme": "classic",
        "position": "bottom-right",
        "content": {
            "message": "Questo sito web utilizza cookie tecnici e/o di terze parti. Cliccando sul pulsante di seguito, acconsenti all’utilizzo dei cookie di terze parti in conformità alla nostra informativa sulla privacy e cookie policy.",
            "dismiss": "Accetto",
            "link": "Info"
        }
    });
</script>
-->

@stack('scripts')

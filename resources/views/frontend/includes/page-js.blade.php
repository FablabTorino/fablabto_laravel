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

@stack('scripts')

<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-ghost"></i> to
{{--                    <a href="https://www.kiaquest.ir" class="font-weight-bold" target="_blank">KiaQuest</a>--}}
{{--                    KiaQuest--}}
                     <b>BIESAA</b>
{{--                    &--}}
{{--                    <a href="https://www.updivision.com" class="font-weight-bold" target="_blank">UPDIVISION</a>--}}
                    for a better web.
                </div>
            </div>
{{--            <div class="col-lg-6">--}}
{{--                <ul class="nav nav-footer justify-content-center justify-content-lg-end">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="https://www.updivision.com" class="nav-link text-muted" target="_blank">UPDIVISION</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"--}}
{{--                            target="_blank">License</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
</footer>


<script >
    var allSelects = document.getElementsByTagName("tr");
    var lastSelect = allSelects[allSelects.length-1];
    lastSelect.style.border = "unset";
    // console.log(lastSelect);

    if (window.innerWidth > 600) {
        document.getElementById('mobile1').remove();
    }

</script>
<footer class="footer">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="copyright_text">Copyright &copy <script>
                        let date = new Date();
                        document.write(date.getFullYear())
                    </script> &dash; Development By Parrot Authority.
                </div>
            </div>
            <div class="col-sm-12 col-md-6 social">
                <ul class="float-end">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<style>
    /* 
Small devices (landscape phones, 576px and up)
@media (min-width: 576px) { ... }

Medium devices (tablets, 768px and up)
@media (min-width: 768px) { ... }

Large devices (desktops, 992px and up)
@media (min-width: 992px) { ... }

X-Large devices (large desktops, 1200px and up)
@media (min-width: 1200px) { ... }

XX-Large devices (larger desktops, 1400px and up)
@media (min-width: 1400px) { ... } */


    /* Small devices (landscape phones, 576px and up) */
    @media (max-width: 576px) {
        .footer .copyright_text {
            text-align: center;
        }

        .footer .social ul{
            float: none !important;
            text-align: center;
            padding: 0;
        }
        .footer .social ul li{
            margin: 5px;
        }
        .footer .row {
            display: flex;
            flex-direction: row-reverse;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        ...
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        ...
    }

    /* X-Large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {
        ...
    }

    /* XX-Large devices (larger desktops, 1400px and up) */
    @media (min-width: 1400px) {
        ...
    }
</style>
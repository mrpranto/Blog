<div class="header">
    <div class="container">
        <div class="header-info">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}" alt=" " /></a>
            </div>
            <div class="logo-right">
                <span class="menu"><img src="{{ asset('frontend/images/menu.png') }}" alt=" "/></span>
                <ul class="nav1">
                    <li class="cap"><a href="index.html">Home</a></li>
                    <li><a href="articles.html">Articles</a></li>
                    <li><a href="tutorials.html">Tutorials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!-- script for menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( "ul.nav1" ).slideToggle( 300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- //script for menu -->
        </div>
    </div>
</div>
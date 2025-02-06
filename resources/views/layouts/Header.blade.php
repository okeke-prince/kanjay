
<div class="header header-light">

    <div class="container">

        <nav id="navigation" class="navigation navigation-landscape">

            <div class="nav-header">
                <a class="nav-brand static-show" href="/"><img src="{{ asset('assets/img/logo.png') }}" class="logo" alt=""></a>
                <a class="nav-brand mob-show" href="/"><img src="{{ asset('assets/img/logo.png') }}" class="logo" alt=""></a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="/contact-us" class="bg-light-primary text-light rounded px-3">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">

                    <li><a href="/" wire:navigate>Home<span></span></a>
                    </li>

                    <li><a href="/about-us" wire:navigate>About Us<span></span></a>
                    </li>

                    <li><a href="/teams" wire:navigate>Our Teams<span></span></a>
                    </li>

                    <li><a href="/services" wire:navigate>Our Services<span></span></a>
                    </li>

                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">

                    <li class="list-buttons">
                        <a class="px-4" href="/contact-us" wire:navigate> </i>Contact Us</a>
                    </li>

                </ul>
            </div>
            
        </nav>

    </div>

</div>

<div class="clearfix"></div>
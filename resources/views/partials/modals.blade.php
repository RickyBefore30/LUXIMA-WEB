    <!-- MODAL -->
    <div id="modal-login" class="uk-modal-full uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-margin-auto-vertical">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                <div class="uk-background-cover uk-visible@s" style="background-image: url('assets/images/wedding/alexandra-gornago-o2zFDffQnDM-unsplash.jpg');" uk-height-viewport></div>
                <div class="uk-padding-large">
                    <h1>Log in</h1>
                    <p>Welcome to LUXIMA Directory & Listing App </p>
                    <form id="form_login" class="uk-form-stacked uk-width-1-2@s" action="auth/login" method="post">
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Sign In</legend>
    
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-s-email">Email</label>
                                <input class="uk-input" id="form-s-email" type="email" placeholder="name@domain.com">
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-s-password">Password</label>
                                <input class="uk-input" id="form-s-password" type="password" placeholder="Password">
                            </div>
                            <div class="uk-margin">
                                <button type="submit" class="uk-button uk-button-primary">Log in</button>
                                <button type="reset" class="uk-button uk-button-default">Cancel</button>
                            </div>
                            <div class="uk-text-small">
                                Not registered? <a href="auth" uk-switcher-item="0">Create an account</a>
                              </div>
                        </fieldset>
                            
    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-search" class="uk-modal-full uk-modal menu-full" uk-modal tabindex="-1">
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="" role="dialog" aria-modal="true" style="min-height: calc(927px);">

            <button class="uk-modal-close-full uk-close-large uk-icon uk-close" type="button" uk-close="" aria-label="Close"><svg width="20" height="20" viewBox="0 0 20 20"><line fill="none" stroke="#000" stroke-width="1.4" x1="1" y1="1" x2="19" y2="19"></line><line fill="none" stroke="#000" stroke-width="1.4" x1="19" y1="1" x2="1" y2="19"></line></svg></button>

            <div>

                <ul class="uk-nav-primary uk-nav-center uk-nav" uk-nav="">
                    <li class="uk-active"><a href="index.html">HOME</a></li>
                    <li class="uk-parent"><a href="#">PAGES</a>
                        <ul class="uk-nav-sub">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="package.html">Package List</a></li>
                            <li><a href="howto.html">How it Work</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#">SHOP</a>
                        <ul class="uk-nav-sub">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="layout.html">Layout</a></li>
                            <li><a href="shop-detail.html">Shop Single</a></li>
                            <li><a href="shop-page.html">Shop Page</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="#">BLOG</a>
                        <ul class="uk-nav-sub">
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                            <li><a href="blog-left.html">Right Sidebar</a></li>
                            <li><a href="blog-right.html">Left Sidebar</a></li>
                            <li><a href="blog.html">No Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>

                <div class="uk-margin">
                    <form class="uk-search uk-search-large">
                        <input class="uk-search-input uk-text-center" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>

            </div>

        </div>
    </div>
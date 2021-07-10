<footer>
    <div class="container mb-5">
        <hr>
        <div class="mb-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="newsletter-text">
                        <h4 class="text-center">{{__("footer.rejoindre")}}</h4>
                        <p class="text-center">{{__("footer.inscrire")}}</p>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <form id="newsletter" method="post" class="w-100">
                        <div class="input-group">
                            <input type="text" autocomplete="email" placeholder="{{__("footer.votre_email")}}" maxlength="100">
                            <div class="input-group-append">
                                <span class="input-group-text">{{__("footer.abonner")}}</span>
                            </div>
                        </div>
                        <div>
                            <label class="text-center text-lg-left mt-2">
                                <input type="checkbox" class="js-opt-in-checkbox js-field"
                                       id="optinToMarketing" name="optinToMarketing" checked=""
                                       value="TRUE"/>
                                       {{__("footer.envoyer")}}
                            </label>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-3 mt-2">
                    <span>
                        <a href="//www.twitter.com/zendesk">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="//www.facebook.com/zendesk">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <a href="/company/customers-partners/terms-of-use/">Conditions d’utilisation</a>
            <a href="/company/customers-partners/privacy-policy/">Confidentialité</a>
            <a href="/company/policies-procedures/cookie-policy/">Cookies</a>
            <a href="/legal/">©fondataion225</a>
        </div>
    </div>
</footer>
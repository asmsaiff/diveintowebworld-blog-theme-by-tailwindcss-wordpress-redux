<!-- Footer -->
<footer class="bg-gray-100">
        <div class="container mx-auto px-4 sm:px-0">
            <div class="py-12 md:py-24">
                <div class="grid grid-cols-1 xl:grid-cols-6 gap-8 sm:gap-16">
                    <div class="col-span-2">
                        <h1 class="footer-brand text-2xl">
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                        <hr class="w-16 my-3 border-gray-300">

                        <p class="text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corrupti fuga obcaecati fugit impedit optio, modi similique tempore perspiciatis earum deleniti
                        </p>

                        <ul class="flex space-x-3 my-4">
                            <li><a href="#!"><i class="fab fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-gray-900 text-lg">For Candidates</h5>
                        <hr class="w-16 my-3 border-gray-300">
                        <ul class="mt-3 space-y-1 text-gray-700">
                            <li><a href="#">Browse Jobs</a></li>
                            <li><a href="#">Add Resume</a></li>
                            <li><a href="#">Job Alerts</a></li>
                            <li><a href="#">My Bookmarks</a></li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="text-gray-900 text-lg">Useful Links</h5>
                        <hr class="w-16 my-3 border-gray-300">
                        <ul class="mt-3 space-y-1 text-gray-700">
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>

                    <div class="col-span-2 md:col-span-2">
                        <h5 class="text-gray-900 text-lg"><i class="far mr-2 fa-envelope"></i>Sign Up For a Newsletter</h5>
                        <hr class="w-16 my-3 border-gray-300">
                        <p class="pb-3 text-gray-700">
                            Weekly breaking news, analysis and cutting edge<br>advices on job searching.
                        </p>

                        <form action="">
                            <div class="flex flex-row">
                                <input class="w-full outline-none py-3 pl-3 rounded bg-white text-gray-800 focus:shadow-2xl transition duration-300" type="email" placeholder="Enter your email address">
                                <button class="bg-blue-700 shadow-2xl hover:bg-blue-800 ml-1 rounded px-5 text-white transition" type="submit"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-12 py-6 sticky top-0 z-50 border-t border-gray-300">
            <div class="container mx-auto text-center text-gray-700">
                <p>
                    Copyright © <a href="#" class="font-semibold text-gray-900 hover:underline footer-brand">Dive Into Web World</a> | Designed & Developed by - Saifullah Saif
                </p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
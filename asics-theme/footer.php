</main>
    <footer class="bg-gray-800 text-white p-4 mt-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="footer-widget">
                    <h3 class="text-lg font-bold mb-2">About ASICS</h3>
                    <p>ASICS is dedicated to helping people achieve a sound mind in a sound body.</p>
                </div>
                <div class="footer-widget">
                    <h3 class="text-lg font-bold mb-2">Quick Links</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'space-y-2',
                        'container' => false
                    ));
                    ?>
                </div>
                <div class="footer-widget">
                    <h3 class="text-lg font-bold mb-2">Contact Us</h3>
                    <p>Email: info@asics.vn</p>
                    <p>Phone: +84 123 456 789</p>
                </div>
                <div class="footer-widget">
                    <h3 class="text-lg font-bold mb-2">Follow Us</h3>
                    <div class="social-icons flex space-x-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 pt-4 border-t border-gray-700">
                <p>&copy; <?php echo date('Y'); ?> ASICS Vietnam. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>

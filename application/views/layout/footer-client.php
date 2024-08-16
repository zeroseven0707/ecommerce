</div>
        </div>
    </div>
    <script>
        document.querySelector('.hamburger').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const icon = document.querySelector('.hamburger iconify-icon');

            if (sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
                setTimeout(() => {
                    sidebar.style.display = 'none';
                }, 300); // Match this duration with the CSS transition duration
                icon.setAttribute('icon', 'clarity:menu-line');
            } else {
                sidebar.style.display = 'block';
                setTimeout(() => {
                    sidebar.classList.add('show');
                }, 10); // Small delay to allow the display property to take effect
                icon.setAttribute('icon', 'clarity:close-line');
            }
        });
    </script>
</body>
</html>
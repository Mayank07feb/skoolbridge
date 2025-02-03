<!-- Navbar -->
<nav
    class="fixed inset-x-0 top-0 z-50 mx-auto mt-4 flex w-[98%] max-w-[85rem] items-center justify-between rounded-2xl px-6 py-3 bg-gradient-to-r from-[#3B7CB8] to-[#276F98] backdrop-blur-lg shadow-lg">
    <!-- Logo Section -->
    <div>
        <a href="/" class="text-2xl font-light text-white tracking-wider">Skool<span
                class="font-bold">Bridge</span></a>
    </div>

    <!-- Navigation Links (Desktop) -->
    <div class="hidden md:flex items-center space-x-8">
        <a href="/"
            class="text-base font-light text-white hover:text-gray-300 transition-colors duration-200">Home</a>
        <a href="{{ route('about-us') }}"
            class="text-base font-light text-white hover:text-gray-300 transition-colors duration-200">About</a>
        <a href="{{ route('services') }}"
            class="text-base font-light text-white hover:text-gray-300 transition-colors duration-200">Services</a>
        <a href="{{ route('contact-us') }}"
            class="text-base font-light text-white hover:text-gray-300 transition-colors duration-200">Contact</a>
        <a href="#"
            class="ml-6 px-6 py-2 border-2 border-white text-white text-base font-light rounded-full hover:bg-white hover:text-black transition-all duration-200 book-btn">Book
            Demo</a>
    </div>

    <!-- Mobile Menu Icon -->
    <div class="flex md:hidden">
        <button id="mobile-menu-toggle" class="text-white">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="fixed inset-x-0 top-0 bg-gradient-to-r from-[#3B7CB8] to-[#276F98] shadow-lg p-6 mt-20 mx-4 hidden transform transition-all duration-500 ease-in-out max-h-screen overflow-y-auto z-40">
    <a href="/"
        class="block text-base font-light text-white hover:text-gray-300 py-3 transition-colors duration-200">Home</a>
    <a href="{{ route('about-us') }}"
        class="block text-base font-light text-white hover:text-gray-300 py-3 transition-colors duration-200">About</a>
    <a href="{{ route('services') }}"
        class="block text-base font-light text-white hover:text-gray-300 py-3 transition-colors duration-200">Services</a>
    <a href="{{ route('contact-us') }}"
        class="block text-base font-light text-white hover:text-gray-300 py-3 transition-colors duration-200">Contact</a>
    <a href="#"
        class="block border-2 border-white text-white text-base font-light rounded-full hover:bg-white hover:text-black text-center py-2 mt-6 transition-all duration-200"
        id="book-mobile-btn">Book Demo</a>
</div>

<!-- Contact Modal -->
<div id="contact-modal" class="fixed inset-0 bg-black/90 backdrop-blur-md flex justify-center items-center hidden z-50">
    <div
        class="bg-gradient-to-r from-[#3B7CB8] to-[#276F98] rounded-xl p-6 w-10/12 md:w-2/5 shadow-lg border border-gray-800">
        <div class="mb-6">
            <h2 class="text-xl font-light text-center text-white tracking-wider">Book Your Session</h2>
            <div class="w-20 h-[1px] bg-white/20 mx-auto mt-3"></div>
        </div>

        @if (session('success'))
            <div class="text-green-500 text-center mb-4">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="text-red-500 text-center mb-4">{{ session('error') }}</div>
        @endif


        <form action="{{ route('book.session') }}" method="POST" class="space-y-4 max-w-md mx-auto">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Your Name"
                    class="w-full p-2 bg-black/50 border border-gray-800 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-white transition-all text-sm"
                    required />
            </div>
            <div>
                <input type="email" name="email" placeholder="Email Address"
                    class="w-full p-2 bg-black/50 border border-gray-800 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-white transition-all text-sm"
                    required />
            </div>
            <div>
                <input type="tel" name="mobile" placeholder="Mobile Number"
                    class="w-full p-2 bg-black/50 border border-gray-800 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-white transition-all text-sm"
                    required />
            </div>
            <div>
                <input type="text" name="school_name" placeholder="School Name"
                    class="w-full p-2 bg-black/50 border border-gray-800 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-white transition-all text-sm"
                    required />
            </div>
            <div>
                <textarea name="address" placeholder="School Address"
                    class="w-full p-2 bg-black/50 border border-gray-800 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-white transition-all text-sm h-16"
                    required></textarea>
            </div>
            <div>
                <textarea name="message" placeholder="Tell us about your vision"
                    class="w-full p-2 bg-black/50 border border-gray-800 rounded-md text-white placeholder-gray-400 focus:outline-none focus:border-white transition-all text-sm h-20"></textarea>
            </div>
            <div>
                <button type="submit"
                    class="w-full py-2 border-2 border-white text-white text-sm font-light rounded-md hover:bg-white hover:text-black transition-all duration-200">
                    Send Request
                </button>
            </div>
        </form>

        <!-- Close Modal Button -->
        <button id="close-modal"
            class="mt-3 w-full text-center py-2 text-gray-400 hover:text-white transition">Close</button>
    </div>
</div>



<!-- JavaScript -->
<script>
    // Toggle mobile menu
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('transform');
        mobileMenu.classList.toggle('translate-y-0');
    });

    // Open Contact Modal
    const bookBtn = document.querySelector('.book-btn');
    const bookMobileBtn = document.getElementById('book-mobile-btn');
    const contactModal = document.getElementById('contact-modal');
    const closeModal = document.getElementById('close-modal');

    const openModal = () => {
        contactModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    };

    const closeModalFunction = () => {
        contactModal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    };

    if (bookBtn) bookBtn.addEventListener('click', openModal);
    if (bookMobileBtn) bookMobileBtn.addEventListener('click', openModal);
    if (closeModal) closeModal.addEventListener('click', closeModalFunction);

    // Close modal on outside click
    contactModal.addEventListener('click', (e) => {
        if (e.target === contactModal) {
            closeModalFunction();
        }
    });
</script>

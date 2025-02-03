@extends('components.main')

@section('content')
    <!-- Page Title Section -->
    <div class="bg-[#276F98] py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Contact Us</h1>
                <nav class="text-sm md:text-base">
                    <ol class="flex items-center space-x-2 text-blue-100">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-2">›</span></li>
                        <li class="text-white font-medium">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-4xl font-bold text-gray-900">Get in Touch</h2>
                    <p class="mt-4 text-xl text-gray-600">Have questions? Our team is here to help you.</p>
                    <div class="mt-8 space-y-6">
                        <div class="flex items-center gap-4">
                            <span class="material-icons text-[#276F98]">phone</span>
                            <p class="text-lg text-gray-700">+91 1234 567890</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="material-icons text-[#276F98]">email</span>
                            <p class="text-lg text-gray-700">info@schoolapp.com</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="material-icons text-[#276F98]">location_on</span>
                            <p class="text-lg text-gray-700">Agra, India</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text"
                                class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#276F98] focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email"
                                class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Mobile Number</label>
                            <input type="tel"
                                class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea rows="4"
                                class="mt-1 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-8 py-4 bg-[#276F98] text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section id="map" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900">Our Location</h2>
            <p class="mt-4 text-xl text-gray-600">Visit us or send a message, we are here to assist you!</p>
            <div class="mt-8">
                <iframe class="w-full h-96 rounded-lg shadow-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126336.17537367992!2d77.03448552483912!3d27.17514416376449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390b0bc80a8ee801%3A0x24bcfe96ab9f6518!2sAgra%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2sus!4v1633737497469!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-8">Frequently Asked Questions</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-900">How can I contact support?</h3>
                    <p class="mt-4 text-lg text-gray-700">You can contact us via email at info@schoolapp.com or through our
                        contact form above. We are here to assist you!</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-900">Where is your office located?</h3>
                    <p class="mt-4 text-lg text-gray-700">Our office is located in Agra, Uttar Pradesh, India. Please refer
                        to the map section above for the exact location.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-900">What are your operating hours?</h3>
                    <p class="mt-4 text-lg text-gray-700">We are open Monday to Friday from 9 AM to 6 PM. We are closed on
                        weekends and public holidays.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-900">Can I visit your office?</h3>
                    <p class="mt-4 text-lg text-gray-700">Yes, you are welcome to visit our office during business hours.
                        Please schedule an appointment in advance to ensure availability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section id="social" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Follow Us</h2>
            <p class="mt-4 text-xl text-gray-600 mb-8">Stay updated by following us on social media.</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-3xl text-[#276F98] hover:text-blue-700"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-3xl text-[#276F98] hover:text-blue-700"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-3xl text-[#276F98] hover:text-blue-700"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="text-3xl text-[#276F98] hover:text-blue-700"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>
@endsection

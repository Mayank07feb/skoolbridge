@extends('components.main')
@section('content')

 <!-- Page Title Section -->
    <div class="bg-[#276F98] py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Us</h1>
                <nav class="text-sm md:text-base">
                    <ol class="flex items-center space-x-2 text-blue-100">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-2">›</span></li>
                        <li class="text-white font-medium">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-b from-blue-50 to-white py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Transforming Education Through Technology</h1>
                <p class="text-xl text-gray-600 mb-8">We're on a mission to revolutionize how educational institutions manage their operations and engage with their communities.</p>
                <div class="flex justify-center gap-4">
                    <button class="px-8 py-3 bg-[#276F98] text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                        Get Started
                    </button>
                    <button class="px-8 py-3 border-2 border-[#276F98] text-[#276F98] rounded-lg hover:bg-blue-50 transition-colors font-semibold">
                        Learn More
                    </button>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute top-20 left-10 w-20 h-20 bg-blue-200/20 rounded-full animate-float"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-blue-100/20 rounded-full animate-float-delayed"></div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('asset/images/gettyimages-820882982-1024x1024.jpg') }}" alt="Our Journey" 
                        class="w-full rounded-2xl shadow-lg relative z-10">
                    <!-- Floating Elements -->
                    <div class="absolute top-0 left-0 w-12 h-12 bg-blue-100/20 rounded-full animate-float"></div>
                    <div class="absolute bottom-0 right-0 w-8 h-8 bg-blue-200/20 rounded-full animate-float-delayed"></div>
                </div>
                <div class="order-1 md:order-2">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-[#276F98] rounded-full text-sm font-medium">
                        Our Story
                    </span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Building the Future of Education</h2>
                    <p class="text-xl text-gray-600 mb-8">Founded in 2020, we've been dedicated to creating innovative solutions that empower educational institutions worldwide.</p>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">school</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">500+ Schools</h4>
                                <p class="text-gray-600 mt-1">Trusted by institutions globally</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">groups</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">1M+ Users</h4>
                                <p class="text-gray-600 mt-1">Active platform users</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">public</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Global Reach</h4>
                                <p class="text-gray-600 mt-1">Present in 50+ countries</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">military_tech</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Award Winning</h4>
                                <p class="text-gray-600 mt-1">Industry recognized platform</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 text-[#276F98] rounded-full text-sm font-medium mb-4">
                    Our Values
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">What Drives Us Forward</h2>
                <p class="text-xl text-gray-600">Our core values shape everything we do and guide us in creating meaningful impact in education.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <span class="material-icons text-[#276F98] text-3xl mb-4">lightbulb</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation</h3>
                    <p class="text-gray-600">Continuously pushing boundaries to create better educational solutions.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <span class="material-icons text-[#276F98] text-3xl mb-4">security</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Trust</h3>
                    <p class="text-gray-600">Building reliable and secure platforms that institutions can depend on.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <span class="material-icons text-[#276F98] text-3xl mb-4">people</span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Community</h3>
                    <p class="text-gray-600">Fostering strong relationships between educators, students, and parents.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
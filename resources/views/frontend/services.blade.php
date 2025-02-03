@extends('components.main')

@section('content')
    <!-- Page Title Section -->
    <div class="bg-[#276F98] py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Services</h1>
                <nav class="text-sm md:text-base">
                    <ol class="flex items-center space-x-2 text-blue-100">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><span class="mx-2">›</span></li>
                        <li class="text-white font-medium">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Services Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold text-gray-900">We Provide Services</h2>
                <p class="text-xl text-gray-600 mt-4">Enhancing education with innovative digital solutions.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative">
                    <img src="{{ asset('asset/images/about.jpg') }}" alt="Our Services"
                        class="w-full rounded-2xl shadow-lg relative z-10">
                    <!-- Floating Elements -->
                    <div class="absolute top-0 left-0 w-12 h-12 bg-blue-100/20 rounded-full animate-float"></div>
                    <div class="absolute bottom-0 right-0 w-8 h-8 bg-blue-200/20 rounded-full animate-float-delayed"></div>
                </div>
                <div class="order-1 md:order-2">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-[#276F98] rounded-full text-sm font-medium">
                        Our Services
                    </span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Comprehensive Solutions for Education</h2>
                    <p class="text-xl text-gray-600 mb-8">We offer a range of digital solutions tailored for schools to
                        enhance learning, communication, and management.</p>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">assignment</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Assignment Management</h4>
                                <p class="text-gray-600 mt-1">Streamlined assignment tracking and submissions</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">calendar_today</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Timetable Scheduling</h4>
                                <p class="text-gray-600 mt-1">Automated scheduling for efficient planning</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">notifications</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Real-time Notifications</h4>
                                <p class="text-gray-600 mt-1">Stay updated with instant alerts and messages</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">event</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Event Management</h4>
                                <p class="text-gray-600 mt-1">Plan and manage school events seamlessly</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-icons text-[#276F98]">check_circle</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Attendance Tracking</h4>
                                <p class="text-gray-600 mt-1">Monitor student attendance with automated reports</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="max-w-screen-xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-semibold text-center mb-8">Benefits of Skoolbridge Apps</h2>
        <div class="grid grid-cols-1 text-center justify-center sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1: Student Profiles -->
            <div class="bg-white p-6 text-center rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">person</span> <!-- person icon -->
                </div>
                <h3 class="text-xl font-semibold">Student Profiles</h3>
                <p class="text-gray-700">All the details of the students can be displayed including photo, parent details,
                    teacher, details, address, class and contact number.</p>
            </div>

            <!-- Card 2: Daily Attendance -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">check_circle</span> <!-- check_circle icon -->
                </div>
                <h3 class="text-xl font-semibold">Daily Attendance</h3>
                <p class="text-gray-700">Parents can obtain instant notification and view of the student attendance in the
                    current academic year including present days and leaves.</p>
            </div>

            <!-- Card 3: Circulars & Notices -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">announcement</span> <!-- announcement icon -->
                </div>
                <h3 class="text-xl font-semibold">Circulars & Notices</h3>
                <p class="text-gray-700">Circulars and notices are sent to each parent and enable them to archive the same
                    with an option of attachment.</p>
            </div>

            <!-- Card 4: Teacher Remarks -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">school</span> <!-- school icon -->
                </div>
                <h3 class="text-xl font-semibold">Teacher Remarks</h3>
                <p class="text-gray-700">Is the student attentive in the class or not? What is his/her status? Is his
                    behavior good or not? Find out from teacher’s daily remarks.</p>
            </div>

            <!-- Card 5: Time Saving -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">access_time</span> <!-- access_time icon -->
                </div>
                <h3 class="text-xl font-semibold">Time Saving</h3>
                <p class="text-gray-700">Content templates can be reused and saved for easy and time-efficient content
                    creation.</p>
            </div>

            <!-- Card 6: Stay Organized -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">event_note</span> <!-- event_note icon -->
                </div>
                <h3 class="text-xl font-semibold">Stay Organized</h3>
                <p class="text-gray-700">All the tasks can be managed and organized using Skoolbridge such as homework,
                    timetable and attendance at a single click. Thus saves time of teachers.</p>
            </div>

            <!-- Card 7: Cost Saving -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">attach_money</span> <!-- attach_money icon -->
                </div>
                <h3 class="text-xl font-semibold">Cost Saving</h3>
                <p class="text-gray-700">Expensive in-house software and communicating with parents through paper circulars
                    and SMS can be put to an end and thus you can save money.</p>
            </div>

            <!-- Card 8: Increased Efficiency -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">speed</span> <!-- speed icon -->
                </div>
                <h3 class="text-xl font-semibold">Increased Efficiency</h3>
                <p class="text-gray-700">Without worrying about maintaining records and handling paperwork, Skoolbridge
                    ensures everything done in minutes.</p>
            </div>

            <!-- Card 9: Available On Mobile -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">smartphone</span> <!-- smartphone icon -->
                </div>
                <h3 class="text-xl font-semibold">Available on Mobile</h3>
                <p class="text-gray-700">Download the Skoolbridge App from the Android App Store and stay connected anytime,
                    anywhere.</p>
            </div>

            <!-- Card 10: Messages and Notifications -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">notifications</span>
                    <!-- notifications icon -->
                </div>
                <h3 class="text-xl font-semibold">Messages and Notifications</h3>
                <p class="text-gray-700">Parents receive regular updates and notifications from teachers and thus
                    strengthen the parent-teacher relationship.</p>
            </div>

            <!-- Card 11: Event Registration -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">event</span> <!-- event icon -->
                </div>
                <h3 class="text-xl font-semibold">Event Registration</h3>
                <p class="text-gray-700">Students will never miss out any important day at school. Various events and other
                    details corresponding to it are shared with parents and students through this app.</p>
            </div>

            <!-- Card 12: Daily Home Work -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">assignment</span> <!-- assignment icon -->
                </div>
                <h3 class="text-xl font-semibold">Daily Home Work</h3>
                <p class="text-gray-700">Parents can know about the home works and assignments through Skoolbridge,
                    therefore no need to worry anymore thinking whether children have missed any note of all the homework
                    given.</p>
            </div>

            <!-- Card 13: Class Time Table -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">schedule</span> <!-- schedule icon -->
                </div>
                <h3 class="text-xl font-semibold">Class Time Table</h3>
                <p class="text-gray-700">Now parents can ensure that their children pack according to the classes that they
                    have for that particular day. Time table can be scheduled and published through Skoolbridge app.</p>
            </div>

            <!-- Card 14: Tests and Examination Results -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">assessment</span> <!-- assessment icon -->
                </div>
                <h3 class="text-xl font-semibold">Tests and Examination Results</h3>
                <p class="text-gray-700">Now you can access tests, progress reports, exam results and grades of your child
                    directly through Skoolbridge App.</p>
            </div>

            <!-- Card 15: Fee Details -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-5xl text-[#276F98] mr-4">payment</span> <!-- payment icon -->
                </div>
                <h3 class="text-xl font-semibold">Fee Details</h3>
                <p class="text-gray-700">Information regarding fee payable, payment status and dues for different fee types
                    can be viewed and archived.</p>
            </div>
        </div>
    </div>
@endsection

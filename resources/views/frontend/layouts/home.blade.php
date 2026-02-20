@extends('frontend.app')

@section('content')
    <header class="relative w-full bg-[#D9D9D9] overflow-hidden">
        <img src="{{ asset('images/home/bodyimg.png') }}" class=" w-full  h-[84dvh] object-cover opacity-80"
            alt="Production Facility" />

        <div class="absolute inset-0 bg-black/50"></div>

        <div
            class="absolute inset-0 z-10  container mx-auto px-6 md:px-12 flex flex-col items-start justify-center left-1/2 -translate-x-1/2 w-full">

            <h1 class="text-white font-bold text-[32px] md:text-[48px] leading-tight max-w-2xl">
                Complete Co-Packaging Solutions
            </h1>

            <p class="text-white max-w-xl tracking-wider text-[14px] md:text-[16px] text-left mt-4 mb-8">
                We handle the complexity of packaging, labeling, and fulfillment so
                you can focus on growing your business.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                <a href="#"
                    class="bg-[#7CB80E] rounded-[12px] px-8 py-3 text-white font-medium text-[18px] md:text-[22px] text-center transform transition hover:scale-105 active:scale-95">
                    Get a Quote
                </a>
                <a href="#"
                    class="bg-white rounded-[12px] px-8 py-3 text-[#333] font-medium text-[18px] md:text-[22px] text-center transform transition hover:scale-105 active:scale-95">
                    Our Services
                </a>
            </div>
        </div>
    </header>

    <section class='bg-brandcream'>
        <div class="py-16 px-4 md:px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">

                <!-- Header Section -->
                <div class="text-center mb-12">
                    <h4 class="text-brandgreen font-medium text-[16px] uppercase  mb-2">Services</h4>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        <span class="text-brandgreen">Reliable</span> Packaging Options
                    </h2>
                    <p class="text-gray-500 text-sm md:text-[15px] max-w-2xl mx-auto leading-relaxed font-light">
                        We provide flexible packaging formats designed to meet the needs of both small and large honey
                        producers.
                    </p>
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">

                    <!-- Card 1: Honey Straws -->
                    <div
                        class="bg-white rounded-3xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="h-64 overflow-hidden bg-gray-100">
                            <!-- Placeholder image resembling honey straws -->
                            <img src="https://images.unsplash.com/photo-1587049352846-4a222e784d38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Honey Straws"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 text-center flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-3">Honey Straws</h3>
                            <p class="text-[12px] text-left leading-relaxed">
                                Convenient, single-serve honey straws, perfect for on-the-go use, foodservice, or retail
                                distribution. Packaged for daily production capacity of 20,000 straws, ensuring fresh and
                                consistent quality.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Honey Jars -->
                    <div
                        class="bg-white rounded-3xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="h-64 overflow-hidden bg-gray-100">
                            <!-- Placeholder image resembling honey jars -->
                            <img src="https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Honey Jars"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 text-center flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-3">Honey Jars</h3>
                            <p class="text-[12px] text-left leading-relaxed">
                                Premium, pure honey packed in convenient jars, ideal for retail, gifting, or bulk supply.
                                Daily
                                production capacity of 10,000 jars ensures consistent quality and freshness.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Honey Pouch -->
                    <div
                        class="bg-white rounded-3xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden flex flex-col">
                        <div class="h-64 overflow-hidden bg-gray-100">
                            <!-- Placeholder image representing a pouch/dark packaging -->
                            <img src="https://images.unsplash.com/photo-1629198727743-4318d184084f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Honey Pouch"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-4 text-center flex-grow">
                            <h3 class="text-lg font-bold text-gray-900 mb-3">Honey Pouch</h3>
                            <p class="text-[12px] text-left leading-relaxed">
                                Convenient, resealable honey pouches designed for easy use and storage. Produced at a daily
                                capacity of 5,000 pouches to maintain premium quality and freshness.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- CTA Button -->
                <div class="text-center">
                    <button
                        class="bg-brandbtn hover:bg-brandbtn-hover text-white font-medium py-3 px-10 rounded-lg shadow-md transition-colors duration-300 text-lg">
                        Get A Quote
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 px-4 md:px-8 lg:px-16 bg-slate-50  text-darkText relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <!-- Left Column: Image Collage -->
                <!-- The relative container holds the overlapping images -->
                <div class="relative w-full h-[400px] md:h-[500px] lg:h-[600px]">

                    <!-- Image 1: Top Right (Worker Taping) -->
                    <!-- Positioned absolute to top-right, taking 70% width and 60% height -->
                    <div class="absolute top-0 right-0 w-[75%] h-[60%]   z-10">

                        <img src="{{ asset('images/home/Rectangle115.png') }}" alt="Worker taping box"
                            class="w-full h-full object-cover object-center rounded-[2rem] ">
                    </div>

                    <!-- Image 2: Bottom Left (Scanning Barcode) -->
                    <!-- Positioned absolute bottom-left, taking 75% width and 60% height.
                                                                                     Crucially, it has a thick border matching the background color (brandcream)
                                                                                     to create the cutout effect. -->
                    <div
                        class="absolute bottom-0 left-0 w-[75%] h-[60%] rounded-[2rem] overflow-hidden z-0 border-4 border-brandcream shadow-xl">
                        <img src="{{ asset('images/home/Rectangle114.png') }}" class="w-full h-full object-cover">
                    </div>

                </div>

                <!-- Right Column: Text Content -->
                <div class="flex flex-col justify-center">

                    <!-- Tagline -->
                    <h4 class="text-brandgreen font-bold text-xs uppercase tracking-widest mb-3">
                        Who We Are
                    </h4>

                    <!-- Headline -->
                    <h2 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-darkText leading-tight mb-6">
                        Reliable & Cutting-Edge <br>
                        <span class="text-brandgreen">Copackaging Solutions</span>
                    </h2>

                    <!-- Paragraphs -->
                    <div class="space-y-6 text-[14px] md:text-[15px] leading-relaxed text-darkText font-normal">
                        <p>
                            At Ivory Herbals, we specialize in providing professional co-packing solutions for the honey
                            industry across the United States.
                        </p>

                        <p>
                            From honey straws to jars of various sizes, our services are built around precision, hygiene,
                            and reliability, ensuring every product is packaged with care and consistency.
                        </p>

                        <p>
                            Our operations follow strict food-grade standards, maintaining a clean and compliant environment
                            that safeguards product quality. Whether you’re a small-batch producer or an established honey
                            brand, Ivory Herbals offers flexible, efficient packaging support that helps your product reach
                            the market faster and look its best.
                        </p>

                        <p>
                            At Ivory Herbals, we believe in simplicity, speed, and quality, letting honey producers focus on
                            what they do best while we handle the rest.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="py-16 px-4 md:px-8 lg:px-16 bg-brandcream">
        <div class="max-w-7xl mx-auto">

            <!-- Header Section -->
            <div class="text-center mb-16">
                <h4 class="text-brandgreen font-bold text-xs uppercase tracking-widest mb-3">Our Process</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-darkText mb-4">
                    <span class="text-brandgreen">Reliable</span> Packaging Options
                </h2>
                <p class="text-lightText text-sm md:text-[15px] max-w-4xl mx-auto leading-relaxed">
                    At Ivory Herbals, our approach to co-packing is designed to ensure your honey products are packaged
                    efficiently, safely, and ready for market. Our process combines precision, quality, and transparency,
                    making your experience seamless from start to finish.
                </p>
            </div>

            <!-- Process Steps Container -->
            <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-12 md:gap-0">

                <!-- Step 1: Discovery -->
                <div class="flex-1 flex flex-col items-center text-center relative w-full">
                    <!-- Line: Starts from center of this circle to center of next -->
                    <div
                        class="hidden md:block absolute top-[60px] left-1/2 w-full border-t-2 border-dotted border-brandgreen z-0">
                    </div>
                    <!-- Dot: Positioned exactly at the end of the line (between icons) -->
                    <div
                        class="hidden md:block absolute top-[60px] left-full w-3 h-3 bg-brandgreen rounded-full z-10 -translate-x-1/2 -translate-y-1/2 border-2 border-brandcream">
                    </div>

                    <div class="relative z-20 mb-6 bg-brandcream rounded-full">
                        <div
                            class="w-[120px] h-[120px] rounded-full border-2 border-dotted border-brandgreen flex items-center justify-center p-2 bg-white shadow-sm">
                            <div
                                class="w-full h-full bg-brandgreen rounded-full flex items-center justify-center text-white shadow-lg shadow-brandgreen/20">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m4-3H6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-darkText mb-2">Discovery</h3>
                    <p class="text-[13px] text-lightText leading-snug px-4">Understanding your packaging goals and market
                    </p>
                </div>

                <!-- Step 2: Planning -->
                <div class="flex-1 flex flex-col items-center text-center relative w-full">
                    <div
                        class="hidden md:block absolute top-[60px] left-1/2 w-full border-t-2 border-dotted border-brandgreen z-0">
                    </div>
                    <div
                        class="hidden md:block absolute top-[60px] left-full w-3 h-3 bg-brandgreen rounded-full z-10 -translate-x-1/2 -translate-y-1/2 border-2 border-brandcream">
                    </div>

                    <div class="relative z-20 mb-6 bg-brandcream rounded-full">
                        <div
                            class="w-[120px] h-[120px] rounded-full border-2 border-dotted border-brandgreen flex items-center justify-center p-2 bg-white shadow-sm">
                            <div
                                class="w-full h-full bg-brandgreen rounded-full flex items-center justify-center text-white">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 12c0-1.1-.9-2-2-2V7c0-1.1-.9-2-2-2h-3c0-1.1-.9-2-2-2s-2 .9-2 2H6c-1.1 0-2 .9-2 2v3c-1.1 0-2 .9-2 2s.9 2 2 2v3c0 1.1.9 2 2 2h3c0 1.1.9 2 2 2s2-.9 2-2h3c1.1 0 2-.9 2-2v-3c1.1 0 2-.9 2-2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-darkText mb-2">Planning</h3>
                    <p class="text-[13px] text-lightText leading-snug px-4">Developing a strategic plan for your needs</p>
                </div>

                <!-- Step 3: Designing -->
                <div class="flex-1 flex flex-col items-center text-center relative w-full">
                    <div
                        class="hidden md:block absolute top-[60px] left-1/2 w-full border-t-2 border-dotted border-brandgreen z-0">
                    </div>
                    <div
                        class="hidden md:block absolute top-[60px] left-full w-3 h-3 bg-brandgreen rounded-full z-10 -translate-x-1/2 -translate-y-1/2 border-2 border-brandcream">
                    </div>

                    <div class="relative z-20 mb-6 bg-brandcream rounded-full">
                        <div
                            class="w-[120px] h-[120px] rounded-full border-2 border-dotted border-brandgreen flex items-center justify-center p-2 bg-white shadow-sm">
                            <div
                                class="w-full h-full bg-brandgreen rounded-full flex items-center justify-center text-white">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-darkText mb-2">Designing</h3>
                    <p class="text-[13px] text-lightText leading-snug px-4">Creating custom packaging designs</p>
                </div>

                <!-- Step 4: Quality Check -->
                <div class="flex-1 flex flex-col items-center text-center relative w-full">
                    <div
                        class="hidden md:block absolute top-[60px] left-1/2 w-full border-t-2 border-dotted border-brandgreen z-0">
                    </div>
                    <div
                        class="hidden md:block absolute top-[60px] left-full w-3 h-3 bg-brandgreen rounded-full z-10 -translate-x-1/2 -translate-y-1/2 border-2 border-brandcream">
                    </div>

                    <div class="relative z-20 mb-6 bg-brandcream rounded-full">
                        <div
                            class="w-[120px] h-[120px] rounded-full border-2 border-dotted border-brandgreen flex items-center justify-center p-2 bg-white shadow-sm">
                            <div
                                class="w-full h-full bg-brandgreen rounded-full flex items-center justify-center text-white">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-darkText mb-2">Quality Check</h3>
                    <p class="text-[13px] text-lightText leading-snug px-4">Ensuring final products meet standards</p>
                </div>

                <!-- Step 5: Delivery -->
                <div class="flex-1 flex flex-col items-center text-center relative w-full">
                    <div class="relative z-20 mb-6 bg-brandcream rounded-full">
                        <div
                            class="w-[120px] h-[120px] rounded-full border-2 border-dotted border-brandgreen flex items-center justify-center p-2 bg-white shadow-sm">
                            <div
                                class="w-full h-full bg-brandgreen rounded-full flex items-center justify-center text-white">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-darkText mb-2">Delivery</h3>
                    <p class="text-[13px] text-lightText leading-snug px-4">Safely delivering to your location</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 px-4 md:px-8 lg:px-16 bg-lightBg font-sans">
        <div class="max-w-7xl mx-auto bg-white rounded-[2.5rem] p-4 md:p-16 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8">

                <!-- Left Side: Title -->
                <div class="lg:col-span-5">
                    <h4 class="text-brandgreen font-bold text-xs uppercase tracking-widest mb-4">
                        Frequently Asked Questions
                    </h4>
                    <h2 class="text-5xl md:text-6xl font-bold text-darkText leading-[1.1]">
                        You <span class="text-brandgreen">Ask</span> ,<br>
                        We Answer
                    </h2>
                </div>

                <!-- Right Side: Accordion -->
                <div class="lg:col-span-7 space-y-4">

                    {{-- FAQ Item 1  --}}
                    <details class="group border border-gray-100 rounded-xl overflow-hidden transition-all duration-300">

                        <summary class="flex items-center justify-between p-5 cursor-pointer list-none">
                            <span class="font-bold text-darkText text-[15px] md:text-base">
                                What types of products do you handle?
                            </span>

                            <span class="text-lightText transition-transform group-open:rotate-45">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </span>
                        </summary>

                        <div class="px-5 pb-5 text-[14px] text-lightText leading-relaxed hidden group-open:block">
                            We handle only honey-based products, such as honey straws and jars.
                            Other food items like juice or ghee are not accepted.
                        </div>

                    </details>

                    {{-- FAQ Item 2  --}}
                    <details class="group border border-gray-100 rounded-xl overflow-hidden transition-all duration-300">

                        <summary class="flex items-center justify-between p-5 cursor-pointer list-none">
                            <span class="font-bold text-darkText text-[15px] md:text-base">
                                What types of products do you handle?
                            </span>

                            <span class="text-lightText transition-transform group-open:rotate-45">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </span>
                        </summary>

                        <div class="px-5 pb-5 text-[14px] text-lightText leading-relaxed hidden group-open:block">
                            We handle only honey-based products, such as honey straws and jars.
                            Other food items like juice or ghee are not accepted.
                        </div>

                    </details>


                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 lg:px-12 py-12 lg:py-24">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-12 lg:gap-20">
            <!-- Content Section -->
            <div class="w-full lg:flex-1 text-left">
                <h2 class="text-primary font-bold text-[18px] tracking-widest mb-4 uppercase">
                    Request a Quote
                </h2>

                <h3 class="text-[36px] md:text-[42px] lg:text-[52px] font-bold leading-tight mb-8">
                    <span class="text-primary">Ready</span>
                    <span class="text-darkText"> To Partner With Ivory?</span>
                </h3>

                <p class="text-[18px] md:text-[20px] text-darkText leading-relaxed mb-12 font-medium max-w-2xl">
                    Have a honey packaging project in mind? Let’s turn your bulk honey
                    into safe, compliant, and retail-ready products. Whether you need
                    small-batch co-packing or large-scale production, our team is here
                    to support you at every step.
                </p>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79a15.1 15.1 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.27c1.12.45 2.33.69 3.58.69a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.24 2.46.69 3.58a1 1 0 01-.27 1.11l-2.2 2.2z" />
                            </svg>
                        </div>
                        <span class="text-[20px] md:text-[22px] font-bold text-darkText">+1 (XXX) YYY-ZZZZ</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="shrink-0 w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                        </div>
                        <span
                            class="text-[20px] md:text-[22px] font-bold text-darkText break-all md:break-normal">ivoryherbals@gmail.com</span>
                    </div>
                </div>
            </div>
            <!-- Form Section -->
            <div class="w-full lg:flex-1">
                <div class="bg-white border border-gray-200 rounded-[40px] p-6 md:p-12 shadow-sm">
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-8">
                        <div class="flex flex-col">
                            <label class="uppercase text-[14px] md:text-[16px] text-gray-400 font-medium mb-2">
                                First Name <span class="text-primary">*</span>
                            </label>
                            <input type="text"
                                class="w-full border border-gray-100 bg-gray-50/30 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
                        </div>

                        <div class="flex flex-col">
                            <label class="uppercase text-[14px] md:text-[16px] text-gray-400 font-medium mb-2">
                                Last Name <span class="text-primary">*</span>
                            </label>
                            <input type="text"
                                class="w-full border border-gray-100 bg-gray-50/30 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
                        </div>

                        <div class="md:col-span-2 flex flex-col">
                            <label class="uppercase text-[14px] md:text-[16px] text-gray-400 font-medium mb-2">
                                Email Address <span class="text-primary">*</span>
                            </label>
                            <input type="email"
                                class="w-full border border-gray-100 bg-gray-50/30 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" />
                        </div>

                        <div class="md:col-span-2 flex flex-col">
                            <label class="uppercase text-[14px] md:text-[16px] text-gray-400 font-medium mb-2">
                                Product Type
                            </label>
                            <div class="relative">
                                <select
                                    class="w-full border border-gray-100 bg-gray-50/30 rounded-xl p-4 appearance-none focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all">
                                    <option>Honey Straws</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                        <path
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-2 flex flex-col">
                            <label class="uppercase text-[14px] md:text-[16px] text-gray-400 font-medium mb-2">
                                Tell us about your project
                            </label>
                            <textarea rows="5"
                                class="w-full border border-gray-100 bg-gray-50/30 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"></textarea>
                        </div>

                        <div class="md:col-span-2">
                            <button
                                class="bg-primary text-white font-medium text-[20px] px-10 py-4 rounded-xl hover:bg-opacity-90 transition-all shadow-md active:scale-95 w-full md:w-auto">
                                Submit Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", () => {

                const faqs = document.querySelectorAll("details");

                faqs.forEach((faq) => {

                    faq.addEventListener("toggle", () => {

                        // Close others (accordion)
                        if (faq.open) {
                            faqs.forEach((item) => {
                                if (item !== faq) {
                                    item.open = false;
                                    item.classList.remove("bg-lightBg", "border-brandgreen");
                                    item.classList.add("border-gray-100");
                                }
                            });

                            // Active style when open
                            faq.classList.add("bg-lightBg", "border-brandgreen");
                            faq.classList.remove("border-gray-100");

                        } else {
                            // Style when closed
                            faq.classList.remove("bg-lightBg", "border-brandgreen");
                            faq.classList.add("border-gray-100");
                        }

                    });

                });

            });
        </script>
    @endpush
@endsection

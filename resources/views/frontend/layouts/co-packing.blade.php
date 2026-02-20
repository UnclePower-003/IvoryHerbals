@extends('frontend.app')

@section('content')
    <header class="relative w-full bg-[#D9D9D9] overflow-hidden">
        <img src="{{ asset('images/co_packing/image-11-3.png') }}" class="w-full h-[400px] md:h-[600px] object-cover opacity-80"
            alt="Production Facility" />
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="absolute inset-0 z-10 max-w-7xl mx-auto px-6 space-y-4 flex flex-col items-start justify-center">
            <h1 class="text-white font-bold text-[36px] md:text-[48px] leading-tight  max-w-2xl">
                Complete Co-Packaging Solutions
            </h1>
            <p class="text-white max-w-xl tracking-wider text-[16px] text-left ">
                We handle the complexity of packaging, labeling, and fulfillment so
                you can focus on growing your business.
            </p>
            <button
                class="bg-[#7CB80E] rounded-[12px] px-6 py-2 text-white font-medium text-[22px]  transform transition hover:scale-105 active:scale-95">
                Get a Quote
            </button>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-4 md:px-6 pt-20 text-center">
        <p class="text-[#7CB80E] font-bold text-[16px] tracking-widest uppercase mb-4">
            PROFESSIONAL CO-PACKING
        </p>
        <h2 class="font-bold text-[30px] md:text-[36px] mb-6">
            <span class="text-[#7CB80E]">Industrial-Grade</span> Honey Co-Packing
            Solutions
        </h2>
        <p class="text-[#6F6F6F] font-medium text-[18px] md:text-[20px] max-w-4xl mx-auto">
            We manage filling, sealing, labeling, and packaging with strict quality
            control so you can scale faster with confidence.
        </p>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- card1 -->
            <div class="bg-white border border-gray-200 rounded-[32px] p-3 shadow-sm flex flex-col h-full">
                <img src="{{ asset('images/co_packing/rectangle-128-60.png') }}" class="w-full h-48 object-cover rounded-[20px] mb-8"
                    alt="Honey Straws" />
                <div class="text-center px-2">
                    <h4 class="text-[24px] font-bold text-[#333333] mb-4">
                        Honey Straws Packaging
                    </h4>
                    <p class="text-[#333333] text-[15px] mb-8 text-left">
                        Single-serve packaging for high-volume retail and travel.
                    </p>
                </div>
                <div class="space-y-4 mb-8 px-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                </div>
                <hr class="border-gray-100 mb-8" />
                <div class="mt-auto text-center">
                    <div class="inline-block bg-[#F7FBEA] rounded-full px-8 py-2 mb-4 text-[#7CB80E] font-bold">
                        Ideal For
                    </div>
                    <p class="text-[15px] font-bold">Sampling, Cafés, Events</p>
                </div>
            </div>
            <!-- card2 -->
            <div class="bg-white border border-gray-200 rounded-[32px] p-3 shadow-sm flex flex-col h-full">
                <img src="{{ asset('images/co_packing/rectangle-129-61.png') }}" class="w-full h-48 object-cover rounded-[20px] mb-8"
                    alt="Honey Straws" />
                <div class="text-center px-2">
                    <h4 class="text-[24px] font-bold text-[#333333] mb-4">
                        Honey Straws Packaging
                    </h4>
                    <p class="text-[#333333] text-[15px] mb-8 text-left">
                        Single-serve packaging for high-volume retail and travel.
                    </p>
                </div>
                <div class="space-y-4 mb-8 px-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                </div>
                <hr class="border-gray-100 mb-8" />
                <div class="mt-auto text-center">
                    <div class="inline-block bg-[#F7FBEA] rounded-full px-8 py-2 mb-4 text-[#7CB80E] font-bold">
                        Ideal For
                    </div>
                    <p class="text-[15px] font-bold">Sampling, Cafés, Events</p>
                </div>
            </div>
            <!-- card3 -->
            <div class="bg-white border border-gray-200 rounded-[32px] p-3 shadow-sm flex flex-col h-full">
                <img src="{{ asset('images/co_packing/rectangle-130-62.png') }}" class="w-full h-48 object-cover rounded-[20px] mb-8"
                    alt="Honey Straws" />
                <div class="text-center px-2">
                    <h4 class="text-[24px] font-bold text-[#333333] mb-4">
                        Honey Straws Packaging
                    </h4>
                    <p class="text-[#333333] text-[15px] mb-8 text-left">
                        Single-serve packaging for high-volume retail and travel.
                    </p>
                </div>
                <div class="space-y-4 mb-8 px-4">
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#7CB80E] rounded-full p-1">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="4">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-[15px]">Heat-sealed ends</span>
                    </div>
                </div>
                <hr class="border-gray-100 mb-8" />
                <div class="mt-auto text-center">
                    <div class="inline-block bg-[#F7FBEA] rounded-full px-8 py-2 mb-4 text-[#7CB80E] font-bold">
                        Ideal For
                    </div>
                    <p class="text-[15px] font-bold">Sampling, Cafés, Events</p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-3 pt-16">
        <div
            class="bg-white border border-[#D9D9D9] rounded-[20px] p-6 px-8 flex flex-col md:flex-row items-center gap-8 text-left max-w-7xl mx-auto mb-10">
            <div class="bg-[#F9FAFB] p-4 rounded-xl border border-gray-50 shrink-0">
                <img src="{{ asset('images/co_packing/vector-39.svg') }}" class="w-10 h-10" alt="gear icon" />
            </div>
            <div class="flex-1">
                <h3 class="text-[#333333] font-semibold text-[26px] md:text-[32px] leading-tight">
                    Custom Packaging Configurations
                </h3>
                <p class="text-[#333333] text-[16px] md:text-[18px] font-medium">
                    Looking for a specific container type? Our production line can be
                    adjusted to meet your needs.
                </p>
            </div>
            <button
                class="bg-[#0F172A] text-white rounded-[10px] px-8 py-4 font-medium text-[18px] hover:bg-black transition">
                Let’s Discuss Custom Requirements
            </button>
        </div>
    </section>

    <section class="bg-white mx-auto px-4 md:px-6 py-20">
        <div class="p-3 text-center">
            <h2 class="text-[#0F172A] font-bold text-[32px] md:text-[45px] leading-tight mb-6">
                Ready to Increase Your Packaging Capacity?
            </h2>
            <p class="text-[#6F6F6F] font-medium text-[18px] md:text-[20px] max-w-3xl mx-auto mb-10">
                We manage filling, sealing, and production control. Request a
                quotation and receive a response within 24 hours.
            </p>
            <button
                class="bg-[#7CB80E] rounded-full px-10 py-3 shadow-lg text-white font-medium text-[22px]  hover:scale-105 transition">
                Get a Quote Today
            </button>
        </div>
    </section>
@endsection

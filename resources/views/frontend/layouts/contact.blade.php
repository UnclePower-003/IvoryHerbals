@extends('frontend.app')

@section('content')
    @push('style')
        <style>
            .contact-heading {
                font-weight: 700;
                font-size: 3.5rem;
                /* Adjust as needed */
                line-height: 1;
                color: #000;
            }

            .contact-subheading {
                font-weight: 400;
                font-size: 1.25rem;
                color: #333;
            }

            .underline-custom {
                width: 100%;
                max-width: 450px;
                height: 2px;
                margin: 1rem auto;
            }
        </style>
    @endpush
    <!-- BANNER -->
    <section class="relative bg-red-500 w-full   h-[400px] flex items-center justify-center overflow-hidden">
        {{-- image section --}}
        <div class="absolute inset-0  h-ful w-full">
            <img src="{{ asset('images/contact/contant-us-banner-0.png') }}" alt="Laptop and pen"
                class="h-full w-full object-cover object-center hidden lg:block">
            <img src="{{ asset('images/contact/contact.svg') }}" alt="Laptop and pen"
                class="h-full w-full object-cover object-center hidden md:block">
            <img src="{{ asset('images/contact/bannermobile_i.png') }}" alt="Laptop and pen"
                class="h-full w-full object-cover object-center">
        </div>
        {{-- content --}}

        <div
            class="absolute inset-0 flex flex-col justify-center items-center text-center px-4 lg:px-0 z-10 mb-8 lg:mb-0 h-full w-full max-lg:bg-black/40 ">
            <h1 class="contact-heading mb-4 max-lg:text-white  text-black ">Contact Us</h1>
            <div class="underline-custom max-lg:bg-white bg-black "></div>
            <p class="contact-subheading max-lg:text-white text-black">Let's get in touch and explore business opportunities</p>
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
@endsection

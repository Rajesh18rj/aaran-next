<main>
    @php
        $logos = [
            'sk-logo.jpeg',
            'sk-logo.jpeg',
             'sk-logo.jpeg',
        ];
    @endphp

    <div class="mx-auto max-w-7xl text-center py-8">
        <div class="mt-8">
            <p class="font-display text-base text-slate-900">
                Trusted by these companies so far
            </p>
            <ul
                role="list"
                class="mt-8 flex flex-wrap items-center justify-center gap-8 sm:flex-col sm:gap-y-6 xl:flex-row xl:gap-x-12 xl:gap-y-0"
            >
                @foreach ($logos as $logo)
                    <li class="flex h-fit">
                        <img
                            src="{{ asset('images/logo/' . $logo) }}"
                            alt="Company Logo"
                            class="h-16 w-auto object-contain"
                        />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


    <section id="secondary-features" aria-label="Features for simplifying everyday business tasks"
             class="pt-20 pb-14 sm:pt-32 sm:pb-20 lg:pb-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl md:text-center"><h2
                    class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">Simplify everyday business
                    tasks.</h2>
                <p class="mt-4 text-lg tracking-tight text-slate-700">Because you’d probably be a little confused if we
                    suggested you complicate your everyday business tasks instead.</p></div>
            <div class="-mx-4 mt-20 flex flex-col gap-y-10 overflow-hidden px-4 sm:-mx-6 sm:px-6 lg:hidden">
                <div>
                    <div class="mx-auto max-w-2xl">
                        <div class="w-9 rounded-lg bg-blue-600">
                            <svg aria-hidden="true" class="h-9 w-9" fill="none">
                                <defs>
                                    <linearGradient id=":Rapqfja:" x1="11.5" y1="18" x2="36" y2="15.5"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".194" stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#6692F1"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="m30 15-4 5-4-11-4 18-4-11-4 7-4-5" stroke="url(#:Rapqfja:)" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-sm font-medium text-blue-600">Reporting</h3>
                        <p class="mt-2 font-display text-xl text-slate-900">Stay on top of things with always up-to-date
                            reporting features.</p>
                        <p class="mt-4 text-sm text-slate-600">We talked about reporting in the section above but we
                            needed three items here, so mentioning it one more time for posterity.</p></div>
                    <div class="relative mt-10 pb-10">
                        <div class="absolute -inset-x-4 top-8 bottom-0 bg-slate-200 sm:-inset-x-6"></div>
                        <div
                            class="relative mx-auto w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg ring-1 shadow-slate-900/5 ring-slate-500/10">
                            <img alt="" loading="lazy" width="1688" height="856" decoding="async" data-nimg="1"
                                 class="w-full" style="color:transparent" sizes="52.75rem"
                                 srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=3840&amp;q=75 3840w"
                                 src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=3840&amp;q=75">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mx-auto max-w-2xl">
                        <div class="w-9 rounded-lg bg-blue-600">
                            <svg aria-hidden="true" class="h-9 w-9" fill="none">
                                <path opacity=".5"
                                      d="M8 17a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2Z"
                                      fill="#fff"></path>
                                <path opacity=".3"
                                      d="M8 24a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2Z"
                                      fill="#fff"></path>
                                <path d="M8 10a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2Z"
                                      fill="#fff"></path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-sm font-medium text-blue-600">Inventory</h3>
                        <p class="mt-2 font-display text-xl text-slate-900">Never lose track of what’s in stock with
                            accurate inventory tracking.</p>
                        <p class="mt-4 text-sm text-slate-600">We don’t offer this as part of our software but that
                            statement is inarguably true. Accurate inventory tracking would help you for sure.</p></div>
                    <div class="relative mt-10 pb-10">
                        <div class="absolute -inset-x-4 top-8 bottom-0 bg-slate-200 sm:-inset-x-6"></div>
                        <div
                            class="relative mx-auto w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg ring-1 shadow-slate-900/5 ring-slate-500/10">
                            <img alt="" loading="lazy" width="1688" height="856" decoding="async" data-nimg="1"
                                 class="w-full" style="color:transparent" sizes="52.75rem"
                                 srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=3840&amp;q=75 3840w"
                                 src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=3840&amp;q=75">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mx-auto max-w-2xl">
                        <div class="w-9 rounded-lg bg-blue-600">
                            <svg aria-hidden="true" class="h-9 w-9" fill="none">
                                <path opacity=".5"
                                      d="M25.778 25.778c.39.39 1.027.393 1.384-.028A11.952 11.952 0 0 0 30 18c0-6.627-5.373-12-12-12S6 11.373 6 18c0 2.954 1.067 5.659 2.838 7.75.357.421.993.419 1.384.028.39-.39.386-1.02.036-1.448A9.959 9.959 0 0 1 8 18c0-5.523 4.477-10 10-10s10 4.477 10 10a9.959 9.959 0 0 1-2.258 6.33c-.35.427-.354 1.058.036 1.448Z"
                                      fill="#fff"></path>
                                <path
                                    d="M12 28.395V28a6 6 0 0 1 12 0v.395A11.945 11.945 0 0 1 18 30c-2.186 0-4.235-.584-6-1.605ZM21 16.5c0-1.933-.5-3.5-3-3.5s-3 1.567-3 3.5 1.343 3.5 3 3.5 3-1.567 3-3.5Z"
                                    fill="#fff"></path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-sm font-medium text-blue-600">Contacts</h3>
                        <p class="mt-2 font-display text-xl text-slate-900">Organize all of your contacts, service
                            providers, and invoices in one place.</p>
                        <p class="mt-4 text-sm text-slate-600">This also isn’t actually a feature, it’s just some
                            friendly advice. We definitely recommend that you do this, you’ll feel really organized and
                            professional.</p></div>
                    <div class="relative mt-10 pb-10">
                        <div class="absolute -inset-x-4 top-8 bottom-0 bg-slate-200 sm:-inset-x-6"></div>
                        <div
                            class="relative mx-auto w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg ring-1 shadow-slate-900/5 ring-slate-500/10">
                            <img alt="" loading="lazy" width="1688" height="856" decoding="async" data-nimg="1"
                                 class="w-full" style="color:transparent" sizes="52.75rem"
                                 srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=3840&amp;q=75 3840w"
                                 src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=3840&amp;q=75">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:mt-20 lg:block">
                <div class="grid grid-cols-3 gap-x-8" role="tablist" aria-orientation="horizontal">
                    <div class="relative">
                        <div class="w-9 rounded-lg bg-blue-600">
                            <svg aria-hidden="true" class="h-9 w-9" fill="none">
                                <defs>
                                    <linearGradient id=":R1bdqfja:" x1="11.5" y1="18" x2="36" y2="15.5"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset=".194" stop-color="#fff"></stop>
                                        <stop offset="1" stop-color="#6692F1"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="m30 15-4 5-4-11-4 18-4-11-4 7-4-5" stroke="url(#:R1bdqfja:)" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-sm font-medium text-blue-600">
                            <button class="data-selected:not-data-focus:outline-hidden"
                                    id="headlessui-tabs-tab-:R2bdqfja:" role="tab" type="button" aria-selected="true"
                                    tabindex="0" data-headlessui-state="selected" data-selected=""
                                    aria-controls="headlessui-tabs-panel-:R1ddqfja:"><span
                                    class="absolute inset-0"></span>Reporting
                            </button>
                        </h3>
                        <p class="mt-2 font-display text-xl text-slate-900">Stay on top of things with always up-to-date
                            reporting features.</p>
                        <p class="mt-4 text-sm text-slate-600">We talked about reporting in the section above but we
                            needed three items here, so mentioning it one more time for posterity.</p></div>
                    <div class="relative opacity-75 hover:opacity-100">
                        <div class="w-9 rounded-lg bg-slate-500">
                            <svg aria-hidden="true" class="h-9 w-9" fill="none">
                                <path opacity=".5"
                                      d="M8 17a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2Z"
                                      fill="#fff"></path>
                                <path opacity=".3"
                                      d="M8 24a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2Z"
                                      fill="#fff"></path>
                                <path d="M8 10a1 1 0 0 1 1-1h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2Z"
                                      fill="#fff"></path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-sm font-medium text-slate-600">
                            <button class="data-selected:not-data-focus:outline-hidden"
                                    id="headlessui-tabs-tab-:R2jdqfja:" role="tab" type="button" aria-selected="false"
                                    tabindex="-1" data-headlessui-state=""
                                    aria-controls="headlessui-tabs-panel-:R2ddqfja:"><span
                                    class="absolute inset-0"></span>Inventory
                            </button>
                        </h3>
                        <p class="mt-2 font-display text-xl text-slate-900">Never lose track of what’s in stock with
                            accurate inventory tracking.</p>
                        <p class="mt-4 text-sm text-slate-600">We don’t offer this as part of our software but that
                            statement is inarguably true. Accurate inventory tracking would help you for sure.</p></div>
                    <div class="relative opacity-75 hover:opacity-100">
                        <div class="w-9 rounded-lg bg-slate-500">
                            <svg aria-hidden="true" class="h-9 w-9" fill="none">
                                <path opacity=".5"
                                      d="M25.778 25.778c.39.39 1.027.393 1.384-.028A11.952 11.952 0 0 0 30 18c0-6.627-5.373-12-12-12S6 11.373 6 18c0 2.954 1.067 5.659 2.838 7.75.357.421.993.419 1.384.028.39-.39.386-1.02.036-1.448A9.959 9.959 0 0 1 8 18c0-5.523 4.477-10 10-10s10 4.477 10 10a9.959 9.959 0 0 1-2.258 6.33c-.35.427-.354 1.058.036 1.448Z"
                                      fill="#fff"></path>
                                <path
                                    d="M12 28.395V28a6 6 0 0 1 12 0v.395A11.945 11.945 0 0 1 18 30c-2.186 0-4.235-.584-6-1.605ZM21 16.5c0-1.933-.5-3.5-3-3.5s-3 1.567-3 3.5 1.343 3.5 3 3.5 3-1.567 3-3.5Z"
                                    fill="#fff"></path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-sm font-medium text-slate-600">
                            <button class="data-selected:not-data-focus:outline-hidden"
                                    id="headlessui-tabs-tab-:R2rdqfja:" role="tab" type="button" aria-selected="false"
                                    tabindex="-1" data-headlessui-state=""
                                    aria-controls="headlessui-tabs-panel-:R3ddqfja:"><span
                                    class="absolute inset-0"></span>Contacts
                            </button>
                        </h3>
                        <p class="mt-2 font-display text-xl text-slate-900">Organize all of your contacts, service
                            providers, and invoices in one place.</p>
                        <p class="mt-4 text-sm text-slate-600">This also isn’t actually a feature, it’s just some
                            friendly advice. We definitely recommend that you do this, you’ll feel really organized and
                            professional.</p></div>
                </div>
                <div class="relative mt-20 overflow-hidden rounded-4xl bg-slate-200 px-14 py-16 xl:px-16">
                    <div class="-mx-5 flex">
                        <div
                            class="px-5 transition duration-500 ease-in-out data-selected:not-data-focus:outline-hidden"
                            style="transform:translateX(-0%)" aria-hidden="false" id="headlessui-tabs-panel-:R1ddqfja:"
                            role="tabpanel" tabindex="0" data-headlessui-state="selected" data-selected=""
                            aria-labelledby="headlessui-tabs-tab-:R2bdqfja:">
                            <div
                                class="w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg ring-1 shadow-slate-900/5 ring-slate-500/10">
                                <img alt="" loading="lazy" width="1688" height="856" decoding="async" data-nimg="1"
                                     class="w-full" style="color:transparent" sizes="52.75rem"
                                     srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=3840&amp;q=75 3840w"
                                     src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fprofit-loss.2a2f85d5.png&amp;w=3840&amp;q=75">
                            </div>
                        </div>
                        <div
                            class="px-5 transition duration-500 ease-in-out data-selected:not-data-focus:outline-hidden opacity-60"
                            style="transform:translateX(-0%)" aria-hidden="true" id="headlessui-tabs-panel-:R2ddqfja:"
                            role="tabpanel" tabindex="-1" data-headlessui-state=""
                            aria-labelledby="headlessui-tabs-tab-:R2jdqfja:">
                            <div
                                class="w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg ring-1 shadow-slate-900/5 ring-slate-500/10">
                                <img alt="" loading="lazy" width="1688" height="856" decoding="async" data-nimg="1"
                                     class="w-full" style="color:transparent" sizes="52.75rem"
                                     srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=3840&amp;q=75 3840w"
                                     src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Finventory.14ec7758.png&amp;w=3840&amp;q=75">
                            </div>
                        </div>
                        <div
                            class="px-5 transition duration-500 ease-in-out data-selected:not-data-focus:outline-hidden opacity-60"
                            style="transform:translateX(-0%)" aria-hidden="true" id="headlessui-tabs-panel-:R3ddqfja:"
                            role="tabpanel" tabindex="-1" data-headlessui-state=""
                            aria-labelledby="headlessui-tabs-tab-:R2rdqfja:">
                            <div
                                class="w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg ring-1 shadow-slate-900/5 ring-slate-500/10">
                                <img alt="" loading="lazy" width="1688" height="856" decoding="async" data-nimg="1"
                                     class="w-full" style="color:transparent" sizes="52.75rem"
                                     srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=3840&amp;q=75 3840w"
                                     src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcontacts.a61dce95.png&amp;w=3840&amp;q=75">
                            </div>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-0 rounded-4xl ring-1 ring-slate-900/10 ring-inset"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="get-started-today" class="relative overflow-hidden bg-blue-600 py-32"><img alt="" loading="lazy"
                                                                                            width="2347" height="1244"
                                                                                            decoding="async"
                                                                                            data-nimg="1"
                                                                                            class="absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2"
                                                                                            style="color:transparent"
                                                                                            src="/_next/static/media/background-call-to-action.6a5a5672.jpg">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
            <div class="mx-auto max-w-lg text-center"><h2
                    class="font-display text-3xl tracking-tight text-white sm:text-4xl">Get started today</h2>
                <p class="mt-4 text-lg tracking-tight text-white">It’s time to take control of your books. Buy our
                    software so you can feel like you’re doing something productive.</p><a
                    class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-hidden focus-visible:outline-2 focus-visible:outline-offset-2 bg-white text-slate-900 hover:bg-blue-50 active:bg-blue-200 active:text-slate-600 focus-visible:outline-white mt-10"
                    color="white" variant="solid" href="/register">Get 6 months free</a></div>
        </div>
    </section>

    <section id="testimonials" aria-label="What our customers are saying" class="bg-slate-50 py-20 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl md:text-center"><h2
                    class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">Loved by businesses
                    worldwide.</h2>
                <p class="mt-4 text-lg tracking-tight text-slate-700">Our software is so simple that people can’t help
                    but fall in love with it. Simplicity is easy when you just skip tons of mission-critical
                    features.</p></div>
            <ul role="list"
                class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:gap-8 lg:mt-20 lg:max-w-none lg:grid-cols-3">
                <li>
                    <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                        <li>
                            <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10">
                                <svg aria-hidden="true" width="105" height="78"
                                     class="absolute top-6 left-6 fill-slate-100">
                                    <path
                                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                </svg>
                                <blockquote class="relative"><p class="text-lg tracking-tight text-slate-900">TaxPal is
                                        so easy to use I can’t help but wonder if it’s really doing the things the
                                        government expects me to do.</p></blockquote>
                                <figcaption
                                    class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                    <div>
                                        <div class="font-display text-base text-slate-900">Sheryl Berge</div>
                                        <div class="mt-1 text-sm text-slate-500">CEO at Lynch LLC</div>
                                    </div>
                                    <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy"
                                                                                               width="56" height="56"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="h-14 w-14 object-cover"
                                                                                               style="color:transparent"
                                                                                               srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-1.c78616b7.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-1.c78616b7.png&amp;w=128&amp;q=75 2x"
                                                                                               src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-1.c78616b7.png&amp;w=128&amp;q=75">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10">
                                <svg aria-hidden="true" width="105" height="78"
                                     class="absolute top-6 left-6 fill-slate-100">
                                    <path
                                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                </svg>
                                <blockquote class="relative"><p class="text-lg tracking-tight text-slate-900">I’m trying
                                        to get a hold of someone in support, I’m in a lot of trouble right now and they
                                        are saying it has something to do with my books. Please get back to me right
                                        away.</p></blockquote>
                                <figcaption
                                    class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                    <div>
                                        <div class="font-display text-base text-slate-900">Amy Hahn</div>
                                        <div class="mt-1 text-sm text-slate-500">Director at Velocity Industries</div>
                                    </div>
                                    <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy"
                                                                                               width="56" height="56"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="h-14 w-14 object-cover"
                                                                                               style="color:transparent"
                                                                                               srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&amp;w=128&amp;q=75 2x"
                                                                                               src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&amp;w=128&amp;q=75">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                        <li>
                            <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10">
                                <svg aria-hidden="true" width="105" height="78"
                                     class="absolute top-6 left-6 fill-slate-100">
                                    <path
                                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                </svg>
                                <blockquote class="relative"><p class="text-lg tracking-tight text-slate-900">The best
                                        part about TaxPal is every time I pay my employees, my bank balance doesn’t go
                                        down like it used to. Looking forward to spending this extra cash when I figure
                                        out why my card is being declined.</p></blockquote>
                                <figcaption
                                    class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                    <div>
                                        <div class="font-display text-base text-slate-900">Leland Kiehn</div>
                                        <div class="mt-1 text-sm text-slate-500">Founder of Kiehn and Sons</div>
                                    </div>
                                    <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy"
                                                                                               width="56" height="56"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="h-14 w-14 object-cover"
                                                                                               style="color:transparent"
                                                                                               srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-5.e7f7faf2.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-5.e7f7faf2.png&amp;w=128&amp;q=75 2x"
                                                                                               src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-5.e7f7faf2.png&amp;w=128&amp;q=75">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10">
                                <svg aria-hidden="true" width="105" height="78"
                                     class="absolute top-6 left-6 fill-slate-100">
                                    <path
                                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                </svg>
                                <blockquote class="relative"><p class="text-lg tracking-tight text-slate-900">There are
                                        so many things I had to do with my old software that I just don’t do at all with
                                        TaxPal. Suspicious but I can’t say I don’t love it.</p></blockquote>
                                <figcaption
                                    class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                    <div>
                                        <div class="font-display text-base text-slate-900">Erin Powlowski</div>
                                        <div class="mt-1 text-sm text-slate-500">COO at Armstrong Inc</div>
                                    </div>
                                    <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy"
                                                                                               width="56" height="56"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="h-14 w-14 object-cover"
                                                                                               style="color:transparent"
                                                                                               srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-2.c72e5a40.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-2.c72e5a40.png&amp;w=128&amp;q=75 2x"
                                                                                               src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-2.c72e5a40.png&amp;w=128&amp;q=75">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                        <li>
                            <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10">
                                <svg aria-hidden="true" width="105" height="78"
                                     class="absolute top-6 left-6 fill-slate-100">
                                    <path
                                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                </svg>
                                <blockquote class="relative"><p class="text-lg tracking-tight text-slate-900">I used to
                                        have to remit tax to the EU and with TaxPal I somehow don’t have to do that
                                        anymore. Nervous to travel there now though.</p></blockquote>
                                <figcaption
                                    class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                    <div>
                                        <div class="font-display text-base text-slate-900">Peter Renolds</div>
                                        <div class="mt-1 text-sm text-slate-500">Founder of West Inc</div>
                                    </div>
                                    <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy"
                                                                                               width="56" height="56"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="h-14 w-14 object-cover"
                                                                                               style="color:transparent"
                                                                                               srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-3.eaa9ef6f.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-3.eaa9ef6f.png&amp;w=128&amp;q=75 2x"
                                                                                               src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-3.eaa9ef6f.png&amp;w=128&amp;q=75">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10">
                                <svg aria-hidden="true" width="105" height="78"
                                     class="absolute top-6 left-6 fill-slate-100">
                                    <path
                                        d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                </svg>
                                <blockquote class="relative"><p class="text-lg tracking-tight text-slate-900">This is
                                        the fourth email I’ve sent to your support team. I am literally being held in
                                        jail for tax fraud. Please answer your damn emails, this is important.</p>
                                </blockquote>
                                <figcaption
                                    class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                    <div>
                                        <div class="font-display text-base text-slate-900">Amy Hahn</div>
                                        <div class="mt-1 text-sm text-slate-500">Director at Velocity Industries</div>
                                    </div>
                                    <div class="overflow-hidden rounded-full bg-slate-50"><img alt="" loading="lazy"
                                                                                               width="56" height="56"
                                                                                               decoding="async"
                                                                                               data-nimg="1"
                                                                                               class="h-14 w-14 object-cover"
                                                                                               style="color:transparent"
                                                                                               srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&amp;w=64&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&amp;w=128&amp;q=75 2x"
                                                                                               src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar-4.16b4e29e.png&amp;w=128&amp;q=75">
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <section id="pricing" aria-label="Pricing" class="bg-slate-900 py-20 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="md:text-center">
                <h2 class="font-display text-3xl tracking-tight text-white sm:text-4xl"><span
                        class="relative whitespace-nowrap"><svg aria-hidden="true" viewBox="0 0 281 40"
                                                                preserveAspectRatio="none"
                                                                class="absolute top-1/2 left-0 h-[1em] w-full fill-blue-400"><path
                                fill-rule="evenodd" clip-rule="evenodd"
                                d="M240.172 22.994c-8.007 1.246-15.477 2.23-31.26 4.114-18.506 2.21-26.323 2.977-34.487 3.386-2.971.149-3.727.324-6.566 1.523-15.124 6.388-43.775 9.404-69.425 7.31-26.207-2.14-50.986-7.103-78-15.624C10.912 20.7.988 16.143.734 14.657c-.066-.381.043-.344 1.324.456 10.423 6.506 49.649 16.322 77.8 19.468 23.708 2.65 38.249 2.95 55.821 1.156 9.407-.962 24.451-3.773 25.101-4.692.074-.104.053-.155-.058-.135-1.062.195-13.863-.271-18.848-.687-16.681-1.389-28.722-4.345-38.142-9.364-15.294-8.15-7.298-19.232 14.802-20.514 16.095-.934 32.793 1.517 47.423 6.96 13.524 5.033 17.942 12.326 11.463 18.922l-.859.874.697-.006c2.681-.026 15.304-1.302 29.208-2.953 25.845-3.07 35.659-4.519 54.027-7.978 9.863-1.858 11.021-2.048 13.055-2.145a61.901 61.901 0 0 0 4.506-.417c1.891-.259 2.151-.267 1.543-.047-.402.145-2.33.913-4.285 1.707-4.635 1.882-5.202 2.07-8.736 2.903-3.414.805-19.773 3.797-26.404 4.829Zm40.321-9.93c.1-.066.231-.085.29-.041.059.043-.024.096-.183.119-.177.024-.219-.007-.107-.079ZM172.299 26.22c9.364-6.058 5.161-12.039-12.304-17.51-11.656-3.653-23.145-5.47-35.243-5.576-22.552-.198-33.577 7.462-21.321 14.814 12.012 7.205 32.994 10.557 61.531 9.831 4.563-.116 5.372-.288 7.337-1.559Z"></path></svg><span
                            class="relative">Simple pricing,</span></span> <!-- -->for everyone.
                </h2>
                <p class="mt-4 text-lg text-slate-400">It doesn’t matter what size your business is, our software won’t
                    work well for you.</p></div>
            <div
                class="-mx-4 mt-16 grid max-w-2xl grid-cols-1 gap-y-10 sm:mx-auto lg:-mx-8 lg:max-w-none lg:grid-cols-3 xl:mx-0 xl:gap-x-8">
                <section class="flex flex-col rounded-3xl px-6 sm:px-8 lg:py-8"><h3
                        class="mt-5 font-display text-lg text-white">Starter</h3>
                    <p class="mt-2 text-base text-slate-400">Good for anyone who is self-employed and just getting
                        started.</p>
                    <p class="order-first font-display text-5xl font-light tracking-tight text-white">$9</p>
                    <ul role="list" class="order-last mt-10 flex flex-col gap-y-3 text-sm text-slate-200">
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Send 10 quotes and invoices</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Connect up to 2 bank accounts</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Track up to 15 expenses per month</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Manual payroll support</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Export up to 3 reports</span></li>
                    </ul>
                    <a class="group inline-flex ring-1 items-center justify-center rounded-full py-2 px-4 text-sm focus:outline-hidden ring-slate-700 text-white hover:ring-slate-500 active:ring-slate-700 active:text-slate-400 focus-visible:outline-white mt-8"
                       variant="outline" color="white" aria-label="Get started with the Starter plan for $9"
                       href="/register">Get started</a></section>
                <section class="flex flex-col rounded-3xl px-6 sm:px-8 order-first bg-blue-600 py-8 lg:order-none"><h3
                        class="mt-5 font-display text-lg text-white">Small business</h3>
                    <p class="mt-2 text-base text-white">Perfect for small / medium sized businesses.</p>
                    <p class="order-first font-display text-5xl font-light tracking-tight text-white">$15</p>
                    <ul role="list" class="order-last mt-10 flex flex-col gap-y-3 text-sm text-white">
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Send 25 quotes and invoices</span></li>
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Connect up to 5 bank accounts</span></li>
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Track up to 50 expenses per month</span></li>
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Automated payroll support</span></li>
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Export up to 12 reports</span></li>
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Bulk reconcile transactions</span></li>
                        <li class="flex">
                            <svg aria-hidden="true" class="h-6 w-6 flex-none fill-current stroke-current text-white">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Track in multiple currencies</span></li>
                    </ul>
                    <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-hidden focus-visible:outline-2 focus-visible:outline-offset-2 bg-white text-slate-900 hover:bg-blue-50 active:bg-blue-200 active:text-slate-600 focus-visible:outline-white mt-8"
                       variant="solid" color="white" aria-label="Get started with the Small business plan for $15"
                       href="/register">Get started</a></section>
                <section class="flex flex-col rounded-3xl px-6 sm:px-8 lg:py-8"><h3
                        class="mt-5 font-display text-lg text-white">Enterprise</h3>
                    <p class="mt-2 text-base text-slate-400">For even the biggest enterprise companies.</p>
                    <p class="order-first font-display text-5xl font-light tracking-tight text-white">$39</p>
                    <ul role="list" class="order-last mt-10 flex flex-col gap-y-3 text-sm text-slate-200">
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Send unlimited quotes and invoices</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Connect up to 15 bank accounts</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Track up to 200 expenses per month</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Automated payroll support</span></li>
                        <li class="flex">
                            <svg aria-hidden="true"
                                 class="h-6 w-6 flex-none fill-current stroke-current text-slate-400">
                                <path
                                    d="M9.307 12.248a.75.75 0 1 0-1.114 1.004l1.114-1.004ZM11 15.25l-.557.502a.75.75 0 0 0 1.15-.043L11 15.25Zm4.844-5.041a.75.75 0 0 0-1.188-.918l1.188.918Zm-7.651 3.043 2.25 2.5 1.114-1.004-2.25-2.5-1.114 1.004Zm3.4 2.457 4.25-5.5-1.187-.918-4.25 5.5 1.188.918Z"
                                    stroke-width="0"></path>
                                <circle cx="12" cy="12" r="8.25" fill="none" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></circle>
                            </svg>
                            <span class="ml-4">Export up to 25 reports, including TPS</span></li>
                    </ul>
                    <a class="group inline-flex ring-1 items-center justify-center rounded-full py-2 px-4 text-sm focus:outline-hidden ring-slate-700 text-white hover:ring-slate-500 active:ring-slate-700 active:text-slate-400 focus-visible:outline-white mt-8"
                       variant="outline" color="white" aria-label="Get started with the Enterprise plan for $39"
                       href="/register">Get started</a></section>
            </div>
        </div>
    </section>

    <section id="faq" aria-labelledby="faq-title" class="relative overflow-hidden bg-slate-50 py-20 sm:py-32"><img
            alt="" loading="lazy" width="1558" height="946" decoding="async" data-nimg="1"
            class="absolute top-0 left-1/2 max-w-none translate-x-[-30%] -translate-y-1/4" style="color:transparent"
            src="/_next/static/media/background-faqs.55d2e36a.jpg">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
            <div class="mx-auto max-w-2xl lg:mx-0"><h2 id="faq-title"
                                                       class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">
                    Frequently asked questions</h2>
                <p class="mt-4 text-lg tracking-tight text-slate-700">If you can’t find what you’re looking for, email
                    our support team and if you’re lucky someone will get back to you.</p></div>
            <ul role="list" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 lg:max-w-none lg:grid-cols-3">
                <li>
                    <ul role="list" class="flex flex-col gap-y-8">
                        <li><h3 class="font-display text-lg/7 text-slate-900">Does TaxPal handle VAT?</h3>
                            <p class="mt-4 text-sm text-slate-700">Well no, but if you move your company offshore you
                                can probably ignore it.</p></li>
                        <li><h3 class="font-display text-lg/7 text-slate-900">Can I pay for my subscription via purchase
                                order?</h3>
                            <p class="mt-4 text-sm text-slate-700">Absolutely, we are happy to take your money in all
                                forms.</p></li>
                        <li><h3 class="font-display text-lg/7 text-slate-900">How do I apply for a job at TaxPal?</h3>
                            <p class="mt-4 text-sm text-slate-700">We only hire our customers, so subscribe for a
                                minimum of 6 months and then let’s talk.</p></li>
                    </ul>
                </li>
                <li>
                    <ul role="list" class="flex flex-col gap-y-8">
                        <li><h3 class="font-display text-lg/7 text-slate-900">What was that testimonial about tax fraud
                                all about?</h3>
                            <p class="mt-4 text-sm text-slate-700">TaxPal is just a software application, ultimately
                                your books are your responsibility.</p></li>
                        <li><h3 class="font-display text-lg/7 text-slate-900">TaxPal sounds horrible but why do I still
                                feel compelled to purchase?</h3>
                            <p class="mt-4 text-sm text-slate-700">This is the power of excellent visual design. You
                                just can’t resist it, no matter how poorly it actually functions.</p></li>
                        <li><h3 class="font-display text-lg/7 text-slate-900">I found other companies called TaxPal, are
                                you sure you can use this name?</h3>
                            <p class="mt-4 text-sm text-slate-700">Honestly not sure at all. We haven’t actually
                                incorporated or anything, we just thought it sounded cool and made this website.</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul role="list" class="flex flex-col gap-y-8">
                        <li><h3 class="font-display text-lg/7 text-slate-900">How do you generate reports?</h3>
                            <p class="mt-4 text-sm text-slate-700">You just tell us what data you need a report for, and
                                we get our kids to create beautiful charts for you using only the finest crayons.</p>
                        </li>
                        <li><h3 class="font-display text-lg/7 text-slate-900">Can we expect more inventory
                                features?</h3>
                            <p class="mt-4 text-sm text-slate-700">In life it’s really better to never expect anything
                                at all.</p></li>
                        <li><h3 class="font-display text-lg/7 text-slate-900">I lost my password, how do I get into my
                                account?</h3>
                            <p class="mt-4 text-sm text-slate-700">Send us an email and we will send you a copy of our
                                latest password spreadsheet so you can find your information.</p></li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

</main>

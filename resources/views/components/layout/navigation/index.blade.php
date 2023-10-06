<nav {{ $attributes->merge(['class' => 'text-base lg:text-sm']) }}>
    <ul role="list" class="space-y-9">
        <li class="relative">
            <a href="{{ route('welcome') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                Welcome
            </a>
        </li>
        <li>
            <h2 class="font-medium text-slate-900 font-display dark:text-white">Introduction</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <a href="{{ route('docs.get-started') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Get Started
                    </a>
                </li>
                <li class="ml-4 relative">
                    <a href="{{ route('docs.installation') }}" class="text-gray-500 transition hover:text-gray-800 hover:underline">
                        Installation
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <h2 class="font-medium text-slate-900 font-display dark:text-white">Components</h2>
            <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">Form</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Input
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Textarea
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="ml-4 relative">
                    <h2 class="font-medium text-slate-900 font-display dark:text-white">UI</h2>
                    <ul role="list" class="mt-4 space-y-2 dark:border-slate-800 lg:space-y-4 lg:mt-4 lg:border-slate-200">
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Alert
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Avatar
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Badge
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Card
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Dropdown
                            </a>
                        </li>
                        <li class="ml-4 relative">
                            <a class="text-gray-500 transition hover:text-gray-800 hover:underline" href="/docs/understanding-caching">
                                Modal
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>

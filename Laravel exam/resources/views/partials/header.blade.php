<header>
    <nav id="header" class="bg-white fixed w-full z-10 pin-t shadow">

        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-black text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                    <i class="fas fa-sun text-orange-dark pr-3"></i> Expense tracker
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 pin-t pin-r min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="#" class="px-4 py-2 block text-black hover:bg-grey-light no-underline hover:no-underline">My account</a></li>
                                <li><a href="#" class="px-4 py-2 block text-black hover:bg-grey-light no-underline hover:no-underline">Notifications</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-light">
                                </li>
                                <li><a href="#" class="px-4 py-2 block text-black hover:bg-grey-light no-underline hover:no-underline">Logout</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-grey border-grey-dark hover:text-black hover:border-teal appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="/dashboard" class="block py-1 md:py-3 pl-1 align-middle text-orange-dark no-underline hover:text-black border-b-2 border-orange-dark hover:border-orange-dark">
                            <i class="fas fa-home fa-fw mr-3 text-orange-dark"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="/categories" class="block py-1 md:py-3 pl-1 align-middle text-grey no-underline hover:text-black border-b-2 border-white hover:border-pink">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Categories</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="/users" class="block py-1 md:py-3 pl-1 align-middle text-grey no-underline hover:text-black border-b-2 border-white hover:border-purple">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Users</span>
                        </a>
                    </li>                    
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="block font-bold py-1 md:py-3 pl-1 align-middle text-indigo-500 no-underline hover:text-black border-b-2 border-white hover:border-purple">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Logout</span>
                        </a>
                    </li>                    
                </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>

        </div>
    </nav>
</header>
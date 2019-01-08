<template>
    <div class="bg-black shadow-lg h-16 pin-l mt-12 md:relative md:h-screen z-10 w-full md:w-48">
        <div class="mt-12 w-48 fixed pin-l pin-t content-start text-left justify-between">
            <ul class="list-reset flex flex-col text-left py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :to="{ name: 'home'}">
                        <i class="fas fa-home pr-0 md:pr-3"></i><span class="nav-link-text">Home</span>
                    </router-link>
                </li>
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :to="{ name: 'stats'}">
                        <i class="fas fa-graph pr-0 md:pr-3"></i><span class="nav-link-text">Stats</span>
                    </router-link>
                </li>
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :to="{ name: 'forms'}">
                        <i class="fas fa-users pr-0 md:pr-3"></i><span class="nav-link-text">Forms</span>
                    </router-link>
                </li>
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :to="{ name: 'forms'}">
                        <i class="fas fa-cogs pr-0 md:pr-3"></i><span class="nav-link-text">Settings</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>


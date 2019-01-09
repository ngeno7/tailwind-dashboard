<template>
    <div :class="!toggle ? 'sidebar-max' : 'sidebar-min'">
        <div class="mt-12 w-48 fixed pin-l pin-t content-start text-left justify-between">
            <ul class="side-nav-list">
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :class="toggle ? '' : 'border-b-2'" :to="{ name: 'home'}">
                        <i class="fas fa-home pr-0 md:pr-3"></i>
                        <span class="nav-link-text" :class="!toggle ? 'visible' : 'invisible'">Home</span>
                    </router-link>
                </li>
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :class="toggle ? '' : 'border-b-2'" :to="{ name: 'stats'}">
                        <i class="fas fa-signal pr-0 md:pr-3"></i>
                        <span class="nav-link-text" :class="!toggle ? 'visible' : 'invisible'">Stats</span>
                    </router-link>
                </li>
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :class="toggle ? '' : 'border-b-2'" :to="{ name: 'forms'}">
                        <i class="fas fa-users pr-0 md:pr-3"></i>
                        <span class="nav-link-text" :class="!toggle ? 'visible' : 'invisible'">Forms</span>
                    </router-link>
                </li>
                <li class="mr-3 flex-1">
                    <router-link class="nav-link hover:text-white hover:border-red" :class="toggle ? '' : 'border-b-2'" :to="{ name: 'forms'}">
                        <i class="fas fa-cogs pr-0 md:pr-3"></i>
                        <span class="nav-link-text" :class="!toggle ? 'visible' : 'invisible'">Settings</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    data () {
        return {
            toggle: false
        }
    },
    created() {
        this.$EventBus.$on('toggle-sidebar', param => {
          console.log(`Oh, that's nice. It's gotten ${param} clicks! :)`)
          this.toggle = !this.toggle
        });
    }
}
</script>


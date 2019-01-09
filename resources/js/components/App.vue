<template>
<div>
    <router-view/>
</div>
</template>
<script>
import Nav from './Nav.vue'
import Sidebar from './Sidebar.vue'

export default {
    components: { Nav, Sidebar }
}
</script>


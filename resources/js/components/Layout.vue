<template>
<div>
    <Nav/>
    <div class="flex flex-row"> 
        <Sidebar/>
        <div class="main-content flex-1 bg-grey-lightest mt-12 md:mt-2 pb-24 md:pb-5">
            <slot name="breadcrumb-content"></slot>
            <slot name="main-content"></slot>
        </div>
    </div> 
</div>
</template>
<script>
import Nav from './Nav.vue'
import Sidebar from './Sidebar.vue'

export default {
  components: { Nav, Sidebar }
}
</script>

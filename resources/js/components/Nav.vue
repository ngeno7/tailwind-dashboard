<template>
    <div>
        <nav class="bg-blue-lighter pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 pin-t">
          <div class="flex flex-wrap">
              <div class="flex flex-shrink md:w-1/6 md:justify-end text-white">
                  <a href="#" class="float-right">
                      <span class="text-xl pl-2"><i class="fa fa-bars"></i></span>
                  </a>
              </div>	
              <div class="flex flex-shrink md:w-2/3 md:justify-end text-white">
              </div>	
		  	<div class="flex w-full pt-2 md:w-1/6 md:justify-end">
		  		<ul class="list-reset flex flex-1 md:flex-none">
		  		    <li class="flex-1 md:flex-none md:mr-3 float-right">
		  				<div class="relative inline-block">
                              <button class="drop-button text-white focus:outline-none" @click.prevent="visible = !visible"> 
                                  <span class="pr-2"><i class="fa fa-user"></i></span><i class="fa fa-caret-down"></i>
                              </button>
                              <div id="myDropdown" class="dropdownlist absolute bg-black text-white pin-r mt-3 p-3 overflow-auto z-30" :class="visible ? '' : 'invisible'">
                                  <div class="border border-grey-darkest"></div>
                                  <a href="#" class="p-2 hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block">
                                      <i class="fas fa-sign-out-alt fa-fw"></i> Log Out
                                      </a>
                              </div>
                          </div>
                      </li>
                  </ul>
            </div>
          </div>
        </nav>
    </div>
</template>
<script>
export default {
    data() {
        return {
            visible: false
        }
    }
}
</script>


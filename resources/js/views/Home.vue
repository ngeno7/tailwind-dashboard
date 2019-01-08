<template>

    <div>
        <nav class="bg-grey-light p-3 rounded m-4">
          <ol class="list-reset flex text-grey-dark">
            <li><a href="#" class="text-blue font-bold">Home</a></li>
            <li><span class="mx-2">/</span></li>
            <li><a href="#" class="text-blue font-bold">Library</a></li>
            <li><span class="mx-2">/</span></li>
            <li>Data</li>
          </ol>
        </nav>
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
          <!--Metric Card-->
          <div class="tw-widget bg-blue-lightest">
              <div class="flex flex-row items-center">
                  <div class="flex-shrink pr-4">
                      <div class="rounded-full p-5 bg-blue-dark"><i class="fas fa-database fa-2x fa-inverse"></i></div>
                  </div>
                  <div class="flex-1 text-right md:text-center">
                      <h5 class="uppercase text-grey-dark">Employees</h5>
                      <h3 class="text-3xl">152</h3>
                  </div>
              </div>
          </div>
          <!--/Metric Card-->
          </div>
          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Metric Card-->
              <div class="tw-widget bg-indigo-lightest">
                  <div class="flex flex-row items-center">
                      <div class="flex-shrink pr-4">
                          <div class="rounded-full p-5 bg-indigo-dark"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                      </div>
                      <div class="flex-1 text-right md:text-center">
                          <h5 class="uppercase text-grey-dark">A</h5>
                          <h3 class="text-3xl">7 tasks</h3>
                      </div>
                  </div>
              </div>
              <!--/Metric Card-->
          </div>
        </div>
    
    </div>
</template>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-black font-sans leading-normal tracking-normal mt-12">
    <!--Nav-->
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
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> 
                                <span class="pr-2"><i class="fa fa-user"></i></span> Hi, User <i class="fa fa-caret-down"></i>
                            </button>
                            <div id="myDropdown" class="dropdownlist absolute bg-black text-white pin-r mt-3 p-3 overflow-auto z-30 invisible">
                                <div class="border border-grey-darkest"></div>
                                <a href="#" class="p-2 hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-row">
        

        <div class="main-content flex-1 bg-grey-lightest mt-12 md:mt-2 pb-24 md:pb-5">

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
    </div>






    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }

        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {

                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>


</body>

</html>

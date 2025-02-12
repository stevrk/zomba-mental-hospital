<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zomba Mental Hospital</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
  
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


   
 
    <style>

.button {
  background: rgb(255 255 255 / 16%);
  border: 0;
  width: 56px;
  height: 56px;
  display: grid;
  place-items: center;
  cursor: pointer;
  padding: 0;
 
  scale: 0.7;
  border-radius: 8px;
  transition: 0.25s;
}

.button:hover {
  opacity: 1;
  background: #8f44fd;
}

.burger {
  position: relative;
  width: 32px;
  border: 0;
}

.burger,
.burger::before,
.burger::after {
  display: block;
  border-radius: 2px;
  height: 2px;
  background: #f9f9f9;
  transition: 0.3s;
}

.burger::before,
.burger::after {
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
}

.burger::before {
  top: -8px;
}

.burger::after {
  top: 8px;
}

/* burger-1 */

.burger.burger-1,
.burger.burger-1::before,
.burger.burger-1::after {
  transition-timing-function: ease-in-out;
  transition-duration: 0.2s;
}

.burger.burger-1.is-closed {
  transform: translateX(-50px);
  background: transparent;
}

.burger.burger-1.is-closed::before {
  transform: rotate(-45deg) translate(30px, 40px);
}

.burger.burger-1.is-closed::after {
  transform: rotate(45deg) translate(30px, -42px);
}

/* burger-2 */

.burger.burger-2,
.burger.burger-2::before,
.burger.burger-2::after {
  transition-timing-function: ease-in-out;
  transition-duration: 0.2s;
}

.burger.burger-2::before,
.burger.burger-2::after {
  width: 16px;
}

.burger.burger-2::before {
  left: 0;
  transform-origin: 100% 0%;
}

.burger.burger-2::after {
  left: 16px;
  transform-origin: 0% 100%;
}

.burger.burger-2.is-closed {
  transform: rotate(-45deg);
}

.burger.burger-2.is-closed::before {
  transform: rotate(90deg) translate(10px, -1px);
}

.burger.burger-2.is-closed::after {
  transform: rotate(90deg) translate(-9px, 1px);
  width: 16px;
}

/* burger-3  */

.burger.burger-3::before,
.burger.burger-3::after {
  transition-duration: 0.15s;
  transition-timing-function: linear;
}

.burger.burger-3.is-closed::before,
.burger.burger-3.is-closed::after {
  width: 20px;
}

.burger.burger-3.is-closed::before {
  transform: rotate(-45deg) translate(-4px, -2px);
}

.burger.burger-3.is-closed::after {
  transform: rotate(45deg) translate(-4px, 2px);
}

/* burger-4 */

.burger.burger-4::before,
.burger.burger-4::after {
  transition-timing-function: linear;
  transition-duration: 0.1s;
}

.burger.burger-4.is-closed {
  transform: rotate(360deg);
  background: transparent;
}

.burger.burger-4.is-closed::before {
  transform: rotate(-45deg) translate(-6px, 5px);
}

.burger.burger-4.is-closed::after {
  transform: rotate(45deg) translate(-5px, -6px);
}

/* burger-5 */

.burger.burger-5 {
  transition: none;
  height: 0;
}

.burger.burger-5::before,
.burger.burger-5::after {
  transition-timing-function: linear;
  transition-duration: 0.15s;
}

.burger.burger-5::before {
  top: -4px;
}

.burger.burger-5::after {
  top: 3px;
}

.burger.burger-5.is-closed::before {
  transform: rotate(-45deg) translate(-3px, 2px);
}

.burger.burger-5.is-closed::after {
  transform: rotate(45deg) translate(-2px, -3px);
}

/* burger-6 */

.ham {
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
  transition: transform 400ms;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  transform: scaleY(0.8) scaleX(1.2);
}

.burger-6.is-closed.hamRotate {
  transform: rotate(45deg) scale(1.2);
}

.line {
  fill: none;
  transition: 0.4s;
  stroke: #f9f9f9;
  stroke-width: 3;
  stroke-linecap: round;
}
.ham1 .top {
  stroke-dasharray: 40 139;
}
.ham1 .bottom {
  stroke-dasharray: 40 180;
}
.burger-6.is-closed.ham1 .top {
  stroke-dashoffset: -98px;
}
.burger-6.is-closed.ham1 .bottom {
  stroke-dashoffset: -138px;
}
      


        .spinner {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: radial-gradient(farthest-side, #00008b 94%, #0000) top/9px 9px no-repeat,
                        conic-gradient(#0000 30%, #00008b);
            -webkit-mask: radial-gradient(farthest-side, #0000 calc(100% - 9px), #000 0);
            animation: spinner-c7wet2 1s infinite linear;
        }

        @keyframes spinner-c7wet2 {
            100% {
                transform: rotate(1turn);
            }
        }

        /* Responsive Spinner */
        @media (min-width: 640px) {
            .spinner {
                width: 72px; /* Larger spinner for small screens and above */
                height: 72px;
            }
        }

        @media (min-width: 1024px) {
            .spinner {
                width: 96px; /* Larger spinner for large screens and above */
                height: 96px;
            }
        }



        /*harmburger*/
    .checkbox {
    position: absolute;
    display: block;
    height: 32px;
    width: 32px;
    top: 20px;
    left: 20px;
    z-index: 5;
    opacity: 0;
    cursor: pointer;
  }
  
  .hamburger-lines {
    display: block;
    height: 26px;
    width: 32px;
    
 
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .hamburger-lines .line {
    display: block;
    height: 3px;
    width: 80%;
    border-radius: 10px;
    background: #0e2431;
  }
  
  .hamburger-lines .line1 {
    transform-origin: 0% 0%;
    transition: transform 0.4s ease-in-out;
  }
  
  .hamburger-lines .line2 {
    transition: transform 0.2s ease-in-out;
  }
  
  .hamburger-lines .line3 {
    transform-origin: 0% 100%;
    transition: transform 0.4s ease-in-out;
  }
  

  input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
    transform: rotate(45deg);
  }
  
   input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
    transform: scaleY(0);
  }
  
.input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
    transform: rotate(-45deg);
  }
  
  
       



    </style>
</head>
<body class="bg-gray-100">

   
    <!-- Loading screen -->
    <div id="loading-screen" class="fixed inset-0 bg-white z-[9999] flex justify-center items-center">
        <div class="spinner"></div>
    </div>

<div id="navbar" class="sticky top-0 z-10 shadow-md slide-in ">  

    <div class="bg-blue-700 text-white py-2 px-2 md:py-3 md:px-4 ">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 xl:grid-cols-2 ">
             
                <div class="flex items-center space-x-4 xl:justify-start ">

                  
                    <a href="#" class="text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="13px" width="13px" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6c0-1.1.9-2 2-2h2V0h-3c-3.31 0-6 2.69-6 6v2z"/>
                        </svg>
                    </a>
                   
                    <a href="#" class="text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="13px" width="13px" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69A4.301 4.301 0 0 0 21.86 4a8.591 8.591 0 0 1-2.73 1.04A4.292 4.292 0 0 0 11.66 9c0 .34.03.67.1.99A12.19 12.19 0 0 1 2.43 4.9a4.285 4.285 0 0 0 1.33 5.73A4.34 4.34 0 0 1 1.6 9.7v.05a4.295 4.295 0 0 0 3.44 4.2c-.52.15-1.07.18-1.64.07a4.31 4.31 0 0 0 4.01 2.97A8.6 8.6 0 0 1 2 19.59 12.16 12.16 0 0 0 8.29 21c7.55 0 11.67-6.27 11.67-11.72 0-.18 0-.36-.01-.54A8.41 8.41 0 0 0 22.46 6z"/>
                        </svg>
                    </a>
                    
                    <a href="#" class="text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="13px" width="13px" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.23 0H1.77C.79 0 0 .8 0 1.78v20.45C0 23.2.79 24 1.77 24h20.45c.98 0 1.78-.8 1.78-1.78V1.78C24 .8 23.2 0 22.23 0zM7.12 20.45H3.56V9h3.56v11.45zM5.34 7.58a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 1 1 0 4.14zm15.12 12.87h-3.56v-5.61c0-1.34-.02-3.06-1.87-3.06-1.88 0-2.17 1.46-2.17 2.96v5.71H9.5V9h3.42v1.56h.05c.48-.91 1.66-1.87 3.42-1.87 3.66 0 4.33 2.41 4.33 5.54v6.22z"/>
                        </svg>
                    </a>
                  
                    <a href="#" class="text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" height="13px" width="13px" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21.8 8.001a2.676 2.676 0 0 0-1.887-1.899C18.25 5.6 12 5.6 12 5.6s-6.25 0-7.913.503a2.676 2.676 0 0 0-1.887 1.898A27.38 27.38 0 0 0 2 12c0 1.212.064 2.413.2 3.599a2.676 2.676 0 0 0 1.887 1.899c1.663.503 7.913.503 7.913.503s6.25 0 7.913-.503a2.676 2.676 0 0 0 1.887-1.899A27.38 27.38 0 0 0 22 12a27.38 27.38 0 0 0-.2-3.599zm-9.8 5.6v-4l3.6 2-3.6 2z"/>
                        </svg>
                    </a>
                </div>
    
              
                

                    <div class="grid grid-cols-3 gap-2 xl:grid-cols-3  ">

                        <div class="flex items-center justify-center xl:justify-start">
                            <div class="hidden lg:block">

                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed">
                                <path d="M200-640h560v-80H200v80Zm0 0v-80 80Zm0 560q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v227q-19-9-39-15t-41-9v-43H200v400h252q7 22 16.5 42T491-80H200Zm520 40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40Zm67-105 28-28-75-75v-112h-40v128l87 87Z"/>
                            </svg>
                        </div>
                            <div  class="hidden xl:flex flex-col items-center xl:items-start  xl:justify-end">
                                <span class="text-xs md:text-sm font-semibold">Opening Hours:</span>
                                <span class="text-xs md:text-sm hidden xl:inline">Monday - Sunday, <span class="font-light">24/7hrs</span></span>
                            </div>
                            
                            
                        </div>
                        
                       
                        
                        
                   
                        <div class="flex items-center justify-center xl:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#e8eaed">
                                <path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/>
                            </svg>
                            <span class="hidden xl:inline text-xs md:text-sm">+265 123 456 789</span>
                        </div>

                       
                       
                        <div class="flex items-center justify-center xl:justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#e8eaed">
                                <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/>
                            </svg>
                            <span class="hidden xl:inline text-xs md:text-sm">zombamental@health.gov.mw</span>
                        </div>
                       
                    </div>



                    
                </div>
            </div>
        </div>
    
    <nav class=" bg-white text-blue-700 px-4 py-2 lg:pr-[200px]">
        <div class="container mx-auto flex items-center justify-between ">
          
          <div class="flex items-center space-x-2">
            <img src="{{ asset('images/malawi logo.png') }}" alt="Zomba Mental Hospital Logo" class="w-10 h-10">
           
            <span class="text-xl font-bold lg:text-4xl">Zomba Mental Hospital</span>
          </div>
          
          
          <button id="menuToggle" class="block lg:hidden focus:outline-none">
            <span class="menu-icon w-6 h-6">☰</span>
           
           
          </button>


          
          

          
       
          
          <ul id="navLinks" class="hidden lg:flex space-x-6 lg:text-xl">
            <li><a href="{{route('welcome')}}" class="hover:underline">Home</a></li>
            <li><a href="{{route('about')}}" class="hover:underline">About</a></li>
            <li><a href="{{route('Services')}}" class="hover:underline">Services</a></li>
            <li><a href="{{route('pricing')}}" class="hover:underline">Pricing</a></li>
            
            <li><a href="{{route('contact')}}" class="hover:underline">Contact</a></li>
          </ul>
        </div>
    
       
        <div id="mobileMenu" class="hidden lg:hidden bg-white py-2">
          <ul class="space-y-2 px-4">
            <li><a href="{{route('welcome')}}" class="block hover:underline">Homes</a></li>
            <li><a href="{{route('about')}}" class="block hover:underline">About</a></li>
            <li><a href="{{route('Services')}}" class="block hover:underline">Services</a></li>
            <li><a href="{{route('pricing')}}" class="block hover:underline">Pricing</a></li>
            <li><a href="#contact" class="block hover:underline">Contact</a></li>
          </ul>
        </div>
      </nav>

    </div>

    <section class="bg-white py-12 lg:py-20 bg-red-500">
        <div class="container mx-auto px-6 lg:px-20">
            <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-12">
                <!-- Image Section -->
                <div class="lg:w-1/2">
                    <img src="{{ asset('images/zomba1.jpg') }}" alt="Mental Care Facility" class="rounded-lg shadow-md w-full">
                </div>
                <!-- Text Section -->
                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <h1 class="text-4xl font-bold mb-4 text-center">About Us</h1>
                    <p class="text-gray-700 mb-6 leading-relaxed text-center">
                        Welcome to the Best Mental Care Facility In Malawi.
                        Zomba Mental Hospital is dedicated to providing compassionate, high-quality mental health care to individuals and families in our community. 
                        As the leading mental health facility in the region, we offer a wide range of services designed to support mental well-being, promote recovery, 
                        and empower individuals to lead fulfilling lives.
                    </p>
                    
                    
                    <h2 class="text-2xl font-semibold mb-6 text-center">Other Services</h2>
                    <!-- Services Section with Icons -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                        <!-- Art Services -->
                        <div class="p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                            <p class="text-gray-700 mb-4">Art Services</p>
                            <i class="fas fa-palette text-blue-600 text-4xl"></i>
                        </div>
                        <!-- Family Planning -->
                        <div class="p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                            <p class="text-gray-700 mb-4">Family Planning Services</p>
                            <i class="fas fa-heartbeat text-red-500 text-4xl"></i>
                        </div>
                        <!-- HIV Testing -->
                        <div class="p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                            <p class="text-gray-700 mb-4">HIV Testing</p>
                            <i class="fas fa-vial text-purple-600 text-4xl"></i>
                        </div>
                        <!-- Cervical Cancer Screening -->
                        <div class="p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
                            <p class="text-gray-700 mb-4">Cervical Cancer Screening</p>
                            <i class="fas fa-stethoscope text-green-500 text-4xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-12 lg:py-20 ">
        <div class="container mx-auto px-6 lg:px-20 text-center">
            <h2 class="text-3xl font-bold mb-8">Zomba Mental Hospital at a Glance</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Staff Members -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-user-md text-blue-600 text-5xl mb-4"></i>
                    <h3 class="text-2xl font-bold">150+</h3>
                    <p class="text-gray-600 mt-2">Staff Members</p>
                </div>
                <!-- Wards -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-procedures text-green-500 text-5xl mb-4"></i>
                    <h3 class="text-2xl font-bold">20</h3>
                    <p class="text-gray-600 mt-2">Wards</p>
                </div>
                <!-- Departments -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-building text-red-500 text-5xl mb-4"></i>
                    <h3 class="text-2xl font-bold">10</h3>
                    <p class="text-gray-600 mt-2">Departments</p>
                </div>
                <!-- Patients -->
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <i class="fas fa-user-injured text-purple-600 text-5xl mb-4"></i>
                    <h3 class="text-2xl font-bold">500+</h3>
                    <p class="text-gray-600 mt-2">Patients</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-12 lg:py-20">
        <div class="container mx-auto px-6 lg:px-20">
            <h2 class="text-3xl lg:text-4xl font-bold text-center mb-8 text-center">The History of Zomba Mental Hospital</h2>
            <div class="space-y-8">
                <!-- Image Section -->
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('images/history.jpg') }}" alt="Zomba Mental Hospital History" class="w-full object-cover">
                </div>
                <!-- Text Section -->
                <div class="text-gray-800 space-y-6 text-center">
                    <p>
                        <strong>From prison to hospital: The evolution of Mental Health care in Malawi</strong>
                    </p>
                    <p>
                        Did you know that in-patient psychiatric services in Malawi started in a prison? That’s right, Zomba Mental Hospital – the main public in-patient psychiatric hospital in Malawi, – started out of Zomba Central Prison in 1910. It all started when wardens and other prisoners noted that some inmates had poor mental well-being. These inmates afflicted with mental illnesses were kept in a separate area called the Zomba Lunatic Asylum. Though it may be a stretch to call it the first in-patient psychiatric services given the limited services provided for them, the Zomba Lunatic Asylum eventually evolved into the Zomba Mental Hospital, which opened in 1953. At this stage, Zomba Mental Hospital’s management was transferred from Zomba Central Prison to Zomba Mental Hospital under the Department of Health, thus marking the start of formal, in-patient psychiatric services for Malawians.
                    </p>
                    <p>
                        The first psychiatrist was appointed in 1955 to Zomba Mental Hospital. Since then, individuals deemed to have mental aberration have been admitted there. These include individuals with various serious psychiatric illnesses (substance abuse, schizophrenia and related psychoses, bipolar disorders, severe major depressive disorder), intellectual disabilities, and uncontrolled epileptic disorders, among others. In the early 2000s, the Hospital was rebuilt and refurbished to improve the quality of the wards. Today, Zomba Mental Hospital is the main public in-patient psychiatric referral hospital in Malawi, with a bed capacity of 330. The hospital is staffed with nurse technicians, psychiatric nurse practitioners, psychiatric clinical officers, occupation therapists, psychiatrists, and psychiatric registrars (psychiatrists in training). It primarily serves the population of the Southern Region of Malawi but also receives patients from other parts of the country.
                    </p>
                    <p>
                        This historical development of mental health care in Malawi is not different from most countries in the Sub-Saharan Africa region. Most patients were isolated in asylums in the 1900s and later moved to large mental hospitals in the 1950s. These hospitals remained isolated and far from most communities, which resulted in limiting access to care and the development of stigma against people with mental illnesses.
                    </p>
                    <p>
                        Zomba Mental Hospital was not immune to this stigma, with stigma continuing to surround the hospital today. This stigma is generated by various causes. The first is the limited resources invested in the hospital, which contribute to an unpleasant hospital environment that seems unwelcoming to people. The second is the limited public understanding of the services available at the hospital, limited knowledge on the treatment that occurs once a patient is admitted to Zomba Mental Hospital and, lastly, the limited understanding of different types of mental illnesses and that a patient with mental illness can recover with appropriate treatment and support they can get.
                    </p>
                    <p>
                        Services and treatments at the hospital include in-patient admissions to enable appropriate evaluation and respite care, treatment with medication (pharmacotherapy), shock treatment (electroconvulsive therapy), occupational therapy, and forensic assessments, among others. Teaching of various health professionals, including doctors, psychiatrists, nurses, clinical officers, and medical assistants, also takes place at Zomba Mental Hospital.
                    </p>
                    <p>
                        There you go, this was a bit of history of Zomba Mental Hospital and psychiatric services in Malawi. We hope you enjoyed it. Please share with us your thoughts by commenting on this post or via tlk.io on this site.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    
    
  

    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-6">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
              <h3 class="text-lg font-semibold mb-4">About Us</h3>
              <p class="text-gray-400">
                We are dedicated to providing the latest updates and resources for mental health and wellness. Join our mission to spread awareness and care.
              </p>
            </div>
      
            <!-- Quick Links -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
              <ul>
                <li>
                  <a href="{{route('welcome')}}" class="text-gray-400 hover:text-white transition-colors">Home</a>
                 
                </li>
                <li>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">About</a>
                  </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-white transition-colors">Services</a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-white transition-colors">Pricing</a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                </li>
              </ul>
            </div>
          
      
            <!-- Contact Info -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
              <ul>
                <li class="text-gray-400">Email: contact@ourblog.com</li>
                <li class="text-gray-400">Phone: +1 234 567 890</li>
                <li class="text-gray-400">Address: 123 Blog Street, City, Country</li>
              </ul>
            </div>
      
            <!-- Social Media -->
            <div>
              <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
              <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .733.592 1.324 1.325 1.324h21.351c.733 0 1.324-.591 1.324-1.324v-21.351c0-.733-.591-1.325-1.324-1.325zm-14.21 19.124h-3.689v-9.383h3.689v9.383zm-1.844-10.738c-1.178 0-2.134-.956-2.134-2.135 0-1.178.956-2.133 2.134-2.133 1.18 0 2.135.955 2.135 2.133 0 1.179-.955 2.135-2.135 2.135zm13.418 10.738h-3.689v-4.891c0-1.163-.021-2.659-1.62-2.659-1.621 0-1.868 1.267-1.868 2.576v4.974h-3.689v-9.383h3.54v1.28h.05c.491-.93 1.691-1.91 3.478-1.91 3.721 0 4.405 2.45 4.405 5.633v5.38h-.007z"/>
                  </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.896-.953-2.173-1.548-3.591-1.548-2.719 0-4.92 2.201-4.92 4.917 0 .385.043.76.126 1.122-4.087-.205-7.713-2.164-10.141-5.144-.424.726-.667 1.571-.667 2.473 0 1.708.869 3.217 2.188 4.099-.806-.026-1.566-.247-2.229-.617v.062c0 2.386 1.697 4.374 3.946 4.828-.413.112-.849.171-1.296.171-.317 0-.626-.031-.927-.088.627 1.956 2.444 3.377 4.6 3.417-1.68 1.318-3.809 2.104-6.116 2.104-.398 0-.788-.023-1.175-.068 2.179 1.396 4.768 2.21 7.548 2.21 9.051 0 13.999-7.496 13.999-13.986 0-.213-.005-.425-.014-.637.962-.694 1.8-1.56 2.462-2.548l-.047-.02z"/>
                  </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c-5.468 0-9.857 4.389-9.857 9.857s4.389 9.857 9.857 9.857c5.468 0 9.857-4.389 9.857-9.857s-4.389-9.857-9.857-9.857zm0 18.49c-4.772 0-8.633-3.86-8.633-8.633 0-4.772 3.86-8.633 8.633-8.633s8.633 3.86 8.633 8.633c0 4.772-3.861 8.633-8.633 8.633zm.07-13.183c-1.191 0-2.178.988-2.178 2.178s.987 2.178 2.178 2.178c1.191 0 2.178-.987 2.178-2.178s-.987-2.178-2.178-2.178zm.035 10.676c-2.662 0-4.814-2.152-4.814-4.814h.684c0 2.282 1.848 4.13 4.13 4.13 2.282 0 4.13-1.848 4.13-4.13h.684c0 2.662-2.152 4.814-4.814 4.814z"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
      
          <!-- Footer Bottom -->
          <div class="mt-12 border-t border-gray-700 pt-6 text-center text-gray-500 text-sm">
            &copy; 2025  ZMH. All rights reserved.
          </div>
        </div>
      </footer>
    




    
   

  
    <script>
        window.addEventListener("load", function () {
            const loadingScreen = document.getElementById("loading-screen");
            loadingScreen.style.display = "none"; // Hide loading screen
        });
    </script>
   <script>
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    const mobileMenu = document.getElementById('mobileMenu');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
    




</body>
</html>

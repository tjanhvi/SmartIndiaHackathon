<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Profile.css">
    <link rel="stylesheet" href="./Login Page/Login.html">
    <link rel="stylesheet" href="./College Profile/Profile.html">
    <link rel="stylesheet" href="./About Page/About.html">
    <link rel="stylesheet" href="./OTP Page/Otp.html">
    <link rel="stylesheet" href="./StudentForn/form.html">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
      <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
      </style>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>College Profile Page</title>
</head>


<?php
$servername="localhost";
$username="root";
$serverpassword="";
$databasename="college";

$con=mysqli_connect($servername,$username,$serverpassword,$databasename);
if(!$con)
{
    echo "connection unsuccessful";
}
//db name= username, root=password
if (isset($_POST["Submit"])) {
	$str = $_POST["Submit"];

	$tablequery="SELECT * FROM mytable WHERE College_Name LIKE '%$str%'";
	$execution=mysqli_query($con,$tablequery);
    $files=mysqli_fetch_assoc($execution);
    if(!$files)
    {

    }
    else{

        ?>
        

<body>
    <nav class="flex items-center justify-between flex-wrap bg-[#08163B] p-6 -mt-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
          <span class="font-semibold text-xl tracking-tight">Conda Coders</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="text-sm lg:flex-grow">
            <a href="../Landing Page/Landing.html" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
              Home
            </a>
            <a href="../About Page/About.html" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
              About Us
            </a>
            <a href="../StudentForn/form.html" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
              Contact Us
            </a>
          </div>
          <div class="flex justify-center mt-10 mr-5">
            <div class="mb-3 xl:w-64">
              <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
                </span>
              </div>
            </div>
          </div>
          <div>
            <a href="../Login Page/Login.html" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Login</a>
          </div>
        </div>
      </nav>
    <div>
        <img src="../clg images/<?php echo $files['College_Name'];?>.jpg" width="1400" height="600">
    </div>


    <div class="ml-10 -mt-20">
        <img src="../Img/ranking.png" width="150" height="150">
    </div>

    <div class="ml-64 -mt-16">
        <p class="text-white text-2xl"><?php echo $files['College_Name'] ?></p>
        <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
            <dt class="sr-only">Reviews</dt>
            <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
              <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
                <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span>8.89 <span class="text-slate-400 font-normal">(128)</span></span>
            </dd>
            <dt class="sr-only">Location</dt>
            <dd class="flex items-center">
              <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                <circle cx="1" cy="1" r="1" />
              </svg>
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z" />
                <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
              </svg>
              <?php echo $files['City'] ?> , <?php echo $files['State'] ?>
            </dd>
          </dl>
    </div>

    <div class="w-5/6 text-left ml-10 mt-5 text-white">
        <p>
            <?php echo $files['College_Name'] ?> is a <?php echo $files['Genders_Accepted'] ?> university college in <?php echo $files['City'] ?> , <?php echo $files['State'] ?> India . Its a <?php echo $files['College_Type'] ?> collge offers <?php echo $files['Courses'] ?>.
        </p>
    </div>

    <div class="w-5/6 ml-24 mt-10"> 
        <table class="table-fixed border-separate border border-[#08163B]">
        <tbody>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Established | University Type</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Established_Year'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Total Student Enrollments </td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Total_Student_Enrollments'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Total_Faculty</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Total_Faculty'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Facilities</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Facilities'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Campus_Size</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Campus_Size'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Genders_Accepted</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Genders_Accepted'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Average_Fees</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
            <?php echo $files['Genders_Accepted'] ?>
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Highest Package</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
                INR 48 LPA
            </td>
          </tr>
          <tr>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">Top Recruiters</td>
            <td class="border border-[#08163B] text-white bg-[#3E497A]">
                Microsoft, Amazon India, Bosch Engineering and Business Solutions Ltd., Cognizant Technology Solutions, Capgemini India Pvt. Ltd., Federal Bank, Hindustan Uni-liver Ltd., Synopsys India, Samsung Research Institute India
            </td>
          </tr>
          
        </tbody>
        </table>
    </div>
    <div class="flex gap-18 max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 ml-24 mt-10">
    <div>
  
  <div class="flex gap-18 max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 ml-24 mt-10">
    <div class="flex justify-left px-4 pt-4 ">
      <button id="dropdownButton" data-dropdown-toggle="dropdown" class="hidden sm:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
      </button>
    
    <div id="dropdown" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(614px, 3288px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
    <ul class="py-1" aria-labelledby="dropdownButton">
    <li>
    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
    </li>
    <li>
    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
    </li>
    <li>
    <a href="#" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
    </li>
    </ul>
    </div>
    </div>
    <div class="flex flex-col items-center pb-10 px-24">
    <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="../Img/jan.jpeg" alt="Bonnie image">
    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Janhvi Tiwari</h5>
    <span class="text-sm text-gray-500 dark:text-gray-400">Lovely Professional University</span>
    <div class="flex mt-4 space-x-3 lg:mt-6">
      <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
        <dt class="sr-only">Reviews</dt>
        <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
          <p>Reg No. 12XXXXXX</p>
          <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
            <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span>8.89</span>
        </dd>
      </dl>
    </div>
    </div>
  
    <div class="flex flex-col items-center pb-10 px-24">
      <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="../Img/suman.png" alt="Bonnie image">
      <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Suman Saurabh</h5>
      <span class="text-sm text-gray-500 dark:text-gray-400">Lovely Professional University</span>
      <div class="flex mt-4 space-x-3 lg:mt-6">
        <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
          <dt class="sr-only">Reviews</dt>
          <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
            <p>Reg No. 12XXXXXX</p>
            <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
              <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>8.89</span>
          </dd>
        </dl>
      </div>
      </div>
  
      <div class="flex flex-col items-center pb-10 px-24">
        <img class="mb-3 w-24 h-24 rounded-full shadow-lg" src="../Img/ritu.jpg" alt="Bonnie image">
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Hirturaj Singh</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Lovely Professional University</span>
        <div class="flex mt-4 space-x-3 lg:mt-6">
          <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
            <dt class="sr-only">Reviews</dt>
            <dd class="text-indigo-600 flex items-center dark:text-indigo-400">
              <p>Reg No. 12XXXXXX</p>
              <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
                <path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <span>8.89</span>
            </dd>
          </dl>
        </div>
        </div>
        
  </div>
  
  </body>
  </html>

<?php
}
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./Login Page/Login.html">
    <link rel="stylesheet" href="./College Profile/Profile.html">
    <link rel="stylesheet" href="./About Page/About.html">
    <link rel="stylesheet" href="./OTP Page/Otp.html">
    <link rel="stylesheet" href="./StudentForn/form.html">

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
    <title>Landing Page</title>

</head>

<body>

<nav class="flex items-center justify-between flex-wrap bg-[#08163B] p-3 -mt-6">
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
      <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        Home
      </a>
      <a href="./About Page/About.html" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        About Us
      </a>
      <a href="./StudentForn/form.html" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
        Contact Us
      </a>
    </div>
    <div class="flex justify-center mt-10 mr-5">
      <div class="mb-3 xl:w-64">
        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
			<form action="search.php" method="POST">
          <input type="search" name="nameee" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
		</form>
          <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
          </span>
        </div>
      </div>
    </div>
    <div>
    <?php
    session_start();
    if(!isset($_SESSION['login'])||$_SESSION['login']!=true)
    {
    

      echo '<a href="./Login Page/Login.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Login</a>';
    
    }
    else
    {
      
      echo "<a href='studentinfo/index.php' class='inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0'>",$_SESSION['name'],"</a>";
    }

?>
    </div>
  </div>
</nav>

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
if (isset($_POST["nameee"])) {
	$str = $_POST["nameee"];

	$tablequery="SELECT * FROM mytable WHERE College_Name LIKE '%$str%'";
	$execution=mysqli_query($con,$tablequery);
	for($i=0;$i<9;$i++)
                                      {
                                          $files=mysqli_fetch_assoc($execution);
                                          if(!$files)
                                      {

                                      }
                                     else
                                       {
                                            echo '

											<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
													<div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
													  <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
														<h1 class="mt-1 text-lg font-semibold text-white sm:text-slate-900 md:text-2xl dark:sm:text-white">'.$files['City'].',</h1>
														<p class="text-sm leading-4 font-medium text-white sm:text-slate-500 dark:sm:text-slate-400">'.$files['College_Name'].'</p>
													  </div>
													  <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
														<img src="clg images/'.$files['College_Name'].'.jpg" alt="university" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
													  </div>
													  <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
														<dt class="sr-only">Reviews</dt>
														<dd class="text-indigo-600 flex items-center dark:text-indigo-400">
														  <svg width="24" height="24" fill="none" aria-hidden="true" class="mr-1 stroke-current dark:stroke-indigo-500">
															<path d="m12 5 2 5h5l-4 4 2.103 5L12 16l-5.103 3L9 14l-4-4h5l2-5Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														  </svg>
														  <span>4.89 <span class="text-slate-400 font-normal">(128)</span></span>
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
														   ,'.$files['State'].'
														</dd>
													  </dl>
													  <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
													  <form action="College Profile/index.php" method="POST">
														<button type="Submit" name="Submit" value='.$files['College_Name'].' class="bg-[#08163B] text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg">View Details</button>
														</form>
													  </div>
													  <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1 dark:text-slate-400">
													  Established in year : ,'.$files['Established_Year'].' No. faculties :  ,'.$files['Total_Faculty'].' its a ,'.$files['College_Type'].' University
													  </p>
													</div>
												  </main>
												  ';
                                      }
                                    }

								}
	



?>      
</body>

</html>
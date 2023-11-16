<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Workopia</title>
</head>

<body class="bg-gray-100">
  <!-- Nav -->
  <header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-semibold">
        <a href="index.html">Workopia</a>
      </h1>
      <nav class="space-x-4">
        <a href="login.html" class="text-white hover:underline">Login</a>
        <a href="register.html" class="text-white hover:underline">Register</a>
        <a href="post-job.html" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"><i class="fa fa-edit"></i> Post a Job</a>
      </nav>
    </div>
  </header>

  <!-- Showcase -->
  <section class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center">
    <div class="overlay"></div>
    <div class="container mx-auto text-center z-10">
      <h2 class="text-4xl text-white font-bold mb-4">Find Your Dream Job</h2>
      <form class="mb-4 block mx-5 md:mx-auto">
        <input type="text" name="keywords" placeholder="Keywords" class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none" />
        <input type="text" name="location" placeholder="Location" class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none" />
        <button class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 focus:outline-none">
          <i class="fa fa-search"></i> Search
        </button>
      </form>
    </div>
  </section>

  <!-- Top Banner -->
  <section class="bg-blue-900 text-white py-6 text-center">
    <div class="container mx-auto">
      <h2 class="text-3xl font-semibold">Unlock Your Career Potential</h2>
      <p class="text-lg mt-2">
        Discover the perfect job opportunity for you.
      </p>
    </div>
  </section>

  <!-- Job Listings -->
  <section>
    <div class="container mx-auto p-4 mt-4">
      <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">Recent Jobs</div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <!-- Job Listing 1: Software Engineer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Software Engineer</h2>
            <p class="text-gray-700 text-lg mt-2">
              We are seeking a skilled software engineer to develop
              high-quality software solutions.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $80,000</li>
              <li class="mb-2">
                <strong>Location:</strong> New York
                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Development</span>,
                <span>Coding</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 2: Marketing Specialist -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Marketing Specialist</h2>
            <p class="text-gray-700 text-lg mt-2">
              We are looking for a Marketing Specialist to create and manage
              marketing campaigns.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $70,000</li>
              <li class="mb-2">
                <strong>Location:</strong> San Francisco
                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Marketing</span>,
                <span>Advertising</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 3: Web Developer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Web Developer</h2>
            <p class="text-gray-700 text-lg mt-2">
              Join our team as a Web Developer and create amazing web
              applications.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $75,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Los Angeles
                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Web Development</span>,
                <span>Programming</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 4: Data Analyst -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Data Analyst</h2>
            <p class="text-gray-700 text-lg mt-2">
              We are hiring a Data Analyst to analyze and interpret data for
              insights.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $65,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Chicago
                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Data Analysis</span>,
                <span>Statistics</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 5: Graphic Designer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Graphic Designer</h2>
            <p class="text-gray-700 text-lg mt-2">
              Join our creative team as a Graphic Designer and bring ideas to
              life.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $60,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Miami
                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Graphic Design</span>,
                <span>Creative</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>

        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Data Scientist</h2>
            <p class="text-gray-700 text-lg mt-2">
              We're looking for a Data Scientist to analyze complex data and
              generate insights.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $90,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Seattle
                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Remote</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Data Science</span>,
                <span>Machine Learning</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>
      </div>
      <a href="listings.html" class="block text-xl text-center">
        <i class="fa fa-arrow-alt-circle-right"></i>
        Show All Jobs
      </a>
  </section>

  <!-- Bottom Banner -->
  <section class="container mx-auto my-6">
    <div class="bg-blue-800 text-white rounded p-4 flex items-center justify-between">
      <div>
        <h2 class="text-xl font-semibold">Looking to hire?</h2>
        <p class="text-gray-200 text-lg mt-2">
          Post your job listing now and find the perfect candidate.
        </p>
      </div>
      <a href="post-job.html" class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
        <i class="fa fa-edit"></i> Post a Job
      </a>
    </div>
  </section>

</body>

</html>
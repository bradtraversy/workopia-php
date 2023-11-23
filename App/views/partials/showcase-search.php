<!-- Showcase -->
<section class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center">
  <div class="overlay"></div>
  <div class="container mx-auto text-center z-10">
    <h2 class="text-4xl text-white font-bold mb-4">Find Your Dream Job</h2>
    <form method="GET" action="/listings/search" class="mb-4 block mx-5 md:mx-auto">
      <input type="text" name="keywords" placeholder="Keywords" class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none" />
      <input type="text" name="location" placeholder="Location" class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none" />
      <button class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 focus:outline-none">
        <i class="fa fa-search"></i> Search
      </button>
    </form>
  </div>
</section>
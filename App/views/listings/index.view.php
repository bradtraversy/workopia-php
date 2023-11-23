<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>


<!-- Job Listings -->
<section>
  <div class="container mx-auto p-4 mt-4">
    <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
      <?php if (isset($keywords)) : ?>
        Search Results for: <?= htmlspecialchars($keywords) ?>
      <?php else : ?>
        All Jobs
      <?php endif; ?>
    </div>
    <?= loadPartial('message') ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
      <?php foreach ($listings as $listing) : ?>
        <!-- Job Listing 1: Software Engineer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
            <p class="text-gray-700 text-lg mt-2">
              <?= $listing->description ?>
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
              <li class="mb-2">
                <strong>Location:</strong> <?= $listing->city ?>, <?= $listing->state ?>
                <!-- <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1 ml-2">Local</span> -->
              </li>
              <?php if (!empty($listing->tags)) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong> <?= $listing->tags ?>
                </li>
              <?php endif; ?>
            </ul>
            <a href="/listings/<?= $listing->id ?>" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
              Details
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer') ?>
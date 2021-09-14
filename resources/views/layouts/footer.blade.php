<div class="mt-4 position-absolute top-100 start-50 translate-middle">
     <div class="ml-4 text-center text-sm text-gray-500 sm:ml-0">
         <span>
            {{ config('app.title', 'Laravel') }}
            © <?php
                $copyYear = 2018; // Set your website start date
                $curYear = date('Y'); // Keeps the second year updated
                echo $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');
            ?>
         </span>
    </div>
</div>
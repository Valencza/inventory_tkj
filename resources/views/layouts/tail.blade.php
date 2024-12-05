<script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>

<!-- Vendor Javascript (Require in all Page) -->

<script src="{{asset ('assets/admin/js/vendor.js') }}"></script>

<!-- App Javascript (Require in all Page) -->
<script src="{{asset ('assets/admin/js/app.js') }}"></script>

<!-- Vector Map Js -->
<script src="{{asset ('assets/admin/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{asset ('assets/admin/vendor/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{asset ('assets/admin/vendor/jsvectormap/maps/world.js') }}"></script>

<!-- Quill Editor js -->
<script src="{{asset ('assets/admin/js/components/form-clipboard.js') }}"></script>

<!-- Dashboard Js -->
<script src="{{asset ('assets/admin/js/pages/dashboard.js') }}"></script>

<!-- Apex Chart Column Demo js -->
<script src="{{asset ('assets/admin/js/ajax/libs/dayjs/1.11.0/dayjs.min.js') }}"></script>
<script src="{{asset ('assets/admin/js/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js') }}"></script>
<script src="{{asset ('assets/admin/js/components/apexchart-column.js') }}"></script>

<!-- Apex Chart Bar Demo js -->
<script src="{{asset ('assets/admin/js/components/apexchart-bar.js') }}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });
</script>

    </body>
</html>
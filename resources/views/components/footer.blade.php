<footer class="bg-main-darker text-light">
  <div class="container">
    <div class="flex pb-6">
      <div class="w-1/4 bg-white p-4">
        @svg('logos/oelatam', 'h-30 mb-4')
        <p class="text-gray-600 text-sm">OE LATAM es un nodo regional latinoamericano del consorcio de educación abierta OE GLOBAL.</p>
      </div>
      <div class="md:w-1/12"></div>

      @include('partials.navigation-footer')
    </div>
    <div class="flex items-center justify-center flex-col text-xs">
      <a href="https://www.oeconsortium.org">@svg('logos/oec-inverted', 'h-24')</a>
      <a class="mt-3 mb-4" href="https://www.oeconsortium.org">www.oeconsortium.org</a>
    </div>
    <div class="flex border-t border-white pt-8 text-xs leading-loose">
      <div class="w-8/12">
        All content on oeconsortium.org is licensed under a Creative Commons Attribution 4.0 License.<br/> Please note
        that OCW course materials hosted on member sites are governed by the specific licenses chosen by the owners of
        those sites.
      </div>
      <div class="w-1/3 md:pl-10 flex justify-end items-end">
        <a class="underline" href="#">Terms of Use and Privacy Policies.</a>
      </div>
    </div>
  </div>
</footer>
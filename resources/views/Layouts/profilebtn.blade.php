<div class="hs-dropdown relative inline-flex">
    <button id="hs-dropdown-with-icons" type="button" class="hs-dropdown-toggle py-2 px-4 flex flex-row justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-transparent text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none " aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
        <img class="inline-block size-8 rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Avatar">
        <i class="ph ph-sliders-horizontal size-[24px] pt-1"></i>
    </button>
  
    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-secondaryDark shadow-md rounded-lg p-1 space-y-0.5 mt-2 divide-y divide-gray-200" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-icons">
      <div class="py-2 first:pt-0 last:pb-0">
        <a class="flex items-center gap-x-3.5 text-secondaryGreen py-2 px-3 rounded-lg text-sm" href="#">
          <i class="ph ph-user"></i>
          <span>{{ Auth::user()->name }}</span>
        </a>

        <hr class="my-1 border-neutral-400">

        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-neutral-400 hover:bg-thirdGreen hover:text-neutral-200 focus:bg-neutral-700" href="#">
          <i class="ph ph-gear-six"></i>
          <span>Edit Profil</span>
        </a>
        {{-- Logout Button --}}
        <form method="POST" action="/logout">
          @csrf
          <button type="submit" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg w-full text-sm text-red-400 hover:bg-red-700 hover:text-neutral-200 focus:bg-neutral-700">
            <i class="ph ph-sign-out"></i>
            <span>Logout</span>
          </button>
        </form>


      </div>
    </div>
  </div>
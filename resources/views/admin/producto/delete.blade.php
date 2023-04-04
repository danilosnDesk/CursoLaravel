  <!-- Modal -->
  <div data-te-modal-init
      class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
      id="delete-{{ $producto->id }}" tabindex="-1" aria-labelledby="exampleModalSmLabel" aria-modal="true" role="dialog">
      <div data-te-modal-dialog-ref
          class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[300px]">
          <div
              class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
              <div
                  class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                  <h2 class="text-sm font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                      id="exampleModalSmLabel">
                      Tem certeza que deseja excluir?
                  </h2>
                  <button type="button"
                      class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                      data-te-modal-dismiss aria-label="Close">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="h-6 w-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </button>
              </div>
              <div class="relative p-4 text-xs">{{ $producto->name }}?</div>
              <div class="relative p-4">
                  <form action="" method="post">
                      <button type="submit" class="bg-red-700 rounded-lg text-white text-xs p-2 w-[140px]"
                          data-te-toggle="modal" data-te-target="#delete-{{ $producto->id }}">
                          <i class="fi fi-rr-trash"></i> Apagar</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- Modal -->

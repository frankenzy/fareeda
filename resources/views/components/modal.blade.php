<div x-data="{modal: false}">
    <button class="mb-3 btn btn-primary scroll-lock" @click="modal = !modal" :aria-expanded="modal ? 'true' : 'false'">Modal example 1b</button> – with “click away”
    <div class="modal-wrapper" :class="{ 'active': modal }">
      <div class="backdrop backdrop-shaded scroll-unlock" x-show.transition.opacity.duration.600ms="modal" @click="modal = false"></div>
      <div class="p-3 rounded modal-panel b-thin bg-color-background" :class="{ 'active': modal }">
        <p>Modal content.</p>
        <button class="float-right scroll-unlock" @click="modal = false">Close</button>
      </div>
    </div>
  </div>

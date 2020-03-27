<section class="col-md-6 g-brd-around g-brd-5 g-brd-pink g-pa-30">
    <div class="row">
      <div class="align-self-center">
      
      @component('backend.layout.components.paragraph.p')
      	@slot('case')
      		text-uppercase
      	@endslot

      	@slot('color')
      		purple
      	@endslot

      	@slot('position')
      		right
      	@endslot

      	@slot('title')
      		test comp
      	@endslot

      @endcomponent

      </div>
    </div>
</section>
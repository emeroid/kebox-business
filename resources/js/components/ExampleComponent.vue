<template>
    <div class="col-lg-5 g-mb-30 align-self-center">
      <header class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
          <h2 class="h3 u-heading-v2__title text-uppercase g-font-weight-300 mb-0"> 
             {{$heading}}
          </h2>
      </header>
 
      <p class="lead g-mb-30">
          {{$body}} 
      </p>
                    
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

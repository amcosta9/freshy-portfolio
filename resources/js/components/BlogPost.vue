<template>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          {{ post.title }} - {{ post.created_at }}
        </div>
        <div class="card-content">
          {{ post.body }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'BlogPost',

    props: {
      post: {
        type: Object,
        required: true,
      }
    },

    data: function() {
      return {

      }
    },

    methods: {

    },

    mounted: function() {
      console.log('Component mounted.')
    }
  }
</script>

<style lang="scss" scoped>
  /*@import '../../sass/linc/variables/variables';*/
</style>

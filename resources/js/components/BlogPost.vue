<template>
    <div class="blog-post card">
      <div class="card-header roboto-slab">
        <span class="post-title float-left">{{ post.title }}</span>
        <span class="post-created-at float-right">Posted: {{ post.created_at }}</span>
      </div>
      <div class="card-content raleway" v-html="post.body">
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
    }
  }
</script>

<style lang="scss" scoped>
  @import '../../sass/blog';
</style>

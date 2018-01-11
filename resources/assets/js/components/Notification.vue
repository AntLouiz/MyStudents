<template>
  <div class="notification" v-bind:class="{ checked: Ischecked}">
    {{title}}
    {{desc}}
  </div>
</template>
<style type="text/css">
  .notification{
    width: 15em;
    padding: 1em;
    background: #56ce5a;
    color: white;
    cursor: pointer;
    font-size: 15px;
    margin-bottom: 5px;
  }

  .checked{
    background: gray;
  }
</style>
<script type="text/javascript">
  export default {
    props: ['title', 'desc', 'Ischecked'],
    data (){
      return {

      }
    }
  }
</script>
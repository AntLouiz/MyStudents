<template>
  <div class="notification">
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
</style>
<script type="text/javascript">
  export default {
    props: ['title', 'desc'],
    data (){
      return {

      }
    }
  }
</script>
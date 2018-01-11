<template>
  <a href="#" v-on:click="showNotification"><span class="glyphicon glyphicon-bell"></span></a>
</template>
<style type="text/css">
  .glyphicon-bell{
    font-size: 20px;
    color: gray;
  }
</style>
<script type="text/javascript">
  export default {
    data (){
      return {
        notifications: {
          title: null,
          desc: null
        }
      }
    },
    created (){
      this.connectToSocket()
    },
    methods: {
          showNotification: function (){
            alert("notification");
          },
          connectToSocket: function (){
            let socket = io.connect('http://localhost:3000');

            socket.on('notifications-channel:student-notification', (notification) => {
              $('.glyphicon-bell').css('color', '#bf5329');
            });
          },
          checkNotifications: function(){
             axios.get(`http://jsonplaceholder.typicode.com/posts`)
              .then(response => {
                // JSON responses are automatically parsed.
                this.posts = response.data
              })
              .catch(e => {
                this.errors.push(e)
              });
          }
    }
  }
</script>
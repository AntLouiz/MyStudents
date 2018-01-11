<template>
  <div class="dropdown">
    <a 
      href="#" 
      v-on:click="showNotification"
      class="btn dropdown-toggle"
      type="button"
      id="notificationDropdown"
      data-toggle="dropdown"
    >
      <span class="glyphicon glyphicon-bell"></span>
      <span v-if="total !== null" class="total-notifications">
              {{ total }}
      </span>
    </a>
    <div class="dropdown-menu" aria-labelledby="notificationDropdown">
      <notification
        v-for="notification in notifications"
        key="notification.title"
        v-bind:title="notification.title"
        v-bind:desc="notification.desc"
      >
        
      </notification>
    </div>
  </div>
</template>
<style type="text/css">
  .glyphicon-bell{
    font-size: 20px;
    color: gray;
  }
</style>
<script type="text/javascript">
  import Notification from './Notification'

  export default {
    components: {
      notification: Notification
    },
    data (){
      return {
        notifications: [],
        total: null,
        errors: []
      }
    },
    created (){
      this.connectToSocket()
      this.getNotifications()
    },
    methods: {
          showNotification: function (){
            this.notifications.map(function(notification, key){
              console.log(notification.desc);
            })
          },
          connectToSocket: function (){
            let socket = io.connect('http://localhost:3000');

            socket.on('notifications-channel:student-notification', (notification) => {
              $('.glyphicon-bell').css('color', '#bf5329');
            });
          },
          getNotifications: function(){
             axios.get(`http://localhost:8000/api/notifications`)
              .then(response => {
                // JSON responses are automatically parsed.
                this.notifications = response.data;
                this.total = this.notifications.length;
              })
              .catch(e => {
                this.errors.push(e)
              });
          }
    }
  }
</script>
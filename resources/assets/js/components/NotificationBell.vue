<template>
  <div class="dropdown">
    <a 
      href="#"
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
        v-for="(notification, key) in notifications"
        v-bind:key="key"
        v-bind:title="notification.title"
        v-bind:desc="notification.desc"
        v-bind:Ischecked="notification.checked"
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
          connectToSocket: function (){
            let socket = io.connect('http://localhost:3000');

            socket.on('notifications-channel:student-notification', (notification) => {
              this.setNotifications(notification);
            });
          },
          setNotifications: function(notification){
            this.notifications.push(notification)
            this.setTotal();
            $('.glyphicon-bell').css('color', '#bf5329');
          },
          getNotifications: function(){
             axios.get(`http://localhost:8000/api/notifications`)
              .then(response => {
                // JSON responses are automatically parsed.
                this.notifications = response.data;
                this.setTotal();
              })
              .catch(e => {
                this.errors.push(e)
              });
          },
          setTotal: function(){
              console.log(this.notifications);
              this.total = this.notifications.length
          }
    }
  }
</script>
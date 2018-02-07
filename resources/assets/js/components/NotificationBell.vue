<template>
  <div class="dropdown">
    <a 
      href="#"
      class="btn dropdown-toggle"
      type="button"
      id="notificationDropdown"
      data-toggle="dropdown"
      v-on:click="checkNotifications()"
    >
      <span class="glyphicon glyphicon-bell"></span>
      <span v-if="total !== null" class="total-notifications">
              {{ total }}
      </span>
    </a>
    <div class="dropdown-menu" aria-labelledby="notificationDropdown">
      <template v-if="notifications.length">
        <notification
          v-for="(notification, key) in notifications"
          v-bind:key="key"
          v-bind:title="notification.title"
          v-bind:desc="notification.desc"
          v-bind:Ischecked="notification.checked"
        >
          
        </notification>
      </template>
      <template v-else>
        Nenhuma notificaçao
      </template>
    </div>
  </div>
</template>
<style type="text/css">
  .glyphicon-bell{
    font-size: 20px;
    color: #e7e4e4;
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
            $('.glyphicon-bell').css('color', '#bf5329');
          },
          getNotifications: function(){
             axios.get(`http://localhost:8000/api/notifications`)
              .then(response => {
                if (response.data.length) {
                  this.notifications = response.data;
                }
              })
              .catch(e => {
                this.errors.push(e)
              });
          },
          checkNotifications: function(){
            if (this.notifications.length) {
              axios.put('http://localhost:8000/api/check/notifications', this.notifications)
              .then(response => {
                this.notifications = response.data;
              })
            }
          }
    }
  }
</script>
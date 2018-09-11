<template>
    <!-- notification -->
    <li class="nav-item dropdown">
        <a id="navbarDropdownNotify" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="badge badge-info"> {{notifications.length}} </span>
            Notification<span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNotify">
            <ul>
               <li v-for="notification in notifications">
                   <a href="#" v-on:click=MakeAsRead(notification)> 
                        {{ notification.data.post.title }} 
                    </a>
               </li>
               <li v-if="notifications.length == 0">
                   There is no new notifications
               </li>
            </ul>
        </div>
    </li>
</template>

<script>
    export default {
       props: ['notifications'],
       methods: {
            MakeAsRead: function(notification){
                var data = {
                    id: notification.id
                };
                axios.post('notification/read', data).then(response => {
                    window.location.href = "posts/" + notification.data.post.id
                });
            }
       }
    };

</script>

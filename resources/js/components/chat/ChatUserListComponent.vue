<template>
    <div>
        {{ users.length }}
        <!-- <h3>Daftar User Online : {{ users.length }}</h3>
        <ul>
            <li v-for="user in users" :key="user"> {{ user.name }} </li>
        </ul> -->
    </div>
</template>

<script>
    import BusEvent from '../../bus'

    export default {
        data(){
            return {
                users : []
            }
        },

        mounted() {
            BusEvent.$on('chat.here' , (users) => {
                this.users = users
            }).$on('chat.joining' , (user) => {
                this.users.push(user)
            }).$on('chat.leaving' , (user) => {
                this.users = this.users.filter((u) => {
                    return u.id !== user.id
                })
            })
        }
    }
</script>

<template>
    <div class="chat-lists">
        <div class="messages" v-for="chat in chats" :key="chat">
            <div class="media border rounded-sm p-1">
                <img src="http://via.placeholder.com/50" alt="" class="rounded-circle mr-3">
                <div class="media-body">
                    <h5 class="mt-0 mb-0">{{chat.user.name}}</h5>
                    <p class="mb-0 mt-1">{{chat.subject}}</p>
                    <small class="float-right mr-2">{{chat.created_at}}</small>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import BusEvent from '../../bus';

    export default {
        data () {
            return {
                chats : []
            }
        },
        mounted() {
            this.getAllChats();
            BusEvent.$on('chat.sent', (newChat) => {
                this.chats.push(newChat);
                this.scrollBottom()
            });
        },
        methods : {
            getAllChats(){
                    axios.get('/chat/all-chats').then(response => {
                    this.chats = response.data.reverse();
                    this.scrollBottom()
                })
            },
            scrollBottom(){
                setTimeout(function(){
                    let chatLists = document.getElementsByClassName('chat-lists')[0];
                    chatLists.scrollTop = chatLists.scrollHeight
                }, 1)

            }
        }
    }
</script>
<style lang="scss">
    .messages {
        margin-top:5px;
        .time {
            font-weight: 800;
        }
        .message {
            font-size: 1.2rem;
        }
    }
    .chat-lists {
        max-height: 300px;
        overflow-y: scroll;
    }
</style>

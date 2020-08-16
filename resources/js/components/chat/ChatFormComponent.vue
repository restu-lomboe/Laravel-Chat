<template>
    <div>
        <form>
            <div class="form-action">
                <textarea placeholder="Isi Pesan Anda Disini" class="form-control" v-model="body" @keydown="handleInput"></textarea>
            </div>
        </form>
    </div>
</template>

<script>
    import moment from 'moment'
    import BusEvent from '../../bus'

    export default {
        data(){
            return {
                body : ''
            }
        },
        methods : {
            handleInput(e){
                if (e.keyCode === 13 && !e.shiftKey) {
                    e.preventDefault()
                    this.submit()
                }
            },
            submit(){
                let bodyInput = this.body.trim();

                if (bodyInput === '') {
                    return
                }

                let newChat = {
                    subject : bodyInput,
                    created_at : moment().utc(0).format('YY-MM-DD HH:mm:ss'),
                    user : {
                        name : Laravel.user.name
                    }
                }

                axios.post('/chat/store', {subject : bodyInput}).then(response => {
                    BusEvent.$emit('chat.sent', newChat);
                    this.body = ''
                })
            }
        }
    }
</script>

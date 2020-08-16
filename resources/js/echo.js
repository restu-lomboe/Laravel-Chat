import BusEvent from './bus';

Echo.join('chat-channel')
    .here((users) => {
        BusEvent.$emit('chat.here' , users);
    })
    .joining((user) => {
        BusEvent.$emit('chat.joining' , user);
    })
    .leaving((user) => {
        BusEvent.$emit('chat.leaving' , user);
    })
    .listen('ChatStoreEvent', (e) => {
        BusEvent.$emit('chat.sent' , e.data);
        // console.log(e);
    });

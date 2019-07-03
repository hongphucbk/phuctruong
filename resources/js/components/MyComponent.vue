<template>
    <div class="my-component">
    	<div>{{ message }}</div>
    	<div><button @click="sayHello">Click me</button></div>
    	<div>{{ reverseMessage }}</div>
        <br>
        <div>Message type: {{ message2.type }}</div>
        <div>Message text: {{ message2.text }}</div>
        <div><button @click="changeType">Change type</button></div>
        <div><button @click="changeText">Change text</button></div>

        <div><button @click="changeMessage2">Click me</button></div>
    </div>
</template>

<script>
    export default {
    	data() {
            return {
                messageReverse: 'Toi ten la Phuc',
                message: 'Hihi 123',
                message2: {
                    type: 'greeting',
                    text: 'How are you?'
                },
            }
        },
        methods: {
            sayHello() {
                //alert('Hello World')
                this.message = 'You clicked button'
            },
            changeMessage2() {
                this.message2.text = 'This is new message'
            },
            changeType() {
                this.message2.type = 'this is new type'
            },
            changeText() {
                this.message2.text = 'this is new text'
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('')
            },
            getType() {
                return this.message2.type
            },
            getText() {
                return this.message2.text
            }
        },
        watch: {
            message() {
                console.log('message changed')
            },
            reverseMessage() {
                console.log('Computed changed')
            },
            message2: {
                handler: function () {
                    console.log('something changed')
                },
                deep: true
            },
            getType() {
                console.log('type changed')
            },
            getText() {
                console.log('text changed')
            }
        }
    }
</script>

<style lang="scss" scoped>
    .my-component {
        color: red;
    }
</style>

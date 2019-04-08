<template>
    <div class="form-check">
        <label for="textInput" class="form-check-input">$</label>
        <textarea rows="1" id="textInput" name="textInput" class="form-control input"></textarea>
        <button v-on:click="sendCommand">Submit</button>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Input Component mounted.')
        },
        methods: {
            sendCommand() {
                console.log("Command Sent");

                Echo.channel('chat').notification('typing', {
                    command: "Sent Command"
                });
            }
        }
    }
</script>

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Demo</div>

                    <div class="panel-body">
                        <div id="demo">
                            <p>{{ message }}</p>
                            <input v-model="message">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                    message: 'this is a message.'
            }
        }
    }
</script>

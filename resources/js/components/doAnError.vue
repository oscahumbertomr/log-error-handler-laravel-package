<template>
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title" style="font-size: 30px;">
                    Do An Error whit Vuejs and Axios
                </div>
                <div>
                    <button style="margin:1em" @click="doAValidatedError">Make a Validated Error</button><br>
                    <button style="margin:1em" @click="doACatchedError">Make a Catched Error</button><br>
                    <button style="margin:1em" @click="doAnInesperatedError">Make an Inesperated Error </button><br>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    // import logErrorHandler =
    import logErrorHandler from   '../exceptions/logErrorHandler.js';

    export default {
        methods: {
            doAnInesperatedError() {
                var vm = this;
                axios.post('/doAnError/nonexistentLink', {
                    firstName: 'Fred',
                    lastName: 'Flintstone'
                  })
                  .then(function (response) {
                    console.log(response);
                  })
                  .catch(function (error) {
                     vm.overlay = false;
                    logErrorHandler(error);
                  });
            },
            doAValidatedError() {
                var vm = this;
                axios.post('/doAnError/validate', {
                    firstName: 'Fred',
                    lastName: 'Flintstone'
                  })
                  .then(function (response) {
                    console.log(response);
                  })
                  .catch(function (error) {
                     vm.overlay = false;
                    logErrorHandler(error);
                  });
            },
            doACatchedError() {
                var vm = this;
                axios.post('/doAnError/validate', {
                    name: 'Fred',
                    lastName: 'Flintstone',
                    Full_name: 'Flintstone'
                  })
                  .then(function (response) {
                    console.log(response);
                  })
                  .catch(function (error) {
                     vm.overlay = false;
                    logErrorHandler(error);
                  });
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

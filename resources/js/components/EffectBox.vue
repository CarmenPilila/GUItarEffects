<template>
    <div class="col-6 col-md-4 col-lg-3 offset-lg-1">
        <div class="bg-gray-200 shadow-sm" style="border-radius: 24px;">
            <div class="container">

                <!-- Sliders -->
                <div class="row pt-2 my-4">
                    <div v-for="(value, parameter) in initialParameters" class="col text-center">
                        <effect-slider :parameter="parameter" :initial-value="value"></effect-slider>
                    </div>
                </div>

                <!-- ON-OFF Button -->
                <div class="text-center pb-3">
                    <button data-toggle="button" class="btn btn-effect" :class="active?'active':''" @click.prevent="toggleActive">
                        {{ name | capitalize }}
                    </button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['name', 'initialParameters'],

        data () {
            return {
                active: false,
                parameters: this.initialParameters
            }
        },

        methods: {
            update(parameter, value) {
                this.parameters[parameter] = value
                this.saveUpdate()
            },

            saveUpdate: _.debounce(
              function() {
                axios.post('/effect/'+this.name+'/update', {'parameters' : this.parameters})
            }, 300), // Debounce to only fired every .3 sec

            toggleActive() {
                this.active = !this.active

                var route = this.active ? '/effect/'+this.name+'/start' : '/effect/'+this.name+'/stop'
                axios.post(route);
            }
        }
    }
</script>

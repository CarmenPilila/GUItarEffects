<template>
  <vue-slider v-model="value" v-bind="slider">
    <div class="vue-slider-tooltip" style="background-color:#252525;border-color:#252525;font-weight:500;" slot="tooltip" slot-scope="{ value }">
    {{ parameter | capitalize }}: {{ value }}%
  </div>
  </vue-slider>
</template>

<script>
    import vueSlider from 'vue-slider-component';

    export default {

      props: ['parameter', 'initialValue'],

      components: {
        vueSlider
      },

      data () {
        return {
          value: this.initialValue,
          slider: {
            width: 8,
            height: 250,
            dotSize: 20,
            min: 0,
            max: 100,
            interval: 1,
            tooltip: 'hover',
            // formatter: "Param: {value}",
            style: {
              display: 'inline-block',
            },
            direction: 'vertical',
            bgStyle: {
              "backgroundColor": "#252525",
              "boxShadow": "0px 0px 4px rgba(0,0,0,0.5)"
            },
            sliderStyle: {
                "border": "2px solid #252525",
                "backgroundColor": "#909090",
            },
            processStyle: {
              "backgroundColor": "#252525"
            },
            tooltipStyle: {
                "backgroundColor": "#252525",
                "borderColor": "#252525"
            }
          }
        }
      },

      watch: {
        value() {
          // TODO: use emit...
          this.$parent.update(this.parameter, this.value);
        }
      }
    }
</script>

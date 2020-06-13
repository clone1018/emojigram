<template>
    <div>

        <div class="card">
            <div class="card-front" v-if="currentSide === 'front'">
                <CardFront :emojis="emojis"></CardFront>
            </div>
            <div class="card-back" v-if="currentSide === 'back'">
                <CardBack></CardBack>
            </div>
        </div>
        <div @click="flip"
             :class="['flipper', {'flipper-left':currentSide === 'front', 'flipper-right': currentSide === 'back'}]"
        >{{ flipIcon }}️</div>

    </div>
</template>

<style>
    .card {
        max-width: 800px;
        position: relative;
        padding-bottom: 66.66%;
        background-color: lightblue;
    }
    .card-front {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
    }
    .flipper {
        font-size: 2rem;
    }
    .flipper-left {
        position: absolute;
        right: 0;
        top: 50%;
    }
    .flipper-right {
        position: absolute;
        left: 0;
        top: 50%;
    }
</style>

<script>
    import CardFront from "./CardFront";
    import CardBack from "./CardBack";

    export default {
        components: {CardFront, CardBack},
        data() {
            return {
                currentSide: 'front',
                flipIcon: '➡',

                emojis: ['😀','😀','😀','😀','😀','😀'],
            }
        },
        mounted() {
        },
        methods: {
            flip() {
                if (this.currentSide === 'front') {
                    this.currentSide = 'back';
                    this.flipIcon = '⬅';
                } else {
                    this.currentSide = 'front';
                    this.flipIcon = '➡';
                }
            }
        },
        computed: {
        }
    }
</script>

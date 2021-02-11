<template>
    <carousel :per-page="1" :paginationEnabled="false" :autoplay="true" :autoplayHoverPause="false" :autoplayTimeout="3000" :loop="false" :mouse-drag="false" easing="ease-in-out" :speed="1000">
        <slide>
            <img src="/images/carousel/01.jpg" width="100%">
        </slide>
        <slide>
            <img src="/images/carousel/02.jpg" width="100%">
        </slide>
        <slide>
            <img src="/images/carousel/03.jpg" width="100%">
        </slide>
        <slide>
            <img src="/images/carousel/04.jpg" width="100%">
        </slide>
    </carousel>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel'
export default {
    components: { Carousel, Slide }
}
</script>
<style scoped>
/* .VueCarousel-pagination { display: none; } */
</style>

<template>
    <div>
        <b-img :src="content.imageFullUrl" fluid alt="Responsive image" class="featuredImage"></b-img>
        <div v-html="content.description" class="mt-5 p-5"></div>
    </div>
</template>

<script>
import { getStructure } from '../mixins/pageContent'

export default {
    mixins: [getStructure]
}
</script>

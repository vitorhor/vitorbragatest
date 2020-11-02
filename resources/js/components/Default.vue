<template>
    <div>
        <component
            :is="componentToLoad"
            :content="content"
        />
    </div>
</template>

<script>

export default {
    components: {
        home: () =>
            import('./Home'),
        contact: () =>
            import('./Contact'),
    },
    data: function () {
        return {
            componentToLoad: '',
            content: ''
        }
    },
    mounted() {
        this.componentToLoad = this.$route.name;
        this.getContent();
    },
    methods: {
        getContent: function () {

            console.log(this.componentToLoad);

            axios.post('/content/' + this.componentToLoad).then(response => {
                console.log(response.data);
                this.content = response.data;
            });

        },
    }
}
</script>

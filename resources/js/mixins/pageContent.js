export const getStructure = {
    data: function () {
        return {
            componentToLoad: '',
            content: '',
            metaTitle: '',
            metaDescription: ''
        }
    },
    methods: {
        getContent: function () {

            axios.post('/content/' + this.componentToLoad).then(response => {
                this.content = response.data;
                this.loadMetaData();
            });

        },
        loadMetaData: function(){
            this.metaTitle = this.content.meta_title;
            this.metaDescription = this.content.meta_description;
        }
    },
    mounted() {
        this.componentToLoad = this.$route.name;
        this.getContent();
    },
    metaInfo() {
        return {
            title: this.metaTitle,
            meta: [
                {
                    vmid: "description",
                    name: "description",
                    content: this.metaDescription
                }
            ]
        };
    }
}

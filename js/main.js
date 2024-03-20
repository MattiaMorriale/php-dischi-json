const { createApp } = Vue;

createApp({
    data() {
        return {

            diskList: [],


            
        }
    },

    methods: {
        
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.diskList = res.data;
        });

    }

}).mount('#app')
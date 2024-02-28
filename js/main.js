const { createApp } = Vue


createApp({
    data() {
        return {
            apiUrl: 'server.php',
            musicDisc: [],
            
        }
    },
	mounted(){

        this.request();
},

    methods: {

        request(myVar){
            const params = {
                myParam : myVar
            };
            axios.get(this.apiUrl, {params}) 
            .then((response) => {
                this.musicDisc = response.data;
            })
        }
    }

}).mount('#app')
<template>
    <div>
        <button class="btn btn-primary mt-3" @click="saveHolding" v-text="buttonText"></button>
    </div>
</template>

<script>


    export default {
        name: "store-table",
        props: {
            holdingId: String,
            userId: String,
            removestatus: String,
        },
        //props: ['holdingId','userId','removestatus',],

        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return{
                flagHolding: this.removestatus,
            }
        },

        methods: {
            saveHolding(){
                axios.post('/save/' + this.holdingId+'/'+this.userId)
                    .then(response =>{
                       //this.flagHolding = ! this.flagHolding;
                        this.flagHolding = ! JSON.parse(this.flagHolding);
                        console.log(response.data);
                    })
            }
        },

        computed: {
            buttonText(){


                let bln=JSON.parse(this.flagHolding);
               return bln
                   ? 'Remove'
                   : 'Add';
            }
        }
    }
</script>

<template>
    <div>
        <hr>
            <button class="btn text-style submit-button" v-on:click.prevent="addProductToCart()">
            Add to cart
            </button>
    </div>
</template>



<script>
    export default 
    {

        data(){
            return {
                
            }
        },


        props:['productId', 'userId'],


        methods:{
            async addProductToCart(){
               // this line only checks whether user is logged in, and if not, it gives an alert with Toastr that you need to log in first before adding to cart.
            if (this.userId == 0 ){
                this.$toastr.e('you need to login before you can add this product to your cart');
                return;      
            }
            
            let response = await axios.post('/cart', {
            'product_id':this.productId

            });

            this.$root.$emit('changeInCart', response.data.items);

            }

        },


            mounted() {
                console.log('Component mounted.')
            }

    }

</script>

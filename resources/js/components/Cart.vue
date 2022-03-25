<template>
    <div class="nav-item">
   
      <a href="/checkout" class="btn text-style submit-button m-2"> <i class="fa-solid fa-cart-shopping p-1"></i>Cart {{ itemCount }}</a>

 
    </div>
</template>

<script>
    export default {
        data (){
            return {
                itemCount: '',
            }
        },

        mounted() {
           this.$root.$on('changeInCart', (item)=> {
               this.itemCount = item;

           })
        },

    methods:{
        async getCartItemsOnPageLoad()
        {
        let response = await axios.post('/cart');
        this.itemCount = response.data.items
        }
    },
    
        created(){
            this.getCartItemsOnPageLoad();
        }
    }
</script>

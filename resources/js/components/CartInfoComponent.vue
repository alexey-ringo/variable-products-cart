<template>
    <div class="shopping-card">
		<i class="flaticon-bag"></i>
		<span>{{totalCartQuantity}}</span>
	</div>
</template>

<script>
    export default {
        props: [
            'totalCartQuantity'
            ],
        //data: function() {
        //    return {
        //    totalQuantity: 0,
            //resp: null
                
        //    }
        //},
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                //axios.get('/status-cart')
            	//	.then((response) => {
                //  	console.log(response);
                //    	this.totalQuantity = response.data.cartStatus.totalQuantity;
                    	//this.resp = response;
                //    })
                //    .catch(e => {
                //    	console.log(e);
                //    });
            	
            },
            statusCart: function() {
                
            	axios.get('/status-cart')
            		.then((response) => {
                    	//console.log(response);
                    	//this.urldata = response.data
                    	//this.is_refresh = false
                    	//this.id++
                    })
                    .catch(e => {
                    	//console.log(e);
                    });
            }
           
    	}
    }
</script>
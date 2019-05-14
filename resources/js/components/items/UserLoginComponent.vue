<template>
    <div class="inline-block">
        <div v-if="userName" class="up-item">
			<i class="flaticon-profile"></i>
			<p>{{ userName }}</p>
		</div>
		<div v-if="userName" class="up-item margin-right-30">
		    <a v-bind:href="'/users/logout'">Выйти</a>
		</div>
		
        <div v-if="!userName" class="up-item">
		    <i class="flaticon-profile"></i>
		    <a v-bind:href="'/login'">Войти</a> или <a v-bind:href="'/register'">Зарегистрироваться</a>
	    </div>
	</div>
</template>

<script>
    export default {
        props: [
            'userName',
            ],
        data: function() {
            return {
               
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                
            },
    	},
    }
</script>
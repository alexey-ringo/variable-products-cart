<template>
	<li v-on:mouseover="onSubMenuHover" v-on:mouseleave="onSubMenuLeave">
	    <a href="#">{{category.name}}</a>
		<ul v-if="category.children_cat" class="sub-menu" v-bind:style="{visibility: styleSubMenu}">
			<li v-for="(subCategory, index) in category.children_cat" 
			    v-bind:key="subCategory.id"
			    v-on:click="onClickCategory(subCategory)"
			>
			    <router-link :to="{ name: 'category', params: { slug: subCategory.slug }}">{{subCategory.name}}</router-link>
			</li>
		</ul>
	</li>
</template>

<script>
    export default {
        props: [
            'category',
            'globalIndex'
            ],
        data: function() {
            return {
                styleSubMenu: 'hidden'
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                
            },
            onClickCategory: function(subCategory) {
                this.$emit("selectCategory", subCategory);
                this.$emit("selectMenu", this.globalIndex);
                this.styleSubMenu = 'hidden';
            },
            onSubMenuHover: function() {
                this.styleSubMenu = 'visible';
                console.log(this.styleSubMenu);
            },
            onSubMenuLeave: function() {
                this.styleSubMenu = 'hidden';
            },
            
    	},
    	/*
    	computed: {
    	    styleSubMenu: {
    	        get: function () {
                    return {
                        visibility: 'hidden'
                    }
    	        },
                set: function(val) {
                    { visibility: "val"}
                }
            },
        },*/
    }
</script>
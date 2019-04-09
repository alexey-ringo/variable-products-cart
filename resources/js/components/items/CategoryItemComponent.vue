<template>
	<li 
	v-on:click="onClickMenu"
	v-bind:class="{'active': selectedMenu === globalIndex}"
	>
	    <a href="#">{{category.name}}</a>
		<ul v-if="category.children_cat" class="sub-menu">
			<li v-for="(subCategory, index) in category.children_cat" 
			v-bind:key="subCategory.id"
			v-bind:class="{'active': subCategory.slug === currentCategory.slug}"
			>
			    <a v-bind:href="'/shop/' + subCategory.slug">
			        {{subCategory.name}}<span>(2)</span>
			    </a>
			</li>
		</ul>
	</li>
</template>

<script>
    export default {
        props: [
            'category',
            'globalIndex',
            'selectedMenu',
            'initialCurrentCategory'
            ],
        data: function() {
            return {
                currentCategory: this.initialCurrentCategory,
            	clicked: false
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                for(let i = 0; i < this.category.children_cat.length; i++) {
                    if (this.category.children_cat[i].slug === this.currentCategory.slug) {
                        this.$emit("selectMenu", this.globalIndex);
                    }
                }
            },
            onClickMenu: function() {
            	if (!this.clicked) {
            	    this.clicked = true;
            	    this.$emit("selectMenu", this.globalIndex);
            	}
            	else {
            	    this.clicked = false;
            	    this.$emit("selectMenu", 0);
            	}
            },
    	}
    }
</script>
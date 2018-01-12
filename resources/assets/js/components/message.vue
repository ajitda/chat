<template>
    <li class="list-group-item"><slot></slot></li>
    <small class="badge float-right ">You</small>
</template>

<script>
    export default {
    	props:[
    		'color'
    	],
    	computed:{
    		className(){
    			return 'list-group-item-'+this.color;
    		}
    	},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

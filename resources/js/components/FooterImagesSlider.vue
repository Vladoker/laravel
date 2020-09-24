<template>
<section class="olima_instagram instagram_v1">
    <div class="container-full">
        <div class="instagram_wrap">
            <div class="instagram_slide_v1">   
                <div class="gird_item" v-for="(image, index) in instagram" :key="index">
                    <div class="post_img">
                        <img :src="'./storage/' + image.image" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="insta_wrap_box">
                <div class="insta_content">
                    <h4>{{ title }}</h4>
                    <a :href="link" target="_blank">{{ linktitle }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
</template>

<script>



export default {
     props: ['images', 'title', 'link', 'linktitle'],
     data(){
         return {
             instagram:[],
            
         }
     },
     mounted(){
         if(this.images == undefined || this.images == null){
             axios.get('api/instagram').then(response => {
                 this.instagram = response.data.instagram;
             })
         }
         else {
             this.instagram = this.images;
         }
     }
     
}
</script>
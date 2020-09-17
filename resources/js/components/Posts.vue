<template>
<div>
   <div class="col-lg-6" v-for="post in posts" :key="post.id">
        <div class="grid_item mb-50">
            <div class="post_img">
                <a :href="'/article/' + post.slug">
                    <img :src="post.image" class="img-fluid" :alt="post.slug">
                </a>
            </div>
            <div class="post_content">
                <div class="post_meta">
                    <span class="calender">{{ post.created_at }}</span>
                    <span class="time">{{ post.min_read }} min read</span>
                </div>
                <h3><a :href="'/article/' + post.slug">{{ post.title }}</a></h3>
                <a :href="'/article/' + post.slug" class="comments"><i class="fas fa-comments"></i>{{ post.comments.length }}</a>
            </div>
        </div>
    </div> 
</div>
 
</template>

<script>
export default {
    props:['posts'],
    created(){
        console.log(this.posts);
    }
}
</script>
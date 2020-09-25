<template>
<div class="col-lg-6 col-md-6">
    <div class="product_box mb-30">
        <div class="product_img">
            <a :href="'shop/' + link">
                <img :src=" 'storage/' + image" class="img-fluid" :alt="title">
            </a>       
        </div>
        <div class="product_info">
            <ul class="rating">
                <li v-for="(r, index) in rating" :key="index">
                    <i class="fas fa-star"></i>
                </li>
            </ul>
            <h3><a :href=" 'shop/' + link">{{ title }}</a></h3>
            <span class="price">${{ price }}</span>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        title:{
            type: String,
            default: 'Red Book Fair'
        },
        image:{
            type: String,
            default: 'assets/images/product_1.jpg'
        },
        rating:{
            type: Number,
            default: 3
        },
        link: {
           type: String,
           default: 'shop_details'
        },
        price: {
           type: Number,
           default: 5
        }
    },
   
}
</script>

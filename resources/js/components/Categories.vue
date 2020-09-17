<template>
  <div class="widget_box categories_widget mb-40">
    <h4> {{ title }} </h4>
    <ul>
      <li v-for="categorie in categories" :key="categorie.id">
        <a href="#">{{ categorie.title }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
    props:['title', 'categories'],
}
</script>

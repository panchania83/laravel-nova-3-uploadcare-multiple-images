<template>
  <div>
    <p v-for="(image, index) in images" :key="index">
      <img :src="image" class="rounded-sm w-9 h-9" style="object-fit: cover;">
    </p>
  </div>
</template>

<script>
export default {
  props: ['resourceName', 'field'],
  computed: {
    images() {
      // Assuming `field.value` contains the Uploadcare base URL (e.g., "https://ucarecdn.com/uuid~2/")
      const baseUrl = this.field.value;
      const numberOfImages = 5; // Adjust based on the expected number of images
      if (!baseUrl || typeof baseUrl !== 'string') {
        return [];
      }
      return Array.from({ length: numberOfImages }, (_, index) => `${baseUrl}nth/${index}/`);
    }
  }
};
</script>



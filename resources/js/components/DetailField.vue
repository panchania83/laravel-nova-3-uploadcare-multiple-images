<template>
	<div class="flex border-b border-40">
		<div class="w-1/4 py-4">
			<h4 class="font-normal text-80">
				{{ field.name }}
			</h4>
		</div>
		<div class="w-3/4 py-4">
			<div class="mt-2 w-full bg-white rounded-lg px-0" style="width: 400px;">
				<div v-for="(image, index) in imageUrls" :key="index" class="mb-2">
					<img :src="image" class="img-fluid rounded mx-auto d-block" alt="" style="width: 100%; margin: auto;">
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: ['resource', 'resourceName', 'resourceId', 'field'],
	computed: {
		imageUrls() {
			// Assuming `field.value` contains the base Uploadcare URL (e.g., "https://ucarecdn.com/uuid~2/")
			const baseUrl = this.field.value;
			const numberOfImages = 5; // Adjust based on your use case or make it dynamic
			return Array.from({ length: numberOfImages }, (_, index) => `${baseUrl}nth/${index}/`);
		}
	}
}
</script>

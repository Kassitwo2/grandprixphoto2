<template>
  <div>
    <div class="svg-star__stars">
      <svg
        v-for="num in 5"
        :key="num"
        :class="{ active: num <= ratingSetValue }"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        enable-background="new 0 0 19.481 19.481"
        @click="starClick(num)"
        style="width: 25px;"
      >
        <g>
          <path d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
        </g>
      </svg>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'SVGStar',
  props: {
    participationId: { type: Number, required: true },
    rating: { type: Number, default: 5 },
    ratingValue: { type: Number, default: 0 }
  },
  data() {
    return {
      ratingSetValue: this.ratingValue
    }
  },
  methods: {
    async starClick(num) {
      this.ratingSetValue = num;
      
      try {
        const response = await axios.post(`/participations/${this.participationId}/ratings`, {
          rating: num,
        });
        console.log(response.data.message); // Log success message
      } catch (error) {
        console.error('Error saving rating:', error);
      }
    },
    async fetchRating() {
      try {
        const response = await axios.post('/participations/1/ratings');
        if (response.data.rating) {
          this.ratingSetValue = response.data.rating;
          //console.log('this is data exist :' + response.data.rating)
        }
      } catch (error) {
        console.error('Error fetching rating:', error);
      }
    }
  },
  created() {
    this.fetchRating();
  }
};
</script>

<style scoped lang="scss">
.svg-star__stars {
  display: flex;
  flex-direction: row;
}
svg.active {
  fill: #e4720c;
}
svg {
  fill: #9cacbd;
}
</style>

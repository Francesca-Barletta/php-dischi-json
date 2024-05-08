  const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        discs:[]
      }
    },
    methods: {
      fetchDiscs(){
        axios.get('./server.php').then((res) => {
          this.discs = res.data.results
        })
      }
    },
    created() {
      this.fetchDiscs()
    }
  }).mount('#app')

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
          console.log(res.data);
          this.discs = res.data;
          // console.log(this.discs)
          // console.log(this.discs[0].title)
        })
      }
    },
    created() {
      this.fetchDiscs()
    }
  }).mount('#app')

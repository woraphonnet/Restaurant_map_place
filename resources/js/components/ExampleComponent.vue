<template>
    <div>
        <div class="header">
            <img src="../../../public/img/scg-icon.png" height="40">
            <p>Restaurants SCG</p>
        </div>
        <div class="container-box">
            <div class="box-grid">
                <div class="box-list">
                    <div class="header-list">
                        <h2>
                            List Restaurants
                        </h2> 
                    </div>
                    <hr>
                    <div class="list-grid">
                        <div v-show="initData.length >0" class="item-list" v-for="(item, index) in this.initData" :key="index">
                            <img :src="LinkGooglePoto(item)" height="130" width="192" alt="no img" onload>
                            <h4>{{item.name}}</h4>
                            <span>{{item.formatted_address}}</span><br>
                            <a href="#" @click="LinkGoogleMap(item)">Link Google map</a>
                        </div>
                    </div>
                </div>
                <div class="box-list2">
                    <div class="search">
                        <div class="grid-search">
                            <input type="text">
                            <button>test</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                initData: []
            }
        },
        mounted() {
            console.log(keyApi);
            axios.get(`api/getRestaurantsGoogle`, this.config).then(response => {
                this.initData = response.data.results
            })
        },
        methods: {
            LinkGoogleMap(item){
                window.open(`https://www.google.com/maps/search/?api=1&query=${item.name}&query_place_id=${item.place_id}`)
            },
            LinkGooglePoto(item){
             if(item.photos){
               return  `https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=${item.photos[0].photo_reference}&key=AIzaSyB_6G_5em5sdsUtStU9MsRmqAMGNEq9BDA`
             }
            }
        },
    }

</script>

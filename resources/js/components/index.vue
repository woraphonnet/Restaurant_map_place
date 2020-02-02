<template>
    <div>
        <div class="header">
            <div class="grid-head">
                <div class="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="  Search ">
                </div>
                <div class="map-marker">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="section-filter-category">
            <div class="grid-category">
                <div class="number-category">
                    <div class="count-filter">1</div>
                    <p> Filter</p>
                </div>
                <div class="list-category">
                    <ul>
                        <li>Open now</li>
                        <li>Like</li>
                        <li>Like</li>
                        <li>Like</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section-type">
            <p class='title'>Type Address</p>
            <div class="grid-type">
                <div class="item-type">
                    <div class="scope">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Bar</p>
                    </div>
                </div>
                <div class="item-type">
                    <div class="scope">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Bar</p>
                    </div>
                </div>
                <div class="item-type">
                    <div class="scope">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Bar</p>
                    </div>
                </div>
                <div class="item-type">
                    <div class="scope">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Bar</p>
                    </div>
                </div>
                <div class="item-type">
                    <div class="scope">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Bar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-card">
            <div class="grid-card">
                <div class="itme-card" v-for="(item, index) in this.initData" :key="index">
                    <div class="grid-detail">
                        <div class="item-detail">
                            <img :src="LinkGooglePoto(item)" width="200" alt="">
                            <div class="rating">
                                {{item.rating}}
                            </div>
                        </div>
                        <div class="item-detail">
                            <div class="scope">
                                <h2>{{item.name}}</h2>
                                <span class="price-level">
                                    <span>&#36;</span>
                                    <span>&#36;</span>
                                    <span>&#36;</span>
                                    <span>&#36;</span>
                                    <span class="active">&#36;</span>
                                    <div class="price-level-name">FREE</div>
                                </span>
                                <div class="text-type">Restaurant</div>
                                <div class="address">{{item.formatted_address}}</div>
                                <a href="#" @click="LinkGoogleMap(item)">Link Google map</a>
                            </div>
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
            axios.get(`api/getRestaurantsGoogle`).then(response => {
                this.initData = response.data.results
                console.log('this.initData :',this.initData);
                
            })
        },
        methods: {
            LinkGoogleMap(item) {
                window.open(
                    `https://www.google.com/maps/search/?api=1&query=${item.name}&query_place_id=${item.place_id}`)
            },
            LinkGooglePoto(item) {
                if (item.photos) {
                    return `https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=${item.photos[0].photo_reference}&key=AIzaSyB_6G_5em5sdsUtStU9MsRmqAMGNEq9BDA`
                }
            },
        },
    }

</script>

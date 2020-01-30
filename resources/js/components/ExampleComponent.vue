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
                        <div class="item-list" v-for="(item, index) in this.initData" :key="index">
                            <img src="../../../public/img/Kiew_Kai_Ka-1170x780-qa-94.jpg" height="130" width="192" alt="">
                            <h4>{{item.name}}</h4>
                            <span>{{item.formatted_address}}</span><br>
                            <a href="#">Link Google map</a>
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
                initData: null
            }
        },
        mounted() {
            axios.get(`api/getRestaurantsGoogle`, this.config).then(response => {
                console.log('res', response.data.results);
                this.initData = response.data.results
            })
        }
    }

</script>

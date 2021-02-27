<template>
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h1>{{this.description}}</h1>
                    </div>
                    <div class="card-body">
                        <div id="chart-div"></div>
                    </div>
                    <div class="card-footer">
                        Data received in {{new Date(this.time.updated) | moment('DD MMMM YYYY h:mm a')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import chart from "../chart";
    export default {
        name: 'HomeComponent',
        props: ['data'],
        data: () => {
            return {
                chart: [],
                time: {},
                description: "",
            }
        },
        mounted() {
            console.log('HomeComponent mounted.');
        },
        methods: {
            createChart(data){
                /* create chart */
                chart(data);
            },
        },
        created() {
            if(Object.keys(this.$props['data']).length > 0){
                /* processing data from the server (api) and adding it to the component to create a chart */
                const {time, bpi, disclaimer} = this.$props['data'];
                this.time = time;
                this.description = disclaimer;
                this.chart = Object.keys(bpi).map(key => {
                    return {
                        "date": Vue.moment(key).format('DD-MM-YYYY '),
                        "cost": bpi[key],
                    }
                });
                this.createChart(this.chart);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .container {
        padding-top: 50px;
        padding-bottom: 20px;
    }

    #chart-div {
        width: 100%;
        height: 500px;
    }

    .card, .card-header {
        padding: 0;
        border-radius: 10px 10px 0 0;
    }

    .card {
        box-shadow: inset 0 0 0 1px rgba(53, 86, 129, .4), inset 0 0 5px rgba(53, 86, 129, .5);
    }

    h1 {
        margin: 0;
        font-weight: 600;
        font-family: 'Titillium Web', sans-serif;
        position: relative;
        font-size: 22px;
        line-height: 40px;
        padding: 15px 15px 15px 15%;
        color: #001f1e;
        box-shadow: inset 0 0 0 1px rgba(53, 86, 129, .4), inset 0 0 5px rgb(53, 86, 129, .5), inset -285px 0 35px white;
        border-radius: 10px 10px 0 0;
        background: #fff url('/images/banner-bg-2.jpg') no-repeat center left;
        background-size: cover;
        background-position-y: -235px;
    }

    .card-footer {
        text-align: right;
        color: #181828;
    }
</style>

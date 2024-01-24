<template>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center my-3">
                <img src="https://www.muktinathkrishi.com/assets/frontend/img/logo-muktinath.svg"
                    alt="muktinath Krishi Company Ltd." srcset="">
            </div>
            <div class="col-md-12 text-center">
                <div class="fs-5 fw-bold text-decoration-underline text-success py-2">Remote Sensor detail</div>
                <div>
                    <div v-if="data">
                        <div class="mb-3">
                            <div><b>Customer Name :</b>
                                {{ data . data . customerName == '' ? '' : 'Muktinath Krishi Co. Ltd.' }} </div>
                            <div><b>Device Id :</b> {{ data . data . deviceId }}</div>
                            <div v-if="data.data.logs && data.data.logs.length > 0">

                                <div> <b>Sensor:</b> {{ data . data . logs[0] . sensor }}</div>
                                <div> <b>Location:</b> {{ data . data . logs[0] . location }}</div>

                            </div>

                        </div>
                        <!-- <p>Customer ID: {{ data . data . customerId }}</p> -->
                        <!-- <p>Customer Name: {{ data . data . customerName }}</p> -->
                        <div class="row justify-content-center">

                            <div class="col-md-2 text-center">
                                <div class="border rounded bg-white">
                                    <div>
                                        <img src="/img/thermometer.png" alt="thermometer" style="height: 100px;">
                                        <div>Temperature : <span v-if="data.data.logs && data.data.logs.length > 0">
                                                {{ data . data . logs[0] . avgTemp }} <sup>o</sup>C
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="ml-2">Min : {{ data . data . minTemp }}<sup>o</sup>C </div>

                                        <div>Max : {{ data . data . maxTemp }} <sup>o</sup>C</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="border rounded bg-white">
                                    <div>
                                        <img src="/img/humidity.png" alt="humidity" style="height: 100px;">
                                        <div>
                                            Humidity :
                                            <span v-if="data.data.logs && data.data.logs.length > 0">
                                                {{ data . data . logs[0] . avgHumidity }}%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="ml-2">Min : {{ data . data . minHumidity }}%</div>
                                        <div>Max : {{ data . data . maxHumidity }}%</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div v-if="data . data . fan == true">
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/running-fan.gif" alt="fan-on" style="height: 100px;">

                                            <div>Fan <img src="/img/on.png" alt="on" style="height: 20px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/stop-fan.png" alt="fan-off" style="height: 100px;">
                                            <div>Fan
                                                <img src="/img/off.png" alt="off" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div v-if="data . data . heater == true">
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/heater-on.png" alt="heater-on" style="height: 100px;">
                                            <div>Heater
                                                <img src="/img/on.png" alt="on" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/heater-off.png" alt="heater-of" style="height: 100px;">
                                            <div>Heater
                                                <img src="/img/off.png" alt="off" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div v-if="data . data . pad == true">
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/cooling-pad.png" alt="Cooling Pad-on" style="height: 100px;">
                                            <div>
                                                Cooling Pad
                                                <img src="/img/on.png" alt="on" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/cooling-pad.png" alt="Cooling Pad-of" style="height: 100px;">
                                            <div>Cooling Pad
                                                <img src="/img/off.png" alt="off" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div v-if="data . data . fogger == true">
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/fooger.png" alt="Fooger-on" style="height: 100px;">
                                            <div>Fogger
                                                <img src="/img/on.png" alt="on" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else>
                                    <div class="border rounded bg-white pb-4">
                                        <div>
                                            <img src="/img/fooger.png" alt="Fooger-of" style="height: 100px;">
                                            <div>Fogger
                                                <img src="/img/off.png" alt="off" style="height: 20px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>{{ data . data . logs . id }}</p>
                        <!-- <p>Heater: {{ data . data . heater }}</p> -->
                        <!-- Add other properties as needed -->

                        <!-- <h2>Logs</h2>
                        <ul>
                            <li v-for="log in data.data.logs" :key="log.id">
                                <p>Sensor: {{ log . sensor }}</p>
                                <p>Location: {{ log . location }}</p>
                                <p>Avg Temp: {{ log . avgTemp }}</p>
                                <p>Avg Humidity: {{ log . avgHumidity }}</p>
                                <p>Created At: {{ log . createdAt }}</p>
                                
                            </li>
                        </ul> -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer">
        <div class="container mt-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex gap-2">
                    <div>
                        <i class="bi bi-geo-alt-fill fs-1"></i>
                    </div>
                    <div>
                        <div class="fs-5">
                            Head Office
                        </div>
                        <div>
                            Basundhara, Ring Road
                        </div>
                        <div>
                            Kathmandu, Nepal (44600)
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <div>
                        <i class="bi bi-telephone fs-1"></i>
                    </div>
                    <div>
                        <div class="fs-5">
                            Contact
                        </div>
                        <div>
                            18105000033
                        </div>
                        <div>
                            +977-1-4950097
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <div>
                        <i class="bi bi-envelope fs-1"></i>
                    </div>
                    <div>
                        <div class="fs-5">
                            Email
                        </div>
                        <div>
                            info@muktinathkrishi.com
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['deviceId'],
        data() {
            return {
                data: null
            };
        },
        mounted() {
            // console.log('Device ID:', this.deviceId);
            // const deviceId = this.deviceId;
            // Fetch data every 1 second
            this.fetchDataInterval = setInterval(() => {
                this.fetchData();
            }, 1000);
        },
        beforeDestroy() {
            // Clear the interval when the component is destroyed
            clearInterval(this.fetchDataInterval);
        },
        methods: {
            fetchData() {
                // Replace the URL with your actual API endpoint
                // const deviceId = 1400; // Default to 1400 if not provided
                const apiUrl = `https://www.muktinathkrishi.com/api/remotes/remote-sensor-devices/${this.deviceId}`;

                // Use Axios to make the API request
                axios.get(apiUrl)
                    .then(response => {
                        // Update the 'data' property with the received data
                        this.data = response.data;
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });

                // console.log(data);
            }
        }
    };
</script>
<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #17af4e;
        color: white;
    }
</style>

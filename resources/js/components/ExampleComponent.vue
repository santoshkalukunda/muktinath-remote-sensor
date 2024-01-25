<template>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mt-2 ">
                <img src="https://www.muktinathkrishi.com/assets/frontend/img/logo-muktinath.svg"
                    alt="muktinath Krishi Company Ltd." srcset="">
            </div>
            <div class="col-md-12">
                <div class="fs-5 fw-bold text-decoration-underline text-success py-3 text-center">
                    REMOTE SENSOR DETAILS
                </div>
                <div>
                    <div v-if="data">
                        <div class="d-flex justify-content-around">
                            <div class="mb-3 text-left">
                                <div><b>Customer Name :</b>
                                    {{ data . data . customerName == '' ? '' : 'Muktinath Krishi Co. Ltd.' }} </div>
                                <div v-if="data.data.logs && data.data.logs.length > 0">
                                    <!-- <div> <b>Sensor:</b> {{ data . data . logs[0] . sensor }}</div> -->
                                    <div> <b>Location:</b> {{ data . data . logs[0] . location }}</div>
                                </div>

                            </div>
                            <div class="text-right">
                                <div><b>Device Id :</b> {{ data . data . deviceId }}</div>
                                <div v-if="data.data.logs && data.data.logs.length > 0">
                                    <div> <b>Sensor:</b> {{ data . data . logs[0] . sensor }}</div>
                                    <!-- <div> <b>Location:</b> {{ data . data . logs[0] . location }}</div> -->
                                </div>
                            </div>

                        </div>



                        <!-- <p>Customer ID: {{ data . data . customerId }}</p> -->
                        <!-- <p>Customer Name: {{ data . data . customerName }}</p> -->
                        <div class="row justify-content-center">

                            <div class="col-md-4 text-center">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="/img/thermometer.png" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body bg-white">
                                                <h5 class="card-title">Temperature</h5>
                                                <div class="card-text">
                                                    <h1 class="fw-bold"
                                                        v-if="data.data.logs && data.data.logs.length > 0"
                                                        style="color: #e21f27 ;">
                                                        {{ data . data . logs[0] . avgTemp }} <sup>o</sup>C
                                                    </h1>
                                                    <div class="d-flex justify-content-around">
                                                        <div class="ml-2">Min :
                                                            {{ data . data . minTemp }}<sup>o</sup>C </div>
                                                        <div>Max : {{ data . data . maxTemp }} <sup>o</sup>C</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="card bg-white mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="/img/humidity.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Humidity</h5>
                                                <div class="card-text">
                                                    <h1 class="fw-bold"
                                                        v-if="data.data.logs && data.data.logs.length > 0"
                                                        style="color: #e21f27 ;">
                                                        {{ data . data . logs[0] . avgHumidity }}%
                                                    </h1>
                                                    <div class="d-flex justify-content-around">
                                                        <div class="ml-2">Min : {{ data . data . minHumidity }}%
                                                        </div>
                                                        <div>Max : {{ data . data . maxHumidity }}%</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-2 text-center">
                                <div v-if="remoteSensor . remoteSensor . fan == true">
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
                                <div v-if="remoteSensor . remoteSensor . heater == true">
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
                                <div v-if="remoteSensor . remoteSensor . pad == true">
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
                                <div v-if="remoteSensor . remoteSensor . fogger == true">
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
                    <!-- <div>
                        <i class="bi bi-geo-alt-fill fs-1"></i>
                    </div> -->
                    <div>
                        <div class="fs-5">
                            Contact
                        </div>
                        <div>
                            <i class="bi bi-geo-alt-fill"></i> Basundhara, Ring Road
                        </div>
                        <div>
                            Kathmandu, Nepal (44600)
                        </div>
                        <div>
                            <i class="bi bi-envelope"></i> info@muktinathkrishi.com
                        </div>
                        <div>
                            <i class="bi bi-telephone"></i> 18105000033 / +977-1-4950097
                        </div>
                    </div>
                </div>
                <!-- <div>{{ qrCodes . qrCodes . id }}</div> -->

                <div v-for="qrCode in qrCodes.qrCodes" :key="qrCode.id">
                    <div>
                        <div>
                            <!-- Use v-bind to dynamically set the src attribute -->
                            <img :src="qrCode.qr" :alt="qrCode.name"  style="height: 140px;"/>
                        </div>
                        <div class="text-center">{{ qrCode.name }}</div>
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
                data: null,
                remoteSensor: null,
                qrCodes: null,
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
                const apiData = `https://automation.muktinathfoundation.org/api/remote-sensors.show/8`;
                const apiQrCodes = `api/qr-codes`;
                // Use Axios to make the API request
                axios.get(apiUrl)
                    .then(response => {
                        // Update the 'data' property with the received data
                        this.data = response.data;

                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });


                axios.get(apiData)
                    .then(response => {
                        // Update the 'data' property with the received data
                        this.remoteSensor = response.data;
                    })
                    .catch(error => {
                        console.error('Error fetching remoteSensor:', error);
                    });

                axios.get(apiQrCodes)
                    .then(response => {
                        // Update the 'data' property with the received data
                        this.qrCodes = response.data;
                        console.log(response.data);
                    })
                    .catch(error => {
                        console.error('Error fetching qrCodes:', error);
                    });

            }
        }
    };
</script>
<style>
    .footer {
        padding-top: 10px;
        padding-bottom: 10px;
        position: fixed;
        /* left: 0; */
        bottom: 0;
        width: 100%;
        background-color: #17af4e;
        color: white;
        font-size: larger;
    }
</style>

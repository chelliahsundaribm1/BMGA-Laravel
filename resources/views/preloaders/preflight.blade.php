<div class="flight-preloader" style="display: none;">
    <div class="loader">
        <div class="wait">Searching for flights...</div>

        <div class="iata_code departure_city"><span class="departure_city">---</span></div>
        <div class="plane">
            <img src="https://zupimages.net/up/19/34/4820.gif" class="plane-img">
        </div>
        <div class="earth-wrapper">
            <div class="earth"></div>
        </div>  
        <div class="iata_code arrival_city"><span class="arrival_city">---</span></div>
    </div>
</div>

<style>
.flight-preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader {
    text-align: center;
    width: 100%;
    position: relative;
    overflow: hidden;
    max-width: 35rem;
    height: 30rem;
    margin: 0 auto;
}

.wait {
    margin: 5rem 0;
    font-size: 1.5rem;
    color: #333;
}

.iata_code {
    font-size: 6rem;
    opacity: 0.3;
    top: 52%;
    position: absolute;
    color: #0099cc;
}

.departure_city {
    left: 0;
}

.arrival_city {
    right: 0;
}

.plane {
    position: absolute;
    margin: 0 auto;
    width: 100%;
}

.plane-img {
    -webkit-animation: spin 2.5s linear infinite;
    -moz-animation: spin 2.5s linear infinite;
    animation: spin 2.5s linear infinite;
}

@-moz-keyframes spin {
    100% {
        -moz-transform: rotate(360deg);
    }
}

@-webkit-keyframes spin {
    100% {
        -webkit-transform: rotate(360deg);
    }
}

@keyframes spin {
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.earth-wrapper {
    position: absolute;
    margin: 0 auto;
    width: 100%;
    padding-top: 2.7rem;
}

.earth {
    width: 160px;
    height: 160px;
    background: url("https://zupimages.net/up/19/34/6vlb.gif");
    border-radius: 100%;
    background-size: 340px;
    animation: earthAnim 12s infinite linear;
    margin: 0 auto;
    border: 1px solid #CDD1D3;
}

@keyframes earthAnim {
    0% {background-position-x: 0;}
    100% {background-position-x: -340px;}
}

@media screen and (max-width: 420px) {
    .departure_city {
        left: 0;
        right: 0;
        top: 30%;
        position: absolute;
        margin: 0 auto;
    }
    
    .arrival_city {
        left: 0;
        right: 0;
        top: 93%;
        position: absolute;
        margin: 0 auto;
    }
}
</style>
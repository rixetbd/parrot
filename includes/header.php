<!-- Start -- Header -->
<header class="header container-fluid">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 left_side">
                <h3>Discover The Largest</h3>
                <h1>NFT Collection</h1>

                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam nostrud magna aliqua.</p>

                <button class="gradient_btn">About Us</button>
                <button class="gradient_btn">Hire us</button>

                <div class="row header_counter_box mt-4">
                    <div class="col-4 header_counter">
                        <h4 class="count_number">15<span>+</span></h4>
                        <h4 class="count_subtitle">Total Projects</h4>
                    </div>
                    <div class="col-4 header_counter">
                        <h4 class="count_number">25<span>K</span></h4>
                        <h4 class="count_subtitle">Total Projects</h4>
                    </div>
                    <div class="col-4 header_counter">
                        <h4 class="count_number">29<span>M</span></h4>
                        <h4 class="count_subtitle">Total Projects</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 right_side">
                <div class="img_box">
                    <img src="libs/img/wolf.png" alt="" class="img-fluid" width="450">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End -- Header -->


<style>
    .header {
        height: 80vh;
        display: flex;
        align-items: center;
        /* background: #0c5226; */
    }

    .header .left_side h1 {
        font-size: 80px;
        font-weight: 600;
        background: #987BEE;
        background: linear-gradient(to right, #987BEE 0%, #EE7B7B 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }

    .header .left_side h3 {
        color: #fff;
        font-size: 50px;
        font-weight: 600;
        letter-spacing: 1.5px;
    }

    .gradient_btn {
        font-family: 'Nunito', sans-serif;
        font-size: 20px;
        font-weight: 600;
        text-transform: none;
        line-height: 20px;
        letter-spacing: 2px;
        color: #fff;
        background-color: transparent;
        background-image: linear-gradient(to right, #987BEE 0%, #EE7B7B 100%);
        border: none;
        border-radius: 10px 5px 10px 5px;
        padding: 15px 20px;
    }

    .header p {
        font-family: 'Nunito', sans-serif;
        color: #D6D6D6 !important;
    }

    .header .right_side div.img_box {
        display: flex;
        justify-content: end;
        padding: 50px 0;

    }

    .header .right_side div.img_box img {
        width: 80%;
        padding: 50px;
        background: #FFFFFF14;
        border: 3px solid #FFFFFF42;
        border-radius: 15px;
    }

    .header_counter_box {
        padding: 20px;
        background: #FFFFFF14;
        border: 3px solid #FFFFFF42;
        border-radius: 15px;
    }

    .header_counter {
        color: #fff;
        /* text-align: center; */
    }

    .count_number {
        font-size: 40px;
        font-weight: 600;
    }

    .count_number span {
        font-size: 18px;
    }

    .count_subtitle {
        font-size: 18px;
    }
</style>
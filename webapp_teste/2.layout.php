z<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste de Layout</title>
        <style>
            html {
                background-color: black;
                box-sizing: border-box;
                font-family: 'Open Sans', sans-serif;
            }

            *, *:before, *:after {
                box-sizing: inherit;
            }

            .background {
                background-color: black;
                padding: 0 25px 25px;
                position: relative;
                width: 100%;
            }

            .background::after {
                /*content: '';
                background: #60a9ff;
                background: -moz-linear-gradient(top, #60a9ff 0%, #4394f4 100%);
                background: -webkit-linear-gradient(top, #60a9ff 0%,#4394f4 100%);
                background: linear-gradient(to bottom, #60a9ff 0%,#4394f4 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60a9ff', endColorstr='#4394f4',GradientType=0 );*/
                background-color: black;
                height: 350px;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
                z-index: 1;
            }

            @media (min-width: 900px) {
            .background {
                padding: 0 0 25px;
            }
            }

            .container {
                margin: 0 auto;
                padding: 50px 0 0;
                max-width: 960px;
                width: 100%;
            }

            .panel {
                /*background-color: #fff;*/
                background-color: #D3D3D3;
                border-radius: 10px;
                padding: 15px 25px;
                position: relative;
                width: 100%;
                z-index: 10;
            }

            .pricing-table {
                box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 
                            0px 20px 31px 3px rgba(0, 0, 0, 0.09), 
                            0px 8px 20px 7px rgba(0, 0, 0, 0.02);
                display: flex;
                flex-direction: column;
            }

            @media (min-width: 900px) {
            .pricing-table {
                flex-direction: row;
            }
            }

            .pricing-table * {
                text-align: center;
                text-transform: uppercase;
            }

            .pricing-plan {
                border-bottom: 1px solid #e1f1ff;
                padding: 25px;
            }

            .pricing-plan:last-child {
                border-bottom: none;
            }

            @media (min-width: 900px) {
            .pricing-plan {
                border-bottom: none;
                border-right: 1px solid #e1f1ff;
                flex-basis: 100%;
                padding: 25px 50px;
            }

            .pricing-plan:last-child {
                border-right: none;
            }
            }

            .pricing-img {
                margin-bottom: 25px;
                max-width: 100%;
            }

            .pricing-header {
                color: #888;
                font-weight: 600;
                letter-spacing: 1px;
            }

            .pricing-features {
                color: #016FF9;
                font-weight: 600;
                letter-spacing: 1px;
                margin: 50px 0 25px;
            }

            .pricing-features-item {
                border-top: 1px solid #e1f1ff;
                font-size: 12px;
                line-height: 1.5;
                padding: 15px 0;
            }

            .pricing-features-item:last-child {
                border-bottom: 1px solid #e1f1ff;
            }

            .pricing-price {
                color: #016FF9;
                display: block;
                font-size: 32px;
                font-weight: 700;
            }

            .pricing-button {
                border: 1px solid #9dd1ff;
                border-radius: 10px;
                color: #348EFE;
                display: inline-block;
                margin: 25px 0;
                padding: 15px 35px;
                text-decoration: none;
                transition: all 150ms ease-in-out;
            }

            .pricing-button:hover,
            .pricing-button:focus {
                background-color: #e1f1ff;
            }

            .pricing-button.is-featured {
                background-color: #48aaff;
                color: #fff;
            }

            .pricing-button.is-featured:hover,
            .pricing-button.is-featured:active {
                background-color: #269aff;
            }
        </style>
    </head>
    <body>
        <div class="background">
            <div class="container">
                <div class="panel pricing-table">

                    <div class="pricing-plan">
                        <img src="img/0.area.png" alt="" class="pricing-img" width="60" height="60">
                        <h3 class="pricing-header">Personal</h3>
                        <ul class="pricing-features">
                        <li class="pricing-features-item">Custom domains</li>
                        <!--<li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>-->
                        </ul>
                        <!--<span class="pricing-price">Free</span>-->
                        <!--<a href="#/" class="pricing-button">Sign up</a>-->
                    </div>

                    <div class="pricing-plan">
                    <img src="img/0.bat_sol.png" alt="" class="pricing-img" width="60" height="60">
                        <h4 class="pricing-header">Small team</h4>
                        <ul class="pricing-features">
                        <li class="pricing-features-item">Never sleeps</li>
                        <!--<li class="pricing-features-item">Multiple workers for more powerful apps</li>-->
                        </ul>
                        <!--<span class="pricing-price">$150</span>-->
                        <!--<a href="#/" class="pricing-button is-featured">Free trial</a>-->
                    </div>

                    <div class="pricing-plan">
                    <img src="img/0.painel.png" alt="" class="pricing-img" width="60" height="60">
                        <h3 class="pricing-header">Enterprise</h3>
                        <ul class="pricing-features">
                        <li class="pricing-features-item">Dedicated</li>
                        <!--<li class="pricing-features-item">Simple horizontal scalability</li>-->
                        </ul>
                        <!--<span class="pricing-price">$400</span>-->
                        <!--<a href="#/" class="pricing-button">Free trial</a>-->
                    </div><br>
                    
                        <div class="pricing-plan">
                            <img src="img/1.painel_bat.png" alt="" class="pricing-img" width="60" height="60">
                            <h3 class="pricing-header">Enterprise</h3>
                            <ul class="pricing-features">
                            <li class="pricing-features-item">Dedicated</li>
                            <!--<li class="pricing-features-item">Simple horizontal scalability</li>-->
                            </ul>
                            <!--<span class="pricing-price">$400</span>-->
                            <!--<a href="#/" class="pricing-button">Free trial</a>-->
                        </div>                       
                    
                </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cryptodog</title>

    <link rel="stylesheet" href="./index.css">
    <script type="text/javascript" src="./index.js" defer></script>

    <?php include 'curl.php' ?>
</head>
<body>
    <div class="wrapper">
        <div class="logo-corner">
            <div class="logo">
                <a href="#"><img src="./assets/cryptodog-logo.svg" alt=""></a>
                <h1>Crypto Dog</h1>
            </div>
        </div>
        <section id="dashboard">
            <div class="container">

                <div class="card Bitcoin">
                    <img src="./assets/bitcoin-btc-logo.svg" alt="btc">
                    <p>1 <b>BTC</b> = 
                        <span><?= $btcToEur ?></span> €
                    </p>
                    <input type="number" name="amount">
                    <select name="conv-type" id="convert-select">
                        <option value="btc-to-eur">BTC > EUR</option>
                        <option value="eur-to-btc">EUR > BTC</option>
                    </select>
                    <div class="btn convert">Convert</div>
                    <div class="result"></div>
                </div>

                <div class="card Ethereum">
                    <img src="./assets/ethereum-eth.svg" alt="eth">
                    <p>1 <b>ETH</b> = 
                        <span><?= $ethToEur ?></span> €
                    </p>
                    <input type="number">
                    <select name="" id="">
                        <option value="eth-to-eur">ETH > EUR</option>
                        <option value="eur-to-eth">EUR > ETH</option>
                    </select>
                    <div class="btn convert">Convert</div>
                    <div class="result"></div>
                </div>

                <div class="card Litecoin">
                    <img src="./assets/litecoin.svg" alt="ltc">
                    <p>1 <b>LTC</b> = 
                        <span><?= $ltcToEur ?></span> €
                    </p>
                    <input type="number">
                    <select name="" id="">
                        <option value="ltc-to-eur">LTC > EUR</option>
                        <option value="eur-to-ltc">EUR > LTC</option>
                    </select>
                    <div class="btn convert">Convert</div>
                    <div class="result"></div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
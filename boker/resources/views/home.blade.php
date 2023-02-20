<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy And Sell Stock</title>
    <link rel="stylesheet" href="./style/sell.css">

</head>

<body>

    <div class="container">
        <div class="right">

            <h2>Show All Stock </h2>
            <div class="selltable">
                <table>
                    <tr>

                        <th>ID</th>
                        <th>Sell</th>
                        <th>Price</th>

                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>500</td>
                        <td>5900</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>400</td>
                        <td>5800</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>1200</td>
                        <td>5700</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>300</td>
                        <td>5600</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>200</td>
                        <td>5500</td>
                    </tr>

                </table>
            </div>
            <div class="buytable">
                <table>
                    <tr>

                        <th>ID</th>
                        <th>Buy</th>
                        <th>Price</th>

                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>400</td>
                        <td>5400</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>500</td>
                        <td>5300</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>200</td>
                        <td>5200</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>1020</td>
                        <td>5100</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>3000</td>
                        <td>5000</td>
                    </tr>

                </table>
            </div>

        </div>
        <div class="left">
            <div class="main-type"></div>
            <label for="type">Type Order: </label>
            <select class="type">
                <option value="1">Buy Stock</option>
                <option value="2">Sell Stock</option>
            </select>

            <div class="quality">
                <form action="/action_page.php">
                    <label for="quality">Quality: </label>
                    <input style="height: 20px" type="text" id="quality" name="quality"
                        placeholder="Input quality...">

                    <label style="margin-left: 30px" for="price">Price: </label>
                    <input type="text" id="price" name="price" placeholder="Input price...">
                </form>
            </div>

            <div class="submit">
                <input style="bottom: 0px" type="submit" value="Make Order->>">
            </div>
        </div>
    </div>
</body>

</html>

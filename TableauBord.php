<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the dashboard page</title>
    <link rel="stylesheet" href="Css/style_admin.css">
</head>

<body>
    <main class="main_dash">
        <h1>Analytics Overview</h1>
        <div class="container_dash">
            <div class="cart_dash cart1">
                 <div class="cart-content">
                    <p>Article</p>
                    <i class='bx bxs-folder-plus'></i>
                 </div>
                <p>100</p>
            </div>

            <div class="cart_dash cart2">
                 <div class="cart-content">
                    <p>On order</p>
                    <i class='bx bx-cart-download'></i>
                 </div>
                <p>10</p>
            </div>

            <div class="cart_dash cart3">
                 <div class="cart-content">
                    <p>Ventes</p>
                    <i class='bx bxs-message-square-check'></i>
                 </div>
                <p>200</p>
            </div>

            <div class="cart_dash cart4">
                  <div class="cart-content">
                    <p>Rejets</p>
                    <i class='bx bxs-message-x'></i>
                 </div>
                <p>50</p>
            </div>

            <div class="cart_Mvente cart5">
                    <div class="title_view">
                        <p class="title">Recent Orders</p>
                        <input type="button" value="View All">
                    </div>

                    <div id="chart-bar">
                       <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Payment</th>
                                    <th>Statuts</th>
                                </tr>
                                <tr>
                                    <td>Laptop</td>
                                    <td>$120</td>
                                    <td>Paid</td>
                                    <td><button style="background-color: green;">Delivered</button></td>
                                </tr>
                                <tr>
                                    <td>Speakers</td>
                                    <td>$100</td>
                                    <td>Due</td>
                                    <td><button style="background-color: red;">Return</button></td>
                                </tr>
                                <tr>
                                    <td>Smartphone</td>
                                    <td>$400</td>
                                    <td>Paid</td>
                                    <td><button style="background-color: orange;">Panding</button></td>
                                </tr>
                            </table>

                    </div>
            </div>

            <div class="cart_Mvente cart6">
                    <p class="title">Recent Customers</p>
                    <div id="chart-area">
                        <div class="chart_profil">
                            <img src="Images/avatar-testimonial.jpg" alt="">
                            <div class="info_user">
                                <p6>Jhon</p6>
                                <p6 class="pays">Port-au-Prince</p6>
                            </div>
                        </div>

                        <div class="chart_profil">
                        <img src="Images/avatar-testimonial.jpg" alt="">
                            <div class="info_user">
                                <p6>Henri</p6>
                                <p6 class="pays">Delmas</p6>
                            </div>
                        </div>

                        <div class="chart_profil">
                            <img src="Images/avatar-testimonial.jpg" alt="">
                            <div class="info_user">
                                <p6>Ronaldo</p6>
                                <p6 class="pays">Croix-des-bouquet</p6>
                            </div>
                        </div>

                        <div class="chart_profil">
                            <img src="Images/avatar-testimonial.jpg" alt="">
                            <div class="info_user">
                                <p6>Messi</p6>
                                <p6 class="pays">Lalue</p6>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.1"></script>
    <script src="Javascript/dash.js"></script>
</body>
</html>
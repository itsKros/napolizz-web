<?php include('header.php'); ?>

        <!-- Page Title -->
        <div class="page-title-area page-title-img-one">
            <div class="container">
                <div class="page-title-item">
                    <h2>Cart</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right' ></i>
                        </li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Cart -->
        <section class="cart-area ptb-100">
            <div class="container">
                <div class="cart-wrap">
                    <table class="table">
                        <thead class="thead">
                            <tr>
                                <th class="table-head" scope="col">Images</th>
                                <th class="table-head" scope="col">Items</th>
                                <th class="table-head" scope="col">Prices</th>
                                <th class="table-head" scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="table-item" scope="row">
                                    <img src="/assets/img/home-two/banner/food4.png" alt="Menu">
                                </th>
                                <td>Burger</td>
                                <td>$10.00</td>
                                <td>
                                    <a href="#">
                                        <i class='bx bx-x'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-item" scope="row">
                                    <img src="assets/img/home-two/banner/food2.png" alt="Image">
                                </th>
                                <td>Pasta</td>
                                <td>$15.00</td>
                                <td>
                                    <a href="#">
                                        <i class='bx bx-x'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-item" scope="row">
                                    <img src="assets/img/home-two/banner/food1.png" alt="Image">
                                </th>
                                <td>Sandwich</td>
                                <td>$20.00</td>
                                <td>
                                    <a href="#">
                                        <i class='bx bx-x'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-item" scope="row">
                                    <img src="assets/img/home-two/banner/food3.png" alt="Image">
                                </th>
                                <td>Pizza</td>
                                <td>$15.00</td>
                                <td>
                                    <a href="#">
                                        <i class='bx bx-x'></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-item" scope="row">
                                    <img src="assets/img/home-two/banner/food5.png" alt="Image">
                                </th>
                                <td>Chinese</td>
                                <td>$30.00</td>
                                <td>
                                    <a href="#">
                                        <i class='bx bx-x'></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="shop-back">
                        <a href="#">Go for Order?</a>
                    </div>
                    <div class="total-shopping">
                        <h2>Total Order</h2>
                        <h3>Total: <span>$90.00</span></h3>
                        <a href="checkout.html">Checkout Items</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cart -->

<?php include('footer.php'); ?>
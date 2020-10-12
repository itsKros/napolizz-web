<?php include('header.php') ?>
        <!-- Page Title -->
        <div class="page-title-area page-title-img-one">
            <div class="container">
                <div class="page-title-item">
                    <h2>CHOOSE YOUR OPTIONS!</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right' ></i>
                        </li>
                        <li>Promo/Packages</li>
                        <li>
                            <i class='bx bx-chevron-right' ></i>
                        </li>
                        <li>Combo A</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Collection -->
        <section class="collection-area" id="comboSinglePage">
            <div class="container">
                <div id="Container" class="row">
                    <div class="col-lg-5 offset-md-1 mix">
                        <div class="collection-item">
                            <div class="collection-top">
                                <img src="assets/img/home-one/collection/1.jpg" alt="Collection">
                            </div>
                            <div class="collection-bottom">
                                <h3>Combo A</h3>
                                <p class="singleprice">
                                <span class="sp-wrap">
                                        <i class="bx bxs-dollar-circle"></i>
                                        <span class="price">32.00</span>
                                </span>
                                </p>
                                <p class="desc">1 pizza/1 salad/1 garlic bread and 1 drink (coke or sprite 1.5 litre)</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 mix"> 
                        <form>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label for="pizzas">Pizzas:</label>
                                    <select id="pizzas" class="form-control">
                                        <option value="Americana">Americana</option>
                                        <option value="BBQ Chicken">BBQ Chicken</option>
                                        <option value="Calzone">Calzone</option>
                                        <option value="Diavola">Diavola</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="salad">Salad:</label>
                                    <select id="salad" class="form-control">
                                        <option value="Americana">Americana</option>
                                        <option value="BBQ Chicken">BBQ Chicken</option>
                                        <option value="Calzone">Calzone</option>
                                        <option value="Diavola">Diavola</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="bread">Bread:</label>
                                    <select id="bread" class="form-control">
                                        <option value="Americana">Americana</option>
                                        <option value="BBQ Chicken">BBQ Chicken</option>
                                        <option value="Calzone">Calzone</option>
                                        <option value="Diavola">Diavola</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="combodrink">Combo Drinks:</label>
                                    <select id="combodrink" class="form-control">
                                        <option value="Americana">Americana</option>
                                        <option value="BBQ Chicken">BBQ Chicken</option>
                                        <option value="Calzone">Calzone</option>
                                        <option value="Diavola">Diavola</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 form-group add">
                                    <div class="form-group">
                                        <label for="combo-quantity">Quantity:</label>
                                        <input class="form-control" type="number" min="1" max="9" value="1" id="combo-quantity">
                                    </div>
                                    <button type="submit" class="btn cmn-btn">Add To Cart</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>

                </div>
                
            </div>
        </section>
        <!-- End Collection -->

<?php include('footer.php') ?>
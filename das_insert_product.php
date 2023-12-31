<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
</head>
<body>

    <header>
        <h1 class="das_form">Insert product page!</h1>
        <hr>
    </header>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
    </ul>
</nav>

    <!-- Insert product form -->
    <form class="das_form" method="post" action="form.php">
        <div>
            <br>
            <label for="c_parts">Choose Category:</label>
            <select name="c_parts" id="c_parts">
                <option value="brakes">Brakes</option>
                <option value="engine">Engine</option>
                <option value="transmission">Transmission</option>
            </select>

            <br>
            <br>
            <label for="p_engine">Engine Name: </label>
            <input type="text" id="p_engine" placeholder="Ex. 4DR5" required>
            <br>
            <br>
            <label for="p_name">Part Name:</label>
            <input type="text" id="p_name" placeholder="Ex. Oil Filter" required>
            <br>
            <br>
            <label for="p_price">Price:</label>
            <input type="number" id="p_price" placeholder="Ex. 550" required>
            <br>
            <br>
            <label for="p_code">Price Code: </label>
            <input type="number" id="p_code" placeholder="Ex. ADS" required>
            <br>
            <br>
            <label for="p_no">Part No:</label>
            <input type="text" id="p_no" placeholder="Ex. C-503" required>
            <br>
            <br>
            <label for="p_brand">Brand Name: </label>
            <input type="text" id="p_brand" placeholder="Ex. Vic" required>
            <br>
            <br>
            <label for="p_details">Part Details: </label>
            <textarea name="part_details" id="p_details" placeholder="Ex. Length (MM) 134.9 ; OD (mm), 95.3" rows="5" cols="30" ></textarea>
            <br>
            <br>
            <label for="p_supplier">Name of supplier: </label>
            <input type="text" id="p_supplier" placeholder="Ex. Yasco" required>
            <br>
            <br>
            <label for="p_supplier_date">Date Arrived: </label>
            <input type="date" id="p_supplier_date" required>
            <br>
            <br>
            <button type="reset">Reset</button>
            <button type="submit" name="submit" id="submit" value="submit">Submit</button>
        </div>
    </form>
            <!-- End of Insert product form -->

            <!-- Footer All rights reserved -->
            <br>
            <hr>
            <footer>
                All Rights Reserved, 2023
            </footer>
            <!-- End of Footer All rights reserved -->
</body>
</html>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my products</title>
  
</head>
<body>
    <div class="container">
        <div class="order-header">
             <h1>My Orders</h1>
            <select>
                <option>All</option>
                <option>Delivered</option>
                <option>In Progress</option>
                <option>Delayed</option>
                <option>Canceled</option>
            </select>
        </div>
        <!-- Orders Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>image</th>
                    <th>product name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="images/fosil1.png" alt="Scenic Landscape"></td>
                    <td>fosil watch</td>
                    <td>May 21, 2019</td>
                    <td>In Progress</td>
                    <td>kes.358</td>
                </tr>
                <tr>
                    <td><img src="images/tshirt-5.png" alt="Scenic Landscape"></td>
                    <td>t-shirt</td>
                    <td>December 09, 2018</td>
                    <td>Canceled</td>
                    <td>kes760</td>
                </tr>
                <tr>
                    <td><img src="images/fosil1.png" alt="Scenic Landscape"></td>
                    <td>fosil watch</td>
                    <td>October 15, 2018</td>
                    <td>Delivered</td>
                    <td>kes.1,264</td>
                </tr>
            </tbody>
        </table>
    </div>

     <?php require_once 'includes/footer.php'; ?>
    
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="assets/js/navigation.js"></script>
      <script src="assets/js/custom.js"></script>
</body>

</html>
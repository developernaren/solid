<html>
<head>
    <title>OOP Sucks!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<!--https://github.com/developernaren/solid-->
<div class="container">
    <div class="row">
        <h1>Form</h1>
        <form action="index.php" name="pay">
            <div class="form-group">
                <label for="">Name</label>
                <select name="bakery" id="">
                    <option value="cake">Cake</option>
                    <option value="biscuit">Biscuit</option>
                    <option value="donut">Donut</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Method</label>
                <select name="method" id="">
                    <option value="cash">Cash</option>
                    <option value="stripe">Stripe</option>
                    <option value="paypal">Paypal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Card</label>
                <input type="text" class="form-control" name="card">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>


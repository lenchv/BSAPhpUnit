<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .car-form {
        }
        .car-form__row {
        }
        .form-row {
            display: flex;
            margin: 5px;
        }
        .form-row__cell {
            display: block;
            width: 50%;
            box-sizing: border-box;
            margin: 0;
        }

        label.form-row__cell {
            color: #333;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
        }

        .car-form__button {
            margin-top: 10px;
            background-color: #fff;
            border-radius: 3px;
            border: 2px solid #787878;
            padding: 10px 15px;
            font-family: 'Raleway', sans-serif;
            font-weight: 200;
            cursor: pointer;
            transition: background-color .25s;
        }
        .car-form__button:hover {
            background-color: #efefef;
        }
        #result {
            font-family: 'Raleway', sans-serif;
            font-weight: 200;
        }
        .error {
            color: red;
        }
        .success {
            color: #34ce57;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add car
        </div>

        <form action="" id="car-form" class="car-form">
            <div id="result"></div>
            <div class="car-form__row form-row">
                <label for="" class="form-row__cell">Brand</label>
                <input type="text" name="brand" class="form-row__cell">
            </div>
            <div class="car-form__row form-row">
                <label for="" class="form-row__cell">Model</label>
                <input type="text" name="model" class="form-row__cell">
            </div>
            <div class="car-form__row form-row">
                <label for="" class="form-row__cell">Price</label>
                <input type="text" name="price" class="form-row__cell">
            </div>
            <input type="submit" value="Add" class="car-form__button">
        </form>

        <div class="links">
            <a href="<?php echo e(url('/')); ?>">Back</a>
        </div>
    </div>
</div>
<script>
    document.getElementById("car-form").addEventListener('submit', (e) => {
        e.preventDefault();
        const result = document.getElementById('result');
        const {brand, model, price} = e.target;
        const data = {
            brand: brand.value,
            model: model.value,
            price: +price.value
        };
        const xhr = new XMLHttpRequest();
        xhr.open("POST", '/api/car', true);
        xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
        xhr.onreadystatechange = () => {
            if (xhr.readyState != 4) return;

            if (xhr.status != 201) {
                result.innerHTML = 'Error';
                result.classList.add('error');
            } else {
                result.innerHTML = 'Success';
                result.classList.add('success');
            }
        };
        xhr.send(JSON.stringify(data));
    }, false);
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Custom Authentication</title>
</head>
<body>
    <style>
        /* Apply some general styles to the form and its elements */
        *{
            position: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
    
        .form-group {
            margin-bottom: 20px;
        }
    
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
    
        input.form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        button.btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
    
        button.btn-primary {
            background-color: #007bff;
        }
    
        /* Style the form when it's being hovered or focused */
        form:hover,
        form:focus {
            box-shadow: 0 0 5px #007bff;
        }
    
        input.form-control:focus {
            outline: none;
            border-color: #007bff;
        }
        body, html {
    height: 100%;
    margin: 0;
}

.container {
    position: relative;
    height: 100%;
}

form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 400px;
}

    </style>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
                <h4>Welcome To Dashboard</h4>
                <hr>
               <table class="table">
                        <thead>
                            <th>Name:</th>
                            <th>Email:</th>
                            <th>Action:</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="logout">Logout</a></td>
                            </tr>
                        </tbody>
               </table>
                    
                
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
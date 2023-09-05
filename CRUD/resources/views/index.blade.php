<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>
        table {
            border-collapse: collapse; 

        }
        td,th{
            border:1px solid black;
        }

        /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Set your desired background color */
    text-align: center;
}

h1 {
    background-color: #333; /* Header background color */
    color: #fff; /* Header text color */
    padding: 10px;
}

.table-container {
    margin: 0 auto; /* Center the table horizontally */
    width: 80%; /* Adjust the width as needed */
    background-color: #fff; /* Table background color */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add a shadow for the container */
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2; /* Alternate row background color */
}

a {
    text-decoration: none;
    color: #000000; /* Link color */
    border: #333 1px solid;
    border-radius: 3px;
    padding: 3px;
}

a:hover {
    text-decoration: underline;
    color: white;
    background: #333;
}

div {
    text-align: left;
    margin-bottom:6px; 
}
input {
    text-decoration: none;
    color: #000000; /* Link color */
    border: #333 1px solid;
    border-radius: 3px;
    padding: 3px;
}

input:hover {
    text-decoration: underline;
    color: white;
    background: #333;
}


    </style>
</head>
<body>
    <h1>Products</h1>
    <div>
        <a href="">Create</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->discription}}</td>
                <td>{{$product->Price}}</td>
                <td><a href="">Edit</a></td>
                <td>
                    <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
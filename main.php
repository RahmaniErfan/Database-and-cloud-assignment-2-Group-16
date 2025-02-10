<!--
Rahmani Erfan
1201102372
Arivananthan A/L Rajanderan
1211305754
Farith Hafizi Bin Mohd Nazim
1201202589 -->

<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .delete-button {
            color: red;
            text-decoration: none;
            cursor: pointer;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <h1>Library Website</h1>

    <h2>Add Book</h2>
    <form id="addBookForm">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter book title">

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Enter author name">

        <input type="submit" value="Add Book">
    </form>

    <h2>Book List</h2>
    <table id="bookTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>The Great Gatsby</td>
                <td>F. Scott Fitzgerald</td>
                <td><a href="#" class="delete-button" onclick="deleteRow(this)">Delete</a></td>
            </tr>
            <tr>
                <td>To Kill a Mockingbird</td>
                <td>Harper Lee</td>
                <td><a href="#" class="delete-button" onclick="deleteRow(this)">Delete</a></td>
            </tr>
        </tbody>
    </table>

    <script>
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        document.getElementById("addBookForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var title = document.getElementById("title").value;
            var author = document.getElementById("author").value;

            var table = document.getElementById("bookTable").getElementsByTagName('tbody')[0];

            var newRow = table.insertRow(table.rows.length);

            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);

            cell1.innerHTML = title;
            cell2.innerHTML = author;
            cell3.innerHTML = "<a href='#' class='delete-button' onclick='deleteRow(this)'>Delete</a>";

            document.getElementById("title").value = "";
            document.getElementById("author").value = "";
        });
    </script>

</body>
</html>
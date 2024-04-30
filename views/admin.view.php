<body>  
    <h3>Add New Project</h3>
    <form action="../scripts/create.php" method="POST">
        <label for="page">Page:</label>
        <input type="text" id="page" name="page" required>
        <label for="title">Title:</label>
        <input type="title" id="title" name="title">
        <label for="languages">Languages:</label>
        <input type="languages" id="languages" name="languages">
        <label for="link">Link:</label>
        <input type="link" id="link" name="link">
        <button type="submit">Create</button>
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="4" style ="width: 100%" maxlength="600"></textarea>
    </form>
    <h3>Existing Projects</h3>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page</th>
                <th>Title</th>
                <th>Content</th>
                <th>Languages</th>
                <th>Link</th>
                <th>Alter</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $record) 
            {
                echo "<tr>";
                echo "<td>{$record['id']}</td>";
                echo "<td>{$record['page']}</td>";
                echo "<td>{$record['title']}</td>";
                echo "<td>{$record['content']}</td>";
                echo "<td>{$record['languages']}</td>";
                echo "<td>{$record['link']}</td>";
                echo "<td><a href='../scripts/edit.php?id={$record['id']}'>Edit</a> | <a href='../scripts/delete.php?id={$record['id']}' onclick='return confirm(\"Are you sure you want to delete this project?\");'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
<?php include_once(APP_ROOT . '/views/footer.view.php'); ?>
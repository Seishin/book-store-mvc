    <div class="addABookForm">
        <h2>Adding a book</h2>
        
        <form action="?action=submitABook" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><b>Title:</b></td>
                    <td><input name="title" /></td>
                </tr>
                <tr>
                    <td><b>Author:</b></td>
                    <td><input name="author" /></td>
                </tr>
                <tr>
                    <td><b>Annotation:</b></td>
                    <td><textarea name="annotation"></textarea></td>
                </tr>
                <tr>
                    <td><b>Price:</b></td>
                    <td><input name="price" /></td>
                </tr>
                <tr>
                    <td><b>Cover:</b></td>
                    <td><input type="file" name="cover" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
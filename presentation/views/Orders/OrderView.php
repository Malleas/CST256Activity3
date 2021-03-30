<form action="../../handlers/Orders/OrderHandler.php" method="post">
    <h2>Place an Order</h2>
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstName"/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastName"/></td>
        </tr>
        <tr>
            <td>Product</td>
            <td><input type="text" name="product"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit"/>
            </td>
        </tr>
    </table>
</form>
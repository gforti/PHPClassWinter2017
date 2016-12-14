<h1>Your Shopping Cart</h1>
<?php if ( count($cart) > 0): ?>
    <table border="1">
      <thead>
        <tr>
          <th>Item Description</th>
          <th>Price</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
            <td>
                <strong>Total:</strong>
            </td>
            <td>
                <strong>$<?php echo number_format($total, 2); ?></strong>
            </td>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach ($cart as $item): ?>
          <tr>
            <td>
                <?php echo htmlspecialchars($item['desc'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td>
              $<?php echo number_format($item['price'], 2); ?>
            </td>
          </tr>
        <?php endforeach; ?>
           <tr>
            <td></td>
            <td></td>
          </tr>
      </tbody>
    </table>
<?php else: ?>
    <p>Your cart is empty!</p>
<?php endif; ?>
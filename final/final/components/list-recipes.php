<table>
  <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($recipes)) {
      echo '
              <div class="searchresults">
                <div class="searchresults_row">
                    <div class="recipeitem">
                        <div class="recipeitem_leftcolumn">
                          <h1 class="recipeitem_header body">' . $row['recipe_name'] . '</h1>
                          <a href="/final/view.php?id=' . $row['id'] . '" class="btn">
                         
                          View this Recipe
                          </a>
                        </div>
                        <img class="recipeitem_img" src="/final/dist/images/placeholder.jpg">
                    </div>
                </div>
              </div>

              ';
      //echo '<tr>';
      //echo '<td>' . $row['id'] . '</td>';
      //echo '<td>' . $row['role'] . '</td>';
      //echo '<td><a class="link" href="view.php?id=' . $row['id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</a></td>';
      //echo '</td>';
    }
    ?>
  </tbody>
</table>
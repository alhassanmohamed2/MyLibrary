<?php require('partials/head.php'); ?>
<div class="container mt-5">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onchange="filterTable(this)">
    <label class="form-check-label" for="flexCheckDefault">
      Reading Now
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" onchange="filterTableComplete(this)">
    <label class="form-check-label" for="flexCheckDefault">
      Completed
    </label>
  </div>
</div>

<div class="container mt-5">
    <div class="form-group">
      <label for="textInput">search</label>
      <input type="text" class="form-control" id="textInput" placeholder="Type book name..." onkeyup="serachName(this)">
    </div>
  </div>

<div class="container mt-5">
 
  <div class="table-responsive">
  
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Page Number</th>
          <th>Book Part</th>
          <th>Completed</th>
        </tr>
      </thead>
      <tbody>
        <?php   
        
        foreach ($bookData as $book) {
            echo "<tr>";
            echo "<td>{$book->id}</td>";
            echo "<td>{$book->name}</td>";
            echo "<td>{$book->pageNum}</td>";
            echo "<td>{$book->bookPart}</td>";
            echo "<td>". ($book->completed ? "Yes" : "No") . "</td>";
            echo "</tr>";
        }
        ?>
        
      </tbody>
    </table>
  </div>
</div>
<!-- -->

<div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
      <form action="/update" method="post">
          <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
          <div class="form-group">
            <label for="pageName">Page Count:</label>
            <input type="text" class="form-control" id="pageNum" name="pageNum">
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <label for="bookPart">Book Part:</label>
            <input type="text" class="form-control" id="bookPart" name="bookPart">
          </div>
          <div class="form-group">
            <label for="completed">Completed:</label>
            <input type="text" class="form-control" id="completed" name="completed">
          </div>
          <!-- Add a class to the submit button -->
          <button type="submit" class="btn btn-primary" style="margin-top: 10px; padding: 10px 20px; border-radius: 5px;">Submit</button>
        </form>
      </div>
    </div>
  </div>
<?php require('partials/footer.php'); ?>
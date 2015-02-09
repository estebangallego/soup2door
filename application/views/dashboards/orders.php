<div class='container'>
  <div class="row">
    <div class="col-md-3">
      <form>
        <input type='text'>
        <input type='submit' value='Search!'>
      </form>
    </div>
  </div>
</div>

<div class='container'>
  <div class="row">
    <div class="col-md-3 col-md-offset-9">
      <h4>Sort by:</h4>
      <select class="form-control" name='status' form='sortby'>
        <option>All</option>
        <option>In Process</option>
        <option>Shipped</option>
      </select>
      <form action="#" id="sortby">
        <input type="submit">
      </form>
    </div>
  </div>
</div>


<div class="container">
  <div class="table-responsive">           
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Name</th>
          <th>Date</th>
          <th>Billing Address</th>
          <th>Total</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href='#'>1</a></td>
          <td>Bob</td>
          <td>1/1/1999</td>
          <td>123 Fake Street Mountain View CA 11223</td>
          <td>$39.98</td>
          <td>
            <select class="form-control" name='status' form='orderid#'>
              <option>Order in process</option>
              <option>Shipped</option>
              <option>Cancelled</option>
            </select>
            <form action="#" id="orderid#">
             <input type="submit">
            </form>
          </td>
        </tr>
        <tr>
          <td><a href='#'>200</a></td>
          <td>John H. Unhappyface</td>
          <td>2/2/2015</td>
          <td>555 Dance Factory Fremont CA 94536</td>
          <td>$239.97</td>
          <td>
            <select class="form-control" name='status' form='orderid#'>
              <option>Order in process</option>
              <option>Shipped</option>
              <option>Cancelled</option>
            </select>
            <form action="#" id="orderid#">
             <input type="submit">
            </form>
          </td>
        </tr>
        <tr>
          <td><a href='#'>7</a></td>
          <td>Jane Doe</td>
          <td>4/3/2013</td>
          <td>77 Address City ST 123123</td>
          <td>$9.99</td>
          <td>
            <select class="form-control" name='status' form='orderid#'>
              <option>Order in process</option>
              <option>Shipped</option>
              <option>Cancelled</option>
            </select>
            <form action="#" id="orderid#">
             <input type="submit">
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
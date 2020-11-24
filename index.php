<html>
 <head>
  <title>Table</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src= "https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
 </head>
 <body>
  <div class="container box">
   <br />
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-primary btn-lg">Add</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
      <th>id</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Email</th>
       <th>Date Created</th>
       <th>Last Modified</th>
       <th>Action</th>
      </tr>
     </thead>
    </table>
  </div>
 </body>
</html>

<script src="/js/main.js"></script>

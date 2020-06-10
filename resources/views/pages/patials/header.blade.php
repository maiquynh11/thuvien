<nav class="main-header navbar navbar-expand" style="background-color: #b2dfdb">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('users.index')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
     <div class="container box">
    <h3>Gợi ý tìm kiếm fulltext search</h3>  
    <div class="form-group">
       <div class="header-search">
           <form method="POST" id="header-search">
           <input type="text" name="search" class="form-control m-input" placeholder="Enter Country Name" />
           {{ csrf_field() }}
           </form>
       </div>
       <div id="search-suggest" class="s-suggest"></div>
   </div>
</div>
</div>
</body>
</html>

<script type="text/javascript">
   $('#header-search').on('keyup', function() {
       var search = $(this).serialize();
       if ($(this).find('.m-input').val() == '') {
           $('#search-suggest div').hide();
       } else {
           $.ajax({
               url: '/search',
               type: 'POST',
               data: search,
           })
           .done(function(res) {
               $('#search-suggest').html('');
               $('#search-suggest').append(res)
           })
       };
   });
</script>
    <!-- Right navbar links -->
   
  </nav>
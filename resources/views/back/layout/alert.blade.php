@if (session('alert') === 'success')
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
        {{ session('message') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session('alert') === 'error')
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
        {{ session('message') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<script>

    setTimeout(function() {
        document.getElementById('successAlert').style.display = 'none';
    }, 3000);
    
    setTimeout(function() {
        document.getElementById('errorAlert').style.display = 'none';
    }, 3000);

    // setTimeout(function() => {
    //    var nameAlert = document.getElementById('namealert');
    //    nameAlert.style.opacity = '0';
    //    nameAlert.style.visibility = 'hidden';
    // }, 3000);

</script>
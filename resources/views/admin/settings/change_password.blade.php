@extends('admin-layout.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="old password">Old Password:</label>
                                        <input type="password" class="form-control" name="old_pwd" placeholder="*****" id="old-pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">New Password:</label>
                                        <input type="password" class="form-control" name="new_pwd" placeholder="*****" id="new-pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Confirm Password:</label>
                                        <input type="password" class="form-control" name="cfm_pwd" placeholder="*****" id="cfm-pwd">
                                    </div>
                                    <button type="submit" id="change-pwd" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div> 
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>      
    <script>
        $(document).ready(function(){
            $('#change-pwd').on('click',function(e){
                e.preventDefault();
            
                let oldPwd = $('#old-pwd').val();
                let  newPwd = $('#new-pwd').val();
                let cfmPwd  = $('#cfm-pwd').val();

                let  data = {
                    oldPss: oldPwd,
                    newPss: newPwd,
                    cfmPss: cfmPwd
                };

                if(newPwd !==cfmPwd)
                {
                    console.log('pass and confirm pass not pass');
                }
                // console.log(data);
            });
        });
    </script>             
@endsection
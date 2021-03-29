@extends("theme")
@section("content")
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
            <table class="table-borderless">
                <h3>Let's Explore</h3>
                <tr>
                    <td>name of the customer</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>email-id</td>
                    <td><input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>details of the order</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-info">sumbit</button></td>
                </tr>
            </table>

        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <img height="500px" src="https://textilesgarmentsbusinessdirectory.com/wp-content/uploads/2019/08/heavenly-collections-boutique-thrissur-kerala.jpg" class alt="...">
        </div>
    </div>
</div>
@endsection
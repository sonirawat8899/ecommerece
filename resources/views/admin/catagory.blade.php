<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
    .div_center {
        text-align: center;
        padding-top: 40px
    }

    .h2font {
        font-size: 40px;
        padding-bottom: 40px;
    }

    .input_color {
        color: black;
    }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="div_center">
                    <h2 class="h2font">Send SMS</h2>

                    <form action="{{url('/add_catagory')}}" method="post">
                        @csrf
                        <input class="input_color" type="number" name="phone" placeholder="Write Phone Number"><br>
                        <input class="input_color" type="text" name="catagory" placeholder="Write Your SMS"><br><br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Send SMS">
                    </form>
                </div>

            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>
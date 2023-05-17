
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px
        }

        .h2font {
        font-size: 40px;
        padding-bottom: 40px;
       }

        .text_color {
            color: black;
            
        }
        label{
            display: inline-block;
            width: 60px;
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
                <h1 class="h2font">Edit Your Roll</h1>

                <div>
                <label>Writer:</label>
                <input class="text_color" type="text" name="title" placeholder="Write Product title name">
                <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                </div>

                <div>
                <label>Reader:</label>
                <input class="text_color" type="text" name="description" placeholder="Write Product title name">
                <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                </div>
                
                </div>
            </div>


            </div>
        </div>


        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>
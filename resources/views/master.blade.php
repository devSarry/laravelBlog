<!DOCTYPE html>
<!--
When extedning this master page include an array for the following values
        title -> string
        headerImage -> path string
        heading -> string

        !EXAMPLE!

{{--        @ extends('master', ['title' => 'Post Article',
                            'headerImage' => 'img/create-bg.jpg',
                            'heading' => 'Create an Article'])--}}
-->
<html lang="en">

@include('partials.head', ['title' => $title]) <!--['pageTitle' => ''] can pass through the page title-->

<body>

    <!-- Navigation -->
    @include('partials.nav')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    @include('partials.header', ['headerImage' => $headerImage, 'heading' => $heading])

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!-- list of artitle stubs    -->
                @yield('content')

            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
@include('partials.footer')

</body>

</html>
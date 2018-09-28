

<!DOCTYPE html>
<html>
    <head>
        <title>Confyans Request Statistics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="{{asset('confyans/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- styles -->
        <link href="{{asset('confyans/css/styles.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Logo -->
                        <div class="logo">
                            <h3><a> Request Statistics</a></h3>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <form>
                                <div class="col-lg-12">
                                    <div class="input-group form">
                                        <input type="text" class="form-control" name="id" value="{{\Illuminate\Support\Facades\Input::get('id')}}" placeholder="Search... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                            <a href='?' class="btn btn-warning" ><i class="glyphicon glyphicon-refresh"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="{{ $auto==1? route('confyans-api'):'?auto=1'}}" >Auto Reload {!! $auto==1?'<i class="glyphicon glyphicon-pause"></i>':'<i class="glyphicon glyphicon-play"></i>'!!} </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content" style="min-height:70vh">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="current"><a href=""><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>                           
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    {{-- <div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">New vs Returning Visitors</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
				  			Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div> --}}

                    {{-- <div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">New vs Returning Visitors</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
						<br /><br />
					</div>
		  		</div>
		  	</div> --}}

                    <div class="content-box-large">


                        <table id="result" style="width: 100%" class="table datatable">
                            <thead>
                                <tr class="row">
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>API</th>
                                    <th>Duration</th>
                                    <th>Request</th>
                                    <th>Response</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($api))								
                                @foreach($api as $val)
                                @include('confyans::single_request',[$val])
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $api->links() }}
                    </div>
                </div>
            </div>
        </div>

        <footer >
            <div class="container">

                <div class="copy text-center">
                    Happy Coding
                </div>

            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>

        <script>
function expand(obj) {
    $('tr').removeClass('selected');
    $('tr').removeClass('selectedDetails');
    //        $('.details').hide();
    var id = $(obj).data('next');
    $('#' + id).toggle();

    $(obj).addClass('selected');
    $('#' + id).addClass('selectedDetails');
}

$(document).ready(function () {

<?php if ($auto == 1) { ?>
        setTimeout(function () {
            window.location.reload(1);
        }, 5000);
<?php } ?>
});
        </script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('confyans/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('confyans/js/custom.js')}}"></script>
    </body>
</html>
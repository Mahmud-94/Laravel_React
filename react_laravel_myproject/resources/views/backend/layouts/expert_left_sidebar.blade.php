<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="{{url('/admin/dashboard')}}" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">
						<li>
							<a href="index.html">Analytical</a>
						</li>
						<li>
							<a href="index2.html">Demographic</a>
						</li>
						<li>
							<a href="index3.html">Project</a>
						</li>

					</ul>
				</li>



				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="icon-user mr-20"></i><span class="right-nav-text">Experts</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="{{route('expert.index')}}">All Experts</a>
						</li>
						<li>
							<a href="{{route('expert.create')}}">New Experts</a>
						</li>


					</ul>
				</li>

                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#aglist"><div class="pull-left"><i class="glyphicon glyphicon-user mr-20"></i><span class="right-nav-text">Agents</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="aglist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('agent.index')}}">All Agents</a>
						</li>
						<li>
							<a href="{{route('agent.create')}}">New Agents</a>
						</li>


					</ul>
				</li>

				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#bllist"><div class="pull-left"><i class="icon-user mr-20"></i><span class="right-nav-text">Builders</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="bllist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('builder.index')}}">Builder List</a>
						</li>
						<li>
							<a href="{{route('builder.create')}}">New Builder</a>
						</li>


					</ul>
				</li>


				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#prlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Properties</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="prlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('property.index')}}">Property List</a>
						</li>
						<li>
							<a href="{{route('property.create')}}">Add Property</a>
						</li>


					</ul>
				</li>

				

				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#trlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Transaction</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="trlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('property.index')}}">Transaction List</a>
						</li>
						<li>
							<a href="{{route('property.create')}}">Manage Transaction</a>
						</li>


					</ul>
				</li>

				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#fdlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Feedback</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="fdlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('property.index')}}">Feedback List</a>
						</li>
						<li>
							<a href="{{route('property.create')}}">Manage Feedback</a>
						</li>


					</ul>
				</li>


                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#bknlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Booking</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="bknlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('booking.index')}}">Booking List</a>
						</li>
						<li>
							<a href="{{route('booking.create')}}">Manage Booking</a>
						</li>


					</ul>
				</li>


                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#sclist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Sector</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="sclist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('sector.index')}}">Sector List</a>
						</li>
						<li>
							<a href="{{route('sector.create')}}">Manage Sector</a>
						</li>


					</ul>
				</li>

                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#cntlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Client</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="cntlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('client.index')}}">client List</a>
						</li>
						<li>
							<a href="{{route('client.create')}}">Manage client</a>


						</li>


					</ul>
				</li>

				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#paylist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Payment</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="paylist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('admin_payment.index')}}">Payment List</a>
						</li>
						<li>
							<a href="{{route('payment.create')}}">Manage Payment</a>


						</li>


					</ul>
				</li>


                <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#cnlist"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Contact</span></div><div class="pull-right"><span class="label label-gold">#</span></div><div class="clearfix"></div></a>
					<ul id="cnlist" class="collapse collapse-level-1">
						<li>
							<a href="{{route('contact.index')}}">Contact List</a>
						</li>
						<li>
							<a href="{{route('contact.create')}}">Manage Contact</a>


						</li>


					</ul>
				</li>





			</ul>
		</div>

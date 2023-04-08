
						<div class="post d-flex flex-column-fluid" id="kt_post">

							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								@if (Request::segment(1) == 'role')
									@yield('content')
								@else
									<div class="card">
										@yield('content')
									</div>
								@endif
								<!--end::Row-->
							</div>
							<!--end::Container-->
						
						</div>
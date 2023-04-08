		
        <!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">

            <!-- layout-partial::layouts.master.aside._base-->
            @include('layouts.master.aside._base')

				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                
                <!-- layout-partial::layouts.master._footer-->
                @include('layouts.master._header')

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->

                        <!-- layout-partial::layouts.master._toolbar-->
                        @include('layouts.master._toolbar')
						
                        <!--end::Toolbar-->
						
                        <!--begin::Post-->

                        <!-- layout-partial::layouts.master._content-->
                        @include('layouts.master._content')

						<!--end::Post-->
					</div>
					<!--end::Content-->

                <!-- layout-partial::layouts.master._footer-->
                @include('layouts.master._footer')

				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Modals-->

        <!-- layout-partial::layouts.master.modal._modal-->
        @include('layouts.master.modal._modal')

        
        <!-- layout-partial::layouts.master.modal._scrolltop-->
        @include('layouts.master._scrolltop')

		<!--end::Main-->
<div>
    <section class="relative p-4 xs:p-6 lg:p-8 lg:py-12 lg:pr-6 lg:pl-6 bg-white rounded-2xl text-gray-600 font-medium overflow-hidden">

        <img class="hidden lg:block absolute top-16 right-6 w-12" src="{{asset('site/svg/circle-grid-long.svg')}}" alt="">
        <img class="hidden lg:block absolute pattern2 w-10" src="{{asset('site/svg/circle-grid-medium.svg')}}" alt="">
        <img class="hidden lg:block absolute -top-36 -left-28 max-w-64 lg:max-w-lg opacity-30" src="{{asset('site/svg/circle-in-circle.svg')}}" alt="">
        <img class="hidden lg:block absolute pattern" src="{{asset('site/svg/circle-in-circle-2.svg')}}" alt="">

		<img class="hidden lg:block absolute pattern3" src="{{asset('site/svg/Mask Group 16.svg')}}" alt="">
		<img class="hidden lg:block absolute pattern4" src="{{asset('site/svg/Group 653.svg')}}" alt="">

        <div class="relative grid gap-4 overflow-hidden lg:gap-8">
            <div class="grid gap-4 bg-white rounded-2xl overflow-hidden sm:grid-cols-2 md:order-2 xl:grid-cols-3 xl:gap-x-12">
                <div class="grid p-3 bg-primary bg-opacity-10 rounded-2xl sm:col-span-full xl:col-span-1">
                    <div class="p-4 bg-primary rounded-2xl text-white justify-center items-center grid max-h-24">
                        <i class="icon-location flex items-center justify-center text-3xl"></i>
                        <p>آدرس</p>
                    </div>
                    <p class="px-4 pt-3 pb-2 text-center h-full flex items-center justify-center text-sm">{{$address}}</p>
                </div>
                <div class="grid p-3 bg-primary bg-opacity-10 rounded-2xl sm:col-start-1 sm:col-end-2 xl:col-span-1">
                    <div class="p-4 bg-primary rounded-2xl text-white justify-center items-center grid max-h-24">
                        <i class="icon-mail flex items-center justify-center text-3xl"></i>
                        <p>ایمیل</p>
                    </div>
                    <p class="px-4 pt-3 pb-2 text-center h-full flex items-center justify-center">{{$email}}</p>
                </div>
                <div div class="grid p-3 bg-primary bg-opacity-10 rounded-2xl sm:col-start-2 sm:col-end-3 xl:col-span-1">
                    <div class="p-4 bg-primary rounded-2xl text-white justify-center items-center grid max-h-24">
                        <i class="icon-phone flex items-center justify-center text-3xl"></i>
                        <p>تلفن تماس</p>
                    </div>
                    <p class="px-4 pt-3 pb-2 text-center h-full flex items-center justify-center">{{$phone}}</p>
                </div>
            </div>

            <div class="grid gap-4 md:order-1 xl:grid-cols-12 xl:gap-6">
                <div class="pb-8 xl:col-start-1 xl:col-end-6">
                    <div class="basic-image-slider swiper-container rounded-2xl bg-white overflow-hidden relative">
                        <div class="swiper-wrapper">
                            @foreach($slider as $slide)
                                <div class="swiper-slide w-full">
                                    <img class="rounded-2xl" src="{{asset($slide)}}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination bottom-0"></div>
                    </div>
                </div>
                <div class="xl:p-2 xl:col-start-6 xl:col-end-13 leading-7">{!! $description !!}</div>
            </div>
        </div>

		<div class="team-list" dir="ltr">
           <div class="row">
                <div class="manager" dir="rtl">
						@if(isset($admin->name))
						<div class="single-case">
							<div class="team-image">
							</div>
							@if($admin->image)
							<img src="{{ $admin->image ?? '' }}" alt="">
							@endif
						</div>
						@endif
                        <div class="team-detail">
                            <h3>تیم فارس گیمر</h3>
                            <b>{{ $admin->name ?? '' }}</b>
                            <br>
                            <small>{{ $admin->task ?? ''}}</small>
                        </div>
                   
                </div>
                <?php for ($i = 0; $i < ceil(count($teams)/6); $i++) : ?>
                    <div class="row" id="team-list">
                        <?php for ($j = $i*6; $j < $i*6+6; $j++) : ?>
                            @if(isset($teams[$j]))
								<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="team">
                                    <div class="case">
                                        <div class="team-image">
                                        </div>
										
                                        <img src="{{ $teams[$j]['image'] }}" alt="">
                                        <b>{{$teams[$j]['name'] }}</b>
                                        <br>
                                        <small>{{$teams[$j]['task'] }}</small>
                                    </div>
                                </div>
                            </div>
							@endif
							
                        <?php endfor; ?>
                    </div>

                <?php endfor; ?>
            </div>
        </div>
    </section>
</div>

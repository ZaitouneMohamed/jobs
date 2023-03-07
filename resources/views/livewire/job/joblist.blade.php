<div class="container-xxl py-5" >
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tab-2">
                        <h6 class="mt-n1 mb-0">Full Time</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Part Time</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content" >
                <div id="tab-2" class="tab-pane fade show p-0 active" >
                    @foreach ($full_time_jobs as $item)
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="landing/img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">{{$item->title}}</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->company->adresse}}</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$item->nature}}</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$item->salary}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        @auth
                                            @if (\App\Models\user_fav_annonce::where('user_id',auth()->user()->id)->where('annonce_id',$item->id)->count() == 1 )
                                                <button style="background-color: white;border: none"><i class="far fa-heart text-danger"></i></button>
                                            @else
                                                <button class="btn btn-light btn-square me-3" wire:click="fav_job({{$item->id}})"><i class="far fa-heart text-primary"></i></button>
                                            @endif
                                        @endauth
                                        <a class="btn btn-primary" href="{{route('job_detail',$item->id)}}">view job</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: {{$item->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    @foreach ($part_time_jobs as $item)
                        <div class="job-item p-4 mb-4">
                            <div class="row g-4">
                                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid border rounded" src="landing/img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                    <div class="text-start ps-4">
                                        <h5 class="mb-3">{{$item->title}}</h5>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$item->company->adresse}}</span>
                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$item->nature}}</span>
                                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$item->salary}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                    <div class="d-flex mb-3">
                                        @auth
                                            @if (\App\Models\user_fav_annonce::where('user_id',auth()->user()->id)->where('annonce_id',$item->id)->count() == 1 )
                                                <button style="background-color: white;border: none"><i class="far fa-heart text-danger"></i></button>
                                            @else
                                                <button class="btn btn-light btn-square me-3" wire:click="fav_job({{$item->id}})"><i class="far fa-heart text-primary"></i></button>
                                            @endif
                                        @endauth
                                        <a class="btn btn-primary" href="{{route('job_detail',$item->id)}}">view job</a>
                                    </div>
                                    <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Datee Line: {{$item->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>

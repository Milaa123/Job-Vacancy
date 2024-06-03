@extends ('landing-page.layouts.main')
@section('content')
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>{{ $job->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    {{-- @foreach ($jobs as $job) --}}
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    {{-- @if ($job && $job->company && $job->company->logo)
                                        <a href="#"><img src="{{ 'storage/' . $job->company->logo }}"
                                                alt=" {{ $job->company->company_name }}" width="100" height="auto"></a>
                                    @endif --}}
                                    @if ($logoUrl)
                                        <img src="{{ $logoUrl }}" alt="Logo {{ $company->company_name }}"
                                            width="60" height="auto">
                                    @else
                                        <p>Logo tidak tersedia</p>
                                    @endif
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>{{ $job->title }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $company->company_name }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $company->addres }}</li>
                                        <li>{{ number_format($job->salary) }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- job single End -->

                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>{{ strip_tags($job->description) }}</p>
                            </div>

                            <div class="post-details2  mb-50">
                                <!-- Small Section Tittle -->

                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                                <ul>
                                    @foreach ($selectedRequirements as $requirementId)
                                        @php
                                            $requirement = $requirements->firstWhere('id', $requirementId);
                                        @endphp
                                        @if ($requirement)
                                            <li>{{ $requirement->type }}</li>
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                            {{-- <div class="post-details2  mb-50">
                                    <!-- Small Section Tittle -->
                                    <div class="small-section-tittle">
                                        <h4>Education + Experience</h4>
                                    </div>
                                    <ul>
                                        <li>3 or more years of professional design experience</li>
                                        <li>Direct response email experience</li>
                                        <li>Ecommerce website design experience</li>
                                        <li>Familiarity with mobile and web apps preferred</li>
                                        <li>Experience using Invision a plus</li>
                                    </ul>
                                </div> --}}
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Overview</h4>
                            </div>
                            <ul>
                                <li>Posted date : <span>{{ $job->created_at->format('d M Y') }}</span></li>
                                <li>Location : <span>{{ $company->addres }}</span></li>
                                @foreach ($job_time as $key => $job_time)
                                    <li>Job nature : <span>{{ $job_time->type }}</span></li>
                                @endforeach
                                <li>Salary : <span>{{ number_format($job->salary) }}</span></li>
                                {{-- <li>Application date : <span>12 Sep 2020</span></li> --}}
                            </ul>
                            <div class="apply-btn2">
                                <a href="#" class="btn">Apply Now</a>
                            </div>
                        </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Company Information</h4>
                            </div>
                            <span>{{ $company->company_name }}</span>
                            <p>{{ $company->description }}</p>
                            <ul>
                                <li>Name: <span>{{ $company->company_name }}</span></li>
                                <li>Phone : <span>{{ $company->phone }}</span></li>
                                <li>Email: <span>{{ $company->email }}</span></li>
                            </ul>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>
@endsection

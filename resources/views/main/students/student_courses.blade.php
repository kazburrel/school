@extends('main.students.students_layouts.index')

@section('content')
    @include('main.students.students_layouts.nav')

    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <div class="row">
                @forelse ($course_tbl as $course_tb)
                    <div class="col-xl-4">
                        <!--begin::Feeds Widget 5-->
                        <div class="card mb-5 mb-xl-8  border border-2 rounded-4">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">

                                            <p class="text-gray-900 fs-6 mb-1 fw-bolder">
                                                {{ $course_tb->departmentDetails->dept_name}}
                                            </p>
                                            <p class="text-gray-900 fs-6 mb-1 fw-bolder">
                                                {{ $course_tb->course_name }}
                                             
                                            </p>
                                            <span class="text-gray-400 fw-bold">
                                                {{ Date::parse($course_tb->start_date)->format('jS, F Y') }}
                                              
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                </div>
                                <!--end::Header-->
                                <!--begin::Post-->
                                <div class="mb-5">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-300px mb-5"
                                        style="background-image:url({{ asset('storage/' . $course_tb->course_avatar) }});">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Text-->
                                    <div class="text-gray-800 mb-5">{{ $course_tb->course_det }}</div>
                                    <div class="text-gray-800 mb-5">
                                        {{-- <span class="fw-bold">Students:</span> --}}
                                        {{-- {{ $course->max_student > 200 ? '200+' : $course->max_student }} --}}


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection

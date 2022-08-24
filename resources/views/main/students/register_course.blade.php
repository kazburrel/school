@extends('main.students.students_layouts.index')

@section('content')
@include('main.students.students_layouts.nav')
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Register Courses</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->

                <form action="{{ route('registerCourse') }}" method="post">
                    @csrf
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 text-center">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="min-w-50px">S/N</th>
                                <th class="min-w-50px">Register</th>
                                <th class="min-w-200px">Course Code</th>
                                <th class="min-w-150px">Course title</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @forelse ($department->courses as $i => $course)
                                <tr>
                                    <td>
                                        <span class="text-dark fw-bolder  d-block fs-6">{{ $i + 1 }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bolder  d-block fs-6"> <label
                                                class="form-check form-check-inline form-check-solid">
                                                <input class="form-check-input" name="courses[]" type="checkbox"
                                                    value="{{ $course->course_id }}" /> </label>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bolder  d-block fs-6">{{ $course->course_code }}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bolder  d-block fs-6">{{ $course->course_name }}</span>
                                    </td>
                                </tr>

                            @empty
                            @endforelse

                        </tbody>
                        <!--end::Table body-->
                    </table>

                    <div class="text-center">
                        {{-- <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button> --}}
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                </form>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
@endsection

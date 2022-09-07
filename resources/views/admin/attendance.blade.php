@extends('admin.layouts.index')

@section('content')
    <div class="card mb-5 mb-xl-8">
        <div class="card-body pt-5">
            <div class="py-2">
                <!--begin::Item-->
                <form action="{{ route('markAttendance') }}" method="POST">
                    @csrf
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 text-center">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                <th class="min-w-50px">S/N</th>
                                <th class="min-w-200px">Full Name</th>
                                <th class="min-w-200px">Attendance</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @php
                                $index = 0;
                                @endphp
                            @forelse ($regStudents as $registeredStudent)
                            <tr>
                                    <div class="">
                                        <td>
                                            <span class="text-dark fw-bolder  d-block fs-6">{{ $index + 1 }}</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder  d-block fs-6">{{ $registeredStudent->student->fname }} &nbsp;
                                                {{ $registeredStudent->student->lname }}</span>
                                        </td>
                                    </div>

                                    <td>
                                        <label class="form-check form-check-inline form-check-solid">
                                            <input type="hidden" name="attendance[]" value="0" >
                                            <input class="form-check-input" name="attendance[]" type="checkbox"
                                                value="1" />
                                        </label>
                                    </td>
                                </tr>
                                @php
                                    $index++;
                                @endphp
                            @empty
                            @endforelse



                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <div class="separator separator-dashed my-5"></div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                </form>
                <!--end::Item-->
                <!--begin::Item-->
            </div>
        </div>
    </div>
@endsection

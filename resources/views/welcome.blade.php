@extends('layout.mater')


@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                أضف طلاب
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                <!-- New Task Form -->
                <form action="{{url('Add/std')}}" method="POST" class="form-horizontal">
                    @csrf
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-6">بيانات الطلاب</label>
                        <div class="col-sm-12">
                            <label for="">رقم الطالب</label>
                            <input type="text" name="num" id="task-name" class="form-control" value="">
                        </div>
                        <div class="col-sm-12">
                            <label for="">اسم الطالب</label>
                            <input type="text" name="name" id="task-name" class="form-control" value="">
                        </div>
                        <div class="col-sm-12">
                            <label for="">ايميل الطالب</label>
                            <input type="text" name="email" id="task-name" class="form-control" value="">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn  btn-primary">
                                <i class="fa fa-btn fa-plus"> </i> اضافة الطالب
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>رقم الطالب</th>
                            <th>اسم الطالب</th>
                            <th>ايميل الطالب</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($shows as $index=>$show)
                            <tr>
                                <td class="table-text"><div>{{$show->num}}</div></td>
                                <td class="table-text"><div>{{$show->name}}</div></td>
                                <td class="table-text"><div>{{$show->email}}</div></td>

                                <!-- Task Delete Button -->
                                <td>
                                    <form action="{{url('del/std/'. $show->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection


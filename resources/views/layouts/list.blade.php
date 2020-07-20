@extends('welcome')

@section('list')
    @component('layouts.tasks')
    @endcomponent
    <!-- Current Tasks -->
    @if (count($List) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($List as $t)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $t->title }}</div>
                                </td>
                                <td>
                                    <form action="/task/{{ $t->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button>Delete Task</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection


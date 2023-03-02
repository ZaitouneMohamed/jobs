<div class="row" wire:poll>
    <br><br>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    my favorite jobs count {{$jobs->count()}} 
                </h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                    <thead>
                        <tr>
                            <th>job title</th>
                            <th>nature</th>
                            <th>salary</th>
                            <th>description</th>
                            <th>company</th>
                            <th>responsibility</th>
                            <th>qualification</th>
                            <th>duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->nature }}</td>
                                <td>{{ $item->salary }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->company->name }}</td>
                                <td>{{ $item->responsibility }}</td>
                                <td>{{ $item->qualification }}</td>
                                <td>{{ $item->duration }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

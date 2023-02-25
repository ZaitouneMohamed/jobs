<div class="container-fluid" x-data="{ open:false }" wire:poll.750ms>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" style="margin-right: 5px" @click="open = false">show table</button>
                <button class="btn btn-primary" @click="open = true">show form</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive" x-show="!open">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>adresse</th>
                            <th>user</th>
                            <th>contact info</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($companys as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->adresse}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->contact_info}}</td>
                                <td>61</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
            <div x-show="open" x-transition>
                <h1 class="text text-center">Add New Annonce</h1>
                <form wire:submit.prevent="add">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">title :</label>
                        <input type="text" class="form-control" wire:model="title">
                        @error('title') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">nature :</label>
                        <select class="form-select" wire:model="nature" aria-label="Default select example">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        @error('nature') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Salary :</label>
                        <input type="text" class="form-control" wire:model="salary">
                        @error('salary') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">description :</label>
                        <textarea class="form-control" wire:model="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('description') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">company :</label>
                        <select  wire:model="company" >
                            @foreach (\App\Models\company::all()->where('user_id',auth()->user()->id ) as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('company') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">categorie :</label>
                        <select class="form-select" wire:model="categorie" aria-label="Default select example">
                            @foreach (\App\Models\categorie::all() as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('categorie') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">responsability :</label>
                        <input type="text" class="form-control" wire:model="responsibility">
                        @error('responsibility') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">qualification :</label>
                        <input type="text" class="form-control" wire:model="qualification">
                        @error('qualification') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">duration :</label>
                        <input type="text" class="form-control" wire:model="duration">
                        @error('duration') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">niveau d'etudes :</label>
                        <input type="text" class="form-control" wire:model="etudes">
                        @error('etudes') <span class="test text-danger">{{ $message }}</span> @enderror
                    </div>
                    {{-- @if ($editing)
                        <a type="button" wire:click="update()" class="btn btn-warning">update</a>
                        <a class="btn btn-danger" type="button" wire:click="cancel()">cancel</a>
                    @else--}}
                        <button type="submit" class="btn btn-primary">submit</button>
                    {{-- @endif  --}}
                </form>
            </div>
        </div>
    </div>

</div>

@extends('backend.layout.root')
@section('content')
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="flex w-full justify-between p-4">
                                <span class="card-title card-padding pb-0">Galleries</span>
                                <a href="{{route('galleryCategory.create')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th>Name</th>
                                        <th>Description</th>
{{--                                        <th>Image</th>--}}
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($galleryCategories as $galleryCategory)
                                    <tr>
                                        <td class="text-left">{{$loop->iteration}}</td>
                                        <td>{{$galleryCategory->name}}</td>
                                        <td>{{$galleryCategory->description}}</td>
{{--                                        <td>--}}
{{--                                            @php--}}
{{--                                                $images = \App\Models\Media::where('model_type', 'App\Models\Category')->where('model_id', $galleryCategory->id)->get();--}}
{{--                                            @endphp--}}
{{--                                            @foreach($images as $image)--}}
{{--                                                <div>--}}
{{--                                                    <img src="{{asset('storage/'. $image->path)}}" alt="" style="width: 100px;">--}}
{{--                                                </div>--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}
                                        <td>
                                            <a href="{{route('galleryCategory.edit', ['galleryCategory' => $galleryCategory])}}" class="mdc-button text-button--info">
                                            Edit
                                            </a>

                                            <a href="{{route('galleryCategory.destroy', ['galleryCategory' => $galleryCategory])}}"  class="mdc-button text-button--secondary">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>


@endsection

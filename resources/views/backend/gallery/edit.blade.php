@extends('backend.layout.root')
@section('content')
    <!-- Form Container -->
    <div class=" bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <ul class="mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell--span-12">
                        <div class="mdc-card">
                            <h6 class="card-title">Create </h6>
                            <form action="{{ route('gallery.update', ['gallery' => $gallery]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="template-demo">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input name="title" value="{{ $gallery->title }}" class="mdc-text-field__input" id="text-field-hero-input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="text-field-hero-input" class="mdc-floating-label">Title</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <input type="file" multiple name="media[]" class="mdc-text-field__input" id="image-input">
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="image-input" class="mdc-floating-label">Images</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <select name="gallery_category_id" id="user_id" class="mdc-text-field__input mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                                    @foreach($galleryCategories as $gallery)
                                                        <option value="{{$gallery->id}}">{{$gallery->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="gallery_category_id" class="mdc-floating-label">Gallery</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            @php
                                                $images = \App\Models\Media::where('model_type', 'App\Models\Gallery') // Corrected model_type
                                                                            ->where('model_id', $gallery->id)
                                                                            ->get();
                                            @endphp
                                            @foreach($images as $image)
                                                <div class="flex w-max relative">
                                                    <img src="{{ asset('storage/' . $image->path) }}" alt="" style="width: 100px;">
                                                    <a href="{{ route('mediaDelete', ['media' => $image]) }}" class="p-1 absolute h-max rounded-md bg-red-500 top-0 right-0">X</a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <textarea name="description" class="mdc-text-field__input" rows="10">{{ $gallery->description }}</textarea>
                                                <div class="mdc-notched-outline">
                                                    <div class="mdc-notched-outline__leading"></div>
                                                    <div class="mdc-notched-outline__notch">
                                                        <label for="description-input" class="mdc-floating-label">Description</label>
                                                    </div>
                                                    <div class="mdc-notched-outline__trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                            <div class="mdc-text-field mdc-text-field--outlined">
                                                <button type="submit" class="mdc-button mdc-button--outlined outlined-button--success">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

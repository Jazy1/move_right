
@extends('landlords.layouts.parent')

@section('title', "Edit Property | Move Right®")

@section('content')
    
    <!-- 
    =============================================
        Dashboard Body
    ============================================== 
    -->
    <div class="dashboard-body">
        <div class="position-relative">
            <!-- ************************ Header **************************** -->
            <x-landlords.header />
            <!-- End Header -->

            <h2 class="main-title d-block d-lg-none">Add New Property</h2>

            <form action="{{route("landlords.properties.update", $property->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <input type="hidden" name="landlord_id" value="{{$landlord->id}}">

                <div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Overview</h4>
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Title*</label>
                        <input type="text" placeholder="Your Property Name" name="title" value="{{ $property->title }}">
                        <span class="text-danger">@error('title'){{$message}}@enderror</span>
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Description*</label>
                        <textarea class="size-lg" placeholder="Write about property..." name="description" >{{ $property->description }}</textarea>
                        <span class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Type*</label>
                                <select class="nice-select" name="type">
                                    <option value="" style="display: none;">Select Type</option>
                                    
                                    @foreach(['house', 'plot', 'apartments', 'Industrial', 'condos', 'villas', 'lofts'] as $optionValue)
                                        <option value="{{ $optionValue }}" {{ $property->type == $optionValue ? 'selected' : '' }}>
                                            {{ ucfirst($optionValue) }} <!-- Optional: capitalize the option text -->
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Listed in*</label>
                                <select class="nice-select" name="list_in" >
                                    <option value="" style="display: none;">List As</option>
                                    @foreach (["sell", "rent"] as $listIn)
                                        <option value="{{ $listIn }}" {{ $property->list_in == $listIn ?'selected' : '' }}>{{ ucfirst($listIn) }}</option>
                                    @endforeach
                                    {{-- <option value="sell">Sell</option>
                                    <option value="rent">Rent</option> --}}
                                    <span class="text-danger">@error('list_in'){{$message}}@enderror</span>
                                </select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Price*</label>
                                <input type="number" placeholder="Your Price" name="price" value="{{ $property->price }}">
                                <span class="text-danger">@error('price'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="allow_sublet" value="0">
                            <input type="checkbox" name="allow_sublet" {{ $property->allow_sublet == 1 ? 'checked' : '' }} value="1">
                            <label>Allow Sublet?</label>
                            <div class="dash-input-wrapper mb-30">
                                {{-- <label for="">Yearly Tax Rate*</label>
                                <input type="text" placeholder="Tax Rate"> --}}
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                    </div>
                </div>
                <!-- /.card-box -->
                <div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three">Listing Details</h4>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Size in yard*</label>
                                <input type="number" placeholder="Ex: 180 sqyard" name="sq_yard" value="{{ $property->sq_yard }}">
                                <span class="text-danger">@error('sq_yard'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Bedrooms*</label>
                                <select class="nice-select" name="bedrooms" required>
                                    @foreach (range(0, 10) as $bedroomNo)
                                        <option value="{{ $bedroomNo }}" {{ $property->bedrooms == $bedroomNo ? 'selected' : '' }}>{{ $bedroomNo }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('bedrooms'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Bathrooms*</label>
                                <select class="nice-select" name="bathrooms" required>
                                    @foreach (range(0, 10) as $bathroomNo)
                                        <option value="{{ $bathroomNo }}" {{ $property->bathrooms == $bathroomNo ? 'selected' : '' }}>{{ $bathroomNo }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('bathrooms'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Kitchens*</label>
                                <select class="nice-select" name="kitchens" required>
                                    @foreach (range(0, 10) as $kitchenNo)
                                        <option value="{{ $kitchenNo }}" {{ $property->kitchens == $kitchenNo ? 'selected' : '' }}>{{ $kitchenNo }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('kitchens'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Garages</label>
                                <select class="nice-select" name="garages" required>
                                    @foreach (range(0, 10) as $garageNo)
                                        <option value="{{ $garageNo }}" {{ $property->garages == $garageNo ? 'selected' : '' }}>{{ $garageNo }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('garages'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        {{-- <div class="col-md-6">
                            
                            <!-- /.dash-input-wrapper -->
                        </div> --}}
                        <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Year Built*</label>
                                <input type="number" placeholder="Type Year" name="built_year" value="{{ $property->built_year }}">
                                <span class="text-danger">@error('built_year'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="dash-input-wrapper mb-30">
                                <label for="">Floors No*</label>
                                <select class="nice-select">
                                    <option value="0">Ground</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div> --}}
                        {{-- <div class="col-12">
                            <div class="dash-input-wrapper">
                                <label for="">Description*</label>
                                <textarea class="size-lg" placeholder="Write about property..."></textarea>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div> --}}
                    </div>
                </div>
                <!-- /.card-box -->

                {{-- <div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three">Photo & Video Attachment</h4>
                    <div class="dash-input-wrapper mb-20">
                        <label for="">File Attachment*</label>
                        
                        <div class="attached-file d-flex align-items-center justify-content-between mb-15">
                            <span>PorpertyImage_01.jpg</span>
                            <a href="#" class="remove-btn" onclick="removeFile('PorpertyImage_01.jpg')"><i class="bi bi-x"></i></a>
                            <input type="file" name="">
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <button type="button" class="dash-btn-one d-inline-block position-relative me-3">
                        <i class="bi bi-plus"></i>
                        Upload File
                    </button>
                    <small>Upload file .jpg,  .png,  .mp4</small>
                </div> --}}

                <div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three">Photo & Video Attachment</h4>
                    <div class="dash-input-wrapper mb-20" id="attachedFilesContainer">
                        <!-- Attached Files will be dynamically added here -->
                    </div>
                    <!-- /.dash-input-wrapper -->
                    <button type="button" class="dash-btn-one d-inline-block position-relative me-3" onclick="attachFile()">
                        <i class="bi bi-plus"></i>
                        Upload File
                        {{-- <input type="file" id="media" name="media[]" accept=".jpg, .jpeg, .png, .mp4" multiple> --}}
                    </button>
                    <small>Upload file .jpg .jpeg .png .mp4</small>
                    <span class="text-danger" id="mediaError"></span>
                </div>

                <!-- /.card-box -->

                <div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three m0 pb-5">Select Amenities</h4>
                    <ul class="style-none d-flex flex-wrap filter-input">
                        @php
                            $amenities = ["A/C & Heating", "Garages", "Swimming Pool", "Parking", "Lake View", "Garden", "Disabled Access", "Pet Friendly", "Ceiling Height", "Outdoor Shower", "Refrigerator", "Fireplace", "Wifi", "TV Cable", "Barbeque", "Laundry", "Dryer", "Lawn", "Elevator"]
                        @endphp
                        
                        @foreach ($amenities as $amenity)

                            <li>
                                <input type="checkbox" name="amenities[]" {{ in_array($amenity, $property->amenities) ? "checked" : '' }} value="{{$amenity}}">
                                <label>{{$amenity}}</label>
                            </li>

                        @endforeach

                    </ul>
                </div>
                <!-- /.card-box -->

                <div class="bg-white card-box border-20 mt-40">
                    <h4 class="dash-title-three">Address & Location</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-input-wrapper mb-25">
                                <label for="">Address*</label>
                                <input type="text" placeholder="145/A, Ranchview" name="address" value="{{ $property->address }}">
                                <span class="text-danger">@error('address'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-lg-4">
                            <div class="dash-input-wrapper mb-25">
                                <label for="city">City*</label>
                                <select class="nice-select" name="city_id" id="city">
                                    <option value="" style="display: none;">Select city</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" {{ $property->location->city->id  == $city->id ? 'selected' : '' }} >{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('city_id'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        <div class="col-lg-4">
                            <div class="dash-input-wrapper mb-25">
                                <label for="area">Area*</label>
                                <select class="nice-select" name="area_id" id="area">
                                    <option value="" style="display: none;">Select Area</option>
                                </select>
                                <span class="text-danger">@error('area_id'){{$message}}@enderror</span>
                            </div>
                            <!-- /.dash-input-wrapper -->
                        </div>
                        {{-- <div class="col-12">
                            
                            <!-- /.dash-input-wrapper -->
                        </div> --}}
                    </div>
                </div>
                <!-- /.card-box -->
                <div class="button-group d-inline-flex align-items-center mt-30">
                    <button type="submit" class="dash-btn-two tran3s me-3">Submit Property</button>
                    <button type="reset" class="dash-cancel-btn tran3s">Cancel</button>
                </div>				
            
            </form>
        </div>
    </div>
    <!-- /.dashboard-body -->

    <!-- Optional JavaScript _____________________________  -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#city').change(function () {
                var cityId = $(this).val();
    
                $.ajax({
                    type: 'GET',
                    url: '{{ route("landlords.properties.getAreasByCity") }}',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: { city_id: cityId },
                    success: function (data) {
                        console.log(data);
                        $('#area').empty();
    
                        // Add new options
                        $.each(data, function (index, area) {
                            $('#area').append('<option value="' + area.id + '">' + area.name + '</option>');
                        });
    
                        // Trigger nice-select refresh
                        $('#area').niceSelect('update');
                    }
                });
            });
            // $('#city').change(function () {
                var cityId = {{ $property->location->city->id }};
    
                $.ajax({
                    type: 'GET',
                    url: '{{ route("landlords.properties.getAreasByCity") }}',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: { city_id: cityId },
                    success: function (data) {
                        console.log(data);
                        $('#area').empty();

                        var selectedAreaId = {{ $property->location->area->id ?? 'null' }};
                        
                        // Add new options
                        $.each(data, function (index, area) {
                            $('#area').append('<option value="' + area.id + '" ' + (selectedAreaId == area.id ? 'selected' : '') + '>' + area.name + '</option>');
                        });
    
                        // Trigger nice-select refresh
                        $('#area').niceSelect('update');
                    }
                });
            // });
        });
    </script>

    <script>
        const attachedFilesContainer = document.getElementById('attachedFilesContainer');
        let count = 1;

        // Assume $property->media is an array containing paths to media files
        const existingMedia = {!! json_encode($property->media ?? []) !!};

        function attachFile(mediaFilePath = null, existing = false) {
            let inputId = Math.random().toString(36).substring(2, 10) + new Date().getTime().toString(36);

            const fileContainer = document.createElement('div');
            fileContainer.classList.add('attached-file', 'd-flex', 'align-items-center', 'justify-content-between', 'mb-15');

            const fileNameSpan = document.createElement('label');
            fileNameSpan.textContent = mediaFilePath ? getFileNameFromPath(mediaFilePath) : `Media File ${count}`;
            fileNameSpan.htmlFor = inputId;
            fileNameSpan.style = `height: 100%;width: 100%;line-height: 5;`;

            const removeBtn = document.createElement('button');
            removeBtn.classList.add('remove-btn');
            removeBtn.type = "button";
            removeBtn.innerHTML = '<i class="bi bi-x"></i>';
            removeBtn.addEventListener('click', () => removeFile(fileContainer));

            const fileInput = document.createElement('input');
            fileInput.type = existing ? 'text' : 'file';
            fileInput.name =  existing ? 'existingMedia[]' : 'media[]';
            if (existing) {
                fileInput.value = mediaFilePath
            }
            fileInput.onchange = () => updateLabel(inputId);
            if (!existing) {
                fileInput.accept = '.jpg, .jpeg, .png, .mp4';
            }
            fileInput.id = inputId;
            fileInput.style.display = 'none'; // Hide the input

            fileContainer.appendChild(fileNameSpan);
            fileContainer.appendChild(removeBtn);
            fileContainer.appendChild(fileInput);

            if (count == 6) {
                alert("You can add a maximum of 5 media files for each listing.");
            } else {
                attachedFilesContainer.appendChild(fileContainer);
                count++;
            }

            // If mediaFilePath is provided (when editing), set the file name as text
            if (mediaFilePath) {
                fileNameSpan.textContent = getFileNameFromPath(mediaFilePath);
            }
        }

        function updateLabel(id) {
            const fileInput = document.getElementById(id);
            const fileLabel = document.querySelector(`label[for="${id}"]`);

            // console.log(fileInput.files)
            const files = fileInput.files;

            for (const file of files) {
                fileLabel.textContent = `${file.name}   |   ${file.type}`
            }

        }

        function getFileNameFromPath(filePath) {
            return filePath.split('/').pop();
        }

        // Populate the attachedFilesContainer with existing media
        existingMedia.forEach(mediaFilePath => {
            attachFile(mediaFilePath, true);
        });

        function removeFile(fileContainer) {
            attachedFilesContainer.removeChild(fileContainer);
            count--;
        }


    </script>

@endsection
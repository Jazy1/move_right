@extends('buyers.layouts.parent')

@section('title', "Contracts | Move Right®")

@section('content')
    
    <!-- =============================================
        Dashboard Body
    ============================================== -->
    <div class="dashboard-body">
        <div class="position-relative">
            <!-- ************************ Header **************************** -->
            <x-buyers.header :buyer="$buyer"/>
            <!-- End Header -->

            <h2 class="main-title d-block d-lg-none">My Contracts</h2>
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-25">
                <div class="fs-16">Showing <span class="color-dark fw-500">1–5</span> of <span class="color-dark fw-500">40</span> results</div>
                <div class="d-flex ms-auto xs-mt-30">
                    <div class="short-filter d-flex align-items-center ms-sm-auto">
                        <div class="fs-16 me-2">Short by:</div>
                        <select class="nice-select">
                            <option value="0">Newest</option>
                            <option value="1">Best Seller</option>
                            <option value="2">Best Match</option>
                            <option value="3">Price Low</option>
                            <option value="4">Price High</option>
                        </select>
                    </div>
                </div>
            </div> --}}

            <div class="bg-white card-box p0 border-20">
                <div class="table-responsive pt-25 pb-25 pe-4 ps-4">
                    <table class="table property-list-table">
                        <thead>
                            <tr>
                                <th scope="col">Property</th>
                                <th scope="col">Landlord</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">For</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="border-0">

                            @foreach ($contracts as $contract)
                                @php
                                    $property = $contract->property;
                                    $landlord = $contract->landlord;

                                @endphp
                                <tr>
                                    <td>
                                        <div class="d-lg-flex align-items-center position-relative">
                                            <img src="{{ isset($property->media[0]) ? Storage::url($property->media[0]) : asset('images/icon/image-placeholder.svg') }}" alt="" class="p-img">
                                            <div class="ps-lg-4 md-pt-10">
                                                <a href="{{ route("public.property", $property->id) }}" target="_blank" class="property-name tran3s color-dark fw-500 fs-20 stretched-link" > {{ $property->title }} </a>
                                                <div class="address">{{ $property->address }}, {{ $property->location->area->name }}, {{ $property->location->city->name }}, UK</div>
                                                <strong class="price color-dark">£{{ $property->price }}</strong>
                                            </div>
                                        </div>
                                    </td>
                                    <td> 
                                        <a href="{{ route("public.landlord", $landlord->id) }}" target="_blank" style="cursor: pointer;" >{{ $landlord->name }}</a> 
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($contract->from)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($contract->to)->format('d-m-Y') }}</td>
                                    <td>{{ ucfirst($contract->list_in) }}</td>
                                    <td>
                                        @php
                                            $isValid = $contract->status == "valid" ? true : false
                                        @endphp
                                        
                                        <div class="property-status {{ !$isValid ? "pending" : "" }} ">
                                            {{ $isValid ? "Valid" : "Null & Void" }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="action-dots float-end">
                                            <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route("public.contract.rent", $contract->id) }}" target="_blank"><img src="../images/lazy.svg" data-src="{{ asset("dashboard/images/icon/icon_18.svg") }} " alt="" class="lazy-img"> View</a>
                                            </li>
                                            {{-- <li>
                                                <a class="dropdown-item" href="{{ route("landlords.properties.edit", $property->id) }}" ><img src="../images/lazy.svg" data-src="{{ asset("dashboard/images/icon/icon_20.svg") }}" alt="" class="lazy-img"> Edit</a>
                                            </li> --}}
                                            <li>
                                                <a class="dropdown-item" href="{{ route("buyers.contracts.nullNvoid", $contract->id) }}"><img src="../images/lazy.svg" data-src="{{ asset("dashboard/images/icon/icon_21.svg") }}" alt="" class="lazy-img"> Null & Void</a>
                                            </li>
                                        </ul>
                                    </div>
                                    </td>
                                </tr>
                                
                                @endforeach
                                {{-- <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="{{ asset("dashboard/images/icon/icon_19.svg") }}" alt="" class="lazy-img"> Share</a></li> --}}

                            {{-- <tr>
                                <td>
                                    <div class="d-lg-flex align-items-center position-relative">
                                        <img src="images/img_02.jpg" alt="" class="p-img">
                                        <div class="ps-lg-4 md-pt-10">
                                            <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">White House villa</a>
                                            <div class="address">Ranchview, California, USA</div>
                                            <strong class="price color-dark">$42,130</strong>
                                        </div>
                                    </div>
                                </td>
                                <td>09 Jan, 2023</td>
                                <td>0</td>
                                <td><div class="property-status pending">Pending</div></td>
                                <td>
                                    <div class="action-dots float-end">
                                        <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div class="d-lg-flex align-items-center position-relative">
                                        <img src="images/img_03.jpg" alt="" class="p-img">
                                        <div class="ps-lg-4 md-pt-10">
                                            <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Luxury villa in Dal lake</a>
                                            <div class="address">Muza link road, ca, usa</div>
                                            <strong class="price color-dark">$2,370/<sub>m</sub></strong>
                                        </div>
                                    </div>
                                </td>
                                <td>17 Oct, 2022</td>
                                <td>0</td>
                                <td><div class="property-status processing">Processing</div></td>
                                <td>
                                    <div class="action-dots float-end">
                                        <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <div class="d-lg-flex align-items-center position-relative">
                                        <img src="images/img_04.jpg" alt="" class="p-img">
                                        <div class="ps-lg-4 md-pt-10">
                                            <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Wooden World</a>
                                            <div class="address">Board Baxar, Califronia, USA</div>
                                            <strong class="price color-dark">$63,300</strong>
                                        </div>
                                    </div>
                                </td>
                                <td>23 Sep, 2022</td>
                                <td>970</td>
                                <td><div class="property-status">Active</div></td>
                                <td>
                                    <div class="action-dots float-end">
                                        <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="d-lg-flex align-items-center position-relative">
                                        <img src="images/img_05.jpg" alt="" class="p-img">
                                        <div class="ps-lg-4 md-pt-10">
                                            <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">Orkit Villa</a>
                                            <div class="address">Green Road, Uttara, BD</div>
                                            <strong class="price color-dark">$72,000</strong>
                                        </div>
                                    </div>
                                </td>
                                <td>15 Aug, 2022</td>
                                <td>2320</td>
                                <td><div class="property-status">Active</div></td>
                                <td>
                                    <div class="action-dots float-end">
                                        <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg" data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <!-- /.table property-list-table -->
                </div>                    
            </div>
            <!-- /.card-box -->


            {{-- <ul class="pagination-one d-flex align-items-center justify-content-center style-none pt-40">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li>....</li>
                <li class="ms-2"><a href="#" class="d-flex align-items-center">Last <img src="../images/icon/icon_46.svg" alt="" class="ms-2"></a></li>
            </ul> --}}
        </div>
    </div>
    <!-- /.dashboard-body -->
    
@endsection

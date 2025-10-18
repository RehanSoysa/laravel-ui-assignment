@extends('layouts.app')

@section('internalcss')
{{-- internal css --}}
    :root{
    --font-color:#4f4f4f;
    --color-grey:#dbdbdb;
    --color-black:#000000;
    --color-offwhite:#e9e9e9;
    --color-grey-v:#efefef;
    --bs-body-color: var(--font-color) !important;

    }
    body{
    background:var(--color-grey-v) !important;
    }
    h1{
    color:var(--color-black) !important;
    }
    th{
    font-weight:normal;
    font-size:1.1em;
    }
    .sidebar {
    width: 50px;
    background: #111827;
    color: #fff;
    min-height: 100vh;
    position: fixed;
    z-index:3;
    transition:width 0.5s ease;
    }
    .sidebar.sidebar-toggle{
    width:100%;
    transition:width 0.5s ease;
    }
    .sidebar a {
    color: #ccc;
    text-decoration: none;
    display: block;
    padding: 12px 16px;
    text-align:center;
    }
    .sidebar a.active:before {
    content:"";
    height:26px;
    background-color:white;
    width:3px;
    position:absolute;
    display:block;
    left:0
    }
    .sidebar img {
    max-width:50%;
    }
    .sidebar a.active, .sidebar a:hover {
    background: #1f2937;
    color: #fff;
    }
    .main-content{
    margin-left: 50px;
    transition:margin 0.5s ease;
    }
    .main-content.marginl {
    margin-left: 240px;
    transition:margin 0.5s ease;
    }
    .notification {
    font-size: 1.3rem;
    cursor: pointer;
    }
    .notification .badge {
    position: absolute;
    top: -5px;
    right: -10px;
    font-size: 0.7rem;
    padding:5px;
    }
    .user-profile {
    cursor: pointer;
    color: var(--font-color);
    }
    .user-profile img {
    width: 36px;
    height: 36px;
    object-fit: cover;
    opacity:35%;
    }
    .filters-bar {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: center;
    }
    .filters-left {
    display: flex;
    align-items: center;
    gap: 10px;
    }
    .filters-left select {
    width: 50px;
    border-left:2px solid #e9e9e9 !important;
    }
    .input-group.filters-right {
    max-width: 250px;
    width:100%;
    }
    .hide {
    display:none;
    }
    .bg-grey {
    background-color:var(--color-grey) !important;
    }
    .bg-offwhite {
    background-color:var(--color-offwhite) !important;
    }
    .body-content{
    background:var(--color-grey-v);
    }
    .table-content {
    display: flex;
    font-size: 0.95rem;
    transition:background-color 0.5s ease;
    }
    .table-header {
    font-weight: 500;
    }
    .table-content > div {
    padding: 5px;
    flex-shrink: 0;
    }
    .col-checkbox input{
    width:20px;
    height:20px;
    }
    .border-grey{
    border-color:var(--color-offwhite) !important;
    }
    .hide{
    display:none;
    }
    .bi-chevron-double-right:before{
    transition:transform 1s ease;
    }
    .rotate:before{
    transform: rotate(180deg);
    transition:transform 1s ease;
    }
    .mob-col-hd {
    width:35%;
    background:var(--color-grey-v);
    display:inline-flex;
    padding:5px;
    font-weight:500;
    margin-right:10px;
    }
    .mob-col-hd-empty{
    background:none;
    }
    .card-b .col-img img {
    display:inline-flex;
    width:100px;
    margin:10px 0px;
    }
    .badge.bg-info{
    color: #0d6efd;
    }
    .badge.bg-success{
    color:green;
    background-color:lightgreen !important;
    }
    @media(min-width:992px){
    .col-checkbox { width: 4%; text-align: center; }
    .col-img { width: 5%; }
    .col-product { width: 22%; }
    .col-status { width: 10%; }
    .col-inventory { width: 15%; }
    .col-sales { width: 10%; }
    .col-markets { width: 8%; }
    .col-category { width: 12%; }
    .col-vendor { width: 10%; }
    .col-action { width: 4%; text-align: center; }

    .card-b .col-img img {
    display:inline-flex;
    width:30px;
    height:30px;
    margin:0px;
    }
    .input-group.filters-right {
    max-width: 350px;
    }
    .sidebar.sidebar-toggle{
    width:240px;
    }
    .sidebar a {
    text-align:left;
    }
    .sidebar img {
    max-width:170px;
    }
    }
    @media(max-width:485px){
    .filters-left,.tags{
    flex-direction:column;
    }
    .tags{
    row-gap:10px;
    }
    }
    @media(max-width:768px){
    .main-content, .main-content.marginl{
    margin-left: 51px;
    }
    }
    @media(max-width:992px){
    .hide-main-th {
    display:none;
    }
    .card-column .col-checkbox { display:none; }
    .card-column .col-img { display:none; }
    .card-column .col-product { width: 19%; }
    .card-column .col-status { width: 10%; }
    .card-column .col-inventory { width: 30%; }
    .card-column .col-sales { width: 19%; }
    .card-column .col-markets { width: 17%; }
    .card-column .col-category { display:none; }
    .card-column .col-vendor { display:none; }
    .card-column .col-action { width: 5%; text-align: center; }
    .card-b{
    border:1px solid var(-color-grey-v);
    border-radius:5px;
    }
    .card-b .col-checkbox {
        padding-top:15px;
    }
    .card-b .col-action{
        padding-bottom:15px;
    }
    .card-column{
    border:1px solid var(--color-grey-v);
    }
    }
@endsection


@section('content')
{{-- sidebar --}}
    <div class="sidebar">
        <div class="p-3 mb-4 border-bottom text-center">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('images/logo.svg') }}" alt="Encore Custom Logo" class="img-fluid side-hidden hide">
                <button class="btn btn-link text-white p-0" id="sidebarToggle">
                    <i class="bi bi-chevron-double-right"></i>
                </button>
            </div>

        </div>
        <a href="#"><i class="bi bi-clipboard-data me-2"></i><span class="hide side-hidden">Dashboard</span></a>
        <a href="#"><i class="bi bi-bag me-2"></i><span class="hide side-hidden">Orders</span></a>
        <a href="#" class="active"><i class="bi bi-house-door me-2"></i><span
                class="hide side-hidden">Inventory</span></a>
        <a href="#"><i class="bi bi-coin me-2"></i><span class="hide side-hidden">Payments</span></a>
        <a href="#"><i class="bi bi-person me-2"></i><span class="hide side-hidden">Customers</span></a>
        <a href="#"><i class="bi bi-journal-text me-2"></i><span class="hide side-hidden">Reports</span></a>
        <a href="#"><i class="bi bi-gear me-2"></i><span class="hide side-hidden">Settings</span></a>
    </div>
{{-- main title + user profile --}}
    <div class="main-content bg-white pt-3">
        <div class="topbar mb-3 d-flex align-items-center justify-content-between">
            <div></div>

            <h1 class="fw-bold mb-0 text-center flex-grow-1">Inventory</h1>

            <div class="user-section d-flex align-items-center gap-3">
                <div class="notification text-dark position-relative">
                    <i class="bi bi-bell-fill"></i>
                    <span class="badge bg-danger rounded-circle border border-white">12</span>
                </div>

                <div class="user-profile d-flex align-items-center gap-2 pr-5">
                    <img src="{{ asset('images/icons/user-placeholder.png') }}" alt="User" class="rounded-circle"
                        width="36" height="36">
                    <span>User Name</span>
                </div>
            </div>

        </div>

{{-- filter tags + buttons --}}
        <div class="body-content h-100 p-md-3 pt-3">
            <div class="filters-bar mb-3 bg-white p-3 justify-content-center justify-content-md-between">
                <div class="filters-left">
                    <div class="border border-grey rounded-pill px-2 py-1">
                        <label class="form-label mb-0 text-secondary">Number of products</label>
                        <select class="d-inline-block border-0 ">
                            <option selected>All</option>
                            <option>1–10</option>
                            <option>11–50</option>
                            <option>51–100</option>
                            <option>100+</option>
                        </select>
                    </div>

                    <div class="border border-grey rounded-pill px-2 py-1">
                        <label class="form-label mb-0 text-secondary">Total Products</label>
                        <select class="d-inline-block border-0 border-left">
                            <option selected>All</option>
                            <option>Low Stock</option>
                            <option>In Stock</option>
                            <option>Out of Stock</option>
                        </select>
                    </div>
                </div>

                <div class="filters-right input-group rounded border border-grey">
                    <button class="btn"><i class="bi bi-search"></i></button>
                    <input type="text" class="form-control border-0" placeholder="Search">

                </div>
            </div>

            <div class="container-auto bg-white p-3">
                <div class="d-flex justify-content-between align-items-center flex-wrap tags">
                    <!-- Left side tags -->
                    <div class="d-flex flex-wrap gap-0 gap-md-2">
                        <div class="btn btn-light text-secondary bg-grey px-2 fw-semibold">All</div>
                        <div class="btn text-secondary px-2 fw-semibold">Active</div>
                        <div class="btn text-secondary px-2 fw-semibold">Draft</div>
                        <div class="btn text-secondary px-2 fw-semibold">Achieved</div>
                    </div>

                    <!-- Right side buttons -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-light text-secondary border fw-semibold">Export</button>
                        <button class="btn btn-light text-secondary border fw-semibold">Import</button>
                    </div>
                </div>
            </div>

            {{-- inventory table --}}
            <div class="container-auto bg-white">
                <div class="d-flex-lg hide-main-th bg-grey text-left align-items-center py-2 table-header table-content w-100"
                    style="font-size:1rem">
                    <div class="col-checkbox d-flex justify-content-center "><input type="checkbox" name="select"></div>
                    <div class="col-img "></div>
                    <div class="col-product ">Product</div>
                    <div class="col-status d-flex justify-content-between align-items-center">Status<span
                            class="caret-icon mr-3 d-flex flex-column" style="font-size:10px"><i
                                class="bi bi-caret-up-fill"></i><i class="bi bi-caret-down-fill"></i></span></div>
                    <div class="col-inventory ">Inventory</div>
                    <div class="col-sales d-flex justify-content-between align-items-center">Sales channels<span
                            class="caret-icon mr-3 d-flex flex-column" style="font-size:10px"><i
                                class="bi bi-caret-up-fill"></i><i class="bi bi-caret-down-fill"></i></span></div>
                    <div class="col-markets d-flex justify-content-between align-items-center">Markets<span
                            class="caret-icon mr-3 d-flex flex-column" style="font-size:10px"><i
                                class="bi bi-caret-up-fill"></i><i class="bi bi-caret-down-fill"></i></span></div>
                    <div class="col-category d-flex justify-content-between align-items-center">Category<span
                            class="caret-icon mr-3 d-flex flex-column" style="font-size:10px"><i
                                class="bi bi-caret-up-fill"></i><i class="bi bi-caret-down-fill"></i></span></div>
                    <div class="col-vendor d-flex justify-content-between align-items-center">Vendor<span
                            class="caret-icon mr-3 d-flex flex-column" style="font-size:10px"><i
                                class="bi bi-caret-up-fill"></i><i class="bi bi-caret-down-fill"></i></span></div>
                    <div class="col-action "></div>
                </div>
                <div class="card-b d-flex flex-column p-2 m-3 p-lg-0 m-lg-0">
                    @foreach ($products as $index => $product)
                        <div
                            class="d-flex flex-column d-lg-flex flex-lg-row bg-white text-left align-items-left align-items-lg-center  table-content border-bottom w-100">
                            <div class="col-checkbox d-flex justify-content-center"><input type="checkbox"
                                    name="select"></div>
                            <div class="col-img d-flex justify-content-center"><img src="{{ asset($product['image']) }}">
                            </div>
                            <div class="col-product "><span
                                    class="mob-col-hd d-lg-none">Product</span>{!! $product['name'] !!}</div>
                            <div class="col-status "><span class="mob-col-hd d-lg-none">Status</span>
                                @if ($product['status'] === 'Active')
                                    <span class="badge bg-success">{{ $product['status'] }}</span>
                                @else
                                    <span class="badge bg-info">{{ $product['status'] }}</span>
                                @endif
                            </div>
                            <div class="col-inventory "><span
                                    class="mob-col-hd d-lg-none">Inventory</span>{!! $product['inventory'] !!}</div>
                            <div class="col-sales "><span class="mob-col-hd d-lg-none">Sales
                                    channels</span>{{ $product['channels'] }}</div>
                            <div class="col-markets "><span
                                    class="mob-col-hd d-lg-none">Markets</span>{{ $product['markets'] }}</div>
                            <div class="col-category "><span
                                    class="mob-col-hd d-lg-none">Category</span>{{ $product['category'] }}</div>
                            <div class="col-vendor "><span
                                    class="mob-col-hd d-lg-none">Vendor</span>{{ $product['vendor'] }}</div>
                            <div class="col-action d-flex justify-content-center"><button
                                    class="btn btn-link p-0 toggle-details" data-product-id="{{ $index }}"><i
                                        class="bi bi-eye"></i></button></div>
                        </div>
                        <div class="hide card-column" id="product-id-{{ $index }}">
                            <div class="d-flex bg-grey text-left align-items-center py-2 table-header table-content w-100">
                                <div class="col-checkbox "></div>
                                <div class="col-img "></div>
                                <div class="col-product ">Variants</div>
                                <div class="col-status ">Size</div>
                                <div class="col-inventory ">Stock</div>
                                <div class="col-sales ">Prices</div>
                                <div class="col-markets ">Discount</div>
                                <div class="col-category "></div>
                                <div class="col-vendor "></div>
                                <div class="col-action "></div>
                            </div>
                            @foreach ($product['variants'] as $variant)
                                <div
                                    class="d-flex bg-offwhite text-left align-items-center table-content border-bottom w-100">
                                    <div class="col-checkbox "></div>
                                    <div class="col-img "></div>
                                    <div class="col-product d-flex align-items-center gap-2">{!! $variant['color'] !!}</div>
                                    <div class="col-status ">{{ $variant['size'] }}</div>
                                    <div class="col-inventory ">{{ $variant['stock'] }} In Stock For <br> <span
                                            style="color:#a9a9a9">Last Update - </span><span style="color:#0d6efd">25 AUG
                                            25</span></div>
                                    <div class="col-sales ">{{ number_format($variant['price'], 2) }}$</div>
                                    <div class="col-markets ">{{ $variant['discount'] }}</div>
                                    <div class="col-category "></div>
                                    <div class="col-vendor "></div>
                                    <div class="col-action "><button class="btn btn-link p-0 toggle-details"><i
                                                class="bi bi-eye"></i></button></div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>


            {{-- showing results + pagination --}}
            <div class="d-flex justify-content-between align-items-center p-3 pt-5 bg-white flex-wrap">
                <div class="text-muted small mb-2 mb-md-0">
                    Showing <strong>1 - 50</strong> of <strong>931</strong> results
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item">
                            <a class="page-link border-0 text-dark " href="#" tabindex="-1" aria-disabled="true">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link border-0 text-dark fw-bold" href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">3</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">4</a></li>
                        <li class="page-item"><a class="page-link border-0 text-secondary" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link border-0 text-dark" href="#"><i
                                    class="bi bi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
@endsection

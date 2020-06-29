@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')

<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
  >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">
            Dashboard
          </h2>
          <p class="dashboard-subtitle">
            Look what you have made today!
          </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <div class="card-body">
                  <div class="dashboard-card-title">
                    Customer
                  </div>
                  <div class="dashboard-card-subtitle">
                    14,200
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-2">
                <div class="card-body">
                  <div class="dashboard-card-title">
                    Revenue
                  </div>
                  <div class="dashboard-card-subtitle">
                    $ 1,900,000
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-2">
                <div class="card-body">
                  <div class="dashboard-card-title">
                    Transaction
                  </div>
                  <div class="dashboard-card-subtitle">
                    50,200
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12 mt-2">
              <h5 class="mb-3">
                Recent Transactions
              </h5>
              <a
                href="/dashboard-transaction-details.html"
                class="card card-list d-block"
              >
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-1.png" />
                    </div>
                    <div class="col-md-4">
                      Siroopppp
                    </div>
                    <div class="col-md-3">
                      Dicka Estu
                    </div>
                    <div class="col-md-3">
                      25 Juni 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" />
                    </div>
                  </div>
                </div>
              </a>
              <a
                href="/dashboard-transaction-details.html"
                class="card card-list d-block"
              >
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-1.png" />
                    </div>
                    <div class="col-md-4">
                      Siroopppp
                    </div>
                    <div class="col-md-3">
                      Dicka Estu
                    </div>
                    <div class="col-md-3">
                      25 Juni 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" />
                    </div>
                  </div>
                </div>
              </a>
              <a
                href="/dashboard-transaction-details.html"
                class="card card-list d-block"
              >
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/dashboard-icon-product-1.png" />
                    </div>
                    <div class="col-md-4">
                      Siroopppp
                    </div>
                    <div class="col-md-3">
                      Dicka Estu
                    </div>
                    <div class="col-md-3">
                      25 Juni 2020
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="/images/dashboard-arrow-right.svg" />
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- End Of Section Content -->

   

@endsection
@extends('layouts.dashboard')
@section('title','Dashboard Transaction Details')
@section('content')
 <!-- Section Content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">
                  #STORE123
                </h2>
                <p class="dashboard-subtitle">
                  Transaction Details
                </p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="/images/product-details-dashboard.png"
                              class="w-100 mb-3"
                            />
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Customer Name
                                </div>
                                <div class="product-subtitle">
                                  Dicka Estu
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Product Name
                                </div>
                                <div class="product-subtitle">
                                  Siroooppp
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Date of Transaction
                                </div>
                                <div class="product-subtitle">
                                  25 Juni, 2020
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Status
                                </div>
                                <div class="product-subtitle text-danger">
                                  Pending
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Total Amount
                                </div>
                                <div class="product-subtitle">
                                  $255
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Mobile
                                </div>
                                <div class="product-subtitle">
                                  08252124221
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 mt-4">
                            <h5>Shipping Information</h5>
                          </div>
                          <div class="col-12">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Address 1
                                </div>
                                <div class="product-subtitle">
                                  Jalan Situ tuh
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Address 2
                                </div>
                                <div class="product-subtitle">
                                  Jalan Sini nih
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Province
                                </div>
                                <div class="product-subtitle">
                                  West Java
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  City
                                </div>
                                <div class="product-subtitle">
                                  Bogor
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Postal Code
                                </div>
                                <div class="product-subtitle">
                                  123456
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Country
                                </div>
                                <div class="product-subtitle">
                                  Indonesia
                                </div>
                              </div>
                              <div class="col-12 col-md-3">
                                <div class="product-title">
                                  Status
                                </div>
                                <select
                                  class="form-control"
                                  v-model="status"
                                  name="status"
                                  id="status"
                                >
                                  <option value="UNPAID">Unpaid</option>
                                  <option value="PENDING">Pending</option>
                                  <option value="SHIPPING">Shipping</option>
                                  <option value="SUCCESS">Success</option>
                                </select>
                              </div>
                              <template v-if="status == 'SHIPPING'">
                                <div class="col-md-3">
                                  <div class="product-title">Input Resi</div>
                                  <input
                                    type="text"
                                    name="resi"
                                    class="form-control"
                                    v-model="resi"
                                  />
                                </div>
                                <div class="col-md-2">
                                  <button
                                    type="submit"
                                    class="btn btn-success btn-block mt-4"
                                  >
                                    Update Resi
                                  </button>
                                </div>
                              </template>
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col-8 text-right mt-4">
                            <button
                              type="submit"
                              class="btn btn-success btn-block btn-lg mt-4"
                            >
                              Save Now
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Of Section Content -->
@endsection

@push('addon-script')
 <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
          status: "SHIPPING",
          resi: "SDAS24124ss",
        },
      });
    </script>
@endpush
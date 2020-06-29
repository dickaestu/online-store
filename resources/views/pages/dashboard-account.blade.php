@extends('layouts.dashboard')
@section('title','Dashboard Account')
@section('content')
<!-- Section Content -->
    <div
      class="section-content section-dashboard-home"
      data-aos="fade-up"
    >
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">
            My Account
          </h2>
          <p class="dashboard-subtitle">
            Update your current profile
          </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <form action="">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Your name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            value="Masukkan nama"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Your email</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            value="Masukkan email"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="addressOne">Address 1</label>
                          <input
                            type="text"
                            class="form-control"
                            id="addressOne"
                            name="addressOne"
                            value="Masukkan alamat"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="addressTwo">Address 2</label>
                          <input
                            type="text"
                            class="form-control"
                            id="addressTwo"
                            name="addressTwo"
                            value="Masukkan alamat (optional)"
                          />
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="province">Province</label>
                          <select
                            name="province"
                            id="province"
                            class="form-control"
                          >
                            <option value="westJava">West Java</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="city">City</label>
                          <select
                            name="city"
                            id="city"
                            class="form-control"
                          >
                            <option value="bandung">Bandung</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="postalCode">Postal Code</label>
                          <input
                            type="text"
                            class="form-control"
                            id="postalCode"
                            name="postalCode"
                            value="Kode pos"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="country">Country</label>
                          <input
                            type="text"
                            class="form-control"
                            id="country"
                            name="country"
                            value="Masukkan negara"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="mobile">Phone</label>
                          <input
                            type="number"
                            class="form-control"
                            id="mobile"
                            name="mobile"
                            value="Masukkan nomor handphone"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-right">
                        <button
                          type="submit"
                          class="btn btn-success px-5"
                        >
                          Save Now
                        </button>
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
    <!-- End Of Section Content -->
@endsection
@extends('layout/layout')
@section('title','Admin - Home')
@section('home_active','active')
@section('container')

        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6 col-lg-12">
                <div class="row">
                  
                  <div class="col-md-4 col-sm-6">
                    <div class="card mb-30 progress_1">
                      <div class="card-body">
                        <h4 class="progress-title">Registrations</h4>
                        <div class="ProgressBar-wrap position-relative mb-4">
                          <div
                            class="ProgressBar ProgressBar_1"
                            data-progress="75"
                          >
                            <svg
                              class="ProgressBar-contentCircle"
                              viewBox="0 0 200 200"
                            >
                              <circle
                                transform="rotate(135, 100, 100)"
                                class="ProgressBar-background"
                                cx="100"
                                cy="100"
                                r="8"
                              />
                              <circle
                                transform="rotate(135, 100, 100)"
                                class="ProgressBar-circle"
                                cx="100"
                                cy="100"
                                r="85"
                              />
                            </svg>
                            <span class="ProgressBar-percentage--text"
                              >Increase </span
                            ><span
                              class="
                                ProgressBar-percentage
                                ProgressBar-percentage--count
                              "
                            ></span>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap mb-2 progress-info">
                          <div>Users</div>
                          <div>
                            <img
                              src="assets/img/svg/caret-up.svg"
                              alt=""
                              class="svg"
                            />
                            2.6k
                          </div>
                          <div>
                            <img
                              src="assets/img/svg/caret-down.svg"
                              alt=""
                              class="svg"
                            />568
                          </div>
                        </div>
                        <div class="d-flex flex-wrap progress-info">
                          <div>Disabled</div>
                          <div>
                            <img
                              src="assets/img/svg/caret-up.svg"
                              alt=""
                              class="svg"
                            />1.26k
                          </div>
                          <div>
                            <img
                              src="assets/img/svg/caret-down.svg"
                              alt=""
                              class="svg"
                            />25
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="card mb-30 progress_2">
                      <div class="card-body">
                        <h4 class="progress-title">Sales</h4>
                        <div class="ProgressBar-wrap position-relative mb-4">
                          <div
                            class="ProgressBar ProgressBar_2"
                            data-progress="35"
                          >
                            <svg
                              class="ProgressBar-contentCircle"
                              viewBox="0 0 200 200"
                            >
                              <circle
                                transform="rotate(135, 100, 100)"
                                class="ProgressBar-background"
                                cx="100"
                                cy="100"
                                r="85"
                              />
                              <circle
                                transform="rotate(135, 100, 100)"
                                class="ProgressBar-circle"
                                cx="100"
                                cy="100"
                                r="85"
                              />
                            </svg>
                            <span class="ProgressBar-percentage--text"
                              >Increase</span
                            >
                            <span
                              class="
                                ProgressBar-percentage
                                ProgressBar-percentage--count
                              "
                            ></span>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap mb-2 progress-info">
                          <div>Net Profit</div>
                          <div>
                            <img
                              src="assets/img/svg/caret-up.svg"
                              alt=""
                              class="svg"
                            />
                            268k
                          </div>
                          <div>
                            <img
                              src="assets/img/svg/caret-down.svg"
                              alt=""
                              class="svg"
                            />89k
                          </div>
                        </div>
                        <div class="d-flex flex-wrap progress-info">
                          <div>Expenses</div>
                          <div>
                            <img
                              src="assets/img/svg/caret-up.svg"
                              alt=""
                              class="svg"
                            />1.26k
                          </div>
                          <div>
                            <img
                              src="assets/img/svg/caret-down.svg"
                              alt=""
                              class="svg"
                            />1.5k
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="card mb-30 progress_3 mr-0">
                      <div class="card-body">
                        <h4 class="progress-title">Company Growth</h4>
                        <div class="ProgressBar-wrap position-relative mb-4">
                          <div
                            class="ProgressBar ProgressBar_3"
                            data-progress="70"
                          >
                            <svg
                              class="ProgressBar-contentCircle"
                              viewBox="0 0 200 200"
                            >
                              <circle
                                transform="rotate(135, 100, 100)"
                                class="ProgressBar-background"
                                cx="100"
                                cy="100"
                                r="85"
                                stroke-width="20"
                              />
                              <circle
                                transform="rotate(135, 100, 100)"
                                class="ProgressBar-circle"
                                cx="100"
                                cy="100"
                                r="85"
                                stroke-width="20"
                              />
                            </svg>
                            <span class="ProgressBar-percentage--text"
                              >Increase </span
                            ><span
                              class="
                                ProgressBar-percentage
                                ProgressBar-percentage--count
                              "
                            ></span>
                          </div>
                        </div>
                        <div class="d-flex flex-wrap mb-2 progress-info">
                          <div>Employee</div>
                          <div>
                            <img
                              src="assets/img/svg/caret-up.svg"
                              alt=""
                              class="svg"
                            />15
                          </div>
                          <div>
                            <img
                              src="assets/img/svg/caret-down.svg"
                              alt=""
                              class="svg"
                            />3
                          </div>
                        </div>
                        <div class="d-flex flex-wrap progress-info">
                          <div>Production</div>
                          <div>
                            <img
                              src="assets/img/svg/caret-up.svg"
                              alt=""
                              class="svg"
                            />1.26k
                          </div>
                          <div>
                            <img
                              src="assets/img/svg/caret-down.svg"
                              alt=""
                              class="svg"
                            />1.2k
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="row">
              
              
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card area-chart-box mb-30">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="">
                        <h4 class="mb-1">Profit Report</h4>
                        <p class="font-14 soft-pink">Decrease in Average</p>
                      </div>
                      <div class="">
                        <h2>15<sup>%</sup></h2>
                      </div>
                    </div>
                  </div>
                  <div id="apex_area2-chart" class="chart"></div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card area-chart-box mb-30">
                  <div class="card-body">
                    <div class="">
                      <h4 class="mb-1">Impression</h4>
                      <p class="font-14 text_color">Hover to see detail</p>
                    </div>
                  </div>
                  <div id="apex_area3-chart" class="chart"></div>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card area-chart-box mb-30">
                  <div class="card-body">
                    <div class="">
                      <h4 class="mb-1">Activity</h4>
                      <p class="font-14 text_color">Hover to see detail</p>
                    </div>
                  </div>
                  <div id="apex_area4-chart" class="chart"></div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
     
@endsection
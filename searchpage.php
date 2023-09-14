<?php include "php/config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>General Search Results - Studybuddy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      background: #dcdcdc;
      margin-top: 20px;
    }

    .widget-26 {
      color: #3c4142;
      font-weight: 400;
    }

    .widget-26 tr:first-child td {
      border: 0;
    }

    .widget-26 .widget-26-job-emp-img img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }

    .widget-26 .widget-26-job-title {
      min-width: 200px;
    }

    .widget-26 .widget-26-job-title a {
      font-weight: 400;
      font-size: 0.875rem;
      color: #3c4142;
      line-height: 1.5;
    }

    .widget-26 .widget-26-job-title a:hover {
      color: #68CBD7;
      text-decoration: none;
    }

    .widget-26 .widget-26-job-title .employer-name {
      margin: 0;
      line-height: 1.5;
      font-weight: 400;
      color: #3c4142;
      font-size: 0.8125rem;
      color: #3c4142;
    }

    .widget-26 .widget-26-job-title .employer-name:hover {
      color: #68CBD7;
      text-decoration: none;
    }

    .widget-26 .widget-26-job-title .time {
      font-size: 12px;
      font-weight: 400;
    }

    .widget-26 .widget-26-job-info {
      min-width: 100px;
      font-weight: 400;
    }

    .widget-26 .widget-26-job-info p {
      line-height: 1.5;
      color: #3c4142;
      font-size: 0.8125rem;
    }

    .widget-26 .widget-26-job-info .location {
      color: #3c4142;
    }

    .widget-26 .widget-26-job-salary {
      min-width: 70px;
      font-weight: 400;
      color: #3c4142;
      font-size: 0.8125rem;
    }

    .widget-26 .widget-26-job-category {
      padding: .5rem;
      display: inline-flex;
      white-space: nowrap;
      border-radius: 15px;
    }

    .widget-26 .widget-26-job-category .indicator {
      width: 13px;
      height: 13px;
      margin-right: .5rem;
      float: left;
      border-radius: 50%;
    }

    .widget-26 .widget-26-job-category span {
      font-size: 0.8125rem;
      color: #3c4142;
      font-weight: 600;
    }

    .widget-26 .widget-26-job-starred svg {
      width: 20px;
      height: 20px;
      color: #fd8b2c;
    }

    .widget-26 .widget-26-job-starred svg.starred {
      fill: #fd8b2c;
    }

    .bg-soft-base {
      background-color: #e1f5f7;
    }

    .bg-soft-warning {
      background-color: #fff4e1;
    }

    .bg-soft-success {
      background-color: #d1f6f2;
    }

    .bg-soft-danger {
      background-color: #fedce0;
    }

    .bg-soft-info {
      background-color: #d7efff;
    }


    .search-form {
      width: 80%;
      margin: 0 auto;
      margin-top: 1rem;
    }

    .search-form input {
      height: 100%;
      background: transparent;
      border: 0;
      display: block;
      width: 100%;
      padding: 1rem;
      height: 100%;
      font-size: 1rem;
    }

    .search-form select {
      background: transparent;
      border: 0;
      padding: 1rem;
      height: 100%;
      font-size: 1rem;
    }

    .search-form select:focus {
      border: 0;
    }

    .search-form button {
      height: 100%;
      width: 100%;
      font-size: 1rem;
    }

    .search-form button svg {
      width: 24px;
      height: 24px;
    }

    .search-body {
      margin-bottom: 1.5rem;
    }

    .search-body .search-filters .filter-list {
      margin-bottom: 1.3rem;
    }

    .search-body .search-filters .filter-list .title {
      color: #3c4142;
      margin-bottom: 1rem;
    }

    .search-body .search-filters .filter-list .filter-text {
      color: #727686;
    }

    .search-body .search-result .result-header {
      margin-bottom: 2rem;
    }

    .search-body .search-result .result-header .records {
      color: #3c4142;
    }

    .search-body .search-result .result-header .result-actions {
      text-align: right;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .search-body .search-result .result-header .result-actions .result-sorting {
      display: flex;
      align-items: center;
    }

    .search-body .search-result .result-header .result-actions .result-sorting span {
      flex-shrink: 0;
      font-size: 0.8125rem;
    }

    .search-body .search-result .result-header .result-actions .result-sorting select {
      color: #68CBD7;
    }

    .search-body .search-result .result-header .result-actions .result-sorting select option {
      color: #3c4142;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
      .search-body .search-filters {
        display: flex;
      }

      .search-body .search-filters .filter-list {
        margin-right: 1rem;
      }
    }

    .card-margin {
      margin-bottom: 1.875rem;
    }

    @media (min-width: 992px) {
      .col-lg-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
      }
    }

    .card-margin {
      margin-bottom: 1.875rem;
    }

    .card {
      border: 0;
      box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #ffffff;
      background-clip: border-box;
      border: 1px solid #e6e4e9;
      border-radius: 8px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 card-margin">
        <div class="card search-form">
          <div class="card-body p-0">
            <form id="search-form">
              <div class="row">
                <div class="col-12">
                  <div class="row no-gutters">
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">

                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                      <input type="text" placeholder="Search..." class="form-control" id="search" name="search">
                    </div>
                    
                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                      <button type="submit" class="btn btn-base">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
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
    <div class="row">
      <div class="col-12">
        <div class="card card-margin">
          <div class="card-body">
            <div class="row search-body">
              <div class="col-lg-12">
                <div class="search-result">
                  <div class="result-header">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="records">Showing: <b>1-20</b> of <b>200</b> result</div>
                      </div>
                      <div class="col-lg-6">
                        <div class="result-actions">
                          <div class="result-sorting">
                            <span>Sort By:</span>
                            <select class="form-control border-0" id="exampleOption">
                              <option value="1">Relevance</option>
                              <option value="2">Names (A-Z)</option>
                              <option value="3">Names (Z-A)</option>
                            </select>
                          </div>
                          <div class="result-views">
                            <button type="button" class="btn btn-soft-base btn-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-list">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3" y2="6"></line>
                                <line x1="3" y1="12" x2="3" y2="12"></line>
                                <line x1="3" y1="18" x2="3" y2="18"></line>
                              </svg>
                            </button>
                            <button type="button" class="btn btn-soft-base btn-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="result-body">
                    <div class="table-responsive">
                      <table class="table widget-26">
                        <tbody>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Senior Software Engineer / Developer</a>
                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span
                                    class="text-muted time">1 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Full-Time</p>
                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 50/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-base">
                                <i class="indicator bg-base"></i>
                                <span>Software Development</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <!--
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Marketing &amp; Communication Supervisor</a>
                                <p class="m-0"><a href="#" class="employer-name">AxiomUI Llc.</a> <span
                                    class="text-muted time">2 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 60/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-warning">
                                <i class="indicator bg-warning"></i>
                                <span>Marketing</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Senior Data Analyst / Scientist</a>
                                <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span
                                    class="text-muted time">4 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 60/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-success">
                                <i class="indicator bg-success"></i>
                                <span>Artificial Intelligence</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">UX Designer &amp; UI Developer</a>
                                <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span
                                    class="text-muted time">5 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">Toronto, CAN</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 35/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-danger">
                                <i class="indicator bg-danger"></i>
                                <span>Design</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Information Security Analyst / Expert</a>
                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span
                                    class="text-muted time">6 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">Mumbai, IN</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 70/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-info">
                                <i class="indicator bg-info"></i>
                                <span>Infra Supervision</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star starred">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Senior Software Engineer / Developer</a>
                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span
                                    class="text-muted time">1 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Full-Time</p>
                                <p class="text-muted m-0">in <span class="location">London, UK</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 50/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-base">
                                <i class="indicator bg-base"></i>
                                <span>Software Development</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Marketing &amp; Communication Supervisor</a>
                                <p class="m-0"><a href="#" class="employer-name">AxiomUI Llc.</a> <span
                                    class="text-muted time">2 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 60/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-warning">
                                <i class="indicator bg-warning"></i>
                                <span>Marketing</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Senior Data Analyst / Scientist</a>
                                <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span
                                    class="text-muted time">4 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">New York, US</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 60/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-success">
                                <i class="indicator bg-success"></i>
                                <span>Artificial Intelligence</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">UX Designer &amp; UI Developer</a>
                                <p class="m-0"><a href="#" class="employer-name">AxiomUI Inc.</a> <span
                                    class="text-muted time">5 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">Toronto, CAN</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 35/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-danger">
                                <i class="indicator bg-danger"></i>
                                <span>Design</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="widget-26-job-emp-img">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Company" />
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-title">
                                <a href="#">Information Security Analyst / Expert</a>
                                <p class="m-0"><a href="#" class="employer-name">Axiom Corp.</a> <span
                                    class="text-muted time">6 days ago</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-info">
                                <p class="type m-0">Part-Time</p>
                                <p class="text-muted m-0">in <span class="location">Mumbai, IN</span></p>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-salary">$ 70/hr</div>
                            </td>
                            <td>
                              <div class="widget-26-job-category bg-soft-info">
                                <i class="indicator bg-info"></i>
                                <span>Infra Supervision</span>
                              </div>
                            </td>
                            <td>
                              <div class="widget-26-job-starred">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-star starred">
                                    <polygon
                                      points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                    </polygon>
                                  </svg>
                                </a>
                              </div>
                            </td>
                          </tr>
                        -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <nav class="d-flex justify-content-center">
              <ul class="pagination pagination-base pagination-boxed pagination-square mb-0">
                <li class="page-item">
                  <a class="page-link no-border" href="#">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link no-border" href="#">1</a></li>
                <li class="page-item"><a class="page-link no-border" href="#">2</a></li>
                <li class="page-item"><a class="page-link no-border" href="#">3</a></li>
                <li class="page-item"><a class="page-link no-border" href="#">4</a></li>
                <li class="page-item">
                  <a class="page-link no-border" href="#">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">

  </script>
</body>

</html>
@extends('layouts.subdashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 position-fixed">
                @include('inc.sidenav')
            </div>
            
            <main class="col-md-9 ms-sm-auto col-lg-7 px-md-4">
                
                <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>
                    <div class="d-flex text-muted pt-3">
                      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                
                      <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@username</strong>
                        Some representative placeholder content, with some information about this user. Imagine this being some sort of status update, perhaps?
                      </p>
                    </div>
                    <div class="d-flex text-muted pt-3">
                      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                
                      <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@username</strong>
                        Some more representative placeholder content, related to this other user. Another status update, perhaps.
                      </p>
                    </div>
                    <div class="d-flex text-muted pt-3">
                      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
                
                      <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@username</strong>
                        This user also gets some representative placeholder content. Maybe they did something interesting, and you really want to highlight this in the recent updates.
                      </p>
                    </div>
                    <small class="d-block text-end mt-3">
                      <a href="#">All updates</a>
                    </small>
                  </div>
                
                  <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
                    <div class="d-flex text-muted pt-3">
                      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                
                      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                          <strong class="text-gray-dark">Full Name</strong>
                          <a href="#">Follow</a>
                        </div>
                        <span class="d-block">@username</span>
                      </div>
                    </div>
                    <div class="d-flex text-muted pt-3">
                      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                
                      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                          <strong class="text-gray-dark">Full Name</strong>
                          <a href="#">Follow</a>
                        </div>
                        <span class="d-block">@username</span>
                      </div>
                    </div>
                    <div class="d-flex text-muted pt-3">
                      <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                
                      <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                          <strong class="text-gray-dark">Full Name</strong>
                          <a href="#">Follow</a>
                        </div>
                        <span class="d-block">@username</span>
                      </div>
                    </div>
                    <small class="d-block text-end mt-3">
                      <a href="#">All suggestions</a>
                    </small>
                  </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Dashboard</h1>
                  <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                      <span data-feather="calendar"></span>
                      This week
                    </button>
                  </div>
                </div>
          
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="card-title">Section title</h2>
                        <div class="table-responsive card-text">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,004</td>
                                <td>text</td>
                                <td>random</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,005</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>1,006</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,007</td>
                                <td>placeholder</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>irrelevant</td>
                            </tr>
                            <tr>
                                <td>1,008</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,009</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,010</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,011</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,012</td>
                                <td>text</td>
                                <td>placeholder</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,013</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>visual</td>
                            </tr>
                            <tr>
                                <td>1,014</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,015</td>
                                <td>random</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>text</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                
                    </div>
                </div>
                
              </main>
             <div class="col-sm-8 col-lg-3 ">
                @include('inc.notifications')
             </div>
            </div>
          </div>
@endsection
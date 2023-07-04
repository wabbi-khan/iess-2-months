@include('main_super_admin.dashboard.include.header')
<style>
    .loader-container {
        display: none;
        justify-content: center;
        align-items: center;
        height: 40vh;
    }

    .loader {
        position: relative;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: #f3f3f3;
        /* Light grey */
    }

    .loader-border {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 16px solid transparent;
        border-top: 16px solid #042954;
        /* Blue */
        border-radius: 50%;
        transform-origin: center;
        animation: spin 2s linear infinite;
    }

    .percentage {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 24px;
        color: #3498db;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<!-- Preloader Start Here -->
<div id="preloader"></div>


<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->

    @include('main_super_admin.dashboard.include.navbar')

    <div class="dashboard-page-one">

        <!-- Sidebar Area Start Here -->

        @include('main_super_admin.dashboard.include.side_bar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">

            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"Campus Name"</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Assignments</li>
                </ul>
            </div>
            <div class="row  d-flex justify-content-end">

                <div class="col-2-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Upload Assignments
                    </button>
                </div>

            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Assignments</h3>
                        </div>

                    </div>
                    <form class="mg-b-20">
                        <div class="row d-flex justify-content-end gutters-8">
                            <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <input type="text" placeholder="Search by..." class="form-control" />
                            </div>

                            <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Subject</th>
                                    <th>Uploaded date</th>
                                    <th>last date</th>
                                    <th>Download Assignment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" />
                                            <label class="form-check-label">#B-2</label>
                                        </div>
                                    </td>
                                    <td>DataStructure</td>
                                    <td>2 june</td>
                                    <td>5 june</td>
                                    <td class="btn btn-warning text-white">PDF</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                @include('main_super_admin.dashboard.include.poweredby')
            </div>
        </div>
    </div>

    <!-- Page Area End Here -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="file" id="fileInput">
                <button onclick="uploadFile()">Upload</button>

                <div class="loader-container" id="loaderContainer">
                    <div class="loader">
                        <div class="loader-border"></div>
                        <div class="percentage" id="loaderPercentage">0%</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function uploadFile() {
        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0];

        if (file) {
            const xhr = new XMLHttpRequest();
            const url = 'YOUR_UPLOAD_URL'; // Replace with your actual upload URL

            // Show the loader
            const loaderContainer = document.getElementById('loaderContainer');
            loaderContainer.style.display = 'flex';

            const loaderBorder = document.querySelector('.loader-border');
            const percentageElement = document.getElementById('loaderPercentage');

            xhr.open('POST', url, true);

            // Progress event listener
            xhr.upload.addEventListener('progress', function(e) {
                const progress = Math.round((e.loaded / e.total) * 100);
                updateLoader(progress);
                updatePercentage(progress);
            });

            // On successful upload
            xhr.addEventListener('load', function() {
                console.log('File uploaded successfully.');

                // Set loader to 100% and hide it
                updateLoader(100);
                loaderContainer.style.display = 'none';
            });

            // On error
            xhr.addEventListener('error', function() {
                console.log('Error occurred while uploading the file.');

                // Hide the loader
                loaderContainer.style.display = 'none';
            });

            xhr.send(file);
        }
    }

    function updateLoader(percentage) {
        const loaderBorder = document.querySelector('.loader-border');
        loaderBorder.style.transform = `rotate(${percentage / 100 * 360}deg)`;
    }

    function updatePercentage(percentage) {
        const percentageElement = document.getElementById('loaderPercentage');
        percentageElement.textContent = percentage + '%';
    }
</script>
@include('main_super_admin.dashboard.include.footer')

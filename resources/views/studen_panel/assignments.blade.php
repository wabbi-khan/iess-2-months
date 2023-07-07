@include('studen_panel.include.header')

<style>
    .progress-container {
        width: 100%;
        height: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #f3f3f3;
        position: relative;
        margin-top: 10px;
    }

    .progress-bar {
        height: 100%;
        background-color: #3498db;
        width: 0;
        transition: width 0.3s ease-in-out;
    }

    .percentage {
        text-align: center;
        margin-top: 4px;
        font-size: 14px;
        color: #333;
    }

    .delete-button {
        margin-top: 10px;
        display: none;
        background-color: rgb(255, 33, 33);
        color: white;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        font-size: 13px;
        cursor: pointer;
    }

    .uploadBtn {
        background-color: #042954;
        color: white;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        font-size: 13px;
        cursor: pointer;
    }
</style>

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('studen_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <h3 class="text-center">"Campus Name"</h3>
            </div>
            <div class="container">

                <div class="row d-flex justify-content-end">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow" data-toggle="modal" data-target="#exampleModalCenter">
                            Upload Assignments
                        </button>
                    </div>

                </div>
            </div>
            <div class="container card height-auto">
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Upload Here </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="width: 100%;display: flex;
                justify-content: space-between;
                ">

                    <input type="file" id="fileInput">
                    <button class="uploadBtn" onclick="uploadFile()">Upload</button>
                </div>

                <div id="uploadContainer" style="display: none;">
                    <div class="progress-container">
                        <div class="progress-bar" id="progressBar"></div>
                    </div>
                    <div class="percentage" id="percentage">0%</div>
                    {{-- <button class="upload-button" onclick="uploadFile()">Upload New File</button> --}}
                    <button class="delete-button" onclick="deleteFile()">Delete File</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    let file = null;
    let xhr = null;

    function uploadFile() {
        const fileInput = document.getElementById('fileInput');
        file = fileInput.files[0];

        if (file) {
            const url = 'YOUR_UPLOAD_URL'; // Replace with your actual upload URL

            const progressBar = document.getElementById('progressBar');
            const percentageElement = document.getElementById('percentage');
            const uploadContainer = document.getElementById('uploadContainer');
            const deleteButton = document.querySelector('.delete-button');

            xhr = new XMLHttpRequest();

            xhr.open('POST', url, true);

            // Progress event listener
            xhr.upload.addEventListener('progress', function(e) {
                if (e.lengthComputable) {
                    const progress = Math.round((e.loaded / e.total) * 100);
                    progressBar.style.width = `${progress}%`;
                    percentageElement.textContent = `${progress}%`;

                    if (progress === 100) {
                        deleteButton.style.display = 'block';
                    }
                }
            });

            // On successful upload
            xhr.addEventListener('load', function() {
                console.log('File uploaded successfully.');
                deleteButton.style.display = 'block';
            });

            // On error
            xhr.addEventListener('error', function() {
                console.log('Error occurred while uploading the file.');
            });

            xhr.send(file);

            uploadContainer.style.display = 'block';
            deleteButton.style.display = 'none';
        }
    }

    function deleteFile() {
        if (xhr) {
            xhr.abort(); // Abort the ongoing file upload request
            xhr = null;
        }

        file = null;

        const uploadContainer = document.getElementById('uploadContainer');
        uploadContainer.style.display = 'none';

        // Reset progress bar
        const progressBar = document.getElementById('progressBar');
        progressBar.style.width = '0';

        // Reset percentage text
        const percentageElement = document.getElementById('percentage');
        percentageElement.textContent = '0%';

        // Reset file input
        const fileInput = document.getElementById('fileInput');
        fileInput.value = '';
    }
</script>
@include('main_super_admin.dashboard.include.footer')
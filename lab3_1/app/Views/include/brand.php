<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Our Brand</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <!-- Add a data attribute with a unique ID -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#brandModal1">
                            <img src="images/1.png" alt="img" />
                        </a>
                        <h3>$<strong class="red">100</strong></h3>
                        <span>Mobile Phone</span>
                    </div>
                </div>
                <!-- Add more brand boxes with unique data-bs-target values -->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Brand Box 1 -->
<div class="modal fade" id="brandModal1" tabindex="-1" aria-labelledby="brandModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="brandModalLabel1">Brand Box 1 Details</h5>
            </div>
            <div class="modal-body">
                <!-- Add content for Brand Box 1 here -->
                <p>Brand Box 1 details go here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add more modals for other brand boxes with unique IDs and content -->

<script>
    var bootstrap = require('bootstrap');
    bootstrap = require('bootstrap/dist/css/bootstrap.css');
</script>

<script>
    // jQuery code to show the modal when a brand box is clicked
    $(document).ready(function () {
        // Add a click event listener to each brand box
        $('.brand_box a').on('click', function (e) {
            e.preventDefault();
            // Get the target modal ID from the data-bs-target attribute
            var targetModalId = $(this).data('bs-target');
            // Show the modal with the corresponding ID
            $(targetModalId).modal('show');
        });
    });
  
</script>

<script>
    // jQuery code to close the modal when the close button is clicked
    $(document).ready(function () {
        // Add a click event listener to the close button
        $('.modal .btn-secondary').on('click', function (e) {
            e.preventDefault();
            // Hide the modal by selecting its parent with class "modal"
            $(this).closest('.modal').modal('hide');
        });
    });
</script>


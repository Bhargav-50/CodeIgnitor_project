  <!-- main content start -->
  <div class="main-content">

<!-- content -->
<div class="container-fluid content-top-gap">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </nav>
  <div class="welcome-msg pt-3 pb-4">
    <h1>Hi <span class="text-primary">, Welcome back</h1>
    <p>Very detailed & featured admin.</p>
  </div>

  <!-- statistics data -->
  <div class="statistics">
    <div class="row">
      <div class="col-xl-6 pr-xl-2">
        <div class="row">
          <div class="col-sm-6 pr-sm-2 statistics-grid">
            <div class="card card_border border-primary-top p-4">
              <i class="lnr lnr-users"> </i>
              <h3 class="text-primary number"><?php  echo count($AllUsers); ?></h3>
              <p class="stat-text">Total Users</p>
            </div>
          </div>
          <div class="col-sm-6 pl-sm-2 statistics-grid">
            <div class="card card_border border-primary-top p-4">
              <i class="lnr lnr-eye"> </i>
              <h3 class="text-secondary number">51.25 K</h3>
              <p class="stat-text">Daily Visitors</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 pl-xl-2">
        <div class="row">
          <div class="col-sm-6 pr-sm-2 statistics-grid">
            <div class="card card_border border-primary-top p-4">
              <i class="lnr lnr-cloud-download"> </i>
              <h3 class="text-success number">166.89 M</h3>
              <p class="stat-text">Downloads</p>
            </div>
          </div>
          <div class="col-sm-6 pl-sm-2 statistics-grid">
            <div class="card card_border border-primary-top p-4">
              <i class="lnr lnr-cart"> </i>
              <h3 class="text-danger number">1,250k</h3>
              <p class="stat-text">Purchased</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //statistics data -->







  <!-- modals -->
  <section class="template-cards">
    <div class="card card_border">
      <div class="cards__heading">
        <h3>Modals - <span>2 different types of bootstrap modals</span></h3>
      </div>
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-lg-6 pr-lg-2 chart-grid">
            <div class="card text-center card_border">
              <div class="card-header chart-grid__header">
                Demo modal
              </div>
              <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                  data-target="#exampleModal">
                  Launch demo
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 chart-grid">
            <div class="card text-center card_border">
              <div class="card-header chart-grid__header">
                Vertical centered
              </div>
              <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-style" data-toggle="modal"
                  data-target="#exampleModalCenter">
                  Launch demo
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //modals -->

</div>
<!-- //content -->
</div>
<!-- main content end-->
</section>
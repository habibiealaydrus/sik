<div class="row" style="margin-top: 5%;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laporan Statistik</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Keseluruhan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan Farmasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Laporan LB/R</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">LB1/R1</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">LB2/R2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">LB3/R3</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">LB4/R4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Rawat Inap</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari Data" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
          </div>
    </nav>
    <div>
        <div class="row">
            <div class="col-sm-6 stastistik" id="piechart_3d"></div>
            <div class="col-sm-6 stastistik" id="regions_div" ></div>
        </div>
        <div class="row">
            <div class="col-sm-6 stastistik" id="barchart_material"></div>
            <div class="col-sm-6 stastistik"id="chart_div"></div>
        </div>
      </div>
      <!--Content End-->
    </div>
</div>
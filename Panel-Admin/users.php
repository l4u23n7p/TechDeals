<?php include_once "header_dashboard.php"; ?>
<?php include_once "nav_dashboard.php"; ?>
<?php $fct_user->actionUser(); ?>
<div class="content-wrapper">
    <div class="container-fluid">
		<?php Util::get_breadcrumb(); ?>
	    <?php
	    if (Session::getInstance()->hasFlashes()) {
		    foreach (Session::getInstance()->getFlashes() as $key => $values): ?>
                <div class="ui <?php echo $key; ?> message">
                    <i class="close icon"></i>
                    <div class="header">
					    <?php echo $key; ?> !
                    </div>
                    <ul class="list">
					    <?php foreach ($values as $value) : ?>
                            <li><?php echo $value; ?></li>
					    <?php endforeach; ?>
                    </ul>
                </div>
		    <?php endforeach;
	    } ?>

        <!--User DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Utilisateurs
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID_USER</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>NOM D'UTILISATEUR</th>
                            <th>EMAIL</th>
                            <th>IMG_PROFILE</th>
                            <th>CREE LE</th>
                            <th>DERNIERE CONNEXION</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID_USER</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>NOM D'UTILISATEUR</th>
                            <th>EMAIL</th>
                            <th>IMG_PROFILE</th>
                            <th>CREE LE</th>
                            <th>DERNIERE CONNEXION</th>
                            <th>STATUS</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $fct_user->getUsers(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated <?php echo date("d/m/Y H:i:s")?></div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2017</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>

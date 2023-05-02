<!DOCTYPE html>
<?php
    require_once 'conn.php';
?>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.1/examples/carousel/# -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IESTP &#8211; Ricardo Ramos Plata &#8211; Sechura &#8211;</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    </link>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">BOLSA TRABAJO RRP- DOCENTE</a>
                    <a href="https://www.freecodecamp.org/"> <button class="btn btn-primary me-md-2" type="button">Exportar a Excel</button> </a>
                    <a href="../../index.html"> <button class="btn btn-primary" type="button">Salir</button> </a>
                </li>
            </ul>
        </nav>
    </header>
    <main role="main" class="container">
        <h1 class="mt-5">Sticky footer with fixed navbar</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Cod.</th>
                                <th>Empresa</th>
                                <th>Oferta Laboral</th>
                                <th>Descripción</th>
                                <th>Detalles</th>
                                <th>Programa</th>
                                <th>Fecha Fin</th>
                                <th>Enlace</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM `almacenamiento`") or die(mysqli_error());
                            while ($fetch = mysqli_fetch_array($query)) {
                            ?>
                                <tr class="del_student<?php echo $fetch['id_convocatoria'] ?>">
                                    <td><?php echo $fetch['id_convocatoria'] ?></td>
                                    <td><?php echo $fetch['nombreempresa'] ?></td>

                                    <td><?php echo $fetch['nombreconvocatoria'] ?></td>
                                    <td><?php echo $fetch['descripcion'] ?></td>

                                    <td>
                                        <p>
                                            <FONT COLOR="navy">Sueldo: </FONT><?php echo $fetch['remuneracion'] ?>
                                        </p>
                                        <p>
                                            <FONT COLOR="navy">Horario:</FONT><?php echo $fetch['horario'] ?>
                                        </p>
                                        <p>
                                            <FONT COLOR="navy">Vacantes: </FONT><?php echo $fetch['numero_vacantes'] ?>
                                        </p>
                                        <p>
                                            <FONT COLOR="navy">Caducidad: </FONT><?php echo $fetch['caducidad'] ?>
                                        </p>
                                    </td>
                                    <td><?php echo $fetch['programa'] ?></td>

                                    <td><?php echo $fetch['fecha_limite'] ?></td>

                                    <td><?php echo $fetch['enlace'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--<div class="modal fade" id="edit_modal<?php echo $fetch['id_convocatoria'] ?>" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="actualizar_convocatoria.php">	
					<div class="modal-header">
						<h4 class="modal-title">Actualizar Convocatoria</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>ID Convocatoria</label>
								<input type="number" name="id_convocatoriaC" value="<?php echo $fetch['id_convocatoria'] ?>" class="form-control" required="required"/>
							</div>
							
							<div class="form-group">
								<label>Nombre Empresa</label>
								<input type="text" name="nombreempresaC" value="<?php echo $fetch['nombreempresa'] ?>" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Responsable Area</label>
								<input type="text" name="responsable_areaC" value="<?php echo $fetch['responsable_area'] ?>" class="form-control" required="required"/>
							</div>

							<div class="form-group">
								<label>Nombre convocatoria</label>
								<input type="text" name="nombreconvocatoriaC" value="<?php echo $fetch['nombreconvocatoria'] ?>" class="form-control" required="required"/>
							</div>

							<div class="form-group">
							<label>Descripcion</label>
								<input type="text" name="descripcionC" value="<?php echo $fetch['descripcion'] ?>" class="form-control" required="required"/>
							</div>

							<div class="form-group">
								<label>Vacantes</label>
								<input type="text" name="numero_vacantesC" value="<?php echo $fetch['numero_vacantes'] ?>" class="form-control" required="required"/>
							</div>
							
			<div class="form-group">
								<label>Programa</label>
								<select name="programaCS" class="form-control" required="required">
									<option value=""></option>
									<option value="Arquitectura">Arquitectura de Plataforams y Servicios de TI</option>
									<option value="Farmacia">Farmacia Técnica</option>
									<option value="Enfermeria">Enfermería Técnica</option>
									<option value="Pesqueria">Tecnología Pesquera</option>
									<option value="Pesquero">Desarrollo Pesquero</option>
								</select>
							</div>
							
							<div class="form-group">
								<label>Fecha de Convocatoria</label>
									<input type="date" name="fecha_subidaC" value="<?php echo $fetch['fecha_subida'] ?>" class="form-control" required="required"/>
							</div>


<div class="form-group">
								<label>Fecha Limite de Convocatoria</label>
								<input type="date" name="fecha_limiteC" value="<?php echo $fetch['fecha_limite'] ?>" class="form-control" required="required"/>


							</div>
<div class="form-group">
								<label>Caducidad</label>
								<select name="estadoC" class="form-control" placeholder="Estado SI/NO" required="required">
									<option value=""></option>
									<option value="APTO">APTO</option>
									<option value="NO APTO">NO APTO</option>
				
								</select>
								
							</div>


							<div class="form-group">
								<label>Postulará Si/NO </label>
								<select name="estadoC" class="form-control" placeholder="Estado SI/NO" required="required">
									<option value=""></option>
									<option value="SI">SI</option>
									<option value="NO">NO</option>
				
								</select>
								
							</div>

	<div class="form-group">
								<label>Enlace</label>
								<input type="text" name="enlaceCS" class="form-control" required="required"/>
							</div>

						
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
						<button name="update" class="btn btn-warning" ><span class="glyphicon glyphicon-save"></span> Actualizar</button>
						</div>
								</form>
							</div>
						</div>
					</div>-->

        <!--<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Sistema</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">¿Está seguro de que desea eliminar estos datos?</h4></center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-success" id="btn_yes">Continuar</button>
				</div>
			</div>
		</div>
	</div>




	<div class="modal fade" id="form_modal" aria-hin="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="agregar_convocatoria.php">	
					<div class="modal-header">
						<h4 class="modal-title">Agregar Convocatoria</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>ID Convocatoria</label>
								<input type="number" name="id_convocatoriaCS" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Empresa</label>
								<input type="text" name="nombreempresaCS" class="form-control" required="required"/>
							</div>

							<div class="form-group">
								<label>Área Responsable</label>
								<input type="text" name="responsable_areaCS" class="form-control" required="required"/>
							</div>

							<div class="form-group">
								<label>Nombre Convocatoria</label>
								<input type="text" name="nombreconvocatoriaCS" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Descripción</label>
								<input type="text" name="descripcionCS" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Vacantes</label>
								<input type="text" name="numero_vacantesCS" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Programa</label>
								<select name="programaCS" class="form-control" required="required">
									<option value=""></option>
									<option value="Arquitectura">Arquitectura de Plataforams y Servicios de TI</option>
									<option value="Farmacia">Farmacia Técnica</option>
									<option value="Enfermeria">Enfermería Técnica</option>
									<option value="Pesqueria">Tecnología Pesquera</option>
									<option value="Pesquero">Desarrollo Pesquero</option>
								</select>
							</div>
							
							<div class="form-group">
								<label>Fecha de Convocatoria</label>
								<input type="date" name="fecha_subidaCS" class="form-control" required="required"/>
							</div>
							
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
						<button name="save" class="btn btn-success" ><span class="glyphicon glyphicon-save"></span> Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
                -->

        <div id="footer">
            <label class="footer-title">&copy; Todos los derechos reservados © 2023 IESTP - Ricardo Ramos Plata - Sechura ---
                <?php echo date("D", strtotime("+8 HOURS")) ?>/
                <?php echo date("M", strtotime("+8 HOURS")) ?>/
                <?php echo date("Y", strtotime("+8 HOURS")) ?>
            </label>
        </div>
        
        <?php include 'script.php' ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.btn-delete').on('click', function() {
                    var user_id = $(this).attr('id');
                    $("#modal_confirm").modal('show');
                    $('#btn_yes').attr('name', user_id);
                });
                $('#btn_yes').on('click', function() {
                    var id = $(this).attr('name');
                    $.ajax({
                        type: "POST",
                        url: "eliminar_convocatoria.php",
                        data: {
                            user_id: id
                        },
                        success: function() {
                            $("#modal_confirm").modal('hide');
                            $(".del_conv" + id).empty();
                            $(".del_conv" + id).html("<td colspan='1'><center class='text-danger'>Eliminado...</center></td>");
                            setTimeout(function() {
                                $(".del_conv" + id).fadeOut('slow');
                            }, 1000);
                        }
                    });
                });
            });
        </script>

        <!-- FOOTER -->
        <footer class="container">

            <p>© Bolsa 2023 </p>
        </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Carousel Template for Bootstrap_files/jquery-3.3.1.slim.min.js.descargar" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="./Carousel Template for Bootstrap_files/popper.min.js.descargar"></script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js.descargar"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Carousel Template for Bootstrap_files/holder.min.js.descargar"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];

                        $('row c[r^="C"]', sheet).attr('s', '2');
                    }
                }]
            });
        });
    </script>
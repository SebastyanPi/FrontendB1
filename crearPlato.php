<?php include('layout/start.php') ?>

<!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <div>
                                    <h2 class="title-1">Crear Plato</h2>
                                    <b><small>Comedor Universitario</small></b>

                                    <br>
                                    <br>
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#mediumModal" >
                                                <i class="fa fa-plus"></i>&nbsp; Añadir</button>
                                </div>
                            </div>
                        </div>

                        <div class="m-t-25">
                        <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th class="text-center">Cantidad</th>
                                                <th class="text-center">Precio</th>
                                                <th class="text-center">Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody id="filltable">
                                            
                                        </tbody>
                                    </table>
                                </div>      
                        </div>
                    
                    </div>
                </div>

                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Aregar Plato</h5>
							<button type="button" class="close" data-dismiss="modal" id="closeModal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="card">
                                <img class="card-img-top" src="images/comida2.png" alt="Card image cap">
                                <div class="card-body card-block">
                                    <form id="formFood" method="post" enctype="multipart/form-data" class="">
                                                    
                                    <div class="form-group">
                                                    <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa  fa-book"></i>
                                                            </div>
                                                            <input type="text" id="name" name="name" placeholder="Nombre Plato" class="form-control">
                                                        </div>
                                                        <small class="text-danger d-none" id="name_alert"><i class="fa fa-warning"></i> El Nombre está vacio.</small>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa  fa-th"></i>
                                                            </div>
                                                            <input type="text"  id="description" name="description" placeholder="Descripción" class="form-control">
                                                        </div>
                                                        <small class="text-danger d-none" id="description_alert"><i class="fa fa-warning"></i> La Descripcion está vacia.</small>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-sort"></i>
                                                            </div>
                                                            <input type="number" id="count" name="count" placeholder="Cantidad" class="form-control">
                                                        </div>
                                                        <small class="text-danger d-none" id="count_alert"><i class="fa fa-warning"></i> La cantidad es 0.</small>
                                                    </div>



                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-usd"></i>
                                                            </div>
                                                            <input type="number" id="price" name="price" placeholder="Precio" class="form-control">
                                                        </div>
                                                        <small class="text-danger d-none" id="price_alert"><i class="fa fa-warning"></i> Digita el Precio.</small>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-bars"></i>
                                                            </div>
                                                            <select name="select" id="typefood" name="type" class="form-control">
                                                                <option value="desayuno">Desayuno</option>
                                                                <option value="almuerzo">Almuerzo</option>
                                                                <option value="cena">Cena</option>
                                                            </select>
                                                        </div>
                                                        
                                                    </div>

                                                    <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['SESSION_USER_TOKEN'] ?>">

                                                    
                                                <!---
                                                    <div class="row form-group">
                                                        <div class="col-12 col-md-9">
                                                            <input type="file" id="featured" name="featured" class="form-control-file">
                                                        </div>
                                                    </div>
                                                    <small class="text-danger d-none" id="file_alert"><i class="fa fa-warning"></i>Es obligatorio subir una imagen.</small>-->

                                                    <div class="form-actions form-group">
                                                        <button type="submit" class="btn btn-success btn-sm">Agregar</button>
                                                    </div>
                                                </form>
                                    </div>
                                                 
                            </div>
						</div>
					</div>
				</div>
			</div>

			</div>
        </div>
</div>





<?php include('layout/end.php') ?>
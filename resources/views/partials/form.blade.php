         				  <!-- Form -->

                            <h3 class="my-5">{{ $modo == 'crear' ? 'Agregar Producto' : 'Modificar producto' }}</h3>
						    <div class="form-row">
                                <div class="form-group col-md-6">               
                                    <label for="inputEmail4">Modelo</label>
                                    <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" 
                                        value="{{ isset($producto->modelo) ? $producto->modelo : old('modelo')  }}">
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('modelo') : $errors->first('modelo') }}</p>
                                </div>
                              
                                <div class="form-group col-md-6">                         
                                    <label for="inputPassword4">Marca</label>
                                    <select class="custom-select m-0"  name="marca">
                                        <option value="">Seleccionar</option>
                                        <option value="1">Samsung</option>
                                        <option value="2">Motorola</option>
                                        <option value="3" >Huawei</option>
                                        <option value="4" >Xaomi</option>
                                        <option value="5" >Oppo</option>
                                        <option value="6" >LG</option>
                                        <option value="7" >Sony</option>
                                        <option value="8" >Alcatel</option>
                                        <option value="9" >Apple</option>
                                        <option value="10">nokia</option>
                                        <option value="11">lenovo</option>
                                    </select>
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('marca') : $errors->first('marca') }}</p> 
                                </div>
						    </div>
						    <div class="form-row">
							    <div class="form-group col-md-6">
                                    <label for="inputEmail4">Categoria</label>
                                    <select class="custom-select m-0" name="categoria">
                                    <option value="">Seleccionar</option>
                                    <option value="1"  {{ (isset($producto->categoria->nombre) && $producto->categoria->nombre == 'celular')  ? 'selected' : '' }}>Celular</option>
                                    <option value="2" {{ (isset($producto->categoria->nombre) && $producto->categoria->nombre == 'tablet') ? 'selected' : '' }}>Tablet</option>	
                                    </select>
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('categoria') : $errors->first('categoria') }}</p> 
							    </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Precio</label>
                                    <input type="text" name="precio" class="form-control" id="inputPassword4" placeholder="Precio" 
                                        value="{{ isset($producto->precio) ? $producto->precio : old('oferta')  }}">
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('precio') : $errors->first('precio') }}</p> 
                                </div>
							</div>
							<div class="form-row">
                                <div class="form-group col-md-6"> 
                                    <label for="inputEmail4">Oferta</label>
                                    <input type="number" name="oferta" class="form-control" id="inputEmail4" placeholder="Oferta" 
                                        value="{{ isset($producto->oferta) ? $producto->oferta : old('oferta') }}">
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('oferta') : $errors->first('oferta') }}</p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Cantidad</label>
                                    <input type="text" name="cantidad" class="form-control" id="inputEmail4" placeholder="Cantidad" 
                                        value="{{ isset($producto->cantidad) ? $producto->cantidad : old('cantidad')  }}">
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('cantidad') : $errors->first('cantidad') }}</p> 
                                </div>
							</div>
						    <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Imagen frontal</label>
                                    <input type="file" name="imagen_frontal" class="form-control-file" id="exampleFormControlFile1" 
                                            value="{{ isset($producto->imagenes) ? $producto->imagen : old('imagen_frontal')}}">
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('imagen_frontal') : $errors->first('imagen_frontal') }}</p> 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Imagenes secundarias</label>
                                    <input type="text" name="imagenes_secundarias" class="form-control" id="inputPassword4" placeholder="Ejemplo: ['img-1.jpg','img-2.jpg','img-3.jpg']" 
                                        value="{{ isset($producto->imagenes) ? $producto->imagenes : old('imagenes_secundarias') }}">
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('imagenes_secundarias') : $errors->first('imagenes_secundarias') }}</p> 
                                </div>
						    </div> 
						    <div class="form-row">				  
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Descripcion</label>
                                    <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                                    <p class="text-danger error-msj">{{ $modo == 'crear' ? $errors->first('descripcion') : $errors->first('descripcion') }}</p> 
                                </div>
							</div>
									  
						    <div class="botones">
								<button type="submit" class="btn-agregar">{{ $modo == 'crear' ? 'Agregar Producto' : 'Modificar producto' }}</button>
							</div>				  
		
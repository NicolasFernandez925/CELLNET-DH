@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
@endsection

@section('nav')
     @include('partials.nav_general')
@endsection

@section('content')
    <div class="container contenedor-faq">
        <div class="menu-pan mb-5">
            <a href="{{route('index')}}">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator mr-1 ml-1"></i>
            <span>FAQ</span>				
        </div>
        <h3 class="title-faq ">Preguntas frecuentes</h3>
        <div class="row pt-3">       
                <div class="col-12 col-md-4 ">                  
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Compras
                          </button>
                        </h2>
                    </div>
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Retiros y envíos
                          </button>
                        </h2>
                    </div>
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Garantías y servicio técnico 
                          </button>
                        </h2>
                    </div>  
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Pagos y facturación
                          </button>
                        </h2>
                    </div>
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Cambios y devoluciones
                          </button>
                        </h2>
                    </div>
                </div>
                <div class="col-12 col-md-8 contenedor-respuestas">
                    <div class="accordion" id="accordionExample">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="contenedor-acordion card-header">
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body" id="child2">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneC">¿Puedo hacer una compra con dos medios de pago?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneC"> <br>Garbarino.com te permite pagar con sólo uno de los medios de pago habilitados. Si tu idea es combinar dos medios de pago o abonar con dos tarjetas de crédito, podrás hacer la compra a través de Venta Telefónica al 0810-888-7110 o acercándote a cualquiera de nuestras sucursales.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneD">Quiero consultar stock</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneD">Siempre que un producto    esté disponible en la web, significa que tiene stock para su compra online.<br><br>
                                                Si querés conocer su disponibilidad en una sucursal en particular, elegí la opción de ‘Retiro en Sucursal’ y si figura la leyenda “INMEDIATO: Disponible ahora en esta sucursal”, significa que podrás comprarlo online y retirarlo ese mismo día en la sucursal deseada o acercarte a la misma para comprarlo y obtenerlo personalmente.<br><br>                       
                                                Si tenés más dudas sobre la disponibilidad de un producto chateá con nosotros o comunicate al 0810-444-0018 opción 3.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneE">¿Qué medios de pago aceptan los productos de Garbarino Market?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneE">Para visualizar los medios de pagos ingresá a la ficha del producto que quieras comprar y podrás verlos en el lateral derecho debajo del precio. ¡No te olvides de hacer click en ‘Mirá todas las promociones’ para no perderte ni una!
                                            <br><br>   
                                            Recordá que en los productos de Garbarino Market no aplican los cupones de descuento ni órdenes de compra, tampoco se aceptan medios de pagos diferidos. Si deseás pagar en efectivo podrás hacerlo en nuestras sucursales.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneF">¿Cómo comprar en CellNet.com?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneF">Para realizar la compra desde CellNet.com deberás seguir los siguientes pasos:
                                                <br> <br>
                                            2. Una vez que llegues al carrito de compras podrás: aplicar un cupón de descuento y extender, con un costo adicional, la garantía de reparación. Luego, hace click en 'Continuar'.
                                            3. Ahora tendrás que seleccionar la opción de retiro o envío de tu compra, para eso, primero 
                                            <br> <br>deberás ingresar tu barrio, ciudad o localidad y luego elegir entre estas dos opciones. ¡Si elegís envío a domicilio deberás cargar los datos del domicilio donde te enviaremos la compra!
                                            <br> <br>
                                            4. Para finalizar, elegí el medio de pago y la financiación, en caso de que corresponda, y completá los datos del titular del medio de pago y el domicilio de facturación. ¡Eso es todo!.
                                            <br> <br>
                                            Recordá que en caso de haber optado por 'Retiro en Sucursal' con fecha diferida, deberás esperar el e-mail que confirma que tu producto ya está disponible para que lo retires.
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneG">¿Cómo puedo editar mis datos personales y cambiar mi contraseña?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneG">Una vez que iniciaste sesión en Mi Cuenta ingresá a la sección ‘Mis Datos’ y desde allí podrás editar tus datos personales y generar una nueva contraseña para tu cuenta.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneH">Olvidé mi contraseña, ¿qué hago?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneH">Para recuperar tu contraseña hacé click en el siguiente link y seguí los pasos indicados.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneI">¿Qué debo hacer si no me llegó el e-mail de confirmación de compra?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneI">Te recomendamos que revises tu casilla de correo no deseado.
                                            En caso de no haber recibido el e-mail contactanos a través de nuestro Chat o comunicate con nosotros al 0810-444-0018 opción 5.</div>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="contenedor-acordion card-header">
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body" id="child2">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneC">Quiero autorizar a una persona para recibir el envío</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneC"> <br>¿Se te hace imposible estar presente para recibir la compra? ¡No te preocupes! Ahora en CellNet.com al seleccionar ‘Envío a Domicilio' tendrás la posibilidad de agregar los datos de la persona que deseás autorizar para recibir el producto. <br><br>En el caso de que ya hayas realizado la compra podrás igualmente autorizar a otra persona para recibir el envío sólo 48 horas antes de la fecha de entrega pactada y completando el siguiente formulario. <br><br><strong> IMPORTANTE</strong>: Los campos 'Nombre', 'Apellido' y 'DNI o CUIT', tendrás que completarlos con los datos del titular de la compra y en el campo 'Consulta' deberás ingresar el nombre, apellido y DNI de la persona a la que querés autorizar a recibir el envío.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneD">Producto con faltantes</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneD">Si tu producto no cuenta con todo lo indicado por favor envianos un email y te contactaremos para ayudarte o bien comunicate con nosotros al 0810-444-0018 opción 9.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneE">Consultar si ya puedo retirar en sucursal</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneE"> <br>Cuando finalices la compra, recibirás un e-mail de confirmación con la fecha de retiro que seleccionaste. Para poder retirar tu pedido deberás esperar un segundo e-mail con el título “Tu pedido ya está listo en la sucursal” que te habilita a retirarlo. <br><br>En caso de no recibir el e-mail anterior, revisá si te llegó uno con el título “Aviso de posible demora” notificándote que el producto posiblemente no llegue en el día seleccionado. <br><br>Si llegado el día y horario de entrega aún no recibiste alguno de los e-mails mencionados, comunicate con nosotros al 0810-444-0018 para que podamos ayudarte.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneF">Requisitos para retiro en sucursal</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneF">Una vez que recibas el e-mail de confirmación de que el producto ya se encuentra disponible para ser retirado tenés tiempo hasta 10 días corridos para retirarlo. Deberás presentarte con:
                                                <br> <br>
                                                - Número de pedido de la compra.
                                                <br> <br>
                                                - Tarjeta de crédito con la que se realizó la compra.
                                                <br> <br>
                                                - DNI del Titular de la tarjeta de crédito. Tené en cuenta que tiene que ser el físico y original, ya que no se admiten fotos ni fotocopias.
                                                <br> <br>
                                              <strong> IMPORTANTE</strong> : ¡Tené en cuenta que a la hora de retirar un producto en sucursal no podrás autorizar a otra persona y sólo podrá hacerlo el titular de la tarjeta de crédito con la que se pagó la compra!</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneG">¿Qué incluye el envío a domicilio?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneG">Incluye: el traslado del producto hasta el domicilio informado al momento de la compra, la ubicación del producto en el lugar indicado por el receptor, dentro del domicilio, cuando las instalaciones lo permitan. En caso de necesitar ascenso por escaleras, se debe informar por chat luego de finalizada la compra</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneH">Inconvenientes con la entrega</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneH"><br> <br>-En el caso que no podamos concretar la entrega te contactaremos para pactar una nueva visita.
                                                <br> <br>
                                                - Recordá que si el producto no se encuentra en condiciones o no cumple con tus expectativas podés rechazarlo en el momento de la entrega. 
                                                <br> <br>En este caso deberás firmar el remito indicando los motivos del rechazo y luego te contactaremos para coordinar una nueva entrega.
                                                <br> <br>
                                                Si el inconveniente es otro o aún te quedan dudas podés contactarnos a través de nuestro Chat o comunicarte al 0810-444-0018 opción 1.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneI">Compré un producto en CellNet y no lo recibí, ¿qué hago?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneI">Si no recibiste tu producto en la fecha pactada envianos un email y te contactaremos en las próximas 48 horas para reprogramar el envío.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneJ">Pedido incompleto</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneJ">Si compraste más de un producto y el pedido no llegó completo a tu domicilio completá el siguiente formulario y te contactaremos para ayudarte.</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="contenedor-acordion card-header">
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body" id="child3">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneC">¿Qué es la garantía de reparación?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child3" id="collapseOneC">Consiste en extender los efectos de la garantía original del fabricante, en virtud del plan contratado, asegurando las reparaciones del producto y sus gastos asociados.
                                                <br><br>
                                                <strong>¿Por qué me conviene contratar una garantía de reparación?</strong> 
                                                <br><br>
                                                Porque protejo mi inversión hasta 4 años más, luego de finalizada la garantía del fabricante, ya que:
                                                <br><br>
                                                • Reparamos tu producto a través de una red de servicio especializado sin costo adicional.
                                                • Te reintegramos el 80% del valor del producto a nuevo en plaza, si la reparación no es posible.
                                                • Incluye mano de obra y repuestos nuevos y originales.
                                                • Además, podrás acceder a este beneficio abonando en cuotas.
                                                <br><br>
                                                <strong>¿Cómo puedo adquirirla?</strong>  
                                                <br><br>
                                                Al iniciar el proceso de compra de un producto se mostrarán las distintas opciones de Garantías que Garbarino te ofrece para extender la garantía original del fabricante. Podrán contratar la garantía hasta 90 días antes de finalizada la garantía de fábrica.
                                                <br><br>
                                                <strong>¿Cuándo entra en vigencia?</strong> 
                                                <br><br>
                                                Una vez finalizada la garantía de fábrica entran en vigencia los efectos de la cobertura de la garantía de reparación. Esto es así, porque durante el período de garantía de fábrica, el único que puede y está autorizado a intervenir el producto es el fabricante y/o el Service Oficial.
                                                <br><br>
                                                <strong>¿Qué cubre?</strong>  
                                                <br><br>
                                                • Lo mismo que la garantía original de fábrica, sin límites de reparaciones.
                                                • El 100% del valor de la mano de obra y los prepuestos necesarios para reparar el producto.
                                                • El servicio a domicilio para productos de difícil transporte.
                                                • Indemnización del 80% del valor de reposición, en el caso de no poder repararlo.
                                                <br><br>
                                                <strong>¿Qué no cubre?</strong>  
                                                <br><br>
                                                • Aquellos productos utilizados con fines comerciales, dicho uso será determinado en función del desgaste que el mismo presente en relación a su antigüedad.
                                                • Detalles estéticos, pintura y corrosión.
                                                • Daños por accidente, mal uso, negligencia o cualquier daño provocado por un factor externo al equipo.
                                                • Gastos de mantenimiento.
                                                • Fallas pre existentes ocurridas durante el período de garantía de fábrica.</div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div> 
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="contenedor-acordion card-header">
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body" id="child2">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneC">Quiero anular una compra realizada en CellNet </a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneC">Si compraste por error dos veces el mismo producto o todavía no lo recibiste, podés solicitar la anulación de tu compra completando el siguiente formulario que te enviaremos por mail. ¡Tené en cuenta que este trámite puede demorar hasta 72 horas!</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneD">Quiero informar un error en el cobro de mi compra</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneD">Envianos un email informando el error en el cobro de tu compra y te estaremos contactando para ayudarte.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneE">Quiero anular una compra realizada</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneE"> Envianos un email y nos pondremos en contacto con vos para realizar el proceso de anulación.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneF">Quiero solicitar mi factura de compra en Garbarino Market</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneF">Si no recibiste tu factura, si la recibiste con datos erróneos o el proveedor te envió una factura de otro cliente, completá el siguiente formulario para que podamos solucionar el inconveniente. Recorda que podes descargar la factura en la seccion de Mi Cuenta.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneG">¿Cómo es el proceso de facturación en CellNet?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneG">Una vez que compraste un producto de CellNet recibirás la factura, la cual será emitida por el proveedor. En caso de que compres con financiación o envío a domicilio recibirás una factura aparte, emitida por CellNet, donde verás reflejado el costo de la financiación e intereses.
                                            <br><br>
                                         <strong>IMPORTANTE</strong> : en la factura que recibís  de parte del proveedor no se verá reflejada la financiación, ya que es otorgada por CellNet. ¡Para tu tranquilidad, podrás visualizar igualmente la financiación elegida en el e-mail de confirmación de compra!</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneH">Devoluciones en tarjetas de crédito y débito</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneH">Si solicitaste la devolución de un producto, tené en cuenta que los tiempos de acreditación pueden demorar entre 72 hs hábiles hasta 10 días corridos, dependiendo la tarjeta que hayas utilizado y contemplando el cierre de tu resumen de cuenta. La devolución en tu resumen aparecerá con el importe en negativo y en la misma cantidad de cuotas en la que realizaste la compra, es decir, si compraste en 12 cuotas la devolución será en 12 cuotas</div>
                                        </div>
                                    </div>                              
                                </div>
                            </div>
                        </div> 
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="contenedor-acordion card-header">
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body" id="child2">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneC">¿Todos los productos tienen devolución?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneC">Debido a la naturaleza de algunos artículos, no se aceptan devoluciones en:
                                                <br><br>
                                                • Licencias o productos virtuales.
                                                <br><br>
                                                • Productos de la categoría “Alimentos y Bebidas”.
                                                <br><br>
                                                • Productos considerados frágiles (artículos de vidrio, espejos y vajillas, entre otros).
                                                <br><br>
                                                • Productos de perfumería y uso personal (depiladoras, afeitadoras, etc).
                                                <br><br>
                                                • Productos que requieren instalación y ya han sido instalados para su uso (estufas, aires acondicionados, etc).
                                                <br><br>
                                                Al momento de recibir el producto tenés que chequear el estado del mismo, ya que, una vez firmado el remito en conformidad se considerará la entrega en buen estado.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneD">Solicitar un cambio de producto</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneD">Envianos un email Para solicitar un cambio de producto. Tené en cuenta que los cambios se encuentran sujetos a disponibilidad de stock y que para realizarlo será necesario que el producto esté en el mismo estado que se entregó: embalaje en perfectas condiciones, con accesorios y manuales completos.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneE">Quiero anular una compra realizada</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneE"> Envianos un email y nos pondremos en contacto con vos para realizar el proceso de anulación.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneF">Los cambios y devoluciones, ¿tienen algún costo adicional?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneF">Los cambios y/o devoluciones no tienen costo. En el caso de un cambio por un producto de mayor valor, se cobrará la diferencia.
                                            <br><br>
                                            Si tu producto es de Garbarino Market, y el cambio es por talle o color, tené en cuenta que el producto podrá tener un mayor valor, por lo que en estos casos se te cobrará la diferencia.</div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapseOneG">¿Existe un tiempo máximo para solicitar un cambio o devolución?</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child2" id="collapseOneG">Una vez transcurridos los 10 días de haber recibido tu pedido, debés contactarte con la garantía del mismo para efectuar la reparación o cambio del producto.</div>
                                        </div>
                                    </div>                              
                                </div>
                            </div>
                        </div> 
                    </div>      
                </div>      
            </div>
        </div>

        <a class="ir-arriba" >
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
            </span>
        </a>
@endsection

@section('footer')
	@include('partials.footer')
@endsection


@section('script')
	@include('partials.script');
	<script src="{{asset('js/custom.js')}}"></script>
@endsection
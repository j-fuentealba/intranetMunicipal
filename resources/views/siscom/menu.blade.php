<!--
/*
 *  JFuentealba @itux
 *  created at September 10, 2019 - 11:23 am
 *  updated at 
 */
-->
<h1 class="font-weight-lighter">
                	
    SisCoM - 

	<small>Sistema de Compras Públicas Municipales</small>	

</h1>

<div class="text-white">
	

</div>

<ul class="nav justify-content-center menu">

	<li class="nav-item dropdown">

	    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
	    	
	    	<i class="fas fa-cart-plus px-1"></i>

	    	Solicitudes	

	    </a>

		<div class="dropdown-menu">


		    <a class="dropdown-item text-primary" href="{{action('SCM_SolicitudController@index')}}">

		    	<i class="fas fa-pencil-alt px-1"></i>

		    	Crear Solicitud

		    </a>

		   	<div class="dropdown-divider"></div>

		   	<a class="dropdown-item text-primary" href="{{ action('SCM_AdminSolicitudController@index') }}">

		    	<i class="fas fa-cogs px-1"></i>

		    	Gestionar Solicitudes

		    </a>

		    <div class="dropdown-divider"></div>

		    <a class="dropdown-item text-primary" href="#">

		    	<i class="fas fa-dolly px-1"></i>

		    	Entrega de Productos en Stock

		    </a>

		</div>

  	</li>

  	<li class="nav-item dropdown">

	    <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
	    		
	    	<i class="far fa-credit-card px-1"></i>

	    	Órdenes de Compra

	    </a>

		<div class="dropdown-menu">

		    <a class="dropdown-item text-primary" href="{{ action('OrdenCompraController@index') }}">

		    	<i class="fas fa-cash-register px-1"></i>

		    	Gestionar Órdenes de Compra

		    </a>

		    <div class="dropdown-divider"></div>

		    <a class="dropdown-item text-primary" href="#">

		    	<i class="fas fa-check-circle px-1"></i>

		    	Recepción de Productos OC

		   	</a>

		    <div class="dropdown-divider"></div>

		    <a class="dropdown-item text-primary" href="{{ action('ProveedoresController@index') }}">

		    	<i class="fas fa-clipboard-list px-1"></i>

		    	Gestionar Proveedores

		    </a>

		</div>

  	</li>
  	
  	<li class="nav-item">
    
    	<a class="nav-link text-white" href="#">

    		<i class="fas fa-cubes px-1"></i>

    		Licitaciones

    	</a>
  	
  	</li>
  	
  	<li class="nav-item">
    
    	<a class="nav-link text-white" href="#">

    		<i class="fas fa-dollar-sign px-1"></i>

    		Facturas

    	</a>
  	
  	</li>

</ul>
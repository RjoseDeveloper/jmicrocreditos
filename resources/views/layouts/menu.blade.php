<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Utilizadores</span></a>
</li>

<li class="treeview">
    <a href="{!! route('creditos.index') !!}">
        <i class="fa fa-dollar"></i> <span>AREA DE CREDITOS</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::is('creditos*') ? 'active' : '' }}">
            <a href="{!! route('creditos.index') !!}"><i class="fa fa-list"></i><span>Todos Creditos</span></a>
        </li>

        <li class="{{ Request::is('creditopenhors*') ? 'active' : '' }}">
            <a href="{!! route('creditopenhors.index') !!}"><i class="fa fa-dollar"></i><span>Credito Consumo</span></a>
        </li>
        <li class="{{ Request::is('creditonegocios*') ? 'active' : '' }}">
            <a href="{!! route('creditonegocios.index') !!}"><i class="fa fa-dollar"></i><span>Credito Negocios</span></a>
        </li>

        <li class="{{ Request::is('creditopenhors*') ? 'active' : '' }}">
            <a href="{!! route('creditopenhors.index') !!}"><i class="fa fa-dollar"></i><span>Credito Penhor</span></a>
        </li>
        <li class="{{ Request::is('creditopenhors*') ? 'active' : '' }}">
            <a href="{!! route('creditopenhors.index') !!}"><i class="fa fa-dollar"></i><span>Credito VIP</span></a>
        </li>



        <li class="{{ Request::is('tipocreditos*') ? 'active' : '' }}">
            <a href="{!! route('tipocreditos.index') !!}"><i class="fa fa-dollar"></i><span>Consultar Juros</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('creditonegocios*') ? 'active' : '' }}">
    <a href="{!! url('/juros') !!}"><i class="fa fa-hourglass-2"></i><span>Simulador Financeiro</span></a>
</li>

<li class="{{ Request::is('historicocreditos*') ? 'active' : '' }}">
    <a href="{!! route('historicocreditos.index') !!}"><i class="fa fa-edit"></i><span>Historico de Pagamentos </span></a>
</li>


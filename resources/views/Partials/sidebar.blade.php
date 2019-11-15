<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="form-group">
                    <label class="text-white">Usuarios:</label>
                    <div>
                        <select name="User" id="User" class="chosen-select">
                            <option value="1">Cooperativa Unión Campesina</option>
                            <option value="2">La Costeña</option>
                            <option value="3">Magnimus Software</option>
                        </select>
                    </div>
                </div>
            </li>
            <li class="">
                <a href="{{ route('register') }}">
                    <i class="fa fa-sign-in"></i>
                    <span class="nav-label">Registro</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('myproducts') }}">
                    <i class="fa fa-tags"></i>
                    <span class="nav-label">Mis Productos</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-sitemap"></i>
                    <span class="nav-label">Subastas</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-money"></i>
                    <span class="nav-label">Propuestas</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-edit"></i>
                    <span class="nav-label">Contratos</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-file"></i>
                    <span class="nav-label">Comisiones</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-pie-chart"></i>
                    <span class="nav-label">Estadísticas</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $('.chosen-select').chosen({width: "100%"});
    });
</script>

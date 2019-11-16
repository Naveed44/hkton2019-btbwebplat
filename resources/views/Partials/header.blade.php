<div class="row border-bottom">
    <nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <div class="row">
                <a href="/" class="col-sm-3 m-t-sm m-l-md"><img src="logo.png" style="max-height: 60px" class=" m-l-md"></a>
                <form class="col-sm-6  m-t-sm m-b-sm" role="search" id="search">
                    <div class="input-group">
                        <div class="form-group ">
                            <div>
                                <input name='Search' id='Search' type='text' class='form-control' placeholder="Buscar productos">
                            </div>
                        </div>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary" onclick="">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="col-sm-3 nav navbar-top-links navbar-right m-l-n">
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" title="Salir">
                            <i class="fa fa-sign-out"></i> Salir
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

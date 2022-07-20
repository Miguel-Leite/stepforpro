<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?=BASE_URL?>">StepFor<span>PRO</span></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item <?=($page==='index')? 'active' : '';?> nav-item-ws">
                    <a class="nav-link" href="<?=BASE_URL?>">Home</a>
                </li>
                <li class="nav-item <?=($page==='about')? 'active' : '';?> nav-item-ws">
                    <a class="nav-link" href="<?=BASE_URL?>sobre">Sobre</a>
                </li>
                <li class="nav-item <?=($page==='services')? 'active' : '';?> nav-item-ws">
                    <a class="nav-link" href="<?=BASE_URL?>servicos">Serviços</a>
                </li>
                <?php if (isset($_SESSION['auth'])): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                    id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Olá,
                    Sr(a)  <?=(auth()->is_admin > 0 ? 'adminstrador(a) '.auth()->name : auth()->name);?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="<?=BASE_URL?>sair">Sair</a>
                    </div>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="btn" href="<?=BASE_URL?>login">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
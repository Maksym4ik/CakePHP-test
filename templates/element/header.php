<header>
    <nav class="navbar navbar-light bg-light">
        <h3 class="navbar-brand">Admin panel</h3>
        <div class="d-flex align-items-center">
            <div class="mr-3"><?=$username?></div>
        <?=$username ? $this->Html->link("logout",['controller' => 'Users','action'=>'logout'],['class'=>'btn btn-outline-warning my-2 my-sm-0']) : " "?>
        </div>
    </nav>
</header>

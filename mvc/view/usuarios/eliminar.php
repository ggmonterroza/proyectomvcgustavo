<div class="col-md-8 col-md-offseet-1">
    <table class="table table-hover">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Email</td>
            <td>Accion</td>


        </tr>

        <?php
            while ($user = $resultUser->fetch_object()): ?>
            <tr>
           
                <td><?=$user->id?></td>
                <td><?=$user->nombre?></td>
                <td><?=$user->apellido?></td>
                <td><?=$user->email?></td>
                <td>
                <a href="index.php?controller=usuariocontroller&action=eliminar&pasar=<?php echo $user->id; ?>"
                <button class="btn btn-primary" type="submit" > Borrar </button></a>    
                </td>
               
                 
            </tr>
                <?php endwhile;
                ?>
    </table>

</div>

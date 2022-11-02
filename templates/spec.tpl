{include file="header.tpl"}

<h3>{$especificaciones}</h3>

{if $spec}
    <ul class= list-group>
        <li class=list-group-item> Caballos de fuerza: {$spec->cv} </li>
        <li class=list-group-item> Precio : $ {$spec->precio}</li>
        <li class=list-group-item> Fabricacion : {$spec->fabricacion}</li>
        {if isset($smarty.session.logged)} 
            <a class="btn btn-danger" href= "deleteSpecs/{$spec->id_usuarios}">Borrar</a>
            <a class="btn btn-info" href= "formeditSpec/{$spec->id_usuarios}">Editar</a> 
        {/if}    
    </ul>
{else}
    {if isset($smarty.session.logged)}   
    <h5>Agregar Especificaciones </h5>
        <form action="addSpecs/{$id}" method="POST">
            <label>Caballos de fuerza:<input type="text"  name="cv" required></input></label>
            <label>Precio:<input type="text" name="precio" required></input></label>
            <label>Fabricacion: <input type="text" name="fabricacion" required></input></label>
            <button type="submit" class="btn btn-success">Cargar Especificaciones</button>
        </form>
    {/if}
{/if}

<a class="btn btn-dark" href="home">Volver al inicio</a>
{include file="footer.tpl"}
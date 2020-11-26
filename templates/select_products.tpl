<!--Select de Categorias-->
<select name="id_categorias" class="form-control" type="text">
    {foreach from=$categories item=category}
        <option value={$category->id}>{$category->nombre}</option>
    {/foreach}
</select>
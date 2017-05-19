<!--======= SERVICES =========-->
<li class="col-md-4">
    <div class="box-fornecedores">
    <i class="icon-fornecedores fa fa-wrench"></i>
    <div class="title-box">
        <span>Guia de Fornecedores</span>
    </div>
    <div class="content-form">
        <form action="#">
        <div class="form-group">
            <span class="label-select">CATEGORIAS</span>
            <i class="icon-select fa fa-caret-down "></i>
            <select id="categoria_fornec" class="select-fornec cat-fornecedores" name="categoria_fornec">
            <option value=""></option>
            <option value="pintura">Pintura</option>
            <option value="alvenaria">Alvenaria</option>
            <option value="gesso">Gesso</option>
            <option value="iluminacao">Iluminação</option>
            </select>
        </div>
        <div class="form-group">
            <span class="label-select">ESTADO</span>
            <i class="icon-select fa fa-caret-down "></i>
            <select id="cod_estados" class="select-fornec estado-fornecedores" name="estado_fornec">
                <option value=""></option>
                <?php
                    global $wpdb;
                    $results = $wpdb->get_results( 'SELECT cod_estados, sigla FROM estados ORDER BY sigla', OBJECT );

                    foreach ($results as $key => $value) {
                        echo '<option value="'.$value->sigla.'">'.$value->sigla.'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <span class="label-select">CIDADE</span>
            <i class="icon-select fa fa-caret-down"></i>
            <select id="cod_estados" class="select-fornec cidade-fornecedores" name="cidade_fornec">
                <option value=""></option>
                <option value="vitoria"> Em Breve</option>
            </select>
        </div>
        <button type="submit" class="btn-fornec" disabled="disabled">
            EM BREVE
        </button>
        </form>
    </div>
    </div>
    
</li>
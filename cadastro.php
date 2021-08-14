<?php
include __DIR__ . '/includes/header.php';
?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1>Cadastro</h1>
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Cadastro</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<section class="history spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title history-title">
                    <h2>Cadastre seu ponto turístico</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12 offset-lg-12 col-md-12 col-sm-12">
            <div class="contact__form">
                <form action="#">
                    <h2>Endereço Do Ponto Turístico</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 div_flex">
                            <select name="UF" id="" class="col-lg-12 col-md-12 col-sm-12">
                                <option value="">UF</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 div_flex">
                            <select name="cidade" id="" class="col-lg-12 col-md-12 col-sm-12">
                                <option value="">Cidade</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 div_flex">
                            <input name="bairro" type="text" placeholder="Bairro">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="rua" type="text" placeholder="Rua">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="numero" type="text" placeholder="Número">
                        </div>
                    </div>

                    <h2>Ponto Turístico</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="nome" type="text" placeholder="Nome">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="capacidade" type="number" placeholder="Capacidade de publico">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <input name="observacao" type="text" placeholder="Observação" maxlength="100">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="periodo" type="text" placeholder="Período de Funcionamento" maxlength="100">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="valor" type="number" step="0.01" placeholder="Valor Ingresso">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <textarea placeholder="Descrição" name="descricao"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <textarea placeholder="História" name="historia"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="latitude" type="text" placeholder="Latitude (Google Maps)">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="longitude" type="text" placeholder="Longitude (Google Maps)">
                        </div>
                    </div>

                    <button type="submit">Proxima Página</button>
                </form>
            </div>
        </div>
    </div>
</section>



<?php
include __DIR__ . '/includes/footer.php';
?>
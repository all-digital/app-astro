@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-6">

        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Vendas do Mês</p>
                                    <h4>225</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-1"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Receita Adicional</p>
                                    <h4>R$ 33.750,00</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-2"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Novos Clientes</p>
                                    <h4>198</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-3"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Faturamento do Mês</p>
                                    <h4>R$ 303.750,00</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-4"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title mb-4">Performance Anual (2021)</h4>
                <div id="mixed-chart" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
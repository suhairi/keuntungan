@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                <span class="sr-only">30% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::model($lampiranbdua, ['route' => 'ppk.rekod.permohonan4']) }}
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table class="table table-bordered">

            <tr>
                <th width="15">Tahap Asas</th>
                <th width="600">Butir-butir Diperlukan</th>
                <th>Cara Perkiraan</th>
                <th>Markah Diperolehi</th>
            </tr>

            <tr>
                <td>2.</td>
                <td>
                    <p>(a) Peruntukan Hutang Sangsi</p>
                    <br/>
                    <table width="100%" border=0>

                        <tr>
                            <td colspan="2"><ol type="i" start="1"><li>Peruntukan yang telah diambil kira</li></ol></td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('aItem1', '', ['class' => 'form-control', 'id' => 'aItem1', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>
                                <ol type="i" start="2">
                                    <li>
                                        Tambahan peruntukan yang perlu diambilkira seperti yang dilaporan oleh Juruaudit - (Rujuk Laporan Audit) Siberhutang Perniagaan - Ahli

                                    </li> 
                                </ol>
                            </td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('aItem2', '', ['class' => 'form-control', 'id' => 'aItem2', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>                                
                                <ol style="list-style-type:none">
                                    <li>
                                        Siberhutang Perniagaan - Bukan Ahli
                                    </li> 
                                </ol>
                            </td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('aItem3', '', ['class' => 'form-control', 'id' => 'aItem3', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>                                
                                <ol style="list-style-type:none">
                                    <li>
                                        Pinjaman Tanpa Cagaran
                                    </li> 
                                </ol>
                            </td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('aItem4', '', ['class' => 'form-control', 'id' => 'aItem4', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>                                
                                <ol style="list-style-type:none">
                                    <li>
                                        Item-item Lain Jika Ada (Rosot Nilai)
                                    </li> 
                                </ol>
                            </td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('aItem5', '', ['class' => 'form-control', 'id' => 'aItem5', 'placeholder' => '0.00'])}}</td>
                        </tr>

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="2" width=400 align="center"><strong>JUMLAH</strong></td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('jumlah', '', ['class' => 'form-control', 'id' => 'jumlah', 'readonly', 'placeholder' => '0.00'])}}</td>
                        </tr>

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>{{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>                       

                    </table>
                    <p>(b) Jumlah Keuntungan Bersih :</p>
                    <table width="100%" border=0>
                        <tr>
                            <td colspan="2"></td>
                            <td width="35">RM</td>
                            <td width="250">{{ Form::number('bUntungBersih', '', ['class' => 'form-control', 'id' => 'bUntungBersih', 'required', 'placeholder' => '0.00'])}}</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </td>

                {{--MAIN TABLE - Second Column--}}
                <td>
                    <table width="100%" border="0">
                        <tr>
                            <td width="25">(a)</td>
                            <td>Nisbah Digunakan : </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="bottom">
                            <td>&nbsp;</td>
                            <td width="150" valign="middle">(Keuntungan Bersih Semasa)</td>
                            <td width="15" valign="middle" align="center"><strong>-</strong></td>
                            <td width="150" valign="middle">(Jumlah peruntukan Hutang Sangsi/Rosot nilai yang sepatutunya)</td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center" valign="top" style="border-top: 1px solid #CCCCCC">
                                Jumlah Keuntungan Bersih
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <table border="0">
                                    <tr>
                                        <td width="15">=</td>
                                        <td width="30" align="right">RM</td>
                                        <td width="100">&nbsp;</td>
                                        <td width="250">
                                            <table>
                                                <tr>
                                                    <td><div id="jumlahAtas"></div></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: solid 1px #CCCCCC"></td>
                                                </tr>
                                                <tr>
                                                    <td><div id="jumlahBawah"></div></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td></td>
                        </tr>

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        {{-- MAIN TABLE - SECOND COLUMN - SECTION B--}}
                        <tr>
                            <td width="25">(b)</td>
                            <td>Keputusan Nisbah :</td>
                            <td colspan="2">
                                <span style="text-decoration: underline; text-decoration-color: #CCCCCC; font-weight: bold"><div id="nisbah"></div></span>
                            </td>
                        </tr>                        

                    </table>
                </td>

                {{--MAIN TABLE - Third Column--}}
                <td valign="bottom" align="center">
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah', 'placeholder' => '0']) }}</td>
                        </tr>
                    </table>
                </td>
            </tr>


        </table>
    </div>
    <div class="col-xs-1">&nbsp;</div>
</div>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="pull-left"><a href="{{ redirect()->back() }}">@include('buttons._previous', ['value' => 'Kembali'])</a></div>
        <div class="pull-right">
            <input class="btn btn-success" type="submit" value="Seterusnya" />
        </div>
    </div>
</div>
{{ Form::close() }}



<script src={{ asset('js/permohonan/permohonan3.js')}}></script>

@stop
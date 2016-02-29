@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                <span class="sr-only">50% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::open(['route' => 'ppk.rekod.permohonan5']) }}
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table class="table table-bordered">

            <tr>
                <th width="15">Tahap Asas</th>
                <th width="600">Butir-butir Diperlukan</th>
                <th>Cara Perkiraan</th>
                <th>Markah Diperolehi</th>
            </tr>

            <!-- ###########################################     3       ############################################## -->

            <tr>
                <td>3.</td>
                <td>
                    <p>(a) Perbezaan Akaun Bagi Akaun Akan Terima <br />(Rujuk Laporan Audit)</p>
                    <br/>
                    <table width="100%" border=0>

                        <tr>
                            <td colspan="2" width=400>Siberhutang Perniagaan - Ahli</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('item2', $lampiranbdua->item2, ['class' => 'form-control', 'id' => 'item2', 'required', 'readonly', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>Siberhutang Perniagaan - Bukan Ahli</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('item3', $lampiranbdua->item3, ['class' => 'form-control', 'id' => 'item3', 'required', 'readonly', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>Pinjaman Tanpa Cagaran</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('item4', $lampiranbdua->item4, ['class' => 'form-control', 'id' => 'item4', 'required', 'readonly', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>Siberhutang-siberhutang Lain</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('item5', $lampiranbdua->item5, ['class' => 'form-control', 'id' => 'item5', 'required', 'readonly', 'placeholder' => '0.00'])}}</td>
                        </tr>

                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="2" width=400 align="center"><strong>JUMLAH</strong></td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('jumlah', '', ['class' => 'form-control', 'id' => 'jumlah', 'required', 'readonly', 'placeholder' => '0.00'])}}</td>
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
                            <td width="250">{{ Form::number('untungBersih', $lampiranbdua->untungBersih, ['class' => 'form-control', 'readonly', 'id' => 'untungBersih', 'required', 'placeholder' => '0.00'])}}</td>
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
                            <td width="150" valign="middle">(Baki Tunai Ditangan & Bank - Simpanan Ahli & Terimaan Terdahulu)</td>
                            <td width="15" valign="middle" align="center"><strong>-</strong></td>
                            <td width="150" valign="middle">(Jumlah Pembahagian Keuntungan)</td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center" valign="top" style="border-top: 1px solid #CCCCCC">
                                Baki Tunai di Tangan & Bank - Simpanan Ahli & Terimaan Terdahulu
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
                                                    <td><div id="jumlahAtas1"></div></td>
                                                </tr>
                                                <tr>
                                                    <td style="border: solid 1px #CCCCCC"></td>
                                                </tr>
                                                <tr>
                                                    <td><div id="jumlahBawah1"></div></td>
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
                                <span style="text-decoration: underline; text-decoration-color: #CCCCCC; font-weight: bold"><div id="nisbah1"></div></span>
                            </td>
                        </tr>                        

                    </table>
                </td>

                {{--MAIN TABLE - Second Row --}}
                <td valign="bottom" align="center">
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah1', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah1', 'placeholder' => '0']) }}</td>
                        </tr>
                    </table>                    
                </td>
            </tr>

            <!-- #############################################    4    ######################################### -->
            <tr>
                <td>4.</td>
                <td>
                    <p>Kemampuan Menyelesaikan Tanggunan Semasa</p>
                    <br/>
                    <p>(Rujuk kepada Kunci Kira-kira Beraudit Yang Terakhir)</p>
                    <table width="100%" border=0>

                        <tr>
                            <td colspan="2" width=400><ol type="i"><li>Jumlah Harta Semasa</li></ol></td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('harta_semasa', '', ['class' => 'form-control', 'id' => 'harta_semasa', 'required', 'placeholder' => '0.00'])}}</td>
                        </tr>

                        <tr>
                            <td colspan="2" width=400><ol type="i" start="2"><li>Jumlah Tanggungan Semasa</li></ol></td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('tanggungan_semasa', '', ['class' => 'form-control', 'id' => 'tanggungan_semasa', 'required', 'placeholder' => '0.00'])}}</td>
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
                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="bottom">
                            <td>&nbsp;</td>
                            <td width="150" valign="middle" align="center">Harta Semasa</td>
                            <td width="15" valign="middle" align="center" rowspan="2"><strong>=</strong></td>
                            <td width="150" valign="middle" align="center"><div id="jumlahAtas2"></div></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td width="150" valign="middle" align="center" style="border-top: 1px solid #CCCCCC">Tanggungan Semasa</td>
                            <td colspan="4" align="center" valign="top" style="border-top: 1px solid #CCCCCC"><div id="jumlahBawah2"></div></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
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
                                <span style="text-decoration: underline; text-decoration-color: #CCCCCC; font-weight: bold"><div id="nisbah2"></div></span>
                            </td>
                        </tr>
                    </table> 

                    <td valign="bottom" align="center">
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah2', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah2', 'placeholder' => '0']) }}</td>
                        </tr>
                    </table>                    
                </td>
            </tr>

            <!-- #############################################    5    ######################################### -->

            <tr>
                <td>5.</td>
                <td>
                    <p>(a) Perbezaan Akaun Bagi Akaun Akan Terima <br />(Rujuk Laporan Audit)</p>
                    <br/>
                    <table width="100%" border=0>

                        <tr>
                            <td colspan="2" width=400>Jumlah Tanggungan</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('jumlah_tanggungan', '', ['class' => 'form-control', 'id' => 'jumlah_tanggungan', 'required', 'placeholder' => '0.00'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2" width=400>Jumlah Harta</td>
                            <td width="35">RM</td>
                            <td>{{ Form::number('jumlah_harta', '', ['class' => 'form-control', 'id' => 'jumlah_harta', 'required', 'placeholder' => '0.00'])}}</td>
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
                        {{--Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr valign="bottom">
                            <td>&nbsp;</td>
                            <td width="150" valign="middle" align="center">Jumlah Tanggungan</td>
                            <td width="15" valign="middle" align="center" rowspan="2"><strong>=</strong></td>
                            <td width="150" valign="middle" align="center"><div id="jumlahAtas3"></div></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td width="150" valign="middle" align="center" style="border-top: 1px solid #CCCCCC">Jumlah Semasa</td>
                            <td colspan="4" align="center" valign="top" style="border-top: 1px solid #CCCCCC"><div id="jumlahBawah3"></div></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
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
                                <span style="text-decoration: underline; text-decoration-color: #CCCCCC; font-weight: bold"><div id="nisbah3"></div></span>
                            </td>
                        </tr>
                        {{-- 3 Gutter--}}
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table> 

                    <td valign="bottom" align="center">
                    <table>
                        <tr>
                            <td style="border: 1px solid #CCCCCC">{{ Form::number('markah3', '', ['class' => 'form-control', 'align' => 'center', 'readonly' => 'true', 'id' => 'markah3', 'placeholder' => '0']) }}</td>
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



<script src={{ asset('js/permohonan/permohonan4.js')}}></script>

@stop